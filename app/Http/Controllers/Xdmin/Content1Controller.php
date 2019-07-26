<?php
namespace App\Http\Controllers\Xdmin;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Xdmin\User;
use Storage;
use Session;
use GuzzleHttp\Client;
use \Firebase\JWT\JWT;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Xdmin\content1;
class Content1Controller extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function edit(Request $request,$id) {
        $content = new content1();
        $data = $content->getContent($id);
        return view('xdmin/content1.edit',["data"=>$data]);
    }
    public function save(Request $request){		
        $content = new content1();
        $data = $content->getContent($request->input('id'));
        $data->content_zh = $request->input('content_zh');
        $data->content_kh = $request->input('content_kh');
        $data->content_en = $request->input('content_en');
        $data->save();
        $this->showMessage1('資料更新成功','/xdmin/content1/'.$data->id);
    }
}