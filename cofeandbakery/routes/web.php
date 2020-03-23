<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@services');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/order', 'PagesController@order');
Route::get('/ui', 'PagesController@ui');
Route::get('/addproduct', 'PagesController@addproduct');

Route::resource('posts', 'PostsController');
