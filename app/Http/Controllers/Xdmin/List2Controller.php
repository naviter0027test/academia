<?php
namespace App\Http\Controllers\xdmin;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\xdmin\User;
use Storage;
use Session;
use App\Models\xdmin\list2;
class List2Controller extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function getJson($type="") {
        if(empty($type)) {
            $data = list2::get();
        } else {
            $data = list2::where('category','=',$type)->orderBy('weights', 'desc')->orderBy('id', 'desc')->get();
        }
        return response()->json($data);
    }
    public function get($type="") {
        if(empty($type)) {
            $data = list2::get();
        } else {
            $data = list2::where('category','=',$type)->get();
        }
        return view('xdmin/list2.list',["data"=>$data,'type'=>$type]);
    }
    public function edit(Request $request,$type,$id) {
        $list = new list2();
        if($id == -1) {
            $data =  $list;
        } else {
            $data = $list->findById($id);
        }
        return view('xdmin/list2.edit',["data"=>$data,'type'=>$type]);
    }
    public function del(Request $request) {
        list2::where('id','=',$request->input('id'))->delete();
    }
    public function save(Request $request){
        if($request->input('id') == -1) {
            $data = new list2();
        } else {
            $list = new list2();
            $data = $list->findById($request->input('id'));
        }
        $data->img1 = $request->input('img1');
        $data->title_zh = $request->input('title_zh');
        $data->title_kh = $request->input('title_kh');
        $data->title_en = $request->input('title_en');
        $data->info_zh = $request->input('info_zh');
        $data->info_kh = $request->input('info_kh');
        $data->info_en = $request->input('info_en');
        $data->content_zh = $request->input('content_zh');
        $data->content_kh = $request->input('content_kh');
        $data->content_en = $request->input('content_en');
		$data->weights = $request->input('weights');
		$data->category =$request->input('category');
		$data->enable = $request->input('enable','N');
		$data->release_date =$request->input('release_date');
		$data->top = $request->input('top','N');
        $data->education = $request->input('education','N');
        $data->recommend = $request->input('recommend','N');
        $data->save();
        $this->showMessage1('資料更新成功','/xdmin/list2/'.$request->input('category').'/edit/'.$data->id);
    }
}