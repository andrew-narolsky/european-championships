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
Route::get('/countries/{id}', [App\Http\Controllers\API\CountryController::class, 'index'])->name('countries');

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
    Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin');

    // Countries
    Route::resource('/countries', App\Http\Controllers\Admin\CountryController::class, ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
});
