<?php
$pageSetting = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>首頁資訊編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/pageSetting" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="dataId" value="{{$data->id}}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">網站標題</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="title" value="{{$data->title}}">
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">網站描述</label>
                                <div class="col-md-6">
							
                                    <textarea class="form-control"  name="description">{{$data->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">住址(繁體中文)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="address" value="{{$data->address}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">聯絡email</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="email" value="{{$data->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">連絡電話</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="phone" value="{{$data->phone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">傳真</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="fax" value="{{$data->fax}}">
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