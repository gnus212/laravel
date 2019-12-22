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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('/', function () {         Ч. 2        02:25
    return view('index');
});*/
Route::get('/', 'MainController@index');
Route::get('/categories', 'MainController@categories');
Route::get('/{category}', 'MainController@category');
/*Route::get('/mobiles/{poduct}', 'MainController@product');*/
Route::get('/mobiles/{poduct?}', 'MainController@product');   //ставим знак ? poduct?,
//чтобы сделать его необязательным
//2  06:41


/*Route::get('/categories', function () {
    return view('categories');
});

Route::get('/mobiles/iphone_x_64', function () {
return view('product');
});*/
