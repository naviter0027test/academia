<?php
namespace App\Http\Controllers\xdmin;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\xdmin\User;
use Storage;
use Session;
use App\Models\xdmin\act;
class ActController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function get() {
        $data = act::where('id','=',1)->first();
        return view('xdmin/act.edit',["data"=>$data]);
    }
    public function save(Request $request){

        $data = act::where('id','=',$request->input('dataId'))->first();

        $data->link_zh = $request->input('link_zh');
        $data->link_kh = $request->input('link_kh');
        $data->link_en = $request->input('link_en');

        $data->save();
        $this->showMessage1('資料更新成功','/xdmin/act/');
    }
}