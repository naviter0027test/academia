<?php
namespace App\Http\Controllers\Web;
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

    public function f_index(Request $request) {

        $data = News::where('enable','=','Y')
            ->orderBy('weights','desc')
            ->orderBy('post_date','desc')
            ->paginate(12);
        return view('web/news.index',['news'=>$data]);
    }
    public function f_detail(Request $request,$id) {
        $data = News::where('id','=',$id)->first();
        return view('web/news.detail',["data"=>$data]);
    }

}