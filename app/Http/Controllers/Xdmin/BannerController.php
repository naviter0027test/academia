<?php
namespace App\Http\Controllers\Xdmin;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Xdmin\User;
use Storage;
use Session;
use App\Models\Xdmin\banner;
class BannerController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function get() {
        $data = banner::where('id','=',1)->first();
        return view('xdmin/banner.edit',["data"=>$data]);
    }
    public function save(Request $request){

        $data = banner::where('id','=',$request->input('dataId'))->first();
        $data->img1 = $request->input('img1');
        $data->img2 = $request->input('img2');
        $data->img3 = $request->input('img3');
        $data->img4 = $request->input('img4');
        $data->img5 = $request->input('img5');
        $data->img6 = $request->input('img6');
        $data->link1 = $request->input('link1');
        $data->link2 = $request->input('link2');
        $data->link3 = $request->input('link3');
        $data->link4 = $request->input('link4');
        $data->link5 = $request->input('link5');
        $data->link6 = $request->input('link6');
        $data->save();
        $this->showMessage1('資料更新成功','/xdmin/banner');
    }
}