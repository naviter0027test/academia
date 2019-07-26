<?php
$manager = "";
?>
@extends('xdmin.layouts.main')
@section('page-content')

        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>{{$data->title}} 內容編輯
                </div>
                <div class="tools">

                </div>
            </div>
            <div class="portlet-body form">
                <form action="/xdmin/manager/save_data" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="dataId" value="{{$data->id or -1}}">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-2">姓名</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="nickname" value="{{$data->nickname}}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">帳號</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="username" value="{{$data->username}}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">密碼</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="password" value="{{$data->password}}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">備註</label>
                            <div class="col-md-10">
                                <textarea name="ps" class="form-control" rows="5">{{$data->ps}}</textarea>
                            </div>
                        </div>
                        
                     

                       
            </div>
            <div class="form-actions">

                <div class="row">
                    <div class="col-md-9">
                        <a href="javascript:;" onclick="document.forms[0].submit();return false;"
                           class="btn green">
                            <i class="fa fa-check"></i> 存檔</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- END EXTRAS PORTLET-->
    </div>
@endsection
@section('css')

@endsection
@section('js')

@endsection
