<?php
namespace App\Http\Controllers\xdmin;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\PageSetting;
use Storage;
use Session;
use DB;

class PageSettingController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $data = DB::table('page_setting')->where('id', '=', 1)->first();

        return view('xdmin/page_setting.edit', ["data" => $data]);
    }

    public function save(Request $request)
    {

        $data = PageSetting::where('id', '=', 1)->first();
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->address = $request->input('address');
        $data->address_en = $request->input('address_en');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->save();
        $this->showMessage1('資料更新成功', '/xdmin/pageSetting');
    }
}