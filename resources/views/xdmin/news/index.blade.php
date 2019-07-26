<?php
$news = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>公告消息
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form class="form-horizontal" role="form" onsubmit="return false;">
                        <input type="hidden" name="dataId" value="{{$data->id or -1}}">
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
            {headerName: "公告消息", field:"title",width:600,suppressSizeToFit:true},
			{headerName: "排序權重", field: "weights",width:60},
            {headerName: "公告日期", field: "post_date",width:100},
            {headerName: "是否發布", field: "enable",width:60},
            {headerName: "置頂", field: "top",width:60},
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
            $.get('/xdmin/news/json',
                function (data) {
                    gridOptions.api.setRowData(data);
                });

        });
        function addNewData() {
            document.location.href="/xdmin/news/edit/-1";
        }
        function deleteData() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                if(confirm("確定要刪除該筆資料?")){
                    $.post('/xdmin/news/del',{_token:_token,id:row[0].id},
                        function (data) {
                            $.get('/xdmin/product/json',
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
                document.location.href="/xdmin/news/edit/"+row[0].id;
            } else {
                alert("請先選擇相對作業內容");
            }
        }
    </script>
@endsection

@section('css')
@endsection
@extends('xdmin.layouts.main')