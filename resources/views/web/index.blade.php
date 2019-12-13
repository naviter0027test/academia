@extends('web.layouts.main')
@section('content')
    <!--================================CATEGOTY SECTION==========================================-->

    <section class="aside-layout-section">
        <!--================================Revolution SLIDER SECTION==========================================-->

        <section id="slider-revolution">
            <div class="fullwidthbanner-container">
                <div class="revolution-slider tx-center">
                    <ul><!-- SLIDE  -->

                          @if(!empty($page['banner']->img1))
                            <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">

                                @if(!empty($page['banner']->link1))
                                    <a href="{{$page['banner']->link1}}" target="_blank"><img src="{{$page['banner']->img1}}" alt="slide"></a>
                                @else
                                    <img src="{{$page['banner']->img1}}" alt="slide">
                                @endif
                            </li>
                        @endif

                        @if(!empty($page['banner']->img2))
                            <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">

                                @if(!empty($page['banner']->link2))
                                    <a href="{{$page['banner']->link2}}" target="_blank"><img src="{{$page['banner']->img2}}" alt="slide"></a>
                                @else
                                    <img src="{{$page['banner']->img2}}" alt="slide">
                                @endif
                            </li>
                        @endif

                        @if(!empty($page['banner']->img3))
                            <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">

                                @if(!empty($page['banner']->link3))
                                    <a href="{{$page['banner']->link3}}" target="_blank"><img src="{{$page['banner']->img3}}" alt="slide"></a>
                                @else
                                    <img src="{{$page['banner']->img3}}" alt="slide">
                                @endif
                            </li>
                        @endif

                        @if(!empty($page['banner']->img4))
                            <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">

                                @if(!empty($page['banner']->link4))
                                    <a href="{{$page['banner']->link4}}" target="_blank"><img src="{{$page['banner']->img4}}" alt="slide"></a>
                                @else
                                    <img src="{{$page['banner']->img4}}" alt="slide">
                                @endif
                            </li>
                        @endif

                        @if(!empty($page['banner']->img5))
                            <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">

                                @if(!empty($page['banner']->link5))
                                    <a href="{{$page['banner']->link5}}" target="_blank"><img src="{{$page['banner']->img5}}" alt="slide"></a>
                                @else
                                    <img src="{{$page['banner']->img5}}" alt="slide">
                                @endif
                            </li>
                        @endif

                        @if(!empty($page['banner']->img6))
                            <li data-transition="slideright" data-slotamount="8" data-masterspeed="1000">

                                @if(!empty($page['banner']->link6))
                                    <a href="{{$page['banner']->link6}}" target="_blank"><img src="{{$page['banner']->img6}}" alt="slide"></a>
                                @else
                                    <img src="{{$page['banner']->img6}}" alt="slide">
                                @endif
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </section>

        <!--================================SERVICES SECTION==========================================-->

        <section class="our-services">
            <div class="container">
                <div class="row padding-bottom-70 index-buttom-link">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                    <!--
                        <div class="col-md-4 col-sm-4 col-xs-12 service-word">
                            熱門商品
                        </div>
                        -->
                        <div class="service-box bgservice shadow-2">
                            <a href="/productList"><img src="/web/images/20191211/penguinHotProduct.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                    <!--
                        <div class="col-md-4 col-sm-4 col-xs-12 service-word">
                            訂單查詢
                        </div>
                        -->
                        <div class="service-box bgservice shadow-2">
                            <a href="/order"><img src="/web/images/20191211/penguinOrderSearch.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                    <!--
                        <div class="col-md-4 col-sm-4 col-xs-12 service-word">
                            商品產學合作諮詢
                        </div>
                        -->
                        <div class="service-box bgservice shadow-2">
                            <a href="/contact"><img src="/web/images/20191211/penguinCooperation.jpg" /></a>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright">
                            <p>注意事項!!</p>
                            <p>本網站訂購流程及運費僅限本島適用，海外買家請另聯繫Gmail或致電本中心</p>
                            <p>nmmba2016@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="online-count2">
                    <span>訪客人數：</span>
                    <span>{{$page['webCount']}}</span>
                </div>
            </div>
        </section>
    </section>
@endsection
