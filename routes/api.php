<?php

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

Route::post('/countries',
    [App\Http\Controllers\API\CountryController::class, 'getModels'])->middleware('api-token');
Route::post('/countries/{slug}',
    [App\Http\Controllers\API\CountryController::class, 'getModel'])->middleware('api-token');

Route::post('/football-clubs',
    [App\Http\Controllers\API\FootballClubController::class, 'getModels'])->middleware('api-token');
Route::post('/football-club/{id}',
    [App\Http\Controllers\API\FootballClubController::class, 'getModel'])->middleware('api-token');
