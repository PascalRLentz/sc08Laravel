<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something nasty!
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
Route::get('alte_herren', function () {
    return view('sites/senioren/alteherren');
});
Route::get('jugendvorstand', function () {
    return view('sites/jugend/jugendvorstand');
});
Route::get('jugendleiter', function () {
    return view('sites/jugend/jugendleiter');
});
Route::get('a-jugend', function () {
    return view('sites/jugend/a-jugend');
});
Route::get('c-jugend', function () {
    return view('sites/jugend/c-jugend');
});
Route::get('d1-jugend', function () {
    return view('sites/jugend/d1-jugend');
});
Route::get('d2-jugend', function () {
    return view('sites/jugend/d2-jugend');
});
Route::get('e1-jugend', function () {
    return view('sites/jugend/e1-jugend');
});
Route::get('e2-e3-jugend', function () {
    return view('sites/jugend/e2-e3-jugend');
});
Route::get('f1-jugend', function () {
    return view('sites/jugend/f1-jugend');
});
Route::get('f2-jugend', function () {
    return view('sites/jugend/f2-jugend');
});
Route::get('f3-jugend', function () {
    return view('sites/jugend/f3-jugend');
});

Route::get('1mannschaft', function () {
    return view('sites/senioren/1mannschaft');
});
Route::get('2mannschaft', function () {
    return view('sites/senioren/2mannschaft');
});

Route::group(['prefix' => 'kontakt', 'as' => 'kontakt.'], function () {
        Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\ContactController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'anmeldung', 'as' => 'anmeldung.'], function () {
    Route::get('/', [\App\Http\Controllers\RegisterFormController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\RegisterFormController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'fotos', 'as' => 'fotos.'], function () {
    Route::get('/', [\App\Http\Controllers\FotoController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\FotoController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'sponsoren', 'as' => 'sponsoren.'], function () {
    Route::get('/', [\App\Http\Controllers\SponsorController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\SponsorController::class, 'store'])->name('store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

