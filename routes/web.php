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
/*
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

//LATIHAN CONTROLLER

Route::get('test','PrakerinController@percobaan');

Route::get('test1','PrakerinController@a');

Route::get('test2','PrakerinController@b');

Route::get('test3','PrakerinController@c');

Route::get('test4','PrakerinController@d');

Route::get('test5','PrakerinController@e');

Route::get('halaman/{id}','PrakerinController@param');

Route::get('/{a}','PrakerinController@parameter');
*/
Route::get('test6','CobaController@test1');

Route::get('test7/{id}','CobaController@test2');

Route::get('test8','CobaController@index');

Route::get('test9','CobaController@percobaan');

Route::get('nama/{data}','CobaController@binatan');