<?php
$product = '';
$p1 = "";
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{$data->title}} 分類內容編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/psubmenu" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$data->id or -1}}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">中文名稱</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">權重</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="weights" value="{{$data->weights}}">
                                </div>
                            </div>

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
@endsection
@section('css')

@endsection
@extends('xdmin.layouts.main')