<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// phpinfo();
// Route::group(['middleware' => 'cors'], function() {
//     Route::get('ping', function () {
//         return 'pong';
//     });

//     Route::resource('clients', 'ClientController');
//     Route::get('clients/{client}/items', 'ClientController@getClientItems');


//     Route::resource('items', 'ItemController');

//     Route::resource('diversities', 'DiversityController');
//     Route::get('diversities/{id}', 'DiversityController@findByClient');

//     Route::resource('items_diversities', 'ItemDiversityController');

// });

Route::get('ping', function () {
    return 'pong';
});

Route::resource('clients', 'ClientController');
Route::get('clients/{client}/items', 'ClientController@getClientItems');


Route::resource('items', 'ItemController');

Route::resource('diversities', 'DiversityController');
Route::get('diversities/{id}', 'DiversityController@findByClient');

Route::resource('items_diversities', 'ItemDiversityController');
