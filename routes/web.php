<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;
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

Route::get('/wanteditems', function () {
    return view('wanteditems');
});

Route::get('/trade', function () {
    return view('trade');
});



//WITH CONTROLLER
Route::resource('item', 'ItemsController');

// Route::get('/item/{id}', 'ItemsController@index'); //working with id
// Route::get('/item', 'ItemsController@index'); // working without id

Route::get('/createItem', 'ItemsController@create');
Route::get('/item/{id}', 'PostsController@show');
