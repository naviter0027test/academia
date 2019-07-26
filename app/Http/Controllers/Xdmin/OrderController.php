<?php
namespace App\Http\Controllers\Xdmin;
use App\Http\Controllers\Controller;
use App\Models\ProductData;
use App\Models\ProductGroupData;
use App\Models\Submenu;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\NewsClass;
use Storage;
use Session;
use App\Models\News;
use Cart;
use DB;
//require_once "auth_mpi_mac.php";
use App\Models\OrderInfo;
use App\Models\OrderDetail;
use App\Models\OnlineOrders;
class OrderController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function f_index(Request $request){
        $data = OrderInfo::where('email1','=',session('email'))->get();
		//$data1 = OnlineOrders::where('CODE','=',$data->lidm)->first();
        return view('xdmin/order.index',['data'=>$data]);
    }
    public function f_json(Request $request) {
        $data = OnlineOrders::get();
        return response()->json($data);
    }
    public function f_detail(Request $request,$code){
        $data = OnlineOrders::where('CODE','=',$code)->first();
        return view('xdmin/order.detail',['data'=>$data]);
    }
    public function f_detail_json(Request $request,$code) {
        $data = OrderDetail::
        leftJoin('order_info','order_info.id','=','order_detail.order_info_id')
            ->select('order_detail.*')
        ->where('order_info.lidm','=',$code)->get();
        return response()->json($data);
    }
}