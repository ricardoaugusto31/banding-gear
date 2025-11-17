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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "PageController@home"); 
Route::get('/peripherals', "PageController@peripherals");
Route::get('/peripherals/addnew', "PageController@peripheralsaddnew");
Route::post('/peripherals/save', "PageController@peripheralssave");
Route::get('/peripherals/editform/{id}', "PageController@peripheralseditform");
Route::put('/peripherals/update/{id}', "PageController@peripheralsupdate");
Route::get('/peripherals/delete/{id}', "PageController@peripheralsdelete");





