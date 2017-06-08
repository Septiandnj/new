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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/testmodel', function(){
	$q = App\Blog::all();
	return $q;
});

route::get('/testmodel1', function(){
	$a = App\produk::all();
	return $a;
});

route::get('/testmodel2', function(){
	$b = App\pengguna::all();
	return $b;
});

route::get('/testmodel3', function(){
	$c = App\pengaturan::all();
	return $c;
});