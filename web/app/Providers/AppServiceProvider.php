<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Link;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //共享友情链接 查询撸轮播图所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        view()->share('common_cates_link', $link);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
