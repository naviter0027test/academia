@extends('web.layouts.main')
@section('content')
    <!--================================CATEGOTY SECTION==========================================-->

    <section class="aside-layout-section padding-bottom-40">
        <div class="container"><!-- section container -->
            <div class="row"><!-- row -->
                <div class="col-md-2 col-sm-3 mobile-no"><!-- sidebar column -->
                </div>
                <div class="col-md-10 col-sm-9 col-xs-12 main-wrap"><!-- content area column -->
                    <div class="listing-section">
                        <div class="map_contain2">
                            <!--================================PAGE TITLE==========================================-->
                            <div class="page_title">會員登入</div>

                            <!-- section container -->
                            <div class="login_contain">
                                <div class="form_wrapper">
                                    <div class="form_container">
                                        <div class="row clearfix">
                                            <!-- left section -->
                                            <div class="col_half">
                                                <div class="footer-recent-post"><big>登入會員</big>
                                                    <small>請先登入會員方可開始進行結帳</small>
                                                </div>
                                                <div class="clearfix">
<!--                                                    <div class="social_btn fb col_45"><a href="#"><span><i
                                                                        class="fa fa-facebook"
                                                                        aria-hidden="true"></i></span>Facebook 登入</a>
                                                    </div>
                                                    <div class="social_btn line col_45"><a href="#"><span><i
                                                                        class="fab fa-line"
                                                                        aria-hidden="true"></i></span>LINE 登入</a></div>
																		-->
                                                </div>
                                                <form id="loginForm" method="post" action="/user/login">
                                                    <div class="input_field"><span><i class="fa fa-envelope"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="email" id="email" name="email" placeholder="電子信箱"
                                                               required=""/>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-lock"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="password" name="password" placeholder="會員密碼"
                                                               required=""/>
                                                    </div>
                                                    <input class="button" type="submit" value="確認送出"/>
                                                    <div class="row clearfix bottom_row">
													
                                                        <div class="col_half remember_me">
                                                            <a href="javascript:forgetPWD()">忘記密碼</a>
                                                        </div>
														
                                                        <div class="col_half forgot_pw"></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- right section -->
                                            <div class="col_half last">
                                                <div class="footer-recent-post"><big>首次購物-加入會員</big>
                                                    <small>填寫基本資料即可開始購物</small>
                                                </div>
                                                <div class="clearfix">
												<!--
                                                    <div class="social_btn fb col_45"><a href="#"><span><i
                                                                        class="fa fa-facebook"
                                                                        aria-hidden="true"></i></span>Facebook 登入</a>
                                                    </div>
                                                    <div class="social_btn line col_45"><a href="#"><span><i
                                                                        class="fab fa-line"
                                                                        aria-hidden="true"></i></span>LINE 登入</a></div>
																		-->
                                                </div>
                                                <form id="registerForm" method="post" action="/user/register">
                                                    <div class="input_field"><span><i class="fa fa-user"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="name" name="name" placeholder="姓名" required=""/>
                                                        <notice><input type="radio" name="gender" value="女"/> 小姐
                                                            &nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" value="男"/> 先生
                                                        </notice>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-birthday-cake"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="birthday" name="birthday"
                                                               placeholder="生日 ex.1977/07/07" required=""/>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-envelope"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="email" name="email" placeholder="電子信箱"
                                                               required=""/>
                                                        <notice>請使用小寫半形輸入正確信箱，以免無法收到訂單信件</notice>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-lock"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="password" name="password1" placeholder="密碼設定"
                                                               required=""/>
                                                        <notice>6~12個字元，須包含英文及數字</notice>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-lock"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="password" name="password2" placeholder="密碼確認"
                                                               required=""/>
                                                        <notice>請再次輸入，以確認密碼</notice>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-phone-square"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="mobile" name="mobile" placeholder="手機號碼"
                                                               required=""/>
                                                        <notice>超商取貨時，簡訊通知(海外會員請正確填寫以便聯繫)</notice>
                                                    </div>
													<div class="input_field">
                                                        <input type="checkbox" name="newsletter" value="Y"/>
                                                        <notice>我同意收到國立海洋生物博物館之電子“出版品及館訊發刊通知”、“科學教育活動”以及“產學合作中心海洋文創訊息”。</notice>
                                                    </div>
													
                                                    <input class="button" type="submit" value="確認送出"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- section container end -->
                        </div>
                    </div>
                </div>
            </div><!-- section container end -->
    </section>
    <!-- .container end -->
@endsection
@section('js')
    <script type="text/javascript" src="/web/jquery-validation/dist/jquery.validate.js"></script>
    <script>
	function forgetPWD(){
		if($("#email").val() == '') {
			alert('請填寫email');
			return ;
		}
		$.post('/mymail/forgetMail',{
			email:$("#email").val()
			
		},function(data) {
			alert(data);
		});
	}
	/*
        $("#registerForm").submit(function (event) {
            event.preventDefault();
			
        });
*/
    </script>
@endsection
@section('css')
@endsection