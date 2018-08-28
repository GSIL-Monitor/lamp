<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Link;
class FoodController extends Controller
{
    
    public function index(Request $request)
    {
        $food = Food::orderBy('id')->paginate(20);
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        return view('home.food.index',['link'=>$link,'food'=>$food,'request'=>$request->all()]);
    }

    
    public function show($id)
    {
        $data = Food::find($id);
        $link = Link::where('status','=',2)->get();
        return view('home.food.detail',['link'=>$link,'data'=>$data]);
    }

    
}
