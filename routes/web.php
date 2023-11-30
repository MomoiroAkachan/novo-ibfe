<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

// Grupo de páginas principais da aplicação
Route::controller(HomeController::class)->group(function(){
    // Rotas principais
    Route::get('/', 'index')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('test', 'test')->name('test')->middleware('user.acess');
});

// Rotas relativas ao questionário
Route::controller(SurveyController::class)->group(function(){
    Route::get('survey', 'index')->name('survey.index')->middleware('user.acess');
    Route::post('survey/{fun}', 'store')->name('survey.store')->middleware('user.acess');
    Route::get('survey/result', 'showResult')->name('survey.show.result')->middleware('user.acess');
});

// Rotas relativas ao perfil
Route::controller(ProfileController::class)->group(function(){
    Route::get('profile', 'index')->name('profile.index');
    Route::post('profile', 'store')->name('profile.store');

    Route::get('profile/delete', function () {
        session()->flush();
        return redirect()->route('profile.index');
    })->name('profile.delete');

});

Route::get('/que', [SurveyController::class, 'index'])->name('que');