<?php
namespace App\Http\Controllers\xdmin;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\xdmin\User;
use Storage;
use Session;
use App\Models\xdmin\list1;
class List1Controller extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function getJson($type="") {
        if(empty($type)) {
            $data = list1::get();
        } else {
            $data = list1::where('category','=',$type)->orderBy('weights', 'desc')->orderBy('id', 'desc')->get();
        }
        return response()->json($data);
    }
    public function get($type="") {
        if(empty($type)) {
            $data = list1::get();
        } else {
            $data = list1::where('category','=',$type)->get();
        }
        return view('xdmin/list1.list',["data"=>$data,'type'=>$type]);
    }
    public function edit(Request $request,$type,$id) {
        $list = new list1();
        if($id == -1) {
            $data =  $list;
        } else {
            $data = $list->findById($id);
        }
        return view('xdmin/list1.edit',["data"=>$data,'type'=>$type]);
    }
    public function del(Request $request) {
        list1::where('id','=',$request->input('id'))->delete();
    }
    public function save(Request $request){
        if($request->input('id') == -1) {
            $data = new list1();
        } else {
            $list = new list1();
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
		$data->enable = $request->input('enable','N');
		$data->category =$request->input('category');
		$data->release_date =$request->input('release_date');
		$data->top = $request->input('top','N');
        $data->education = $request->input('education','N');
        $data->recommend = $request->input('recommend','N');
        $data->save();
        $this->showMessage1('資料更新成功','/xdmin/list1/'.$request->input('category').'/edit/'.$data->id);
    }
}