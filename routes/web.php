<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

// Grupo de páginas principais
Route::controller(HomeController::class)->group(function(){
    // Rotas principais
    Route::get('/', 'index')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('services', 'services')->name('services');
    Route::get('error/{id}', 'page_error')->name('page_error');
    Route::get('coming_soon', 'coming_soon')->name('coming_soon');
});

Route::controller(SurveyController::class)->group(function(){
    Route::get('survey', 'profile_index')->name('survey.profile.index');
    Route::post('survey', 'profile_store')->name('survey.profile.store');
    Route::get('survey/survey', 'survey_index')->name('survey.survey.index');
    Route::post('survey/survey', 'survey_store')->name('survey.survey.store');
});