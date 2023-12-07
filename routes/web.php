<?php

use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

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

// rotas relativas ao perfil.
Route::controller(ProfileController::class)->group(function(){
    Route::get("/perfil", 'index')->name('profile');
    Route::post("/perfil/store", 'store')->name('profile.store');
    Route::delete("/perfil/delete", "delete")->name('profile.delete');
});

// rotas relativas ao questionário
Route::controller(SurveyController::class)->group(function(){
    Route::get("/questionario", 'index')->name('survey');
    Route::get("/questionario/resultados", 'show_results')->name('survey.show_results');
});

// rotas relativas à homepage
Route::controller(HomeController::class)->group(function(){
    Route::get("/", 'index')->name('home');
});

// rotas relativas ao guia
Route::controller(GuideController::class)->group(function(){
    Route::get("/guia", 'index')->name('guide');
});
