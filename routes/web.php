<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

// Grupo de páginas principais
Route::controller(HomeController::class)->group(function(){
    // Rotas principais
    Route::get('/', 'index')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('services', 'services')->name('services');
    Route::get('teste', 'test')->name('test');
    // Route::get('error/{id}', 'page_error')->name('page_error');
    // Route::get('coming_soon', 'coming_soon')->name('coming_soon');
});

Route::controller(SurveyController::class)->group(function(){
    Route::get('survey', 'index')->name('survey.index');
    Route::post('survey', 'store')->name('survey.store');
    Route::get('survey/result', 'showResult')->name('survey.show.result');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('profile', 'index')->name('profile.index');
    Route::post('profile', 'store')->name('profile.store');
});