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

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
	Route::delete('/user/{id}', 'UserController@delete');
	Route::get('/user', ['uses' => 'AdminController@user', 'as' => 'admin.user']);
	Route::post('/user/create', ['uses' => 'UserController@create', 'as' => 'admin.user.create']);

	Route::get('/', 'AdminController@index');
});

// HomeController để lấy view hiển thị
// group này chỉ hiển thị khi user đã được đăng nhập vào hệ thống
// name(tên) nào mà không có từ get ở đầu nghĩa là chỉ lấy trang view
Route::group(['prefix' => 'facebook'], function() {
	Route::post('/login', ['uses' => 'SocialController@login_facebook', 'as' => 'fb.login']);

	Route::get('/friends', 'ViewController@friends')->name('fb.friends');
	Route::get('{uid}/friends', 'Facebook\WallController@getFriends')->name('fb.getFriends');

	Route::get('{uid}/{idfriend}/unfriend', 'Facebook\WallController@unfriend')->name('fb.unfriend');

	Route::get('postWall', 'HomeController@postWall');
	Route::post('wall', 'Facebook\WallController@postWall');

	Route::get('/group', 'HomeController@group');
	Route::post('/group', 'FacebookController@postGroup');
});


Route::get('/', ['uses' => 'ViewController@index', 'as' => 'index']);
Route::get('/home', ['uses' => 'ViewController@index', 'as' => 'index']);

Route::get('/logout' , 'Auth\LoginController@logout');

Auth::routes();
