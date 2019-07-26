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
                                <h5 class="page_title">中心簡介</h5>
                            </div>
                            <div class="sidebar-widget-content category-widget clearfix">
                                <div class="sidebar-category-widget-wrap">
                                    <ul>
                                        <li><a href="/content1/1">關於我們</a></li>
                                        <li><a href="/content1/2">組織架構</a></li>
                                        <li><a href="/content1/3">服務項目</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
                  
				  
				  <div class="sitemap">

		<nav class="utilityNav">
			<ul>
				<li><a href="/register">Register</a></li>
				<li><a href="/login">Log In</a></li>
				<li><a href="/search">Search</a></li>
			</ul>
		</nav>

		<nav class="primaryNav">
			<ul>
				<li id="home"><a href="http://sitetitle.com">海生館</a></li>
				<li><a href="/about">About Us</a>
					<ul>
						<li><a href="/history">Our History</a></li>
						<li><a href="/mission">Mission Statement</a></li>
						<li><a href="/principals">Principals</a></li>
					</ul>
				</li>
				<li><a href="/services">Services</a>
					<ul>
						<li><a href="/services/design">Graphic Design</a></li>
						<li><a href="/services/development">Web Development</a></li>
						<li><a href="/services/marketing">Internet Marketing </a>
							<ul>
								<li><a href="/social-media">Social Media</a></li>
								<li><a href="/optimization">Search Optimization</a></li>
								<li><a href="/adwords">Google AdWords</a></li>
							</ul>
						</li>
						<li><a href="/services/copywriting">Copywriting</a></li>
						<li><a href="/services/photography">Photography</a></li>
					</ul>
				</li>
				<li><a href="/projects">Projects</a>
					<ul>
						<li><a href="/projects/finance">Finance</a></li>
						<li><a href="/projects/medical">Medical</a></li>
						<li><a href="/projects/education">Education</a></li>
						<li><a href="/projects/professional">Professional</a></li>
						<li><a href="/projects/industrial">Industrial</a></li>
						<li><a href="/projects/commercial">Commercial</a></li>
						<li><a href="/projects/energy">Energy</a></li>
					</ul>
				</li>
				<li><a href="/contact">Contact</a>
					<ul>
						<li><a href="/contact/offices">Offices</a>
							<ul>
								<li><a href="/contact/form">Contact Form</a>
									<ul>
										<li><a href="/contact/quote">Request Quote</a></li>
										<li><a href="/contact/suppliers">Supplier Information</a></li>
										<li><a href="/contact/media">Media Relations</a></li>
									</ul>
								</li>
								<li><a href="/contact/map">Locations</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>

		</nav>

	</div> <!-- end sitemap -->
				  
				  
                </div>
            </div>
        </div><!-- section container end -->
    </section>
	

@endsection
@section('css')
<link rel="stylesheet" type="text/css" media="screen, print" href="/web/css/slickmap.css" />
@endsection
