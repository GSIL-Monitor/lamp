<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Play;
class PlayController extends Controller
{
   public function index(Request $request)
    {
        $play = Play::paginate(20);
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        return view('home.play.index',['link'=>$link,'play'=>$play,'request'=>$request->all()]);
    }

    
    public function show($id)
    {
        $data = Play::find($id);
        $link = Link::where('status','=',2)->get();
        return view('home.play.detail',['link'=>$link,'data'=>$data]);
    }
}
