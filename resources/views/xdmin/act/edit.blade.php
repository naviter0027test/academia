<?php
$act = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>年度行事編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/act" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="dataId" value="{{$data->id}}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">中文年度行事連結</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="link1" name="link_zh" value="{{$data->link_zh}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile1');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">柬文年度行事連結</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="link2" name="link_kh" value="{{$data->link_kh}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile2');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">ENGLISH年度行事連結</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="link3" name="link_en" value="{{$data->link_en}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile3');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class=" col-md-9">
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
        function selectFile1(file) {
            $('#link1').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile2(file) {
            $('#link2').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile3(file) {
            $('#link3').val(file.url);
            $.magnificPopup.close();
        }
        function openFile(arg0) {
            $.magnificPopup.open({
                items: {
                    src: arg0,
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