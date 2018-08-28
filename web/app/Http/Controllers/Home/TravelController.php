<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Travel;
use App\Models\Link;
class TravelController extends Controller
{
    public function index(Request $request)
    {
        $travel = Travel::orderBy('id')->paginate(20);
        //出来图片路径
        foreach ($travel as $key => $value) {
            $pic[$key] = explode(" ",$value['picture']);
        }
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        return view('home.travel.index',['link'=>$link,'pic'=>$pic,'travel'=>$travel,'request'=>$request->all()]);
    }

    
    public function show($id)
    {
        $data = Travel::find($id);
        //处理图片路径
        $pic = explode(" ",$data['picture']);
        $link = Link::where('status','=',2)->get();
        return view('home.travel.detail',['link'=>$link,'pic'=>$pic,'data'=>$data]);
    }
}
