<?php
namespace App\Http\Controllers\Xdmin;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductGroupData;
use App\Models\ProductData;
use App\Models\PSubmenu;
use App\Models\PClass;
use Storage;
use Session;
use DB;
use App\Models\ProductImg;
class ProductController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //  $data = Product::get();
        return view('xdmin/product.list');
    }

    public function getJson(Request $request)
    {
		$data = ProductData::where('IsUse', '=', '1');
		if($request->input('pname')) {
			$data = $data->where('productName','like','%'.$request->input('pname').'%');	
		}
		$data = $data->orderBy('w_weights','desc');
        $data = $data->get();
        return response()->json($data);
    }
    public function pi(Request $request, $id) {
        $subData = ProductImg::where('productID', '=', $id)->get();
        return response()->json($subData);
    }
    public function edit(Request $request, $id)
    {
        $data = ProductData::where('productID', '=', $id)->first();
        $nc = PClass::where('product_id', '=', $id)->get();
		
        foreach ($nc as $item) {
            $temp [] = $item->p_submenu_id;
        }
        if (!isset($temp)) {
            $temp = array();
        }
        $submenu = PSubmenu::get();

//        if($p->updated_at < $data->modDatetime) {
//            $groupData = ProductGroupData::where('productID','=',$data->productID)
//                ->select('productID','color')
//               ->groupBy('productID','color')
//                ->get();
//            ProductDetail::where('productID','=',$p->productID)->delete();
//            foreach ($groupData as $tiem) {
//                if($tiem->color != '' ||  $tiem->color != '均一') {
//                    $pd = new ProductDetail();
//                    $pd->productID = $tiem->productID;
//                    $pd->color_name = $tiem->color;
//                    $pd->save();
//                }
//            }
//        }
//        $pgd = ProductDetail::where('productID','=',$data->productID)
//            ->get();

        return view('xdmin/product.edit', ["data" => $data, 'smenu' => $submenu, 'nc' => $temp]);
    }

    public function del(Request $request)
    {
        Product::where('id', '=', $request->input('id'))->delete();
    }

    public function save(Request $request)
    {
        $data = ProductData::where('productID','=',$request->input('dataId'))->first();
        PClass::where('product_id', '=', $request->input('dataId'))->delete();
        $data->w_img = $request->input('w_img');
        $data->w_content = $request->input('w_content');
        $data->w_weights = $request->input('w_weights');
		$data->enable = $request->input('enable','N');
        $data->save();
        if ($request->input('my-select')) {
            foreach ($request->input('my-select') as $item) {
                $n = new PClass();
                $n->p_submenu_id = $item;
                $n->product_id = $data->productID;
                $n->save();
            }
        }
        $this->showMessage1('資料更新成功', '/xdmin/product');
    }
    public function pi_add(Request $request){
        $data = new ProductImg();
        $data->productID = $request->input('productID');
        $data->w_img = $request->input('w_img');
        $data->save();
    }
    public function pi_edit(Request $request){
        $data = ProductImg::where('id','=',$request->input('dataId'))->first();
        $data->w_img = $request->input('w_img');
        $data->save();
    }
    public function pi_del(Request $request){
        ProductImg::where('id','=',$request->input('dataId'))->delete();
    }
}