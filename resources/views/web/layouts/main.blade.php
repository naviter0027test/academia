<!DOCTYPE html>
<?php
//dd(session()->all());
?>
<html>
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable = yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="BENJILL">
    <title>{{$page['page_setting']->title}}</title>
    <title></title>

    <!--================================FAVICON================================-->

    <link rel="apple-touch-icon" sizes="57x57" href="/web/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/web/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/web/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/web/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/web/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/web/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/web/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/web/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/web/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/web/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/web/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/web/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/web/images/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="/web/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/web/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="/web/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/web/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--================================BOOTSTRAP STYLE SHEETS================================-->

    <link rel="stylesheet" type="text/css" href="/web/bootstrap/css/bootstrap.min.css">

    <!--================================ Main STYLE SHEETs====================================-->

    <link rel="stylesheet" type="text/css" href="/web/css/style.css">
    <link rel="stylesheet" type="text/css" href="/web/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/web/css/color/color.css">
    <link rel="stylesheet" type="text/css" href="/web/assets/testimonial/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/web/assets/testimonial/css/elastislide.css" />
    <link rel="stylesheet" type="text/css" href="/web/css/responsive.css">

    <!--================================ JS CODE====================================-->

	
    <!--================================FONTAWESOME==========================================-->

    <link rel="stylesheet" type="text/css" href="/web/css/font-awesome.css">

    <!--================================GOOGLE FONTS=========================================-->

    <!--================================SLIDER REVOLUTION =========================================-->

    <link rel="stylesheet" type="text/css" href="/web/assets/revolution_slider/css/revslider.css" media="screen" />
    <link rel="stylesheet" href="/magnific/dist/magnific-popup.css">
    @yield('css')
</head>
<body class='background1'>
<div class="preloader"><span class="preloader-gif"></span></div>
<div class="theme-wrap clearfix">
    <!--================================responsive log and menu==========================================-->
    <div class="wsmenucontent overlapblackbg"></div>
    <div class="wsmenuexpandermain slideRight">
        <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
        <a href="index.php" class="smallogo"><img src="/web/images/logo.png" width="120" alt="" /></a>
    </div>
    <!--================================HEADER==========================================-->
    <div class="header">
        <div class="top-toolbar"><!--header toolbar-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                        <div class="logo pull-left"><a href="/" title="Responsive Slide Menus"><img src="/web/images/20191211/logo_1.jpg" alt="" /></a></div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="top-contact-info">
                            <ul>
                                <li class="toolbar-list-orange"><i class="glyphicon glyphicon-stop"></i><a href="https://www.nmmba.gov.tw/"> 海生館網站</a></li>
								@if(!empty(session('user_id')))
									<li class="toolbar-list"><i class="glyphicon glyphicon-stop"></i>{{session('name')}} 歡迎您</li>
								@endif
                                <li class="toolbar-list-orange"><i class="glyphicon glyphicon-stop"></i>
                                    @if(!empty(session('user_id')))
                                        <a href="/user/logout"> 會員登出</a>
                                        @else
                                        <a href="/login"> 會員登入</a>
                                        @endif
                                </li>
								@if(!empty(session('user_id')))
								<li class="toolbar-list-orange"><i class="glyphicon glyphicon-stop"></i>
                                   <a href="/user/edit"> 修改個人資料</a>
                                </li>
								@endif
                                <li class="toolbar-list-orange"><i class="glyphicon glyphicon-stop"></i><a href="javascript:openCart();" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 購物車</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="left:auto;right:14px;width:250px;">
                                        <table id="cartContent" style="border: 0;width:100%">
                                            <thead>
                                            <tr>
                                                <th style="width: 50%">商品名稱</th>
                                                <th style="width:33%">數量</th>
                                                <th style="width:33%">小計</th>
                                            </tr>
                                            </thead>
                                            <tbody >

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3" style="text-align:right;"><button onClick="checkOut()" class="btn btn-success" type="button" >前往結帳</button></td>
                                            </tr>

                                            </tfoot>
                                        </table>
                                    </div>
                                </li>
                                <li class="toolbar-list-orange"><i class="glyphicon glyphicon-stop"></i><a href="/contact"> 聯絡我們</a></li>
                            </ul>
                            <ul>
                                <input type="text" id="searchText"><button class="toolbar-new-listing" onClick="search()"> <i class="glyphicon glyphicon-search"></i> Search</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--header toolbar end-->
        <div class="nav-wrapper"><!--main navigation-->
            <div class="container">
                <!--Main Menu HTML Code-->
                <nav class="wsmenu slideLeft clearfix">
                    <ul class="mobile-sub wsmenu-list">
                        <li><a href="/" class="">回首頁</a></li>
                        <li><a href="/news" class="">最新消息</a></li>
                        <li><a href="/productList">熱門商品</a></li>
                        <li><a href="/content1/1" class="">中心簡介</a></li>
                        <li><a href="/cooperation/8" class="">合作機會</a></li>
                    </ul>
                </nav>
            </div>
        </div><!--main navigation end-->
    </div><!-- header end -->



    @yield('content')



    <div class="footer-bottom">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copyright">
                        <p>機關地址：屏東縣車城鄉後灣村後灣路２號</p>
                        <p>電話：08-8825001  分機：5117或5119   (不含例假日)   ｜ 傳真：08-8824860</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<!--================================JQuery===========================================-->

<script type="text/javascript" src="/web/js/jquery-1.11.3.min.js"></script>
<script src="/web/js/jquery.js"></script><!-- jquery 1.11.2 -->
<script src="/web/js/jquery.easing.min.js"></script>
<script src="/web/js/modernizr.custom.js"></script>

<!--================================BOOTSTRAP===========================================-->

<script src="/web/bootstrap/js/bootstrap.min.js"></script>

<!--================================NAVIGATION===========================================-->

<script type="text/javascript" src="/web/js/menu.js"></script>

<!--================================SLIDER REVOLUTION===========================================-->

<script type="text/javascript" src="/web/assets/revolution_slider/js/revolution-slider-tool.js"></script>
<script type="text/javascript" src="/web/assets/revolution_slider/js/revolution-slider.js"></script>


<!--================================OWL CARESOUL=============================================-->

<script src="/web/js/owl.carousel.js"></script>
<script src="/web/js/triger.js" type="text/javascript"></script>

<!--================================FunFacts Counter===========================================-->

<script src="/web/js/jquery.countTo.js"></script>

<!--================================jquery cycle2=============================================-->

<script src="/web/js/jquery.cycle2.min.js" type="text/javascript"></script>

<!--================================waypoint===========================================-->

<script type="text/javascript" src="/web/js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->

<!--================================RATINGS===========================================-->

<script src="/web/js/jquery.raty-fa.js"></script>
<script src="/web/js/rate.js"></script>

<!--================================ testimonial ===========================================-->
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">

			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>
<script type="text/javascript" src="/web/assets/testimonial/js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="/web/assets/testimonial/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="/web/assets/testimonial/js/gallery.js"></script>

<!--================================custom script===========================================-->

<script type="text/javascript" src="/web/js/custom.js"></script>
<script src='/js/sweetalert2.all.js'></script>
<script src="/magnific/dist/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    updateCart();
    function updateCart() {
        $.get('/webCartContent',{},function (data) {
            var tbody = $('#cartContent').children('tbody');
            tbody.html('');
            hStr = '';
            for (var i = 0; i < data.length; i++) {
                hStr += '<tr><td>'+data[i].name+'</td>';
                hStr += '<td>'+data[i].qty+'</td>';
                hStr += '<td>'+data[i].price+'</td></tr>';
            }
            tbody.append(hStr);
        });
    }
	function search(){
		document.location.href="/search/"+$('#searchText').val();
	}
    function checkOut() {
        $.get('/webCheckCount',{},function (data) {
            if(data == 0) {
                alert('購物車沒有任何物品，請先挑選欲購買商品');
            } else {
                document.location.href="/checkout1";
            }
        });
    }
</script>
@yield('js')
</body>
</html>
