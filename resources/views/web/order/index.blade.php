@extends('web.layouts.main')
@section('content')
		<style>
		.table{width:880px;}
		.map_contain {overflow-x: auto;}
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
								<div class="page_title">商品訂購</div>
								<hr></hr>
		<!--================================BREADCRUMB SECTION==========================================-->
								<ul class="breadcrumb">
								  <li class="breadcrumb-item"><a href="/">首頁</a></li>
								<li class="breadcrumb-item"><a href="/productList">熱門商品</a></li>
                                <li class="breadcrumb-item active">商品訂購</li>
								</ul>
								<!-- 
								<div class="order_title ">訂單編號查詢</div>
								-->
								<div>
								<!--
									<small>請輸入訂單查詢日期：<small class="red-1">最大區間以一個月為限，例：20100101~20100131</small></small><br>
									
									<div class="input-daterange input-group" id="datepicker" >
										<input type="text" class="input-sm form-control" name="start" data-date-format="mm/dd/yyyy" />
											<span class="input-group-addon">to</span>
										<input type="text" class="input-sm form-control" name="end" />
									</div>
									<div>
										您目前查詢日期為<span class="blue-1">20171218</span>至<span class="blue-1">20171225</span>，請點選欲詢問的訂單編號
									</div>
									-->
									<div class="orderform_line">
										<table id="orders" class="inner_border table table-bordered table table-hover">
											<thead>
												<tr>
													<th>&nbsp;</th>
													<th>訂單日期</th>
													<th>訂單編號</th>
													<th>訂購明細</th>
													<th>訂購金額</th>
													<th>配送狀況</th>
												</tr>
											</thead>

											<tbody id="ord_body">
											@foreach($data as $item)
												<tr>
													<td></td>
													<td>{{$item->created_at}}</td>
													<td>{{$item->lidm}}</td>
													<td><a href="/order/step3/{{$item->lidm}}">查看明細</a></td>
													<td>{{$item->total}}</td>
													<td>
													@if($item->isTake == 1)
														已出貨
												@else
														訂單處理中
													@endif
													</td>
													
												</tr>
												@endforeach

											</tbody>
										</table>
									</div>
									<div id="pager">
										<ul id="pagination" class="pagination-sm pagination"></ul>
									</div>
									<div class="page_nums">
										＊ＡＴＭ轉帳者請至<a href="/contact" target=_blank >聯絡我們</a>填寫後續資料！
									</div>
									</div>
								<!-- section container end -->
							</div>
						</div>
					</div>
				</div>
			</div><!-- section container end -->
		</section>		
			<!-- .container end -->
		<!-- 全部勾選 -->
		<script type="text/javascript"> 
			function check_all(obj,cName) 
			{ 
				var checkboxs = document.getElementsByName(cName); 
				for(var i=0;i<checkboxs.length;i++){checkboxs[i].checked = obj.checked;} 
			} 
		</script>
		<!-- 全部勾選結束 -->
		<!-- 分頁 -->
		<script type="text/javascript">
			var $pagination = $('#pagination'),
				totalRecords = 0,
				records = [],
				displayRecords = [],
				recPerPage = 10,
				page = 1,
				totalPages = 0;
				   
			$.ajax({
				url: "http://dummy.restapiexample.com/api/v1/employees",
				async: true,
				dataType: 'json',
				success: function (data) {
					records = data;
					console.log(records);
					totalRecords = records.length;
					totalPages = Math.ceil(totalRecords / recPerPage);
					apply_pagination();
				}
			});
			function generate_table() {
				var tr;
				$('#ord_body').html('');
				for (var i = 0; i < displayRecords.length; i++) {
					tr = $('<tr/>');
					tr.append("<td>" + displayRecords[i].id + "</td>");
					tr.append("<td>" + displayRecords[i].employee_name + "</td>");
					tr.append("<td>" + displayRecords[i].employee_salary + "</td>");
					tr.append("<td>" + displayRecords[i].employee_age + "</td>");
					tr.append("<td>" + displayRecords[i].orders_quantity + "</td>");
					tr.append("<td>" + displayRecords[i].orders_amount + "</td>");
					tr.append("<td>" + displayRecords[i].orders_shipping + "</td>");
					tr.append("<td>" + displayRecords[i].orders_returns + "</td>");
					$('#ord_body').append(tr);
				}
			}
			function apply_pagination() {
				$pagination.twbsPagination({
					totalPages: totalPages,
					visiblePages: 6,
					onPageClick: function (event, page) {
						displayRecordsIndex = Math.max(page - 1, 0) * recPerPage;
						endRec = (displayRecordsIndex) + recPerPage;
						console.log(displayRecordsIndex + 'ssssssssss'+ endRec);
						displayRecords = records.slice(displayRecordsIndex, endRec);
						generate_table();
					}
				});
			}
		</script>
		<!-- 分頁結束 -->
		<script>
		$('.input-daterange').datepicker({
			language: "zh-TW",
			autoclose: true,
			todayHighlight: true,
			toggleActive: true
		});
		</script>
			@endsection