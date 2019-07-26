@extends('web.layouts.main')
@section('content')
    <!--================================CATEGOTY SECTION==========================================-->

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
											<li><a href="https://www.nmmba.gov.tw/publication/Default.aspx" target=_blank> 海生館圖書與雜誌 </a></li>
											<li><a href="/order"> 訂單進度查詢 </a></li>
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
                            <div class="col-md-12 clearfix" id="checkout">

                                <div class="box">




                                        <ul class="nav nav-pills nav-justified">
                                            <li class="active"><a href="#">Step 1<br>訂購說明</a></li>
                                            <li class="disabled"><a href="#">Step 2<br>訂購資料填寫</a></li>
                                            <li class="disabled"><a href="#">Step 3<br>訂單完成</a></li>
                                        </ul>
                                        <div class="page-title">
                                            <h6 class="pull-left">訂購須知</h6>
                                        </div>
                                        <div class="order_notice">
									
                                            <ol>
                                                <ul>一、訂購流程
                                                    <li>1.於瀏覽商品時,點選”加入購物車”按鈕將商品加入清單。</li>
                                                    <li>2.欲結帳時,點選”結帳”進入訂購畫面後填寫正確訂購資訊。</li>
                                                    <li>3.於結帳過程中須刪除商品，可直接於商品清單中修改。</li>
                                                    <li>4.每樣商品最大訂購數量為5個，若需購買單品大於5個請分批訂購。</li>
                                                    <li>5.訂購完成後，系统將自動寄發購物清單至您的E-mail，請確認訂購內容無誤後再行匯款。</li>
                                                </ul>
                                                <p>&nbsp;</p>
                                                <ul>二、物流費計算：單筆訂單NT$80運費。<br>※若單筆購買金額滿$ 1,500以上免運費。</ul><p>&nbsp;</p>
                                                <ul>三、寄送方式：<br>一律以郵局掛號寄出，商品寄出後可至訂單進度查詢包裹編號。</ul><p>&nbsp;</p>
                                                <ul>四、付款方式：提供ATM匯款或刷卡付款。</ul><p>&nbsp;</p>
                                                <ul>五、匯款須知：ATM匯款完成後，請點選網頁上方的「聯絡我們」告知帳號後五碼、匯款日期及匯款金額資料，以供服務人員確認。</ul>
												<p>&nbsp;</p>
												
												
												
				
				
<ul>
												
匯款帳戶如下<br/>
--------------------------------------------------<br/>
第一銀行恆春分行<br/>
戶名 : 國立海洋生物博物館作業基金401專戶<br/>
帳號 : 75330530267<br/>
--------------------------------------------------<br/>
匯款完畢後於「聯絡我們」回覆以下資料，款項確認後為您出貨~<br/>


<li>1.帳號後五碼</li>
<li>2.匯款日期</li>
<li>3.匯款金額</li>

												</ul>
                                            </ol>
                                        </div>
                                        <div class="box-footer">
                                            <div class="pull-left">
                                                <a href="/checkout2" class="btn btn-template-main button_blue"> 同意訂購須知，繼續訂購流程 </a>
                                            </div>
                                            <div class="pull-left margin-left-20">
                                                <a href="/" class="btn button_blue"> 取消 </a>
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