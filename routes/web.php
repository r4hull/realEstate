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

Route::get('/',"C@wlcm");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pages/{type}',"C@pages");
Route::post('/postform',"C@postform");
Route::post('/addAmenities',"C@addAmenities");
Route::post('/addProperty',"C@addProperty");
Route::get('/addCity',"C@addCity");
Route::post('/addNewCity',"C@addNewCity"); 
Route::get('/addGarage',"C@addGarage");
Route::get('/addprpt',"C@addprpt");
Route::get('/{title}/{prptFor}/{qq}',"C@prptDetail");
Route::get('/addInterior',"C@addInterior");
Route::post('/contactAgent',"C@contactAgent");
Route::get('/search',"C@search");
Route::post('/query',"C@query");
