<?php
namespace App\Http\Controllers\xdmin;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\xdmin\User;
use Storage;
use Session;
use GuzzleHttp\Client;
use \Firebase\JWT\JWT;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\xdmin\Category1;
class Category1Controller extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index(Request $request,$id) {
        $category1 = new Category1();
        $data = $category1->getList($id);
        $info = $category1->getInfo($id);
        return view('xdmin/category1.index',["data"=>$data,'info'=>$info]);
    }
    public function data(Request $request,$id) {
        $category1 = new Category1();
        $data = $category1->getList($id);
        return $data;
    }
}