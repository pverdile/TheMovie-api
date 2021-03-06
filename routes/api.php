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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resources([
//     '/movies'           => 'Api\MoviesController',
//     '/discover'         => 'Api\DiscoverController',
//     '/genres'           => 'Api\GenresController',
//     '/trending'         => 'Api\TrendingController'
// ]);

Route::get('/movies', 'Api\MoviesController@index');
Route::get('/discover', 'Api\DiscoverController@index');
Route::get('/genres', 'Api\GenresController@index');
Route::get('/trending', 'Api\TrendingController@index');
