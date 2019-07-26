@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{$info['title']}}
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
                                </div>
                            </div>
                        </div>
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-2 control-label">Block Help</label>
                                <div class="col-md-10">
                                    <table id="example" class="table table-striped table-bordered table-hover table-checkable order-column" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>標題</th>
                                            <th>內容</th>
                                            <th>開啟</th>
                                            <th>功能</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>標題</th>
                                            <th>內容</th>
                                            <th>開啟</th>
                                            <th>功能</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($data as $item)
                                                <tr>
                                                    <td>{{$item['title']}}</td>
                                                    <td><?php echo strip_tags($item['content']);?></td>
                                                    <td>{{$item['enable']}}</td>
                                                    <td>
                                                        <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                            <i class="fa fa-edit"></i> 編輯 </a>
                                                        <a href="javascript:;" onClick="delRow(this);" class="btn btn-outline btn-circle dark btn-sm black">
                                                            <i class="fa fa-edit"></i> 刪除 </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions fluid">
                            <div class="row">
                                <div class="col-md-9">
                                    <a href="javascript:;" class="btn btn-primary btn-lg"> 新增 </a>

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
            var table = $('#example').DataTable();
        } );
        function delRow($i) {
            var table = $('#example').DataTable();
            table
                .row( $(this).parents('tr') )
                .remove()
                .draw();
        }
    </script>
@endsection

@section('css')
    <link href="/xdmin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/xdmin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

@endsection
@extends('xdmin.layouts.main')