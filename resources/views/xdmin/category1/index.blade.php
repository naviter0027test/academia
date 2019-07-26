@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>CKEditor Editor
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form class="form-horizontal" role="form">
                        <div class="form-actions top">
                            <div class="row">
                                <div class="col-md-9">
                                    <a href="javascript:;" class="btn btn-primary btn-lg"> 新增 </a>
                                    <a href="javascript:;" class="btn btn-lg red"> 刪除 </a>
                                    <a href="javascript:;" class="btn btn-success btn-lg"> 修改 </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-2 control-label">Block Help</label>
                                <div class="col-md-10">
                                    <table id="example" class="display" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Salary</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Salary</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions fluid">
                            <div class="row">
                                <div class="col-md-9">
                                    <a href="javascript:;" class="btn btn-primary btn-lg"> 新增 </a>
                                    <a href="javascript:;" class="btn btn-lg red"> 刪除 </a>
                                    <a href="javascript:;" class="btn btn-success btn-lg"> 修改 </a>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
            <!-- END EXTRAS PORTLET-->
        </div>
    </div>
@endsection
@section('js')
    <script src="/xdmin/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/xdmin/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/xdmin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {

                "ajax": "/xdmin/category1/data/{{$info->id}}",
                select: true,

            } );
        } );
    </script>
@endsection

@section('css')
    <link href="/xdmin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/xdmin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

@endsection
@extends('xdmin.layouts.main')