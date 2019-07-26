<?php
namespace App\Http\Controllers\Xdmin;
use App\Http\Controllers\Controller;
use App\Models\DyDoc;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Storage;
use Session;

class DyDocController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function f_json() {
        $data = DyDoc::get();
        return response()->json($data);
    }
    public function f_index() {
        $data = DyDoc::get();
        return view('xdmin/dydoc/index',["data"=>$data]);
    }
    public function f_edit(Request $request,$id) {
        if($id == -1) {
            $data =  new DyDoc();
        } else {
            $data = DyDoc::where('id','=',$id)->first();
        }

        return view('xdmin/dydoc.edit',["data"=>$data]);
    }
    public function f_del(Request $request) {
        DyDoc::where('id','=',$request->input('id'))->delete();
    }
    public function f_save(Request $request){

        if($request->input('dataId') == -1) {
            $data = new DyDoc();
        } else {
            $data = DyDoc::where('id','=',$request->input('dataId'))->first();
        }
        $data->submenu = $request->input('submenu');
        $data->title = $request->input('title');
        $data->content = $request->input('content');
		$data->weights = $request->input('weights');
		$data->enable = $request->input('enable');
		$data->post_date = $request->input('post_date');

        $data->save();

        $this->showMessage1('資料更新成功','/xdmin/dydoc');
    }
}