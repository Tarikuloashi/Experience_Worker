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

Route::get('/','frontEndController@home');



Route::get('/map',function(){
	return view("users.testMap");

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

  Route::get('/user/showService','userController@showService');

  Route::get('/requestService/{id}','RequestServiceController@index');
  Route::post('/postRequestService','RequestServiceController@storeRequest');
  Route::post('/RequestService/Location','RequestServiceController@storeLoction');
	Route::get('/user/workHistory','userController@workHistory');


});

Route::group(['middleware'=>'engineer'],function(){
	//engineer
	Route::get('/engineerHome','engineerController@home');
	Route::get('/engineerProfile','engineerController@profile');
	Route::post('/engineerUpdateImage','engineerController@update_avatar');

	Route::get('/viewrequest','RequestServiceController@viewRequest');
	Route::get('/view-Service/{id}','RequestServiceController@showService');

	Route::get('Appointment/service/{id}','ServiceApponmentController@apponment');
	Route::get('workHistory','engineerController@workHistory');
	Route::get('jobDone/{id}','engineerController@jobDone');
	Route::get('/addProfile','engineerController@addProfile');
	Route::post('/profile/save','engineerController@saveProfile');

});

//admin
Route::group(['middleware'=>'admin'],function(){
	Route::get('/adminHome','adminController@home');
	Route::get('/adminUserList','adminController@showUser');
	Route::get('/adminEngineerList','adminController@showEngineer');
	Route::get('//adminUserList/{id}','adminController@assignToEngineer');
	Route::get('//adminEngineerList/{id}','adminController@assignToUser');

    	//CategoryController
    	  // Route::resource('category','CategoryController');
        Route::get('/category/add','CategoryController@create');
    	  Route::post('/category/save','CategoryController@store');
    	  Route::get('/category/manage','CategoryController@manage');
    	  Route::get('/category/edit/{id}','CategoryController@edit');
    	  Route::post('/category/update','CategoryController@update');
    	  Route::get('/category/delete/{id}','CategoryController@destroy');

  	//Service Controller
  	    //Route::resource('service','ServiceController');
        Route::get('/service/add','ServiceController@create');
		    Route::post('/service/save','ServiceController@store');
    		Route::get('/service/manage','ServiceController@manage');
    		Route::get('/service/edit/{id}','ServiceController@edit');
    		Route::post('/service/update','ServiceController@update');
    		Route::get('/service/delete/{id}','ServiceController@delete');


});

Route::get('/logout','loginController@logout');
