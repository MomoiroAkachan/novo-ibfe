<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/questionary', 'questionary')->name('questionary');
    Route::get('/questionary_result', 'questionary_result')->name('questionary_result');
    Route::get('/{id}', 'page_error')->name('page_error');
    Route::get('/coming_soon', 'coming_soon')->name('coming_soon');
});