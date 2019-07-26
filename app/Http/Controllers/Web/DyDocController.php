<?php
namespace App\Http\Controllers\Web;
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
    public function f_index(Request $request) {

        $data = DyDoc::where('enable','=','Y')
            ->orderBy('weights')
            ->orderBy('post_date','desc')
            ->paginate(12);
        return view('web/dydoc.index',['news'=>$data]);
    }
    public function f_detail(Request $request,$id) {
        $data = DyDoc::where('id','=',$id)->first();
        return view('web/dydoc.detail',["data"=>$data]);
    }
}