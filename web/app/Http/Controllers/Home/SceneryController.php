<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Scenery;
class SceneryController extends Controller
{
    
    public function index(Request $request)
    {
        $scenery = Scenery::orderBy('id')->paginate(20);
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        return view('home.scenery.index',['link'=>$link,'scenery'=>$scenery,'request'=>$request->all()]);
    }

    
    public function show($id)
    {
        $data = Scenery::find($id);
        $link = Link::where('status','=',2)->get();
        return view('home.scenery.detail',['link'=>$link,'data'=>$data]);
    }
}
