<?php
$news = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{$data->title}} 內容編輯
                    </div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="/xdmin/news" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="dataId" value="{{$data->id or -1}}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">公告名稱</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">公告內容</label>
                                <div class="col-md-10">
                                    <textarea class="ckeditor form-control" name="content">{{$data->content}}</textarea>
                                </div>
                            </div>



                        </div>
                        <div class="form-actions">

                            <div class="form-group">
                                <label class="control-label col-md-2">排序權重</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="weights" value="{{$data->weights}}">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">發布日期</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control cDateTime1" name="post_date" value="{{$data->post_date}}">
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" class="make-switch" name="enable" value="Y" <?php if($data->enable == 'Y') echo 'checked'?> data-on-color="success" data-off-color="warning"> 是否發佈
                                </div>
                                <div class="col-md-3 offset-md-2">
                                    <input type="checkbox" class="make-switch"  name="top" value="Y" <?php if($data->top == 'Y') echo 'checked'?> data-on-color="success" data-off-color="warning"> 置頂
                                </div>
                            </div>





                            <div class="row">
                                <div class="col-md-9">
                                    <a href="javascript:;" onclick="document.forms[0].submit();return false;" class="btn green">
                                        <i class="fa fa-check"></i> 存檔</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END EXTRAS PORTLET-->
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/xdmin/timepicker/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/xdmin/timepicker/i18n/jquery-ui-timepicker-zh-TW.js"></script>
    <script type="text/javascript" src="/xdmin/timepicker/jquery-ui-sliderAccess.js"></script>
    <script src="/xdmin/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="/magnific/dist/jquery.magnific-popup.js" type="text/javascript"></script>
  <script>
        CKEDITOR.config.removePlugins = 'forms';
        CKEDITOR.config.height = '500px';
        CKEDITOR.config.filebrowserBrowseUrl = '/xdmin/ckFileBrowserBrowse';
    </script>
    <script>

        $(function () {
            $('.cDateTime').datetimepicker({
                timeFormat: 'HH:mm:ss',
                dateFormat: "yy-mm-dd",
                stepHour: 1,
                stepMinute: 1,
                stepSecond: 10
            });
            $('.cDateTime1').datetimepicker({

                showTimepicker:false,
            });
            $('#my-select').multiSelect();
        });

    </script>
@endsection
@section('css')
    <link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.11.0/themes/hot-sneaks/jquery-ui.css"/>
    <link rel="stylesheet" media="all" type="text/css" href="/xdmin/timepicker/jquery-ui-timepicker-addon.css"/>
    <link rel="stylesheet" href="/magnific/dist/magnific-popup.css">
    <link href="/xdmin/mselect/css/multi-select.css" rel="stylesheet" type="text/css" />
@endsection
@extends('xdmin.layouts.main')