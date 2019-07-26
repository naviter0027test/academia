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
                                           
                                            <!-- right section -->
                                            <div class="col_half last">
                                                <div class="footer-recent-post"><big>個人會員資料修改</big>
                                                   
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
																					   <input type="hidden"  name="dataId" value="{{$data->id}}">
                                                        <input type="name" name="name" placeholder="姓名" required="" value="{{$data->name}}"/>
                                                        <notice><input type="radio" name="gender" value="女" <?php if($data->gender == '女') echo 'checked'?>/> 小姐
                                                            &nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" value="男" <?php if($data->gender == '男') echo 'checked'?>/> 先生
                                                        </notice>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-birthday-cake"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="birthday" name="birthday" value="{{date('Y/m/d',strtotime($data->birthday))}}"
                                                               placeholder="生日 ex.1977/07/07" required=""/>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-envelope"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="email" name="email" placeholder="電子信箱" value="{{$data->email}}"
                                                               required="" readonly />
                                                       
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-lock"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="password" name="password1" placeholder="密碼設定" required=""
                                                               />
                                                        <notice>6~12個字元，須包含英文及數字</notice>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-lock"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="password" name="password2" placeholder="密碼確認" required=""
                                                              />
                                                        <notice>請再次輸入，以確認密碼</notice>
                                                    </div>
                                                    <div class="input_field"><span><i class="fa fa-phone-square"
                                                                                      aria-hidden="true"></i></span>
                                                        <input type="mobile" name="mobile" placeholder="手機號碼" value="{{$data->mobile}}"
                                                               required=""/>
                                                        <notice>超商取貨時，簡訊通知(海外會員請正確填寫以便聯繫)</notice>
                                                    </div>
													<div class="input_field">
                                                        <input type="checkbox" name="newsletter" value="Y" <?php if($data->newsletter == 'Y') echo 'checked'?>/>
                                                        <h5>我同意收到國立海洋生物博物館之電子“出版品及館訊發刊通知”、“科學教育活動”以及“產學合作中心海洋文創訊息”。</h5>
                                                    </div>
													<div class="input_field">
														<button type="submit" class="btn btn-primary btn-lg">確認送出</button>
														<button type="button" onclick="delData()" class="btn btn-danger btn-lg">刪除個資</button>
                                                     </div>
                                                    
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
	function delData() {
		if(confirm("一旦取消註冊，本館將不保留任何資料，確定取消註冊?")) {
			 $.post('/xdmin/user/del',{id:{{$data->id}}},
                        function (data) {
                            document.location.href="logout";
                        });
		}
	}
	
    </script>
@endsection
@section('css')
@endsection