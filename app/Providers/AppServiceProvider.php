<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\User;
use Sentinel;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('users.navbar',function($view){
$user = Sentinel::getUser()->get();
$view->with('user',$user);
});

View::composer('admins.adminMaster',function($view){
$user = Sentinel::getUser()->get();
$view->with('user',$user);

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
