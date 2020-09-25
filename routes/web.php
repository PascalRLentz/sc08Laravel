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

Route::get('/', function () {
    return view('index');
});
Route::get('vorstand', function () {
    return view('sites/vorstand');
});
Route::get('foerderverein', function () {
    return view('sites/foerderverein');
});

Route::group(['prefix' => 'kontakt', 'as' => 'kontakt.'], function () {
        Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\ContactController::class, 'store'])->name('store');
});

Route::get('/anmeldung', function () {
    return view('sites/anmeldung');
});

Route::group(['prefix' => 'anmeldung', 'as' => 'anmeldung.'], function () {
    Route::get('/', [\App\Http\Controllers\RegisterFormController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\RegisterFormController::class, 'store'])->name('store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
