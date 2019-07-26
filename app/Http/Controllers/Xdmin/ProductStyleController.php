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
use App\Models\ProductStyle;

class ProductStyleController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $groupData = ProductGroupData::
        select('color')
            ->groupBy('color')
            ->get();
        foreach ($groupData as $item) {
            if (empty($item->color)) {
                continue;
            }
            $ps = ProductStyle::where('color_name', '=', $item->color)->first();
            if (empty($ps)) {
                $ps = new ProductStyle();
                $ps->color_name = $item->color;
                $ps->save();
            }
        }
        $psData = ProductStyle::get();
        return view('xdmin/product_style.index',['data'=>$psData]);
    }

    public function save(Request $request)
    {
        foreach ($request->input('color') as $key=>$value) {
            $ps = ProductStyle::where('color_name', '=', $key)->first();
            $ps->w_color = $value;
            $ps->save();
        }
        $this->showMessage1('更新成功','/xdmin/productStyle');
    }
}