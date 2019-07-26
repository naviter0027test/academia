<?php
$banner = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{$data->title_zh}} Banner編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/banner" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="dataId" value="{{$data->id}}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner1 980*620</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="img1" name="img1" value="{{$data->img1}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile1');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner1連結位置</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="link1" value="{{$data->link1}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner2 980*620</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="img2" name="img2" value="{{$data->img2}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile2');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner2連結位置</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="link2" value="{{$data->link2}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner3 980*620</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="img3" name="img3" value="{{$data->img3}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile3');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner3連結位置</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="link3" value="{{$data->link3}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner4 980*620</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="img4" name="img4" value="{{$data->img4}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile4');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner4連結位置</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="link4" value="{{$data->link4}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner5 980*620</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="img5" name="img5" value="{{$data->img5}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile5');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner5連結位置</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="link5" value="{{$data->link5}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner6 980*620</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="img6" name="img6" value="{{$data->img6}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile('/xdmin/elfinder1/selectFile6');" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Banner6連結位置</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="link6" value="{{$data->link6}}">
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
            $('#img1').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile2(file) {
            $('#img2').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile3(file) {
            $('#img3').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile4(file) {
            $('#img4').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile5(file) {
            $('#img5').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile6(file) {
            $('#img6').val(file.url);
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