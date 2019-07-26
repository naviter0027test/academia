@extends('web.layouts.main')
@section('content')
    <section class="aside-layout-section padding-bottom-40">
        <div class="container"><!-- section container -->
            <div class="row"><!-- row -->
                <div class="col-md-3 col-sm-4 mobile-no"><!-- sidebar column -->
                    <div class="sidebar sidebar-wrap">
                        <div class="sidebar-widget">
                            <div class="sidebar-widget-title">
                                <h5 class="page_title"></h5>
                            </div>
                            <div class="sidebar-widget-content category-widget clearfix">
                                <div class="sidebar-category-widget-wrap">
                                    <ul>
                                        <li><a href="#"></a></li>
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
                            <div class="page_title">最新消息<span class="right margin-right-20"><a href="{{$news->nextPageUrl()}}">下一頁</a></span><span class="right margin-right-20"><a href="{{$news->previousPageUrl()}}">上一頁</a></span></div>
																<hr></hr>
                            <!-- section container -->
                            <div class="roll_content news_page">
                                <ul>
                                    @foreach($news as $item)
                                        <li><span class="list_date">{{$item->post_date}}</span><span class="list_title"><a href="/news/detail/{{$item->id}}">{{$item->title}}</a></span></li>
                                        @endforeach

                                </ul>
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
