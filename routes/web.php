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

Route::get('/sentinel/public/', function () {
    return view('accueil.accueil');
});

	//Route::post('/accueil','AccueilController@postAccueilGo');
	//Route::get('/sentinel/public/accueil','AccueilController@accueilGo');  AccueilInfoController
    Route::get('/sentinel/public/accueil','AccueilInfoController@accueilGo');

Route::group(['middleware' => 'visitors'], function(){
	Route::get('/sentinel/public/register','RegistrationController@register');
	Route::post('/sentinel/public/register','RegistrationController@postRegister');

	Route::get('/sentinel/public/login','LoginController@login');
	Route::post('/sentinel/public/login','LoginController@postLogin');

	Route::get('/sentinel/public/forgot-password','ForgotPasswordController@forgotPassword');
	Route::post('/sentinel/public/forgot-password','ForgotPasswordController@postForgotPassword');

	Route::get('/sentinel/public/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');
	Route::post('/sentinel/public/reset/{email}/{resetCode}','ForgotPasswordController@postResetPassword');
});


Route::group(['middleware' => 'admin'], function(){

    Route::get('/sentinel/public/free','FreeUsersController@freeU'); //dans le table role->freeUsers
    Route::get('/sentinel/public/profile/{username}', 'ProfileController@profile');
    //php artisan make:controller  --resource
    Route::resource('/sentinel/public/accueils','AccueilInfoController');
    //php artisan make:controller  --resource
    Route::resource('/sentinel/public/videos','VideosController');
    //php artisan make:controller  --resource
    Route::resource('/sentinel/public/categories','CategoriesController');

    Route::resource('/sentinel/public/roles','RolesController');




});

Route::group(['middleware' => 'aboUsers'], function(){
    Route::get('/sentinel/public/abo','AboUsersController@aboU');  //dans le table role->aboUsers
});


Route::post('/sentinel/public/logout','LoginController@logout');

Route::get('/sentinel/public/earnings','AdminController@earnings')->middleware('admin');  //dans le table role->aboUsers
Route::get('/sentinel/public/tasks','ManagerController@tasks')->middleware('manager'); //dans le table role->manager
Route::get('/sentinel/public/free','FreeUsersController@freeU')->middleware('freeUsers'); //dans le table role->freeUsers
//Route::get('/sentinel/public/abo','AboUsersController@aboU')->middleware('aboUsers');  //dans le table role->aboUsers


Route::get('/sentinel/public/activate/{email}/{activationCode}','ActivationController@activate');




