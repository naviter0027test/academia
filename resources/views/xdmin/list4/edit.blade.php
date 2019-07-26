<?php
$g4 = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{$data->title_zh}} 文章內容編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/list4" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$data->id or -1}}">
                        <input type="hidden" name="category" value="{{$type}}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">列表圖</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="img1" name="img1" value="{{$data->img1}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile();" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">中文標題</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title_zh" value="{{$data->title_zh}}">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">中文簡介編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="form-control" name="info_zh">{{$data->info_zh}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">中文內容編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="ckeditor form-control" name="content_zh">{{$data->content_zh}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">柬文標題</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title_kh" value="{{$data->title_kh}}">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">柬文簡介編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="form-control" name="info_kh">{{$data->info_kh}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">柬文內容編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="ckeditor form-control" name="content_kh">{{$data->content_kh}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ENGLISH標題</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title_en" value="{{$data->title_en}}">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ENGLISH簡介編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="form-control" name="info_en">{{$data->info_en}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ENGLISH內容編輯</label>
                                <div class="col-md-10 m-grid-full-height">
                                    <textarea class="ckeditor form-control" name="content_en">{{$data->content_en}}</textarea>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-md-2">發佈日期</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="release_date" value="{{$data->release_date}}">
                                </div>

                            </div>
							<div class="form-group">
                                <label class="control-label col-md-2">權重</label>
                                <div class="col-md-4 m-grid-full-height">
									<input type="number" class="form-control" name="weights" value="{{$data->weights}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
						 <div class="form-group">
                                <div class="col-md-3">
                                    <input type="checkbox" class="make-switch" name="enable" value="Y" <?php if($data->enable == 'Y') echo 'checked'?> data-on-color="success" data-off-color="warning"> 是否發佈
                                </div>
								  <div class="col-md-3">
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
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END EXTRAS PORTLET-->
        </div>
    </div>
@endsection
@section('js')
    <script src="/xdmin/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="/magnific/dist/jquery.magnific-popup.js" type="text/javascript"></script>
    <script>
        CKEDITOR.config.removePlugins = 'forms';
        CKEDITOR.config.height = '500px';
        CKEDITOR.config.filebrowserBrowseUrl = '/xdmin/ckFileBrowserBrowse';
    </script>
    <script>
        function selectFile(file) {
            $('#img1').val(file.url);
            $.magnificPopup.close();
        }
        function openFile() {
            $.magnificPopup.open({
                items: {
                    src: '/xdmin/elfinder1/selectFile',
                    type: 'iframe',
                },
                callbacks: {
                    close: function () {

                    }
                }
            });
        }
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="/magnific/dist/magnific-popup.css">
@endsection
@extends('xdmin.layouts.main')