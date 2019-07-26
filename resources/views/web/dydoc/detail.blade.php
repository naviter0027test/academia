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
                                <h5 class="page_title">持有專利彙編</h5>
                            </div>
                            <div class="sidebar-widget-content category-widget clearfix">
                                <div class="sidebar-category-widget-wrap">
                                    <ul>
                                        <li>
                                            <a href="#SubSubMenu1" class="" data-toggle="collapse" data-parent="#SubSubMenu1">專利申請</a>
                                            <ul class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                                                <a href="/cooperation/4" class="padding-left-20" data-parent="#SubSubMenu1">專利申請程序</a>
                                                <a href="/dydoc" class="padding-left-20" data-parent="#SubSubMenu1">持有專利彙編</a>
                                                <a href="/cooperation/9" class="padding-left-20" data-parent="#SubSubMenu1">申請專利相關文件下載</a>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#SubSubMenu2" class="" data-toggle="collapse" data-parent="#SubSubMenu2">技術轉移</a>
                                            <ul class="collapse list-group-submenu list-group-submenu-2" id="SubSubMenu2">
                                                <a href="/cooperation/5" class="padding-left-20" data-parent="#SubSubMenu2">技術轉移簡介</a>
                                                <a href="/cooperation/10" class="padding-left-20" data-parent="#SubSubMenu2">申請技轉相關法規</a>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#SubSubMenu3" class="" data-toggle="collapse" data-parent="#SubSubMenu3">創新育成</a>
                                            <ul class="collapse list-group-submenu list-group-submenu-3" id="SubSubMenu3">
                                                <a href="/cooperation/11" class="padding-left-20" data-parent="#SubSubMenu3">申請進駐相關法規及文件下載</a>
                                                <a href="/cooperation/6" class="padding-left-20" data-parent="#SubSubMenu3">育成中心簡介</a>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#SubSubMenu4" class="" data-toggle="collapse" data-parent="#SubSubMenu4">研發合作</a>
                                            <ul class="collapse list-group-submenu list-group-submenu-4" id="SubSubMenu4">
                                                <a href="/cooperation/7" class="padding-left-20" data-parent="#SubSubMenu4">合作案例簡介</a>
                                                <a href="/cooperation/14" class="padding-left-20" data-parent="#SubSubMenu4">合作案例</a>
                                            </ul>
                                        </li>
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
                            <div class="page_title">{{$data->name}}</div>

                            <!--================================BREADCRUMB SECTION==========================================-->
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">首頁</a></li>
                                <li class="breadcrumb-item"><a href="/dydoc">持有專利彙編</a></li>
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