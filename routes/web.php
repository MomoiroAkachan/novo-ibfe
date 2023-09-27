<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
    // Rotas principais
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/error/{id}', 'page_error')->name('page_error');
    Route::get('/coming_soon', 'coming_soon')->name('coming_soon');
});

Route::controller(SurveyController::class)->group(function(){
    Route::get('survey', 'index')->name('survey.index');
    Route::post('survey/next', 'next')->name('survey.next');
    Route::post('survey/prev', 'prev')->name('survey.prev');
});