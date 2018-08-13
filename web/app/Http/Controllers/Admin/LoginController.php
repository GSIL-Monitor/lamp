<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin_user;
use Session;
class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.login.login');
    }

    public function postDologin(Request $request)
    {
        $data = $request -> all();
        $name = Admin_user::all('nickname');
        $names = [];
        foreach ($name as $key => $value) {
            array_push($names,$value->nickname);
        }
        $res = in_array($data['nickname'], $names);
        if($res){
            $passwords = Admin_user::where('nickname','=',$data['nickname'])->first(); 
        }else{
            return back()->with('error','用户名错误');
        }
        if(md5($data['password']) == $passwords['password']){
            $sess = $data['nickname'];
            session(['key' => "$sess"]);
            return redirect('admin/index');
        }else{
            return back()->with('error','密码错误');
        }
 
    }

    public function getOut()
    {
        session(['key' => ""]);
        return redirect('admin/login');
    }
}
