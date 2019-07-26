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
use Cart;
use DB;
//require_once "auth_mpi_mac.php";
class CartController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function addCart(Request $request){
		if(empty(session('email'))) {
			return '請先登入會員';
		}
        $color = $request->input('color');
        $size = $request->input('size');
        $cnumber = $request->input('cnumber');
        $dataId = $request->input('dataId');
        $pgd = ProductGroupData::where('productID','=',$dataId)
            ->where('size','=',$size)
            ->where('color','=',$color)
            ->first();
        $pd = ProductData::where('productID','=',$dataId)->first();
        if($pgd) {
            Cart::add($pgd->subProductID, $pd->productName.' '.$pgd->color.' '.$pgd->size.' X '.$cnumber,$cnumber, $pd->standardSellPrice,[
                'productID' => $pgd->subProductID,
                'productName' => $pd->productName,
                'price' => $pd->standardSellPrice,
                'amount' => $cnumber,
                'size' => $size,
                'color' => $color,
                'total' => $cnumber*$pd->standardSellPrice,
            ]);
			try {
				Cart::store(session('email'));			
			} catch(\Exception $ex){
			}
            return '商品加入成功';
        } else {
            return '請選擇顏色或尺寸/款式';
        }
    }
    public function webCartContent(Request $request){
        $temp = array();
        foreach (Cart::content() as $item) {
            $temp [] = array(
                'name' =>$item->name,
                'qty' =>$item->qty,
                'price' =>$item->subtotal,
             //   'size'=>$item->options->size
            );
        }

        return response()->json($temp);
    }
    public function carttest(Request $request) {
//        dd(Cart::content());
       // Cart::store(session('email'));
	   echo phpinfo();
    }
    public function carttestdel(Request $request) {
        Cart::destroy();
    }
    public function cartContent(Request $request) {
        //dd(Cart::content());
        return view('web/cart.content',[]);
    }
    public function cartDelItem(Request $request) {
        Cart::remove($request->input('rowId'));
		try {
			Cart::store(session('email'));			
		} catch(\Exception $ex){
		}
    }
    public function webCheckCount(Request $request){
        return response()->json(Cart::content()->count());
    }
}