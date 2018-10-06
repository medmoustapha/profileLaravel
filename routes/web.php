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
Route::post('/addprofile','ProfileController@store');
Route::get('/profiles','ProfileController@allProfiles');
Route::get('/getProfile/{id}','ProfileController@getProfile');
Route::post('/editProfile/{id}','ProfileController@updateProfile');
Route::get('/deleteProfile/{id}','ProfileController@deleteProfile');

