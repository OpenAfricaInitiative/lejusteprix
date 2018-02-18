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

Route::get('/','AccueilController@index')->name('welcome');
Route::get('/create','AccueilController@create')->name('create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::name('category')->get('categorie/{slug}', 'ImagesController@category');
Route::name('user')->get('user/{user}', 'ImagesController@user');


Route::middleware('admin')->group(function(){
	Route::resource ('categorie', 'CategoryController', [
        'except' => 'show'
    ]);

 //    Route::name('maintenance.index')->get('maintenance', 'AdminController@index');
 //    Route::name('maintenance.destroy')->delete('maintenance', 'AdminController@destroy');
 });


Route::middleware('auth')->group(function () {
    Route::resource('image', 'ImagesController', [
        'only' => ['create', 'store', 'destroy']
    ]);
});
