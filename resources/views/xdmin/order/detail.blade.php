<?php
$order = '';
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>訂單內容
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
            {headerName: "購買產品", field: "productName",width:80},
            {headerName: "尺寸", field: "size",width:90},
            {headerName: "顏色", field: "color",width:160},
            {headerName: "數量", field:"amount",width:140},
			{headerName: "價格", field: "price",width:80},
        ];

        // let the grid know which columns and what data to use
        var gridOptions = {
            columnDefs: columnDefs,
            rowData: null,
            enableColResize: true,
            rowSelection: 'single',
            onColumnResized: function(params) {
                params.api.sizeColumnsToFit();
            }
        };

        // wait for the document to be loaded, otherwise ag-Grid will not find the div in the document.
        document.addEventListener("DOMContentLoaded", function() {
            var eGridDiv = document.querySelector('#myGrid');
            new agGrid.Grid(eGridDiv, gridOptions);
            $.get('/xdmin/order/detailJson/{{$data->CODE}}',
                function (data) {
                    gridOptions.api.setRowData(data);
                });

        });
        function OrderDetail() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                document.location.href="'/order/detailJson/"+row[0].CODE;
            } else {
                alert("請先選擇相對作業內容");
            }
        }
    </script>
@endsection

@section('css')
@endsection
@extends('xdmin.layouts.main')