@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>CKEditor Editor </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/content" class="form-horizontal form-bordered">

                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default Input</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                            </div>
                            <div class="form-group last">
                                <label class="control-label col-md-3">CKEditor</label>
                                <div class="col-md-9">
                                    <textarea class="ckeditor form-control" name="editor1" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="javascript:;" class="btn green">
                                        <i class="fa fa-check"></i> Submit</a>
                                    <a href="javascript:;" class="btn btn-outline grey-salsa">Cancel</a>
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
        CKEDITOR.config.filebrowserBrowseUrl = '/xdmin/ckFileBrowserBrowse';
    </script>
@endsection
@section('css')

@endsection
@extends('xdmin.layouts.main')