<?php
namespace App\Http\Controllers\Xdmin;
use App\Http\Controllers\Controller;
use App\Models\Submenu;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\NewsClass;
use Storage;
use Session;
use App\Models\News;
class NewsController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function f_json() {
        $data = News::orderBy('weights','desc')
            ->orderBy('post_date','desc')->get();
        return response()->json($data);
    }
    public function f_index() {
        $data = News::get();
        return view('xdmin/news/index',["data"=>$data]);
    }
    public function f_edit(Request $request,$id) {
        if($id == -1) {
            $data =  new News();
        } else {
            $data = News::where('id','=',$id)->first();
        }


        return view('xdmin/news.edit',["data"=>$data]);
    }
    public function f_del(Request $request) {
        News::where('id','=',$request->input('id'))->delete();
    }
    public function f_save(Request $request){

        if($request->input('dataId') == -1) {
            $data = new News();
        } else {
            $data = News::where('id','=',$request->input('dataId'))->first();
        }
        $data->title = $request->input('title');
        $data->content = $request->input('content');
		$data->weights = $request->input('weights');
        $data->post_date =$request->input('post_date');
        $data->top = $request->input('top','N');
        $data->enable = $request->input('enable','N');
        $data->save();
        $this->showMessage1('資料更新成功','/xdmin/news');
    }
}