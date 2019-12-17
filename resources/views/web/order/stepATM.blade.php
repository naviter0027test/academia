@extends('web.layouts.main')
@section('content')
    <!--================================CATEGOTY SECTION==========================================-->
    <style>
        .text{
            font-size: 64px;
            font-weight: 100;
            text-transform: uppercase;
            fill: none;
            stroke: #8e8e8e;
            stroke-width: 2px;
            stroke-dasharray: 430;
        }
        @keyframes stroke {
            100% {
                stroke-dashoffset: -400;
            }
        }
    </style>
    <section class="aside-layout-section padding-bottom-40">
        <div class="container"><!-- section container -->
            <div class="row"><!-- row -->
                <div class="col-md-3 col-sm-4 col-xs-12"><!-- sidebar column -->
                    <div class="sidebar sidebar-wrap">
                        <div class="sidebar-widget">
                           <div class="sidebar-widget-title">
                                <h5 class="page_title">熱門商品</h5>
                            </div>
                            <div class="sidebar-widget-content category-widget clearfix">
                                <div class="sidebar-category-widget-wrap">
                                    <ul>
                                       @foreach($submenu as $item)
											<li><a href="/productList?subId={{$item->id}}" > {{$item->title}} </a></li>
										@endforeach
                                        <li><a href="https://www.nmmba.gov.tw/publication/Default.aspx" target=_blank>
                                                海生館圖書與雜誌 </a></li>
                                       
                                        @if(!empty(session('user_id')))
                                        <li><a href="/order"> 訂單進度查詢 </a></li>
									@endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
                    <div class="listing-section">
                        <div class="map_contain">
                            <!--================================PAGE TITLE==========================================-->
                            <div class="page_title">商品訂購<span class="right">
								<input type="text" id="" placeholder="請輸入關鍵字"><button class="toolbar-new-listing margin-left-10 button_blue" href="#"> 搜尋</button>
								</span></div>
                            <!--================================BREADCRUMB SECTION==========================================-->
                            <ul class="breadcrumb">
                               <li class="breadcrumb-item"><a href="/">首頁</a></li>
								<li class="breadcrumb-item"><a href="/productList">熱門商品</a></li>
                                <li class="breadcrumb-item active">商品訂購</li>
                            </ul>
                            <!-- section container -->
                            <div class="col-md-12 clearfix form_wrapper" id="checkout">

                                <div class="box">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="disabled"><a href="#">Step 1<br>訂購說明</a></li>
                                        <li class="disabled"><a href="#">Step 2<br>訂購資料填寫</a></li>
                                        <li class="active"><a href="#">Step 3<br>訂單完成</a></li>
                                    </ul>
                                    <div class="order_content col-md-12 col-sm-12 col-xs-12">
                                        <div class="page-title">
                                            <h6 class="pull-left">訂購商品明細</h6>
                                        </div>
                                        <table class="order_table">
                                            <thead>
                                            <tr>
                                                <th>商品名稱</th>
                                                <th>價格</th>
                                                <th>數量</th>
                                                <th>小計</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $cc = 0;
                                            ?>
                                            @foreach($detail as $item)
                                                <tr>
                                                    <td>{{$item->productName}}</td>
                                                    <td>${{$item->price}}元</td>
                                                    <td>{{$item->amount}}</td>
                                                    <td><?php
                                                        $cc += $item->amount * $item->price;
                                                        echo $item->amount * $item->price;
                                                        ?></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3">商品小計</td>
                                                <td>{{$cc}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">+運費</td>
                                                <td><?php
                                                    if($cc < 1500) {
                                                        echo '80';
                                                        $cc+=80;
                                                    }
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">總金額</td>
                                                <td>$
                                                    <?php
                                                        echo $cc;
                                                    ?>
                                                    元</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <div class="margin-top-20 margin-bottom-20"><img src="/web/images/20191211/bow.jpg" /></div>
                                        <div>
                                        <!--
                                            <svg width="100%" height="100">
                                                <text text-anchor="middle" x="50%" y="50%" class="text">
											
                                                   感謝您的訂購
												
                                                </text>
                                            </svg>
                                            -->
											<h3>訂單編號:{{$data->lidm}}</h3>
											<ul>
												
匯款帳戶如下<br/>
--------------------------------------------------<br/>
第一銀行恆春分行<br/>
戶名 : 國立海洋生物博物館作業基金401專戶<br/>
帳號 : 75330530267<br/>
--------------------------------------------------<br/>
匯款完畢後於<a href="/contact" target="_blank" >「<font color="black">聯絡我們</font>」</a>回覆以下資料，款項確認後為您出貨~<br/>


<li>1.帳號後五碼</li>
<li>2.匯款日期</li>
<li>3.匯款金額</li>

												</ul>
												
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div>
                                            <button  onclick="window.location.href='/'"class="btn btn-template-main button_blue" style="display:block;margin:0 auto"> 回網站首頁 </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box -->


                            </div>
                            <!-- section container end -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- section container end -->
    </section>
    <!-- .container end -->
@endsection
