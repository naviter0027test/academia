<?php
$users = "";
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
                <form action="/xdmin/user/save_data" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="dataId" value="{{$data->id or -1}}">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-2">姓名</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" value="{{$data->name}}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">帳號</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="email" value="{{$data->email}}">
                            </div>

                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-2">性別</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="gender" value="{{$data->gender}}">
                            </div>

                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-2">生日</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="birthday" value="{{$data->birthday}}">
                            </div>

                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-2">手機</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="mobile" value="{{$data->mobile}}">
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
						<div class="form-group">
                            <label class="control-label col-md-2">訊息接收</label>
                            <div class="col-md-10">
                                <input type="checkbox" name="newsletter" value="Y" <?php if($data->newsletter == 'Y') echo 'checked'?>/>
                                                        <notice>我同意收到國立海洋生物博物館之電子“出版品及館訊發刊通知”、“科學教育活動”以及“產學合作中心海洋文創訊息”。</notice>
                            </div>
                        </div>
                       <div class="form-group">
                               <label class="control-label col-md-2">啟用</label>
 <div class="col-md-3">
                                    <input type="checkbox" class="make-switch form-control" name="enable" value="Y" <?php if($data->enable == 'Y') echo 'checked'?> data-on-color="success" data-off-color="warning">
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
