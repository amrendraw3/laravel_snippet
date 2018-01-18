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

Route::get('/', function () {
    return view('welcome');
});

//for call custom login controller
Route::post('/login/custom', [
'uses' => 'LoginController@login',
'as' => 'login.custom'
]);

//multiple auth login
Route::group(['middleware'=>'auth'], function(){
	Route::get('/home',function(){
		return view('home');
	})->name('home');

	Route::get('/admin-dashboard', 'Admin\DashboardController@showDashboard')->name('admin-dashboard');
	Route::any('/user-profile/{id}', 'Admin\DashboardController@userProfile');	
});

Auth::routes();

Route::post('/edit-profile', 'HomeController@edit');
