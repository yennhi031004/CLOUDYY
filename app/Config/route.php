<?php
use App\Routing\Route;

Route::add('/', 'HomeController@index');
Route::add('/index', 'HomeController@index');
Route::add('/product', 'ProductController@product');
Route::add('/product/(\d+)', 'ProductController@product');

Route::add('/product/detail/(\d+)', 'ProductController@detail');
Route::add('/cart', 'CartController@index');
Route::add('/viewcart', 'CartController@index');
Route::add('/addcart', 'CartController@addcart');
Route::add('/deletecart', 'CartController@deletecart');
Route::add('/deleteproduct/(\d+)', 'CartController@deleteproduct');
Route::add('/register', 'UserController@register');
Route::add('/about', 'AboutController@about');
Route::add('/contact', 'LienheController@contact');
//Route::add('/product/search/(\w+)', 'ProductController@product');
Route::add('/product/search/(\w+)', 'ProductController@index');

?>