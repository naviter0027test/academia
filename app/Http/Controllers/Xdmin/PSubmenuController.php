<?php
namespace App\Http\Controllers\xdmin;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\xdmin\User;
use Storage;
use Session;
use App\Models\PSubmenu;
class PSubmenuController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $data = PSubmenu::get();
        return view('xdmin/p_submenu.list',["data"=>$data]);
    }
    public function getJson() {
        $data = PSubmenu::get();
        return response()->json($data);
    }

    public function edit(Request $request,$id) {
        if($id == -1) {
            $data =  new PSubmenu();
        } else {
            $data = PSubmenu::where('id','=',$id)->first();
        }
        return view('xdmin/p_submenu.edit',["data"=>$data]);
    }
    public function del(Request $request) {
        PSubmenu::where('id','=',$request->input('id'))->delete();
//		NewsClass::where('news_id','=',$request->input('id'))->delete();
    }
    public function save(Request $request){

        if($request->input('id') == -1) {
            $data =  new PSubmenu();
        } else {
            $data = PSubmenu::where('id','=',$request->input('id'))->first();
        }
        $data->title = $request->input('title');
        $data->weights = $request->input('weights');
        $data->save();
        $this->showMessage1('資料更新成功','/xdmin/psubmenu');
    }
}