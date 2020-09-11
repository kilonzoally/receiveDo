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

Route::get('test','testController@test');
Route::get('about','testController@about')->middleware('test:doto');


//Route::get('Hello/{$kitu}',function($kitu){
  //echo 'Habari: '.$kitu;
//});

// Route::get('hello/{name?}',function($name ='doto Namkaaa') {
//   }); echo 'ID: '.$name;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


