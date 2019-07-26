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
                            <div class="page_title">熱門商品</div>
                            <hr></hr>
                            <!--================================BREADCRUMB SECTION==========================================-->
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">首頁</a></li>
								<li class="breadcrumb-item"><a href="/productList">熱門商品</a></li>
								<li class="breadcrumb-item"><a href="/productList?subId={{$submain->id}}">{{$submain->title}}</a></li>
                                <li class="breadcrumb-item active">{{$data->productName}}</li>
                            </ul>
                            <div class="order_content">
                                <input type="hidden" id="dataId" name="dataId" value="{{$data->productID}}">
                                <!-- 商品圖片 -->
                                <div class="row">
                                    <section id="product-slider" class="col-md-12 col-sm-12 col-xs-12">

                                        <div id="slider" class="col-md-8 col-sm-12 col-xs-12">
                                            <ul id="slides">
                                                @foreach($pm as $item)
                                                    <li class="slide"><img src="{{$item->w_img}}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <nav id="navigation" class="col-md-3 col-sm-12 col-xs-12">

                                            <div id="arrows">
                                                <div class="arrow" id="more-down">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>

                                                <div class="arrow" id="more-up">
                                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                </div>
                                            </div>


                                            <ul id="nav-images">
                                                @foreach($pm as $item)
                                                    <li class="nav-item"><img src="{{$item->w_img}}">
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </nav>

                                    </section>
                                </div>
                                <!-- 商品圖片 end -->
                                <!-- 商品價格及購物車 --!>
                                <!-- Detalles especificos del producto -->
                                <div class="row" style="margin-left:0">
                                    <div id="div1" class="col-md-6 col-sm-12 col-xs-12" style="{float:left;}">
                                        <ul class="tx-left">
                                            <h4 class="title-attr tx-left" style="margin-top:15px;">商品說明：</h4>
                                            <li class="tx-left margin-left-80">商品名稱：{{$data->productName}}</li>
                                            <li class="tx-left margin-left-80">價格：{{$data->standardSellPrice}}</li>
                                            <li class="tx-left margin-left-80">{!!$data->w_content !!}</li>
                                        </ul>
                                    </div>
                                    <div id="div3" class="col-md-6 col-sm-12 col-xs-12" style="{float:left;}">
									@if($dataCount >0 )
									@if($useColor)
                                        <div class="section tx-left">
                                            <h6 class="title-attr tx-left" style="margin-top:15px;">顏色：</h6>
                                            <div>
                                                @foreach($subData as $item)

                                                    <?php
                                                    foreach ($ps as $pitem) {
                                                        if ($pitem->color_name == $item->color) {
                                                            echo '<div class="attr" data-item="' . $item->color . '" style="width:35px;background:' . $pitem->w_color . '"></div>';
                                                        }
                                                    }
                                                    ?>
                                                @endforeach
                                            </div>
                                        </div>
										@endif
										@if($useSize)
                                        <div class="section" style="padding-bottom:5px;">
                                            <h6 class="title-attr tx-left">尺寸 / 款式：</h6>
                                            <div id="divAttr3">

                                                @foreach($subData1 as $item)
                                                    <div class="attr3">{{$item->size}}</div>
                                                @endforeach
                                            </div>
                                        </div>
										@endif
										
                                        <div class="section" style="padding-bottom:20px;">
                                            <h6 class="title-attr tx-left">數量：</h6>
                                            <div>
                                                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span>
                                                </div>
                                                <input id="cnumber" name="cnumber" value="1"/>
                                                <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section" style="padding-bottom:20px;">
                                            <button class="btn btn-success col-md-4 col-sm-8 col-xs-8" id="shopButton"
                                                    onclick="addCart()"><span
                                                        class="glyphicon glyphicon-shopping-cart"
                                                        aria-hidden="true"></span>加入購物車
                                            </button>
                                        </div>
										@else
										 <div class="section" style="padding-bottom:5px;">
                                            <h3 class="title-attr tx-left">目前無庫存</h3>
                                           
                                        </div>
										@endif
                                    </div>
                                </div>
                                <!-- 商品價格及購物車 end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- section container end -->
    </section>
    <!-- .container end -->
    <script src='/web/js/product.js'></script>
    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
    <script>
        var counter = 0;
		var useSize = '{{$useSize}}';
		var useColor = '{{$useColor}}';
        function checkCounter() {
            if (counter == 0) {
                $("#more-up").css({"display": "none"});
            } else if (counter == 5) {
                $("#more-down").css({"display": "none"});
            } else {
                $("#more-up").css({"display": "block"});
                $("#more-down").css({"display": "block"});
            }
        }

        $(document).ready(function () {

            /// MOVING BIG SLIDES
            $(".nav-item").click(function () {
                var indexOfBullet = $(this).index();
                $("#slides").css({"left": "-585" * indexOfBullet, "transition": "1s"});
            });

            /// MOVING SMALL SLIDES
            $("#more-down").click(function () {
                $("#nav-images").css({"top": "-100" * ++counter, "transition": "1s"});
                checkCounter();
            });
            $("#more-up").click(function () {
                $("#nav-images").css({"top": "-100" * --counter, "transition": "1s"});
                checkCounter();
            });

        });
        function addCart() {
            console.debug(useSize);
       //     console.debug($("div.attr2.active").text());
            if ($("div.attr3.active").text() == '' && useSize == 1) {
				 alert('請先選擇尺寸/款式');
				return ;
			}
			if ( $("div.attr.active").data('item') == '' && useColor == 1) {
				 alert('請先選擇顏色');
				return ;
			}
			var color;
			var size;
			if(useColor == 1){
				color = $("div.attr.active").data('item');
			} else {
				color='均一';
			}
			if(useSize == 1){
				size = $("div.attr3.active").text();
			} else {
				size='均一';
			}

            $.post('/addCart', {
                    color: color,
                    size: size,
                    cnumber: $('#cnumber').val(),
                    dataId: $('#dataId').val(),
                }, function (data) {
                    updateCart();
                    alert(data);
                });
        }
        $(document).ready(function () {
            //-- Click on detail
            $("ul.menu-items > li").on("click", function () {
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            });
            $(".attr").on("click", function () {
                $(".attr").removeClass("active");
                $(this).addClass("active");
//console.debug($("div.attr.active").data('item'));
                $.get('/dataSearch/gData/', {
                    color: $("div.attr.active").data('item'),
                    dataId: $('#dataId').val(),
                }, function (data) {
                    //      console.debug(data);
                    $('#divAttr3').html('');
                    for (var i = 0; i < data.length; i++) {
                        $('#divAttr3').append('<div class="attr3">' + data[i].size + '</div>');
                    }
                });
            });
            $(".attr").on("click", function () {
                $(".attr").removeClass("active");
                $(this).addClass("active");
//console.debug($("div.attr.active").data('item'));
                $.get('/dataSearch/gData/', {
                    color: $("div.attr.active").data('item'),
                    dataId: $('#dataId').val(),
                }, function (data) {
                    //      console.debug(data);
                    $('#divAttr3').html('');
                    for (var i = 0; i < data.length; i++) {
                        $('#divAttr3').append('<div class="attr3">' + data[i].size + '</div>');
                    }
                });
            });
//            $(".attr2").on("click", function () {
//                alert('sdsd');
//                $(".attr2").removeClass("active");
//                $(this).addClass("active");
//            });
/*
            $('body').on('click', '.attr2', function () {
                $(".attr2").removeClass("active");
                $(this).addClass("active");

                $.get('/dataSearch/gDataAmount', {
                    color: $("div.attr.active").data('item'),
                    size: $("div.attr2.active").text(),
                    dataId: $('#dataId').val(),
                }, function (data) {
                    if (data > 0) {
                        $('#shopButton').removeAttr("disabled");
                    } else {
                        $('#shopButton').attr("disabled", true);
                    }
                });
            });
			*/
             $('body').on('click', '.attr3', function () {
                $(".attr3").removeClass("active");
                $(this).addClass("active");

                $.get('/dataSearch/gDataAmount', {
                    color: $("div.attr.active").data('item'),
                    size: $("div.attr3.active").text(),
                    dataId: $('#dataId').val(),
                }, function (data) {
                    if (data > 0) {
                        $('#shopButton').removeAttr("disabled");
                    } else {
                        $('#shopButton').attr("disabled", true);
                    }
                });
            });
           //-- Click on QUANTITY
            $(".btn-minus").on("click", function () {
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)) {
                    if (parseInt(now) - 1 > 0) {
                        now--;
                    }
                    $(".section > div > input").val(now);
                } else {
                    $(".section > div > input").val("1");
                }
            });
			var max = {{$dataCount}};
            $(".btn-plus").on("click", function () {
                var now = $(".section > div > input").val();
				if(now > max)
				{
					return ;
				}
                if ($.isNumeric(now)) {
                    $(".section > div > input").val(parseInt(now) + 1);
                } else {
                    $(".section > div > input").val("1");
                }
            });
        });
        //# sourceURL=pen.js
    </script>
@endsection