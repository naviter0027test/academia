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
                    <div class="listing-section">
                        <div class="map_contain">
                            <!--================================PAGE TITLE==========================================-->
                            <div class="page_title">中心簡介</div>

                            <!--================================BREADCRUMB SECTION==========================================-->
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">首頁</a></li>
                                <li class="breadcrumb-item"><a href="/content/1">中心簡介</a></li>
                                <li class="breadcrumb-item active">{{$data->name}}</li>
                            </ul>
                            <!-- section container -->
                            <div class="roll_content black-1 tx-left">
                                {!! $data->content_zh !!}
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