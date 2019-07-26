<?php
namespace App\Http\Controllers\Web;
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
use App\Models\PSubmenu;
use Cart;
use DB;
use App\Models\OnlineOrders;
use App\Models\OnlineOrdersDetail;
//include "auth_mpi_mac.php";
use App\Models\OrderInfo;
use App\Models\OrderDetail;
use Mail;
use App\Mail\OrderMail;
class OrderController extends Controller
{
	var $Key="QH3XV3xvjSOcMTjRNLjHLLeW";
	var $debug="0";
    function __construct()
    {
        parent::__construct();
    }
    public function index(Request $request) {
        $data = OrderInfo::where('email1','=',session('email'))->where('status','=','0')->where('errcode','=','00')->get();
		for($i=0;$i < count($data);$i++){
			$data1 = OnlineOrders::where('CODE','=',$data[$i]->lidm)->first();
			$data[$i]->isTake = $data1->isTake;
		}
		$submenu = PSubmenu::orderBy('weights','desc')->get();
        return view('web/order.index',['data'=>$data,'submenu' => $submenu]);
    }
    public function newAdd(Request $request){
		include_once "auth_mpi_mac.php";
        $now = date("Y-m-d H:i:s");
        $data = new OrderInfo();
        $data->name1 = $request->input('name1');
        $data->email1 = $request->input('email1');
        $data->mobile1 = $request->input('mobile1');
        $data->addrress1 = $request->input('addrress1');
        $data->time1 = $request->input('time1');

        $data->name2 = $request->input('name2');
        $data->email2 = $request->input('email2');
        $data->mobile2 = $request->input('mobile2');
        $data->addrress2 = $request->input('addrress2');
        $data->time2 = $request->input('time2');
		$data->DATE = Date('Y-m-d',strtotime($now));
        $data->TIME = Date('H:i',strtotime($now));
        $data->save();
        $total = 0;
        $totalAmount=0;
        foreach (Cart::content() as $item) {
            $cdata = new OrderDetail();
            $cdata->order_info_id = $data->id;
            $cdata->productID = $item->options->productID;
            $cdata->amount = $item->options->amount;
            $totalAmount += $cdata->amount;
            $cdata->price = $item->options->price;
            $cdata->size = $item->options->size;
            $cdata->color = $item->options->color;
            $cdata->productName = $item->options->productName;
            $cdata->save();
            $total += $item->options->price*$item->options->amount;
        }
        if($total < 1500) {
            $total+=80;
        }
        $data->total = $data->totalCash= $total;
        $data->save();

		$lidm=Date('mdHis',strtotime($now)).$data->id;
		$data->lidm = $lidm;
		$data->save();
if($request->input('ot') == 'atm'){
	$data->status = '0';
			$data->errcode = '00';
			$data->errdesc = '';
			$data->save();
			$od = OrderDetail::where('order_info_id','=',$data->id)->get();
			$oo = new OnlineOrders();
			$oo->CODE = $data->lidm;
			$oo->DATE = $data->DATE;
			$oo->TIME = $data->TIME;
			$oo->note = 'ATM';
			$oo->totalAmount=$data->totalAmount;
			$oo->totalCash=$data->total;
			$oo->consignee=$data->name2;
			$oo->tel=$data->mobile2;
			$oo->address=$data->addrress2;
			$oo->save();
				foreach ($od as $odItem) {
					$ood = new OnlineOrdersDetail();
					$ood->CODE = $lidm;
					$ood->items = $odItem->id;
					$ood->productID = $odItem->productID;
					$ood->price = $odItem->price;
					$ood->amount = $odItem->amount;
					$ood->subTotal = $odItem->amount * $odItem->price;
					$ood->save();
				}
			Mail::to(session('email'))->send(new OrderMail($request,$od,$lidm));
			 Cart::destroy();
	return $this->stepATM($lidm);	
} else {
 $MerchantID="8226430000406";
        $TerminalID="99840490";
       
        $purchAmt=$total;
//	    $purchAmt=1;
        $txType="0";
        $Option="1";
        $MerchantName=mb_convert_encoding("國立海洋生物博物館產學合作中心",'big5');
        $AuthResURL="http://academia.nmmba.gov.tw/order/step3/".$lidm;
        $OrderDetail="正式訂單";
        $AutoCap="1";
        $Customize="1";
        $MACString=auth_in_mac($MerchantID,$TerminalID,$lidm,$purchAmt,$txType,$Option,$this->Key,$MerchantName,$AuthResURL,$OrderDetail,$AutoCap,$Customize,$this->debug);
        $URLEnc=get_auth_urlenc($MerchantID,$TerminalID,$lidm,$purchAmt,$txType,$Option,$this->Key,$MerchantName,$AuthResURL,$OrderDetail,$AutoCap,$Customize,$MACString,$this->debug);
       // $data->lidm = $lidm;
       // $data->save();

	//2019-07-24 add code start
	$oo = new OnlineOrders();
	$oo->CODE = $lidm;
	$oo->DATE = $data->DATE;
	$oo->TIME = $data->TIME;
	$oo->note = '信用卡付款';
	$oo->totalAmount=$data->totalAmount;
	$oo->totalCash=$data->total;
	$oo->consignee=$data->name2;
	$oo->tel=$data->mobile2;
	$oo->address=$data->addrress2;
	$oo->save();
	//2019-07-24 add code end

        return view('web/order.credit',['MACString'=>$MACString,'URLEnc'=>$URLEnc]);	
}
       
    }
	public function stepATM($lidm){
		$oinfo = OrderInfo::where('lidm','=',$lidm)->first();
		$od = OrderDetail::where('order_info_id','=',$oinfo->id)->get();
		$submenu = PSubmenu::orderBy('weights','desc')->get();
		return view('web/order.stepATM',['data'=>$oinfo,'detail'=>$od,'submenu' => $submenu]);
    }
	public function step3(Request $request,$lidm){
		include_once "auth_mpi_mac.php";
		echo "<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>";
		$EncRes = $request->input('URLResEnc');
		$oinfo = OrderInfo::where('lidm','=',$lidm)->first();
		if(!$EncRes && !$oinfo) {
			 $this->showMessage1('無效操作','/');
			 return ;
		}
		$od = OrderDetail::where('order_info_id','=',$oinfo->id)->get();
		if($EncRes) {
			$EncArray=gendecrypt($EncRes,$this->Key,$this->debug);
			foreach($EncArray AS $name => $val){
				$temp[$name] = mb_convert_encoding(urlencode(trim($val,"\x00..\x08")),'UTF-8','ASCII');
			}
			$oinfo->status = $temp['status'];
			$oinfo->errcode = $temp['errcode'];
			$oinfo->errdesc = $temp['errdesc'];
			$oinfo->save();			
			if($temp['status'] == '0' && $temp['errcode'] == '00'){
			$oo = OnlineOrders::where('lidm', '=', $lidm)->first();
			$oo->CODE = $oinfo->lidm;
			$oo->DATE = $oinfo->DATE;
			$oo->TIME = $oinfo->TIME;
			$oo->note = '信用卡付款';
			$oo->totalAmount=$oinfo->totalAmount;
			$oo->totalCash=$oinfo->total;
			$oo->consignee=$oinfo->name2;
			$oo->tel=$oinfo->mobile2;
			$oo->address=$oinfo->addrress2;
			$oo->save();
				foreach ($od as $odItem) {
					$ood = new OnlineOrdersDetail();
					$ood->CODE = $lidm;
					$ood->items = $odItem->id;
					$ood->productID = $odItem->productID;
					$ood->price = $odItem->price;
					$ood->amount = $odItem->amount;
					$ood->subTotal = $odItem->amount * $odItem->price;
					$ood->save();
				}
				Mail::to(session('email'))->send(new OrderMail($request,$od,$lidm));
			}
		}
	
	
        $submenu = PSubmenu::orderBy('weights','desc')->get();
		 Cart::destroy();
		return view('web/order.step3',['data'=>$oinfo,'detail'=>$od,'submenu' => $submenu]);
    }

}
