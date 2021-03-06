<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/good/{id}', 'GoodController@good')->name('good');
Route::get('/category/{id}', 'GoodController@category')->name('category');
Route::get('/order/buy/{id}', 'OrderController@buy')->name('buy');
Route::get('/order/current', 'OrderController@current')->name('order.current');
Route::get('/order/process', 'OrderController@process')->name('order.process');

Route::group(['middleware' => \App\Http\Middleware\AdminMiddleware::class], function () {
   Route::get('/admin/categories', 'AdminController@categories')->name('admin.categories');
   Route::get('/admin/goods', 'AdminController@goods')->name('admin.goods');

   Route::get('admin/goods/edit/{id}', 'GoodController@edit')->name('goods.edit');
   Route::get('admin/goods/delete/{id}', 'GoodController@delete')->name('goods.delete');
   Route::post('admin/goods/save/{id}', 'GoodController@save')->name('goods.save');
   Route::post('admin/goods/add', 'GoodController@add')->name('goods.add');


   Route::get('admin/categories/edit/{id}', 'CategoryController@edit')->name('categories.edit');
   Route::get('admin/categories/delete/{id}', 'CategoryController@delete')->name('categories.delete');
   Route::post('admin/categories/save/{id}', 'CategoryController@save')->name('categories.save');
});
