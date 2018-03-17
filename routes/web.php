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


/*
	Route cho cộng tác viên
 */

// Route::group(['middleware' => ['user']],function(){
	/*
		Route get 
	 */
	Route::get('/','UserController@index')->name('user-index');
	Route::get('finish','UserController@UserPostEnd')->name('user-post-end');
	Route::get('post','UserController@UserPost')->name('user-post');
	Route::get('edit','UserController@UserPostEdit')->name('user-post-edit');
	Route::get('edit/{id}','UserController@UserPostEditID')->name('user-post-editid');
	Route::get('pending','UserController@UserPostPending')->name('user-post-pending');
	Route::get('account','UserController@Account')->name('account');





	/*
		Route post
	 */
// });






/*
	Route cho quản trị viên
 */

// Route::group(['middleware' => ['admin']],function(){
	Route::group(['prefix' => 'admincp'],function(){
	/*
		Route get
	 */
	
		Route::get('/','AdminController@index')->name('admin-index');
		Route::get('project','AdminController@Project')->name('admin-project');
		Route::get('keywords','AdminController@KeyWords')->name('admin-keywords');
		Route::get('post','AdminController@Post')->name('admin-post');
		Route::get('user','AdminController@User')->name('admin-user');
		Route::get('edit','AdminController@Edit')->name('admin-edit');
		Route::get('admin','AdminController@Admin')->name('admin');
		Route::get('test','AdminController@Test')->name('test');


	/*
		Route post
	 */
	});
// });