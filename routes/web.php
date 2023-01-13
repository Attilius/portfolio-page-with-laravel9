<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageNotFoundController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('home');
});

Route::get('/lang', [LanguageController::class, 'index']);
Route::get('/lang', [LanguageController::class, 'change'])->name('changeLang');
Route::get('/{slug}', [PageNotFoundController::class, 'show']);
Route::post('/contact/submit', [ContactController::class, 'submit']);
