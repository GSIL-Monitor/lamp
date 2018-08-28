<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\User;
use App\Models\Album;
use App\Models\User_detail;
use App\Models\Article;
use DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //查询其他用户数据;
            $user = User::find(1);
            // dd($user -> Useralbums);
            // 处理要显示图片路径
            $sum = 0; 
            foreach ($user -> Useralbums as $k => $v) {
                $photo[$k] = explode("|",$v['photo']);

                $sum += count($photo[$k]);
              
            }

            //查询友情链接所有状态为2(已审核)的数据
            $link = Link::where('status','=',2)->get();
            return view('home.album.index',[
                    'link'=>$link,
                    'user'=>$user,
                    'photo'=>$photo, 
                    'sum'=>$sum   
                ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //查询其他用户数据;
        $user = User::find(1);
        $sum = 0; 
        foreach ($user -> Useralbums as $k => $v) {
            $photo[$k] = explode("|",$v['photo']);
            $sum += count($photo[$k]);
        }
        return view('home.album.create',[
                'user'=>$user,
                'sum'=>$sum   
            ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //创建文件上传对象
        $photo = $request -> file('photo');
        $filename = [];
        foreach ($photo as $key => $value) {
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $value -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $path = ltrim($dir.'/'.$name,'.');
            array_push($filename,$path);
            //上传
            $value -> move($dir,$name);
        }
        $album = new Album;
        $filename = implode("|",$filename);
        $album  -> title = $request -> input('title');
        $album  -> photo = $filename;
        $res = $album -> save();
        if($res){
            return redirect('/home/album');
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
        //查询用户的相册数据;
        $album = Album::find($id);
        // dd($user -> Useralbums);
        // 处理要显示图片路径
         foreach ($album -> albumuser as $k => $v) {
                $photo = explode("|",$album['photo']);
            }
       
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        return view('home.album.show',[
                'link'=>$link,
                'album'=> $album,
                'photo'=>$photo
            ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
