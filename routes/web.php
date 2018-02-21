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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Employee Routes
Route::prefix('users')->group(function() {

	Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

	//This Route will lead to Test information
	Route::get('/info', function() {
		return view ('info');
	});

	//This Route will lead to All Patients
	Route::get('/patients', function() {
		return view ('patients');
	});

	//This Route will lead to the Test Screen
	Route::get('/test', function() {
		return view ('test');
	});

	//This Route will lead to the Input Results Screen
	Route::get('/test/inputresult', function() {
		return view ('inputresult');
	});

});



Route::prefix('admin')->group(function() {

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

});
