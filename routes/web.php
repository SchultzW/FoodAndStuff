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
//Dynamic routes

/*
variable will probably be used oto query db
Route::get('/user/{id}'), function($id)
{
    return 'this is user'.$id
}
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

//Route views through a controller. when user goes to '/'
//it routes to the index method in the pages controller
//can see all routes with php artisan route:list
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts','PostController');//use to create routes for CRUD operations
