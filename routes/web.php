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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Test@index');
/**
 *  前台Home
 */
Route::get('/index', 'Test@index');
Route::get('/menu1', 'Test@menu1');
Route::get('/menu2', 'Test@menu2');
Route::get('/menu3', 'Test@menu3');
Route::get('/menu4', 'Test@menu4');

//Route::get('/person', 'Test@person');
/*Route::get('/person', function() {
    // 只有认证用户可以进入...
})->middleware('auth');*/
Route::group(['middleware' => 'auth'], function () {
    Route::get('/person', 'Test@person');
});

//Route::get('/login', 'Test@login');
//Route::get('/register', 'Test@register');

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/admin/index', 'Admin\TestController@index');
Route::get('/admin/add', 'Admin\TestController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


