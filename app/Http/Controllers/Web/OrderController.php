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
                        if(isset($data1->isTake))
                            $data[$i]->isTake = $data1->isTake;
                        else
                            $data[$i]->isTake = 0;
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
        $AuthResURL="https://academia.nmmba.gov.tw/order/step3/".$lidm;
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
        //echo "<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>";
        //echo "<meta content='application/x-www-form-urlencoded; charset=UTF-8' http-equiv='Content-Type'/>";
        $oinfo = OrderInfo::where('lidm','=',$lidm)->first();
        //echo $request->method(). "<br />\n";
        //print_r($request->all());
        $EncRes = $request->input('URLResEnc');
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
                $oo = OnlineOrders::where('code', '=', $lidm)->first();
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
                    $tmpOod = OnlineOrdersDetail::where('CODE', '=', $lidm)->first();
                    if(isset($tmpOod->CODE))
                        break;
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

    public function creditSample() {
        include_once "auth_mpi_mac.php";
        $EncRes=
        //"AA4E5002AEEBC4E400B75942F67E8B216FE1E5137F52A943A8762B443F3C156F8227FB7D8D51C99FBD2A245A2F10D869A56B2F0D4BFAB6650B90D6DD564F4DAA7DAF180DEA56E1C41C68D6D908C4BFFDBB7C3F752228E16DCF04FB309038A2BC2A47A045118F753641086F915BFB704AB59AE2D522F6F0041FEE2EAD42DA75F306C40B6B7A728C7F7D081DF394900B299D536796965BE375EFC7CC2F0FF98199A0D233A67E6D7B81EBBA38883A7C288D6E2633775D2E33497429BB5E699DB4CD3C50981E0081CD80BB88C9E4960D611B356F8929F8B9CF78BCDACC94588C3D5DF3B04AC78866A56E8ACE0EE75C6E332DDF9DBC0FB82C90E48E94E6047F96DE7E76B09CFFA335527D939785B5B73F7DEAE5573AB39AB371826E93F95ED9CE7CE1E562A4453F995B5D965AA8BD0612F6FAC447034F96B5D42FD61E2BE8FA4D03DEA242BB66ED0129ACE4AE3C0B2D3A97CAA5414F89073FF293A8824A0112E99538A9370D1D4031A7409D740BB1383B17F3BF7514E55A7145A4";
            "344F5B074BCB12E82FAEFE535B5FCC445F6C43DB180928531A34811B829C809D5AD3485F50C22DC3148B51321C7D528B90C979B2A2CB4D4B079E3C786202161DB859CE6A3CD62A7C87317C5F5219AE6851C0C01AFC97C6502B6CBE435FFBF85A87FF85DACAFD4B7483ED777DA8F703E624E5FA24A2D11309C118D7AA1BD3A7E2F815A669B374598F05AB6D50C97D841C6AB885527D28866C7364541924EB0645784CB887679794F4412AC0EB6BB80E19554B133813AB2A7C0770D8416C5BACA292E98D7FBEEABA8C7612F8BAF56DB33B5BD2C4B7BE1ECC3003F18FAD011D0C91079DAD8330227C6C0A44A9C15EE1C73A291734FA22928B3FC87AF1DF6FB467F2659173EB74AF050A"; // 回傳的密文，請參考3.8特店網站設定AuthResURL(加密專用)取得URLResEnc
            $Key="123456789012345678901234";
            //$Key = $this->Key;
        $debug="0";
        //$debug='1';
        $EncArray=gendecrypt($EncRes,$Key,$debug);
        $MACString='';
        $URLEnc='';

            echo "<BR>\n";
        foreach($EncArray AS $name => $val){
            echo $name ."=>". urlencode(trim($val,"\x00..\x08")) ."<br />\n";
        }
        echo "<br />";
        $status = isset($EncArray['status']) ? $EncArray['status'] : "";
        $errCode = isset($EncArray['errcode']) ? $EncArray['errcode'] : "";
        $authCode = isset($EncArray['authcode']) ? $EncArray['authcode'] : "";
        $authAmt = isset($EncArray['authamt']) ? $EncArray['authamt'] : "";
        $lidm = isset($EncArray['lidm']) ? $EncArray['lidm'] : "";
        $OffsetAmt = isset($EncArray['offsetamt']) ? $EncArray['offsetamt'] : "";
        $OriginalAmt = isset($EncArray['originalamt']) ? $EncArray['originalamt'] : "";
        $UtilizedPoint = isset($EncArray['utilizedpoint']) ? $EncArray['utilizedpoint'] : "";
        $Option = isset($EncArray['numberofpay']) ? $EncArray['numberofpay'] : "";
        //紅利交易時請帶入prodcode
        //$Option = isset($EncArray['prodcode']) ? $EncArray['prodcode'] : "";
        $Last4digitPAN = isset($EncArray['last4digitpan']) ? $EncArray['last4digitpan'] : "";
        $pidResult= isset($EncArray['pidResult']) ? $EncArray['pidResult'] : "";
        $CardNumber = isset($EncArray['CardNumber']) ? $EncArray['CardNumber'] : "";
        $MACString = 

        auth_out_mac($status,$errCode,$authCode,$authAmt,$lidm,$OffsetAmt,$OriginalAmt,$UtilizedPoint,$Option,
        $Last4digitPAN,$Key,$debug);

        //if ($MACString == $EncArray['outmac']), then the result is right!
    }
}
