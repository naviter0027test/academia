<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Submenu;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\NewsClass;
use Storage;
use Session;
use App\Models\ProductGroupData;
use App\Models\ProductOnlineStorage;
class DataSearchController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function gData(Request $request) {

        $data = ProductGroupData::where('productID','=',$request->input('dataId'))
            ->where('color','=',$request->input('color'))
         //   ->orderByRaw('CAST(size AS int)')
            ->get();
        return response()->json($data);
    }
    public function gDataAmount(Request $request) {
        $data = ProductGroupData::where('productID','=',$request->input('dataId'));
		if(!empty($request->input('color')))
		{
			$data = $data->where('color','=',$request->input('color'));
		}
		if(!empty($request->input('size')))
		{
			$data = $data->where('size','=',$request->input('size'));
		}
		$data = $data->first();
        $pos = ProductOnlineStorage::where('productID','=',$data->productID)->first();
        if($pos){
            return $pos->amount;
        } else {
            return 1;
        }
    }
}