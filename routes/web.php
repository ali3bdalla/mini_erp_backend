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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['register' => false]);


Route::middleware('auth')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource("products","ProductController");
    Route::resource("attachments","AttachmentController");

    //  get =>  /products => products.index
    //  post =>  /products => products.store
    // get => /products/create  => products.create
    // get => /products/{id}/edit  => products.edit,{id}
    // get => /products/{id}  => products.show ,{id}
    // delete => /products/{id}  => attachments.destroy,{id}
    // put => /products/{id}/update  => products.update,{id}

    Route::resource("tags","TagController");
});

