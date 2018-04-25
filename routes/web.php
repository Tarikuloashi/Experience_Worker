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

	Route::get('/forgetPassword','forgetPasswordController@forgetPassword');
	Route::post('/forgetPassword','forgetPasswordController@postForgetPassword');

	Route::get('/reset/{email}/{resetCode}','forgetPasswordController@resetPassword');
	Route::post('/reset/{email}/{resetCode}','forgetPasswordController@postResetPassword');
	Route::get('/activate/{email}/{activationCode}','activationController@activate');
});


Route::group(['middleware'=>'user'],function(){
	//user
	Route::get('/userHome','userController@home');
	Route::get('/userProfile','userController@profile');
	Route::post('/userUpdateImage','userController@update_avatar');
	Route::get('/userPost','userController@post');
	Route::get('/userHistory','userController@history');
	Route::get('/userShowService','userController@showService');
	Route::get('/postRequest/{id}','userController@postRequest');
	Route::post('/saveRequest','userController@saveRequest');
});

Route::group(['middleware'=>'engineer'],function(){
	//engineer
	Route::get('/engineerHome','engineerController@home');
	Route::get('/engineerProfile','engineerController@profile');
	Route::post('/engineerUpdateImage','engineerController@update_avatar');
	Route::get('/engineerCurrentJob','engineerController@currentJob');
	Route::get('/engineerHistory','engineerController@history');

});

//admin
Route::group(['middleware'=>'admin'],function(){
	Route::get('/adminHome','adminController@home');
	Route::get('/adminUserList','adminController@showUser');
	Route::get('/adminEngineerList','adminController@showEngineer');
	Route::get('//adminUserList/{id}','adminController@assignToEngineer');
	Route::get('//adminEngineerList/{id}','adminController@assignToUser');
	Route::get('/createService','adminController@createService');
	Route::post('/createService','adminController@storeService');
	Route::get('/manageService','adminController@manageService');

});

Route::post('/logout','loginController@logout');
