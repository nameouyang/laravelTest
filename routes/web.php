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
Route::get('/menu1/{type?}', 'Test@menu1');
Route::get('/menu2/{type?}', 'Test@menu2');
Route::get('/menu3/{type?}', 'Test@menu3');
Route::get('/menu4/{type?}', 'Test@menu4');
Route::get('/follow', 'Test@follow');

Route::post('/favor', 'Test@favor')->middleware();
Route::post('/favorite', 'Test@favorite')->middleware();
Route::post('/favoriteCancel', 'Test@favoriteCancel')->middleware();

Route::get('/article/{id?}', 'Test@article');
Route::get('/attention/{articleId?}', 'Test@attention')->middleware('auth');
Route::get('/noFollow/{articleId?}', 'Test@noFollow')->middleware('auth');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');

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
Route::get('/admin/add/{id?}', 'Admin\TestController@add');
Route::post('/admin/fabu', 'Admin\TestController@fabu');
Route::post('/admin/caogao', 'Admin\TestController@caogao');
Route::get('/admin/modifyArticle/{id?}', 'Admin\TestController@modifyArticle');
Route::get('/admin/release/{id?}', 'Admin\TestController@release');


Route::get('/admin/test/{id?}', 'Admin\TestController@test');
Route::post('/admin/test/{id?}', 'Admin\TestController@test');
Route::get('/admin/draft/{id?}', 'Admin\TestController@draft');

Route::get('/admin/user', 'Admin\TestController@user');
Route::get('/admin/userDelete/{id?}', 'Admin\TestController@userDelete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('photos', 'PhotoController');


Route::get('/aaaa/{id?}/{comments?}', function ($id=null, $comments=null){
    return '为什么会有这种路由' . $id . $comments;
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\IndexController@guest');
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm');
    Route::post('login', 'Admin\Auth\LoginController@login');
    Route::post('logout', 'Admin\Auth\LoginController@logout');
    /*Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/index', 'Admin\IndexController@index');
    });*/
});

Route::post('/admin/login', 'Admin\Auth\LoginController@login')->name('admin.login');



