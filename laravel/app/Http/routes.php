<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('admin', 'admin\ResidentialController@index');

Route::get('come','admin\ResidentialController@come');
Route::get('top','admin\ResidentialController@top');
Route::get('left','admin\ResidentialController@left');
Route::get('right','admin\ResidentialController@right');
