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
                        <i class="fa fa-gift"></i>{{$data->product_name}} 產品內容編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/product" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="dataId" value="{{$data->productID or -1}}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">產品名稱</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" readonly name="productName" value="{{$data->productName}}">
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-2">列表圖 700*467</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="w_img" name="w_img" value="{{$data->w_img}}">
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" onclick="openFile();" class="btn blue">
                                        <i class="fa fa-check"></i> 挑選</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">商品介紹</label>
                                <div class="col-md-10">
                                    <textarea class="ckeditor form-control" name="w_content">{{$data->w_content}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">商品種類
							</label>
                                <div class="col-md-8">
                                    <div id="myGrid" style="height: 400px;" class="ag-blue"></div>
                                </div>
                            	
								<div class="col-md-2">
								１、圖片類型限制：ｊｐｇ／ｐｎｇ檔<br/>
								２、尺Ｗ１４４０ Ｘ Ｈ８００，
								</div>
							</div>
                            <div class="form-group">
                                <label class="control-label col-md-2">商品種類操作</label>
                                <div class="col-md-10">
                                    <a href="javascript:;" onclick="openFile1();" class="btn dark">
                                        <i class="fa fa-check"></i> 新增</a>
                                    <a href="javascript:;" onclick="openFile2();" class="btn dark">
                                        <i class="fa fa-check"></i> 修改</a>
                                    <a href="javascript:;" onclick="cleanFile2();" class="btn red">
                                        <i class="fa fa-close"></i> 刪除</a>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">分類選擇</label>
                                <div class="col-md-4">
                                    <select multiple="multiple" class="form-control" id="my-select" name="my-select[]">
                                        @foreach($smenu as $item)
                                            <option value='{{$item->id}}' <?php if(in_array($item->id, $nc)) echo 'selected';?>>{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">排序權重</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="w_weights" value="{{$data->w_weights}}">
                                </div>
                             </div>
  <div class="form-group">
                               <label class="control-label col-md-2">是否發佈</label>
 <div class="col-md-3">
                                    <input type="checkbox" class="make-switch form-control" name="enable" value="Y" <?php if($data->enable == 'Y') echo 'checked'?> data-on-color="success" data-off-color="warning">
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
    <script src="/ag-grid/dist/ag-grid.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/xdmin/timepicker/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/xdmin/timepicker/i18n/jquery-ui-timepicker-zh-TW.js"></script>
    <script type="text/javascript" src="/xdmin/timepicker/jquery-ui-sliderAccess.js"></script>
    <script src="/xdmin/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="/magnific/dist/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="/xdmin/mselect/js/jquery.multi-select.js" type="text/javascript"></script>

    <script src="/xdmin/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/xdmin/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/xdmin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script>
        CKEDITOR.config.removePlugins = 'forms';
        CKEDITOR.config.height = '500px';
        CKEDITOR.config.filebrowserBrowseUrl = '/xdmin/ckFileBrowserBrowse';
    </script>
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
          //  {headerName: 'subProductID', field: 'subProductID', hide: true},
            {headerName: "樣式圖",width:650, field: "w_img"},
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
            loadData();
        });
        function loadData() {
            $.get('/xdmin/productImg/{{$data->productID}}',
                function (data) {

                    gridOptions.api.setRowData(data);
                });
        }
        function selectFile(file) {
            $('#w_img').val(file.url);
            $.magnificPopup.close();
        }
        function selectFile1(file) {
            $.post('/xdmin/productImg/add',{
                w_img:file.url,
                productID:'{{$data->productID}}'
            }, function (data) {
                loadData();
            });
            $.magnificPopup.close();
        }
        function selectFile2(file) {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                $.post('/xdmin/productImg/edit',{
                    w_img:file.url,
                    dataId:row[0].id
                }, function (data) {
                    loadData();
                });
            }
            $.magnificPopup.close();
        }
        function openFile1() {
            $.magnificPopup.open({
                items: {
                    src: '/xdmin/elfinder1/selectFile1',
                    type: 'iframe',
                },
                callbacks: {
                    close: function () {

                    }
                }
            });
        }
        function openFile2() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                $.magnificPopup.open({
                    items: {
                        src: '/xdmin/elfinder1/selectFile2',
                        type: 'iframe',
                    },
                    callbacks: {
                        close: function () {

                        }
                    }
                });
            } else {
                alert("請先選擇相對作業內容");
            }
        }
        function cleanFile2() {
            if(gridOptions.api.getSelectedRows().length  > 0) {
                var row = gridOptions.api.getSelectedRows();
                if(confirm("確定要刪除該筆資料?")){
                    $.post('/xdmin/productImg/del',{
                        dataId:row[0].id
                    }, function (data) {
                        loadData();
                    });
                }
            } else {
                alert("請先選擇相對作業內容");
            }
        }
        function openFile() {
            $.magnificPopup.open({
                items: {
                    src: '/xdmin/elfinder1/selectFile',
                    type: 'iframe',
                },
                callbacks: {
                    close: function () {

                    }
                }
            });
        }
        $(function(){
            $('.cDateTime').datetimepicker({
                timeFormat: 'HH:mm:ss',
                dateFormat: "yy-mm-dd",
                stepHour: 1,
                stepMinute: 1,
                stepSecond: 10
            });
            $('#my-select').multiSelect();
        });

    </script>
@endsection
@section('css')
    <link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.11.0/themes/hot-sneaks/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="/xdmin/timepicker/jquery-ui-timepicker-addon.css" />
    <link rel="stylesheet" href="/magnific/dist/magnific-popup.css">
    <link href="/xdmin/mselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="/xdmin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/xdmin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection
@extends('xdmin.layouts.main')