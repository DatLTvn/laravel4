<?php
use Illuminate\Support\Facades\Route;

//front end 
Route::get('/trang-chu', [HomeController::class,'index']);
route::get('/',[HomeController::class,'index']);
route::get('home',[HomeController::class, 'myhome']);

//backend
Route::get('/login','App\Http\Controllers\AdminController@index');
Route::post ('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
route::get ('/admin-layout','App\Http\Controllers\AdminController@admin_layout');

//users
Route::get('/add-users','App\Http\Controllers\UsersController@add_users');
Route::get('/all-users','App\Http\Controllers\UsersController@show_users'); //tim kiem DT
Route::get('/all-edit-users','App\Http\Controllers\UsersController@all_users');//them nguoi dung
Route::get('/delete-users/{users_id}','App\Http\Controllers\UsersController@delete_users');//xoa
Route::post('/save-users','App\Http\Controllers\UsersController@save_users');//them
Route::post('/update-users/{users_id}','App\Http\Controllers\UsersController@update_users');//cap nhat
Route::get('/edit-users/{users_id}','App\Http\Controllers\UsersController@edit_users');//sua
Route::post('/dash-add-users','App\Http\Controllers\UsersController@dashboard_users');
Route::get('/pagination-users','App\Http\Controllers\UsersController@pagination');//phan trang

//category product
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_id}','App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');
Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_id}','App\Http\Controllers\CategoryProduct@update_category_product');
Route::get('/all-edit-category-product','App\Http\Controllers\CategoryProduct@show_category');//tim kiem san pham


//cusstom
route::get('/all-edit-custom','App\Http\Controllers\CustomController@all_custom');//tât ca
Route::post('/save-custom','App\Http\Controllers\CustomController@save_custom');//them
Route::get('/add-custom','App\Http\Controllers\CustomController@add_custom');
Route::get('/all-custom','App\Http\Controllers\CustomController@show_custom');//tim kiem
Route::post('/update-custom/{custom_id}','App\Http\Controllers\CustomController@update_custom');//cap nhat
Route::get('/edit-custom/{custom_id}','App\Http\Controllers\CustomController@edit_custom');//sua

