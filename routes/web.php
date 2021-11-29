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


Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('index');
Route::post('/mail', [App\Http\Controllers\LandingController::class, 'mailContactForm'])->name('mailContactForm');
Route::get('/reload-captcha', [App\Http\Controllers\LandingController::class, 'reloadCaptcha'])->name('reloadCaptcha');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
