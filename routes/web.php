<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Show country
Route::get('/country/{id}',
    [App\Http\Controllers\API\CountryController::class, 'index'])
    ->name('countries');

// Show football club
Route::get('/football-club/{id}',
    [App\Http\Controllers\API\FootballClubController::class, 'index'])
    ->name('football-clubs');

// Auth
Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

// Admin
Route::group(
    ['prefix'=>'admin',
    'middleware' => 'auth'], function () {
    Route::get('/',
        [App\Http\Controllers\Admin\MainController::class, 'index'])
        ->name('admin');

    // Countries
    Route::resource('/countries',
        App\Http\Controllers\Admin\CountryController::class,
        ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]
    );

    // Competition Types
    Route::resource('/competition-type',
        App\Http\Controllers\Admin\CompetitionTypeController::class,
        ['only' => ['index']]
    );

    // Competition
    Route::resource('/competition',
        App\Http\Controllers\Admin\CompetitionController::class,
        ['only' => ['create', 'store', 'edit', 'update', 'destroy']]
    );

    // Football Club
    Route::resource('/football-clubs',
        App\Http\Controllers\Admin\FootballClubController::class,
        ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]
    );
});
