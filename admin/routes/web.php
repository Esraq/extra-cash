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


  //Restaurant
   /* Route::get('/restaurant-add','RestaurantController@add')->name('restaurant.add');
    Route::post('/restaurant-insert','RestaurantController@insert')->name('restaurant.insert');
    Route::get('/restaurant/edit/{id}','RestaurantController@edit')->name('restaurant.edit');
    Route::post('/restaurant/update','RestaurantController@update')->name('restaurant.update');
    Route::get('/restaurant-list','RestaurantController@show')->name('restaurant-list');
    Route::get('restaurantTable-list', 'RestaurantController@restaurantList');
    Route::post('/restaurant-delete', 'RestaurantController@delete')->name('restaurant.delete');*/

    

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
    /*Start here user role manage system*/
    Route::get('/user-role-list', 'UserRole@show')->name("user.role");
    Route::get('userrole', 'UserRole@list');
    Route::post('/role-delete', 'UserRole@delete')->name('role.delete');
    Route::get('/role-add','UserRole@add')->name('role.add');
    Route::post('/role-insert','UserRole@insert')->name('role.insert');
    Route::get('/role/edit/{id}','UserRole@edit')->name('role.edit');
    Route::post('/role-update','UserRole@update')->name('role.update');
    /*Start here Restaurant manage system*/
    Route::get('/restaurant-applicant-list','RestraurantController@list')->name('res.applicant');
    Route::get('restaurant-applicant', 'RestraurantController@restaurantList');
    Route::post('/approved-restaurant','RestraurantController@approved')->name('approved.restaurant');
    Route::post('/remove-restaurant','RestraurantController@remove')->name('remove.restaurant');
     /*Start here Restaurant manage system*/
    Route::get('/home-applicant-list','HomeCook@list')->name('home.applicant');
    Route::get('home-applicant', 'HomeCook@homeList');
    Route::post('/approved-home','HomeCook@approved')->name('approved.home');
    Route::post('/remove-home','HomeCook@remove')->name('remove.home');
     /*Start here Restaurant manage system*/
    Route::get('/restaurants-list','RestraurantController@restaurantsListApproved')->name('restaurants.list');
    Route::get('restaurantslist', 'RestraurantController@approvedRestaurantsList');
     /*Start here Restaurant manage system*/
    Route::get('/home-list','HomeCook@restaurantsListApproved')->name('home.list');
    Route::get('homelist', 'HomeCook@approvedRestaurantsList');
    /*Start here Restaurant manage system*/
    Route::get('/order-report','OrderReportAdmin@orderReport')->name('order.report');
    Route::get('homelist', 'HomeCook@approvedRestaurantsList');
     Route::post('/order-report-list','OrderReportAdmin@getOrderReport')->name('get.order.report');
     //About
    Route::get('/about','AboutController@add')->name('about');
    Route::post('/about-insert','AboutController@insert')->name('about.insert');
    Route::get('/about/edit/{id}','AboutController@edit');
    Route::post('/about/update','AboutController@update')->name('about.update');

    //company
    Route::get('/company','CompanyController@add')->name('company');
    Route::post('/company-insert','CompanyController@insert')->name('company.insert');
    Route::get('/company/edit/{id}','CompanyController@edit');
    Route::post('/company/update','CompanyController@update')->name('company.update');

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
