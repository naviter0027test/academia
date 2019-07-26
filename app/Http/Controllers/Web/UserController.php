<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Xdmin\User;
use Storage;
use Session;
use Hash;
use Cart;
class UserController extends  Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function logout(Request $request) {
		try {
		Cart::store(session('email'));			
		} catch(\Exception $ex){
		}
        session::flush();
        $this->showMessage1('登出成功','/');
    }
    public function login(Request $request) {
        $data = User::where('email','=', $request->input('email'))
            ->where('password','=', $request->input('password'))
            ->first();
        if($data) {
            $request->session()->put('user_id', $data->id);
            $request->session()->put('name', $data->name);
            $request->session()->put('email', $data->email);
            Cart::restore(session('email'));
            $this->showMessage1('登入成功','/');
        }else {
            $this->showMessage1('帳號或密碼不正確','/login');
        }
    }
	public function edit(Request $request) {
		$data = User::where('email','=', session('email'))
            ->first();
			if($data) {
				return view('web.edit',['data'=>$data]);
			} else {
				$this->showMessage1('請先登入','/login');
			}
	}
    public function register(Request $request) {
		$data = User::where('email','=', $request->input('email'))
            ->first();
		if($data && empty($request->input('dataId'))) {
			$this->showMessage1('email帳號已存在','/login');
			return ;
		}
		if(empty($request->input('dataId'))) { // 新增
			$data = new User();
			if($request->input('password1') != $request->input('password2') ) {
				$this->showMessage1('密碼需相符','/login');
				return ;
			}
			if(strlen($request->input('password1')) < 6 ) {
				$this->showMessage1('請設定至少6個字元','/login');
				return ;
			}
			$data->password = $request->input('password1');
		} else {
			if(!empty($request->input('password1'))) {
				if($request->input('password1') != $request->input('password2') ) {
					$this->showMessage1('密碼需相符','/user/edit');
					return ;
				}
				if(strlen($request->input('password1')) < 6 ) {
					$this->showMessage1('請設定至少6個字元','/user/edit');
					return ;
				}
				$data->password = $request->input('password1');
			}
		}
		
        $data->email = $request->input('email');
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->birthday = $request->input('birthday');
        $data->mobile = $request->input('mobile');
		$data->newsletter = $request->input('newsletter','N');
        $data->save();
		if(empty($request->input('dataId'))) { // 新增
			$this->showMessage1('帳號註冊成功，請於會員登入畫面中進行登入','/login');
		} else {
			try {
				Cart::store(session('email'));			
			} catch(\Exception $ex){
			}
			session::flush();
			$this->showMessage1('個人資料修改成功，請重新登入','/login');
		}
    }
}