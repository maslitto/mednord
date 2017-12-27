<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'IndexController@index')->name('home');
    Route::get('catalog/{subcategory?}', 'CatalogController@index')
        ->name('catalog')
        ->where('subcategory', '[a-zA-Z0-9/_-]+');

    Route::get('/products/{slug}', 'CatalogController@view')->name('product');
    Route::get('/search', 'CatalogController@search')->name('search');
    Route::get('/kontakty', function () {
        return view('contacts');
    })->name('kontakty');
    Route::get('/o-kompanii', function () {
        return view('about');
    })->name('about');
    Route::get('/proizvoditeli/', 'VendorController@index');
    Route::get('/proizvoditeli/{slug?}', 'VendorController@view');
    Route::post('/question/save', 'QuestionController@save');
});
