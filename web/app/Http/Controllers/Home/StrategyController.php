<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Strategy;
use App\Models\Link;
class StrategyController extends Controller
{
    public function index(Request $request)
    {
        $strategy = Strategy::orderBy('id')->paginate(20);
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        return view('home.strategy.index',['link'=>$link,'strategy'=>$strategy,'request'=>$request->all()]);
    }

    
    public function show($id)
    {
        $data = Strategy::find($id);
        $link = Link::where('status','=',2)->get();
        return view('home.strategy.detail',['link'=>$link,'data'=>$data]);
    }
}
