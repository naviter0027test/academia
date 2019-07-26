<?php
$product = '';
$p2 = "";
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>產品管理
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
                                <label class="control-label col-md-2">產品名稱</label>
                               <div class="col-md-3 m-grid-full-height">
                                    <input type="text" class="form-control" id="pname" name="pname" value="">
                                </div>
                            </div>
							  <div class="form-group">
                                <div class="col-md-9">
                                    <button onclick="loadData();" class=" btn green btn-lg"> 查詢 </button>
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
                                    {{--<button onclick="addNewData();" class="btn btn-primary btn-lg"> 新增 </button>--}}
                                    {{--<button onclick="deleteData();" class="btn btn-lg red"> 刪除 </button>--}}
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
    <script src="/xdmin/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/xdmin/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/xdmin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

    <script src="/ag-grid/dist/ag-grid.js" type="text/javascript"></script>
    <script>
        var _token = '<?php echo csrf_token(); ?>';
        var table;

        $(document).ready(function() {
            table = $('#example').DataTable({
                "paging":   false,
                "ordering": false,
                "info":     false,
                "searching":     false,
                select: {
                    style:    'multi',
                    selector: 'td:first-child',
                },
                order: [[ 1, 'asc' ]]
            });



        });
        var columnDefs = [
            {headerName: 'id', field: 'productID', hide: true},
            {headerName: "產品名稱", field: "productName"},
			{headerName: "種類", field: "productKind"},
			{headerName: "權重", field: "w_weights"},
			{headerName: "是否發布", field: "enable"},
        ];

        // let the grid know which columns and what data to use
        var gridOptions = {
            columnDefs: columnDefs,
            rowData: null,
            enableColResize: true,
            rowSelection: 'single',
        };
 function loadData(month) {
            $.get('/xdmin/product/json',{
				pname:$('#pname').val()
			},function (data) {
                    gridOptions.api.setRowData(data);
                });
        }
        // wait for the document to be loaded, otherwise ag-Grid will not find the div in the document.
        document.addEventListener("DOMContentLoaded", function() {
            var eGridDiv = document.querySelector('#myGrid');
            new agGrid.Grid(eGridDiv, gridOptions);
            $.get('/xdmin/product/json',
                function (data) {
                    gridOptions.api.setRowData(data);
                });
        });
        function addNewData() {
            document.location.href="/xdmin/product/edit/-1";
        }
        function deleteData() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                if(confirm("確定要刪除該筆資料?")){
                    $.post('/xdmin/product/del',{_token:_token,id:row[0].productID},
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
                document.location.href="/xdmin/product/edit/"+row[0].productID;
            } else {
                alert("請先選擇相對作業內容");
            }
        }
    </script>
@endsection

@section('css')
    <link href="/xdmin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/xdmin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection
@extends('xdmin.layouts.main')