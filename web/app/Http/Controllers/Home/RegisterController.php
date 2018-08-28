<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function getRegister()
    {
        $link = Link::where('status','=',2)->get();
        return view('home.register.register',['link'=>$link]);
    }

    public function postDoregister(Request $request)
    {
        $link = Link::where('status','=',2)->get();
        $data = $request -> all();
        dump($data);
    }




    public function getLogin()
    {
        // $link = Link::where('status','=',2)->get();
        // return view('home.register.login',['link'=>$link]);
        echo '111';
    }
}
