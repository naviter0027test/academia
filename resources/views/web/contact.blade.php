@extends('web.layouts.main')
@section('content')
<!--================================CATEGOTY SECTION==========================================-->
		
		<section class="aside-layout-section padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="row"><!-- row -->
					<div class="col-md-2 col-sm-3 mobile-no"><!-- sidebar column -->
						<div class="sidebar sidebar-wrap">
						</div>
					</div>		
					<div class="col-md-10 col-sm-9 col-xs-12 main-wrap"><!-- content area column -->
						<div class="listing-section">
							<div class="map_contain">
		<!--================================PAGE TITLE==========================================-->
								<div class="page_title">聯絡我們</div>

								<!-- section container -->
							<div class="comments-wrap margin-top-20">
								<div class="comments-main-title">
									<h6 class="tx-left">填寫您的連絡資料</h5>
								</div>
								<div class="contact-form-wrap margin-top-30"><!--.contact-form-wrap -->
								<form class="form-horizontal" action="/mymail/send" method="post">
								  <fieldset>
									<!-- Name input-->
									<div class="form-group overflow-hidden">
									  <label class="col-md-3 control-label-left" for="name">姓名</label>
									  <div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="姓名" class="form-control">
									  </div>
									</div>
									<!-- Gender input-->
									<div class="form-group overflow-hidden">
										<label class="col-md-3 control-label-left" for="gender">性別</label>
										<div class="col-md-9">
											<select class="selectpicker" name="gender">
												<option>先生</option>
												<option>小姐</option>
											</select>
										</div>
									</div>
									<!-- Email input-->
									<div class="form-group overflow-hidden">
									  <label class="col-md-3 control-label-left" for="email">E-mail</label>
									  <div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="請輸入 E-mail" class="form-control">
										<notice>請務必填寫可正常收發信之電子郵件，以便連繫。</notice>
									  </div>
									</div>
									<!-- Message Type input-->
									<div class="form-group overflow-hidden">
										<label class="col-md-3 control-label-left" for="message_type">留言類型</label>
										<div class="col-md-9">
											<select class="selectpicker" name="service" id="service" onchange="selFun()">
												<option>服務建議</option>
												<option>訂單問題</option>
											</select>
										</div>
									</div>
									<!-- Locate input-->
									{{--<div class="form-group overflow-hidden">--}}
										{{--<label class="col-md-3 control-label-left" for="locate">所在區域</label>--}}
										{{--<span class="width-10 col-md-9">--}}
											{{--<select class="selectpicker">--}}
												{{--<option>縣市</option>--}}
												{{--<option>第二個</option>--}}
											{{--</select>--}}
										{{--</span>--}}
										{{--<span class="width-10 col-md-9">--}}
											{{--<select class="selectpicker">--}}
												{{--<option>鄉鎮市區</option>--}}
												{{--<option>第二個</option>--}}
											{{--</select>--}}
										{{--</span>--}}
									{{--</div>--}}
									<!-- Telephone input-->
									<div class="form-group overflow-hidden">
									  <label class="col-md-3 control-label-left" for="telephone">連絡電話</label>
									  <div class="col-md-9">
										<input  name="tel" type="text" placeholder="行動電話優先，例：0912345678" class="form-control">
									  </div>
									</div>
									<!-- Suggestion body -->
									<div class="form-group overflow-hidden">
									  <label class="col-md-3 control-label-left" for="message">寶貴建議</label>
									  <div class="col-md-9">
										<textarea class="form-control" id="message" name="message" rows="5"></textarea>
									  </div>
									</div>
									<!-- Process Method-->
									<div class="form-group overflow-hidden">
										<label class="col-md-3 control-label-left" for="process_method">處理方式</label>
										<div class="col-md-9">
											<select class="selectpicker" name="ask">
												<option>需回覆</option>
												<option>不需回覆</option>
											</select>
										</div>
									</div>
									<!-- Contact Method-->
									<div class="form-group overflow-hidden">
										<label class="col-md-3 control-label-left" for="contact_method">聯絡方式</label>
										<div class="col-md-9">
											<select class="selectpicker" name="askType">
												<option>電話</option>
												<option>郵件</option>
												<option>簡訊</option>
											</select>
										</div>
									</div>
									<!-- Contact Time-->
									<div class="form-group overflow-hidden">
										<label class="col-md-3 control-label-left" for="contact_time">聯絡時間</label>
										<div class="col-md-9">
											<select class="selectpicker" name="askTime">
												<option>早上 09-12</option>
												<option>下午 12-18</option>
												<option>晚間 18-22</option>
											</select>
										</div>
									</div>
									<!-- Confirm Button-->
									<div class="form-group">
									  <div class="col-md-12 text-center">
										<button type="submit" class="btn btn-primary btn-lg">→確認送出</button>
									  </div>
									</div>
								  </fieldset>
								</form>
								</div><!--.contact-form-wrap end -->
							</div>
								<!-- section container end -->
						</div>
					</div>
				</div>
			</div><!-- section container end -->
		</section>		
			<!-- .container end -->
			<script>
			function selFun(){
				//console.debug('test');
				//$('#message').html('');
				if($('#service').val() == '訂單問題') {
					$('#message').append('ATM匯款:\n');
					$('#message').append('1.帳號後五碼:\n');
					$('#message').append('2.匯款日期:\n');
					$('#message').append('3.匯款金額:\n');
				} else {
					$('#message').html('');
				}
			}
			</script>
			@endsection