<?php
$users = "";
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>使用者列表
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form class="form-horizontal" role="form" onsubmit="return false;">
                        <input type="hidden" name="dataId" value="{{$data->id or -1}}">
                        {{--<div class="form-actions top">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-9">--}}
                                    {{--<a href="javascript:;" class="btn btn-primary btn-lg"> 新增 </a>--}}
                                    {{--<a href="javascript:;" class="btn btn-lg red"> 刪除 </a>--}}
                                    {{--<a href="javascript:;" class="btn btn-success btn-lg"> 修改 </a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-body">
                            <div class="form-actions fluid">
                                <div class="form-group">
                                    <label class="control-label col-md-2">姓名或email</label>
                                    <div class="col-md-3 m-grid-full-height">
                                        <input type="text" class="form-control" id="name" name="name" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button onclick="loadData();" class=" btn green btn-lg"> 查詢</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div id="myGrid" style="height: 400px;" class="ag-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions fluid">
                            <div class="row">
                                <div class="col-md-9">
                                     <!--<button onclick="addNewData();" class="btn btn-primary btn-lg"> 新增 </button>-->
                                     <button onclick="deleteData();" class="btn btn-lg red"> 刪除 </button>
                                    <button onclick="editData();" class="btn btn-success btn-lg"> 修改 </button>
                                    <!--<button onclick="reportData();" class="btn btn-lg"> 匯出薪資報表 </button>-->
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
    <script src="/ag-grid/dist/ag-grid.js" type="text/javascript"></script>
    <script>
        var _token = '<?php echo csrf_token(); ?>';
        // specify the columns
        var columnDefs = [
            {headerName: 'id', field: 'id', hide: true},
			{headerName: "姓名", field: "name"},
            {headerName: "帳號", field: "email"},
            {headerName: "訊息接收", field: "newsletter"},
			{headerName: "啟用", field: "enable"},
        ];

        // let the grid know which columns and what data to use
        var gridOptions = {
            columnDefs: columnDefs,
            rowData: null,
            enableColResize: true,
            rowSelection: 'single',
        };
        function loadData() {
            $.get('/xdmin/user/json',{
               uname:$('#name').val()
            }, function (data) {
                    gridOptions.api.setRowData(data);
                });
        }
        // wait for the document to be loaded, otherwise ag-Grid will not find the div in the document.
        document.addEventListener("DOMContentLoaded", function() {
            var eGridDiv = document.querySelector('#myGrid');
            new agGrid.Grid(eGridDiv, gridOptions);
            loadData();
        });
        function addNewData() {
            document.location.href="/xdmin/user/edit/-1";
        }
        function deleteData() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                if(confirm("確定要刪除該筆資料?")){
                    $.post('/xdmin/user/del',{_token:_token,id:row[0].id},
                        function (data) {
                            $.get('/xdmin/user/json',
                                function (data) {
                                    gridOptions.api.setRowData(data);
                                });
                        });
                }
            } else {
                alert("請先選擇相對作業內容");
            }
        }
        function editData() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                document.location.href="/xdmin/user/edit/"+row[0].id;
            } else {
                alert("請先選擇相對作業內容");
            }
        }
    </script>
@endsection

@section('css')
@endsection
@extends('xdmin.layouts.main')