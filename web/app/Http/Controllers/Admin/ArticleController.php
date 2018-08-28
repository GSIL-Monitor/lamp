<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取数据
        $search = $request -> input('search','');//搜索关键词
        $count = $request -> input('count',5);//每页显示条数
        $title = '文章列表';
        $data = Article::where('uid','like','%'.$search.'%') -> paginate($count);
        return view('admin.article.index',['data'=>$data,'request'=>$request->all(),'title'=>$title]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 获取删除的数据
        $article = Article::find($id);
        // 强制删除
        $article -> forceDelete();
        //返回模版
        return back()->with('删除成功');
    }
   
}
