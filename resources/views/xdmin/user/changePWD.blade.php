
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>密碼修改</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/changePWD" method="post" class="form-horizontal form-bordered">
                        {{ csrf_field() }}
                        
                        <div class="form-body">
                            
                        
                           
                            <div class="form-group last">
                                <label class="control-label col-md-2">密碼</label>
                                <div class="col-md-4 m-grid-full-height">
                                    <input type="password" class="form-control" name="pwd1"/>
                                </div>
							
                            </div>
							 <div class="form-group last">
                                
								<label class="control-label col-md-2">密碼確認</label>
                                <div class="col-md-4 m-grid-full-height">
                                    <input type="password" class="form-control" name="pwd2"/>
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