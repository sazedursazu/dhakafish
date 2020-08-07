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




//Products Route
Route::get('/','ProductController@index')->name('products.index');
Route::get('/search','ProductController@search')->name('search');
Route::get('/create','ProductController@create')->name('admin.create');
Route::get('/edit/{id}','ProductController@edit')->name('admin.edit');
Route::post('/store','ProductController@store')->name('product.store');
Route::post('/update/{id}','ProductController@update')->name('product.update');
Route::get('/manage','ProductController@manage')->name('product.manage');
Route::get('/delete/{id}','ProductController@delete')->name('product.delete');
Route::get('/categories/{id}','ProductController@show')->name('categories.product');



//Carts route
Route::get('cart', 'CartController@index')->name('cart.index');
 
Route::get('add-to-cart/{id}', 'CartController@add')->name('cart.add');

Route::get('cart/delete/{itemId}', 'CartController@delete')->name('cart.delete');

Route::post('cart/update/{itemId}', 'CartController@update')->name('cart.update');

Route::get('cart/checkout', 'CartController@checkout')->name('cart.checkout');

Route::post('/checkout/store', 'CartController@store')->name('checkout.store');


//admin routes
Route::get('/index','AdminPagesController@index')->name('admin.index')->middleware('auth');
Route::get('/order','AdminPagesController@item')->name('order.item')->middleware('auth');
Route::get('/order/delete/{id}','AdminPagesController@destroy')->name('item.delete')->middleware('auth');



//categories route
Route::get('category/index','CategoryController@index')->name('categories.manage')->middleware('auth');
Route::get('/category/create','CategoryController@create')->name('categories.create')->middleware('auth');
Route::get('category/edit/{id}','CategoryController@edit')->name('categories.edit')->middleware('auth');
Route::post('category/update/{id}','CategoryController@update')->name('categories.update')->middleware('auth');
Route::post('categories/store','CategoryController@store')->name('categories.store')->middleware('auth');
Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete')->middleware('auth');

//slider route
Route::get('/slider','SliderController@create')->name('slider.create')->middleware('auth');
Route::get('/slider/edit/{id}','SliderController@edit')->name('slider.edit')->middleware('auth');
Route::get('/slider/index','SliderController@index')->name('slider.index')->middleware('auth');
Route::post('/slider/store','SliderController@store')->name('slider.store');
Route::post('/slider/update/{id}','SliderController@update')->name('slider.update')->middleware('auth');
Route::get('/slider/delete/{id}','SliderController@delete')->name('slider.delete')->middleware('auth');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
