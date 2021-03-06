<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@dashboard');
Route::get('/about', 'PagesController@about');
Route::get('/expense', 'PagesController@expense');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/order', 'PagesController@order');
Route::get('/user', 'PagesController@user');
Route::get('/addproduct', 'PagesController@addproduct');
Route::post('/addproduct','PagesController@store')->name('addimage');
Route::get('/product', 'PagesController@productDisplay');
Route::get('/editproduct/{id}','PagesController@productEdit');
Route::put('/updateproduct/{id}','PagesController@productUpdate');
Route::get('/deleteproduct/{id}','PagesController@productDelete');

Route::get('/customer', 'PagesController@customer');
Route::get('/setupuser', 'PagesController@setupuser');
Route::get('/staff', 'PagesController@staff');
Route::get('/userprofile', 'PagesController@userprofile');
Route::get('/stock', 'PagesController@stock');
Route::get('/supplier', 'PagesController@supplier');
Route::resource('posts', 'PostsController');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/addproduct','AddProductController@addproduct');
