<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
	return view('layouts.home');
});

Route::group(['middleware'=>'visitors'],function(){

	//Route('/home','registrationController@home');
	//authentication
	Route::get('/register','registrationController@register');
	Route::post('/register','registrationController@postregister');

	Route::get('/login','loginController@login');
	Route::post('/login','loginController@postLogin');

});

	

//user 
Route::get('/userHome','userController@home');
Route::get('/userProfile','userController@profile');
Route::get('/userPost','userController@post');
Route::get('/userHistory','userController@history');


Route::group(['middleware'=>'engineer'],function(){
	//engineer
	Route::get('/engineerHome','engineerController@home');
	Route::get('/engineerProfile','engineerController@profile');
	Route::get('/engineerCurrentJob','engineerController@currentJob');
	Route::get('/engineerHistory','engineerController@history');

});


Route::group(['middleware'=>'admin'],function(){
	Route::get('/adminHome','adminController@home');
	
});

Route::get('/logout','loginController@logout');