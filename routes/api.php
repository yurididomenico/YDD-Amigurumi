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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); // Il back-end manda in formato json le informazioni al front-end e per poi ciclarle e stamparle

Route::namespace('Api')->prefix('/puppets')->group(function () {
    Route::get('/', 'PuppetsController@index');
});
