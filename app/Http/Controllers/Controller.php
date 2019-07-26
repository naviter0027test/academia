<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Storage;
use App\Models\WebCount;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct() {
//		Storage::disk('local')->put('file.txt', 'Contents');
		$webCount = WebCount::where('id','=',1)->first();
		//dd($webCount);
        $pageSetting = DB::table('page_setting')->where('id','=',1)->first();
        $banner = DB::table('banner')->where('id','=',1)->first();
        view()->share('page',array(
            'page_setting'=>$pageSetting,
            'banner'=>$banner,
			'webCount'=>$webCount->counts
        ));
    }
    protected function toUrl($location)
    {
        echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        echo "<script charset='utf-8' type='text/javascript'>";

        echo "parent.location.href='" . $location . "';" . chr(10);
        echo "</script>";
    }
    protected function showMessage1($message, $location)
    {
        echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        echo "<script charset='utf-8' type='text/javascript'>";
        echo "alert('" . $message . "');";
        echo "parent.location.href='" . $location . "';" . chr(10);
        echo "</script>";
    }
    protected function showMessage2($message)
    {
        echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        echo "<script charset='utf-8' type='text/javascript'>";
        echo "alert('" . $message . "');";
        echo "</script>";
    }
}
