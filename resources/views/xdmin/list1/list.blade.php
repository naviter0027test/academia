<?php
$g1 = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>般若生活({{$type}})
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

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div id="myGrid" style="height: 400px;" class="ag-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions fluid">
                            <div class="row">
                                <div class="col-md-9">
                                    <button onclick="addNewData();" class="btn btn-primary btn-lg"> 新增 </button>
                                    <button onclick="deleteData();" class="btn btn-lg red"> 刪除 </button>
                                    <button onclick="editData();" class="btn btn-success btn-lg"> 修改 </button>
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
			{headerName: "排序權重", field: "weights"},
            {headerName: "中文標題", field: "title_zh"},
            {headerName: "中文簡介", field: "info_zh"},
            {headerName: "柬文標題", field: "title_kh"},
            {headerName: "柬文簡介", field: "info_kh"},
            {headerName: "英文標題", field: "title_en"},
            {headerName: "英文簡介", field: "info_en"},
        ];

        // specify the data
        var rowData = [
            {make: "Toyota", model: "Celica", price: 35000},
            {make: "Ford", model: "Mondeo", price: 32000},
            {make: "Porsche", model: "Boxter", price: 72000}
        ];

        // let the grid know which columns and what data to use
        var gridOptions = {
            columnDefs: columnDefs,
            rowData: null,
            enableColResize: true,
            rowSelection: 'single',
        };

        // wait for the document to be loaded, otherwise ag-Grid will not find the div in the document.
        document.addEventListener("DOMContentLoaded", function() {
            var eGridDiv = document.querySelector('#myGrid');
            new agGrid.Grid(eGridDiv, gridOptions);
            $.get('/xdmin/list1/{{$type}}/json',
                function (data) {
                    gridOptions.api.setRowData(data);
                });
        });
        function addNewData() {
            document.location.href="/xdmin/list1/{{$type}}/edit/-1";
        }
        function deleteData() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                if(confirm("確定要刪除該筆資料?")){
                    $.post('/xdmin/list1/del',{_token:_token,id:row[0].id},
                        function (data) {
                            $.get('/xdmin/list1/{{$type}}/json',
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
                document.location.href="/xdmin/list1/{{$type}}/edit/"+row[0].id;
            } else {
                alert("請先選擇相對作業內容");
            }
        }
    </script>
@endsection

@section('css')
@endsection
@extends('xdmin.layouts.main')