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
// Acceuil et le fomulaire de creation categories
Route::get('/','AccueilController@index')->name('welcome');
Route::get('/create','AccueilController@create')->name('create');
// Authentification
Auth::routes();
// Image par categories
Route::name('category')->get('categorie/{slug}', 'ImagesController@category');
Route::name('user')->get('user/{user}', 'ImagesController@user');

// Admin
Route::middleware('admin')->group(function(){
	Route::resource ('categorie', 'CategoryController', [
        'except' => 'show'
    ]);

     Route::name('maintenance.index')->get('maintenance', 'AdminController@index');
    Route::name('maintenance.destroy')->delete('maintenance', 'AdminController@destroy');
 });


// Traduction
Route::name('language')->get('language/{lang}', 'AccueilController@language');



// Securisation des données utilisateurs
Route::middleware('auth')->group(function () {
    Route::resource('image', 'ImagesController', [
        'only' => ['create', 'store', 'destroy']
    ]);
     Route::resource('profile', 'UserController', [
        'only' => ['edit', 'update'],
        'parameters' => ['profile' => 'user']
    ]);


});
