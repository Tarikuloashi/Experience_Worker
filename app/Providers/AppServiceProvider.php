<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\User;
use Sentinel;

use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//         Schema::defaultStringLength(191);
//         View::composer('users.navbar',function($view){
// $user = Sentinel::getUser()->get();
// $view->with('user',$user);
// });
//
// View::composer('admins.adminMaster',function($view){
// $user = Sentinel::getUser()->get();
// $view->with('user',$user);
//
//         });

    View::composer('user.master',function($view){
    $user = Sentinel::getUser()->id;
    $info = User::where('id',$user)->first();
    //dd($info);
    $view->with('info',$info);

    });



    View::composer('engineer.master',function($view){
    $user = Sentinel::getUser()->id;
    $info = User::where('id',$user)->first();
    //dd($info);
    $view->with('info',$info);

            });



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
