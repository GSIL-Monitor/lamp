<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBbsRquest;
use App\Models\Link;
use App\Models\User;
use App\Models\User_detail;
use App\Models\Article;
use App\Models\Message;
use DB;

class BbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //构造器   表连接
        $user = DB::table('users')
                ->join('users_detail', 'users.id', '=', 'users_detail.uid')
                ->join('articles', 'users.id', '=', 'articles.uid')
                ->orderBy('articles.created_at', 'desc')
                ->select('users.*', 'users_detail.*','articles.*')
                ->get();
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        $article = Article::orderBy('likes', 'desc')
            ->groupBy('articles.uid')
            ->limit (5)
            ->get();
        // $userArtilist = DB::table('users')
        //         ->leftjoin('users_detail', 'users.id', '=', 'users_detail.uid')
        //         ->leftjoin('articles', 'users.id', '=', 'articles.uid')
        //         ->max('articles.likes')
        //         ->groupBy('articles.uid')

        //         ->orderBy(max(['articles'=>'likes']), 'desc')
        //         // ->take(5)
        //         ->select('users.username', max(['articles'=>'likes']),'users_detail.sex','articles.uid')
        //         ->get();
        $userreads = DB::table('users')
                ->join('users_detail', 'users.id', '=', 'users_detail.uid')
                ->join('articles', 'users.id', '=', 'articles.uid')
                ->orderBy('articles.reads', 'desc')
                ->limit(3)
                ->select('users.*', 'users_detail.*','articles.*')
                ->get();
        //加载模板  分配变量
        return view('home.bbs.index',[
                'link'=>$link,
                'user'=> $user,
                'userreads'=>$userreads,
                'article'=>$article
            ]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //加载页面
        return view('home.bbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBbsRquest $request)
    {
        //检测文件是否存在
        // if($request->hasfile('pro')){
            //创建文件上传对象
            $pro = $request -> file('pro');
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $pro -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/art_img/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            //上传
            $pro -> move($dir,$name);
            //写入数据库
            $article = new Article;
            $article -> pro = $filename;
            $article -> title = $request -> input('title');
            $article -> summary = $request -> input('summary');
            $article -> site = $request -> input('site');
            $article -> content = $request -> input('content');
            $res = $article -> save();
        if($res){
            return redirect('/home/info');
        }else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //获取文章指定用户的信息
        $article = Article::find($id);
        //获取所有文章指定用户的信息
        $data= DB::table('articles') -> limit(7) -> get();
       //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //加载指定文章信息模板
        return view('home.bbs.show',[
            'link'=>$link, 
            'article'=>$article,
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function qitashow(Request $request, $uid)
    {
        //查询其他用户数据;
        $user = User::find($uid);
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        // //加载模板 分配数据
        return view('home.bbs.qitashow',[
                'link'=>$link, 
                'user'=>$user
            ]);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function qitazhongxin($id)
    {   
        //获取文章指定用户的信息
        $article = Article::find($id);
        // dd($article);
       //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //加载指定文章信息模板
        return view('home.bbs.qitazhongxin',[
            'link'=>$link, 
            'article'=>$article
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function zan($id)
    {
        $article = Article::find($id);
        $zan = $article -> likes = $article->likes + 1;
        $res = $article ->save();
        if($res){
            echo $zan;
        }else{
            echo 'error';
        }
        
    }

    /**
     * 文章被收藏
     *
     * @return \Illuminate\Http\Response
     */
    public function reads($id)
    {
        $article = Article::find($id);
        $shoucang = $article -> reads = $article -> reads + 1 ;
        $res = $article ->save();
        $aid = $article -> id;
        
        if($res){
            echo $shoucang;
        }else{
            echo 'error';
        }
    }

     public function message(Request $request ,$id)
    {   
      
        //写入数据库
        // $art_id = $request -> input('art_id');
        $message = new Message;
        $message -> uid = 1;
        $message -> art_id = $id;
        $message -> msg = $request -> input('content');
        $res = $message -> save();
        $id = $message -> id;
        $msg = Message::find($id);
        if($msg){
            echo $msg ;
        }else{
            echo 'error';
        }
        // $user = DB::table('users')
        //         ->join('users_detail', 'users.id', '=', 'users_detail.uid')
        //         ->join('articles', 'users.id', '=', 'articles.uid')
        //         ->join('messages', 'users.id', '=', 'messages.uid')
        //         ->select('users.*', 'users_detail.*','articles.*', 'messages.uid.*')
        //         ->get($id);
       
    }

}
