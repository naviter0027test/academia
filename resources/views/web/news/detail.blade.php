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
                                <h5 class="page_title">{{$data->name}}</h5>
                            </div>
                            <div class="sidebar-widget-content category-widget clearfix">
                                <div class="sidebar-category-widget-wrap">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
                    <div class="listing-section">
                        <div class="map_contain">
                            <!--================================PAGE TITLE==========================================-->
                            <div class="page_title">{{$data->name}}</div>

                            <!--================================BREADCRUMB SECTION==========================================-->
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">首頁</a></li>
                                <li class="breadcrumb-item"><a href="/news">最新消息</a></li>
                                <li class="breadcrumb-item active">{{$data->title}}</li>
                            </ul>
                            <!-- section container -->
                            <div class="roll_content black-1 tx-left">
                                {!! $data->content !!}
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