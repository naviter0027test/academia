<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Storage;
use Session;
use DB;
use Excel;
use App\Models\Xdmin\content1;
use App\Models\ProductData;
use App\Models\ProductGroupData;
use App\Models\ProductImg;
use App\Models\ProductStyle;
use App\Models\WebCount;
use Mail;
use App\Mail\IndexMail;
use App\Mail\forgetMail;
use App\Models\PSubmenu;
use App\Models\PClass;
use App\Models\ProductOnlineStorage;
use App\Models\Xdmin\User;
class IndexController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
		if(!session('webCount')) {
			$webCount = WebCount::where('id','=',1)->first();
			$webCount->counts+=1;
			$webCount->save();
			session(['webCount'=>1]);
			//Storage::disk('local')->put('webCount.txt', $webCount);
		}
        return view('web.index');
    }
    public function content1(Request $request,$id) {
        $content = new content1();
        $data = $content->getContent($id);
        return view('web/content1',["data"=>$data]);
    }
    public function cooperation(Request $request,$id) {
        $content = new content1();
        $data = $content->getContent($id);
        return view('web/cooperation',["data"=>$data]);
    }
	public function contact(Request $request,$pid=null)
    {
        if(!empty($pid)) {
            $data = ProductData::where('productID','=',$pid)->first();
        } else {
            $data = null;
        }
        return view('web.contact',['data'=>$data]);
    }
	public function searchP(Request $request,$name){
//		$subMain = PSubmenu::orderBy('weights','desc')->first();
		$subMenu = PSubmenu::orderBy('weights','desc')->get();
        $data = ProductData::where('IsUse', '=', '1')->where('productName','like','%'.$name.'%')->where('enable', '=', 'Y')->get();
        return view('web.productList',['p_list'=>$data,'submenu'=>$subMenu,'search'=>true]);
	}
    public function product(Request $request,$id)
    {
		$subId = $request->input('subId');
		if(empty($subId)) {
			$subMain = PSubmenu::orderBy('weights','desc')->first();
		} else {
			$subMain = PSubmenu::where('id','=',$subId)->first();			
		}
		$subMenu = PSubmenu::orderBy('weights','desc')->get();
		
        $data = ProductData::where('productID', '=', $id)->first();
		$dataCount = ProductOnlineStorage::where('productID', '=', $id)->first();
        if($dataCount) {
			$dataCount = $dataCount->amount;
		} else {
			$dataCount = 0;
		}
		$subData = ProductGroupData::where('productID', '=', $id)
            ->select('productID','color')
            ->groupBy('productID','color')->get();
        $subData1 = ProductGroupData::where('productID', '=', $id)
            ->select('productID','size')
            ->groupBy('productID','size')
           // ->orderByRaw('CAST(size AS int)')
            ->get();
			if(isset($subData[0]) && $subData[0]->color == '均一') {
				$useColor = false;
			} else {
				$useColor = true;
			}
			if(isset($subData1[0]) && $subData1[0]->size == '均一') {
				$useSize = false;
			} else {
				$useSize = true;
			}
		
        $pm = ProductImg::where('productID', '=', $id)->orderBy('id')->get();
        $ps = ProductStyle::get();
        return view('web.product',['data'=>$data,'subData'=>$subData,'subData1'=>$subData1,'pm'=>$pm,'ps'=>$ps,'submenu'=>$subMenu,'submain'=>$subMain,'useColor'=>$useColor,'useSize'=>$useSize,'dataCount'=>$dataCount]);
    }
	public function productList(Request $request)
    {
		//dd($request->input('subId'));
		$subId = $request->input('subId');
		if(empty($subId)) {
			$subMain = PSubmenu::orderBy('weights','desc')->first();
		} else {
			$subMain = PSubmenu::where('id','=',$subId)->first();			
		}
		$pclass = PClass::where('p_submenu_id','=',$subMain->id)->get();
		$temp = array();
		foreach ($pclass as $item) {
			$temp [] = $item->product_id;
		}
		
		$subMenu = PSubmenu::orderBy('weights','desc')->get();
        $data = ProductData::where('IsUse', '=', '1')->where('enable', '=', 'Y')->whereIn('productID', $temp)->get();
        return view('web.productList',['p_list'=>$data,'submenu'=>$subMenu,'submain'=>$subMain]);
    }
    public function introduce(Request $request)
    {
        return view('web.introduce');
    }
 public function test2(Request $request)
    {
		dd(1);
        echo phpinfo();
    }
    public function aboutus(Request $request)
    {
        return view('web.aboutus');
    }

    public function organization(Request $request)
    {
        return view('web.organization');
    }

    public function service(Request $request)
    {
        return view('web.service');
    }
    public function sitemap(Request $request){
         return view('web.sitemap');
    }
    public function login(Request $request){
        return view('web.login');
    }
    public function checkout1(Request $request){
		$subMenu = PSubmenu::orderBy('weights','desc')->get();
	return view('web.checkout1',['submenu'=>$subMenu]);
    }
    public function checkout2(Request $request){
		$subMenu = PSubmenu::orderBy('weights','desc')->get();
        return view('web.checkout2',['submenu'=>$subMenu]);
    }
    public function mailSend(Request $request) {
        //dd($request->input('message'));
        $page  = DB::table('page_setting')->where('id', '=',1)->first();
        Mail::to($page->email)->send(new IndexMail($request));
        $this->showMessage1('信件已寄出，我們會盡快回覆您','/');
    }
	public function forgetMail(Request $request) {
		$data = User::where('email','=', $request->input('email'))
            ->first();
			if($data){
				 Mail::to($data->email)->send(new forgetMail($data));
				 return '密碼已寄出，請到原始信箱收取密碼';
			} else {
				return '帳號無效';
			}
      
    }
}
