<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
    {
        Route::get('/', function () {
            return view('home');
        })->name('home');

        Route::resource('books', BookController::class);

        Route::get('/contacto', [ContactController::class, 'create'])->name('contact.create');
        Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
    }
);