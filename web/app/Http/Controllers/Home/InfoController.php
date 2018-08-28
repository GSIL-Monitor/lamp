<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\User;
use App\Models\Users_detail;
use App\Models\Article;
use DB;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取用户数据
        $user = User::find(1);
        // $data = Article::all();
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //加载模板
        return view('home.info.index',[
            'link'=>$link,
            // 'data'=>$data
            'user'=>$user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del($id)
    {
        // 软删除数据
        $res =  Article::destroy($id);
        // 判断
       if($res){
            return redirect('/home/info');
       }else{
            return back();
       }
        
    }

    /**
     *  getTrash the form for creating a new resource.
     *
     *  \Illuminate\Http\Response
     */
    public function trash()
    {
         //获取用户数据
        $user = User::find(1);
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //获取被软删除的数据
        $deldata = Article::onlyTrashed()->get();
        //加载模板 分配数据
        // return view('home.info.trash',['link'=>$link]);
        return view('home.info.trash',['link'=>$link,
            'user'=>$user,
            'deldata'=>$deldata
        ]);
    }

    public function rollback($id)
    {
        // 快速地恢复多个模型：

       $res =  Article::withTrashed()
            ->where('id', $id)
            ->restore();
       if($res){
            return redirect('/home/info/trash');
       }else{
            return back();
       }
    }


    //永久删除
    public function deltime($id)
    {   
        $res =  Article::onlyTrashed()
                ->where('id', $id)
                ->forceDelete();
        // dd($res);
        if($res){
            return redirect('/home/info/trash');
       }else{
            return back();
       }      
    }

    // 收藏
    public function shoucang()
    {   
        $user = User::find(1);
        dd($user);
       //  if($res){
       //      return redirect('/home/info/trash');
       // }else{
       //      return back();
       // }      
    }


}
