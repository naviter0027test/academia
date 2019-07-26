<?php
$youtube = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Youtube連結位置編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/youtube" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="dataId" value="{{$data->id}}">
                        <div class="form-body">
                           
                            <div class="form-group">
                                <label class="control-label col-md-2">Youtube連結位置1</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="link1" value="{{$data->link1}}">
                                </div>
                            </div>
                         
                            <div class="form-group">
                                <label class="control-label col-md-2">Youtube連結位置2</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="link2" value="{{$data->link2}}">
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
    
   
@endsection
@section('css')
 
@endsection
@extends('xdmin.layouts.main')