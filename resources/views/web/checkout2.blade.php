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
                            <div class="col-md-12 clearfix form_wrapper" id="checkout">

                                <div class="box">
                                    <form method="post" action="/order">

                                        <ul class="nav nav-pills nav-justified">
                                            <li class="disabled"><a href="#">Step 1<br>訂購說明</a></li>
                                            <li class="active"><a href="#">Step 2<br>訂購資料填寫</a></li>
                                            <li class="disabled"><a href="#">Step 3<br>訂單完成</a></li>
                                        </ul>
                                        <div class="order_content">
                                            <div class="page-title">
                                                <h6 class="pull-left">訂購須知</h6>
                                            </div>
                                            <table class="order_table">
                                                <thead>
                                                <tr>
                                                    <th>商品名稱</th>
                                                    <th>價格</th>
                                                    <th>數量</th>
                                                    <th>庫存數量</th>
                                                    <th>小計</th>
                                                    <th>刪除</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach(Cart::content() as $item)
                                                    <tr>
                                                        <td>{{$item->name}}</td>
                                                        <td>${{$item->price}}元</td>
                                                        <td>{{$item->qty}}</td>
                                                        <td>{{$item->qty}}</td>
                                                        <td>{{$item->subtotal}}</td>
                                                        <td><button onClick="delCartItem('{{$item->rowId}}')" class="btn btn-blue" type="button" >刪除</button></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="4">商品小計</td>
                                                    <td>{{Cart::subtotal()}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">+運費</td>
                                                    <td><?php
                                                        if(Cart::subtotal() < 1500 && Cart::subtotal() !=0) {
                                                            echo '80';
                                                        }
                                                        ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">總金額</td>
                                                    <td>$
    <?php
    if(Cart::subtotal() < 1500 && Cart::subtotal() !=0) {
        echo Cart::subtotal()+80;
    } else {
        echo Cart::subtotal();
    }?>
                                                        元</td>
                                                </tr>
                                                </tfoot>
                                            </table>
											@if(Cart::subtotal() > 0)
                                            <div class="page-title margin-top-40 opening-hours-field">
                                                <h6 class="pull-left">訂購人</h6>
                                            </div>
                                            <ul><li class="tx-left">請填寫正確資料，<span style="color:red">*</span>為必填欄位。</li>
                                                <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    <input type="name" id="name1" name="name1" placeholder="請輸入姓名" required="" value="{{session('name')}}"/>
                                                </div>
                                                <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                    <input type="email" id="email1" name="email1" placeholder="請輸入E-mail" required="" value="{{session('email')}}"/>
                                                </div>
                                                <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                                    <input type="mobile" id="mobile1" name="mobile1" placeholder="請輸入連絡電話" required=""/>
                                                </div>
                                                <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-home" aria-hidden="true"></i></span>
                                                    <input type="address" id="addrress1" name="addrress1" placeholder="請輸入地址" required=""/>
                                                </div>

                                                <div class="page-title margin-top-40 opening-hours-field">
                                                    <h6 class="pull-left">收貨人<input type="checkbox" id="chOrder" name="chOrder" >同訂購人聯絡資訊</h6>
                                                </div>
                                                <ul><li class="tx-left">請填寫正確資料，<span style="color:red">*</span>為必填欄位。</li>
                                                    <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="name" id="name2" name="name2" placeholder="請輸入姓名" required="" />
                                                    </div>
                                                    <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                        <input type="email" id="email2" name="email2" placeholder="請輸入E-mail" required="" />
                                                    </div>
                                                    <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                                        <input type="mobile" id="mobile2" name="mobile2" placeholder="請輸入連絡電話" required=""/>
                                                    </div>
                                                    <div class="input_field"><span><span style="color:red">*</span><i class="fa fa-home" aria-hidden="true"></i></span>
                                                        <input type="address" id="addrress2" name="addrress2" placeholder="請輸入地址" required=""/>
                                                    </div>
													@endif
                                        </div>
@if(Cart::subtotal() > 0)
                                        <div class="box-footer">
                                            <div class="pull-left">
                                                <button type="submit" class="btn btn-template-main button_blue" name="ot" value="cc"> 信用卡付款 </button>
												<button type="submit" class="btn btn-template-main button_blue" name="ot" value="atm"> ATM轉帳 </button>

                                            </div>
                                            <div class="pull-left margin-left-20">
                                                <a href="/" class="btn button_blue"> 取消 </a>
                                            </div>
                                        </div>
										@endif
                                    </form>
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
@section('js')
    <script>
        function delCartItem(rowId){
            $.post('/cartDelItem',{
                rowId:rowId
            },function(data){
                window.location.reload('/checkout2');
            });
        }
        $(function () {
            $('#chOrder').change(function() {

               if($(this).is(':checked')) {
                   $('#name2').val($('#name1').val());
                   $('#email2').val($('#email1').val());
                   $('#mobile2').val($('#mobile1').val());
                   $('#addrress2').val($('#addrress1').val());
               } else {
                   $('#name2').val('');
                   $('#email2').val('');
                   $('#mobile2').val('');
                   $('#addrress2').val('');
               }
            });
        });
    </script>
@endsection
