<?php
namespace App\Http\Controllers\Xdmin;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Xdmin\User;
use Storage;
use Session;
use Hash;

class UserController extends  Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function getJson(Request $request)
    {
        $data = User::orderBy('id', 'desc');
        if(!empty($request->input('uname'))) {
            $data = $data->where('name','like','%'.$request->input('uname').'%')->orWhere('email','like','%'.$request->input('uname').'%');
        }
        $data = $data->get();
        return response()->json($data);
    }

    public function index()
    {
        return view('xdmin.user.list');
    }
    public function edit(Request $request, $id)
    {
        if ($id == -1) {
            $data = new User();
        
        } else {
            $data = User::where('id', '=', $id)->first();
           
        }

        return view('xdmin.user.edit', ["data" => $data,'dataId'=>$id]);
    }
    public function del(Request $request)
    {
        User::where('id', '=', $request->input('id'))->delete();
    }

    public function change_password(Request $request)
    {

        if ($request->input('password') != $request->input('re_password')) {
            $this->showMessage1('密碼與確認密碼需相符', '/xdmin/user/edit/'.$request->input('dataId'));
        } else {
            $row = Manager::where('id', '=', $request->input('dataId'))->first();
            $row->password = Hash::make($request->input('pwd1'));
            $row->save();
            session::flush();
            $this->showMessage1('密碼修改完成', '/xdmin/user');
        }
    }
    public function change_ability(Request $request) {
        $data = User::where('id', '=', $request->input('id'))->first();
        $data->ability = json_encode(array('admin'=>$request->input('ability')));
        $data->save();
    }
    public function save_data(Request $request)
    {
        if ($request->input('dataId') == -1) {
            $data = new User();
        } else {
            $data = User::where('id', '=', $request->input('dataId'))->first();
        }



        $data->password = $request->input('password');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
		$data->gender = $request->input('gender');
		$data->birthday = $request->input('birthday');
		$data->mobile = $request->input('mobile');
		$data->enable = $request->input('enable','N');
        $data->ps = $request->input('ps');

     
        $data->save();
        $this->showMessage1('個人資料編輯成功','/xdmin/user');
    }
    public function login(Request $request)
    {

        $name = $request->input('username');
        $password  = $request->input('password');
        $row = Manager::where('username','=',$name)->first();
        if($row != null) {
            if($password == $row->password){
                $request->session()->put('user_id', $row->id);
                $request->session()->put('user', $row->nickname);
                $request->session()->put('login',true);
               


                return redirect('/xdmin/banner');
            } else {
                $this->showMessage1('帳號或密碼錯誤','/xdmin/login');
            }
        } else {
            $this->showMessage1('帳號或密碼錯誤','/xdmin/login');
        }
    }
    public function logout() {
        session::flush();
        $this->showMessage1('您已經登出','/xdmin/login');
    }
}