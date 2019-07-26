<?php
$s1='';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{$data->name}}</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/content1" method="post" class="form-horizontal form-bordered">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-body">

                            <div class="form-group last">
                                <label class="control-label col-md-2">內容編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="ckeditor form-control" name="content_zh">{{$data->content_zh}}</textarea>
                                </div>
                            </div>
                        <!--
                            <div class="form-group last">
                                <label class="control-label col-md-2">柬文內容編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="ckeditor form-control" name="content_kh">{{$data->content_kh}}</textarea>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-md-2">ENGLISH內容編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="ckeditor form-control" name="content_en">{{$data->content_en}}</textarea>
                                </div>
                            </div>
                            -->
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-9">
                                    <a href="javascript:;" onclick="document.forms[0].submit();return false;" class="btn green">
                                        <i class="fa fa-check"></i> 存檔</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END EXTRAS PORTLET-->
        </div>
    </div>
@endsection
@section('js')
    <script src="/xdmin/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script>
        CKEDITOR.config.removePlugins = 'forms';
        CKEDITOR.config.height = '500px';
        CKEDITOR.config.filebrowserBrowseUrl = '/xdmin/ckFileBrowserBrowse';
    </script>
@endsection
@section('css')

@endsection
@extends('xdmin.layouts.main')