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
								  @if(isset($search))
									  								  <li class="breadcrumb-item">查詢</li>

									  @else 
										  								  <li class="breadcrumb-item"><a href="/productList?subId={{$submain->id}}">{{$submain->title}}</a></li>

										  @endif
								</ul>

								<!-- section container -->
		<div class="order_content">
								<!-- MAIN PRODUCTS GRID-->
			<div class="row-fluid container-folio">
			@foreach($p_list as $item)
				<!-- PROD. ITEM -->
					<div class="span4">
						<div class="listing-item clearfix">
							<div class="thumbnail">
								<!-- IMAGE CONTAINER-->
								<div class="listing-content clearfix">
									<div class="listing-meta-cat">
										<a class="bgyallow-1" href="/contact/{{$item->productID}}"><i class="fa fa-suitcase white"></i></a>
									</div>
									 @if(isset($search))
									<a href="/product/{{$item->productID}}"><img src="{{$item->w_img}}" alt="post image" style="min-height:176px;"></a>
								@else
									<a href="/product/{{$item->productID}}?subId={{$submain->id}}"><img src="{{$item->w_img}}" alt="post image" style="min-height:176px;"></a>
									
								@endif
									<!--END IMAGE CONTAINER-->
									<!-- CAPTION -->
									<div class="caption">
										<h4 class="">
										@if(isset($search))
										<a href="/product/{{$item->productID}}" class="font-22" style="min-height:70px;">{{$item->productName}}</a>
									@else
										<a href="/product/{{$item->productID}}?subId={{$submain->id}}" class="font-22" style="min-height:70px;">{{$item->productName}}</a>										
									@endif
										</h4>
										<div class="row-fluid">
											<div class="span6">
												<a class="btn btn-success btn-block font-12" href="/product/{{$item->productID}}">BUY NOW</a>
											</div>
											<div class="span6">
												<p class="lead">${{$item->standardSellPrice}}</p>
											</div>
										</div>
									</div>
									<!--END CAPTION -->
								</div>
							</div>
							<!-- END: THUMBNAIL -->
						</div>
					</div>
			@endforeach

				</div>
			</div><!-- section container end -->
						</div>
					</div>
					</div>
				</div>
			</div><!-- section container end -->
		</section>		
			<!-- .container end -->
@endsection