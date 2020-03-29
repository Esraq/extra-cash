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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return redirect('/login');
});
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    //slider
    Route::get('/slider-add','SliderController@add')->name('slider.add');
    Route::post('/slider-insert','SliderController@insert')->name('slider.insert');
    Route::get('/slider/edit/{id}','SliderController@edit')->name('slider.edit');
    Route::post('/slider/update','SliderController@update')->name('slider.update');
    Route::get('/slider','SliderController@show')->name('slider');
    Route::get('slider-list', 'SliderController@sliderList');
    Route::post('/slider-delete', 'SliderController@delete')->name('slider.delete');

});
Route::group(['middleware' => ['auth', 'restaurant']], function() {
    Route::get('/restaurant', 'ResturantAdminController@index')->name('restaurant');

});
Route::group(['middleware' => ['auth', 'manager']], function() {
    Route::get('/manager', 'ManagerController@index')->name('manager');

});
Route::group(['middleware' => ['auth', 'chef']], function() {
    Route::get('/chef', 'ChefController@index')->name('chef');

});
Route::group(['middleware' => ['auth', 'driver']], function() {
    Route::get('/deliver', 'DeliverDriverController@index')->name('driver');

});
Route::group(['middleware' => ['auth', 'homecook']], function() {
    Route::get('/homeCook', 'HomeCookController@index')->name('homecook');

});
Route::group(['middleware' => ['auth', 'user']], function() {
    Route::get('/user', 'UserController@index')->name('user');
});
