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
Route::get('/adminpage', 'IkujoController@adminpage')->name('adminpage');

Route::get('/adminlogin', 'IkujoController@adminlogin')->name('adminlogin');

Route::post('/adminlogin','IkujoController@checkadminlogin')->name('checkadminlogin');

route::get('/checkviewadmin',function(){
	return view('managerview/admin');
});
Route::get('/adminpage/home', 'IkujoController@adminhome')->name('adminhome');
Route::get('/adminpage/{selected}', 'IkujoController@admin_handles')->name('admin_handles');
route::get('/logout', 'IkujoController@logout')->name('logout');