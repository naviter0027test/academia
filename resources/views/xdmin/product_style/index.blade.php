<?php
$product = '';
$p3 = "";
?>
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>商品樣式編輯</div>
                    <div class="tools">

                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="/xdmin/productStyle" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">樣式</label>
                                <div class="col-md-10">
                                    <table id="example" class="display" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>顏色</th>
                                            <th>顏色值</th>


                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>顏色</th>
                                            <th>顏色值</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        @foreach($data as $item)
                                            <tr>
                                                <td></td>
                                                <td>{{$item->color_name}}</td>
                                                <td><input type='color' name="color[{{$item->color_name}}]" value="{{$item->w_color}}"/></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
        var _token = '<?php echo csrf_token(); ?>';
        var table;

        $(document).ready(function() {
            table = $('#example').DataTable({
                "paging":   false,
                "ordering": false,
                "info":     false,
                "searching":     false,
            });



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