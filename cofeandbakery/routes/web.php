<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@dashboard');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@services');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/order', 'PagesController@order');
Route::get('/user', 'PagesController@user');
Route::get('/addproduct', 'PagesController@addproduct');
Route::get('/product', 'PagesController@product');
Route::resource('posts', 'PostsController');
