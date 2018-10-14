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

Route::get('/', 'PublicController@index' )->name('index');
Route::get('post/{id}', 'PublicController@singlePost' )->name('singlePost');
Route::get('about', 'PublicController@about' )->name('about');
Route::get('contact', 'PublicController@contact' )->name('contact');
Route::post('contact', 'PublicController@contactPost' )->name('contactPost');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| contiene todos las rutas del admins
|
|
*/
Route::prefix('admin')->group(function (){

     #=====   Admin Dashboard    =============
    route::get('/dashboard','AdminController@dashboard')->name('adminDashboard');

});
