<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hail', function () {
    echo "Hail to the King";
    });

Route::get('/series',[SeriesController::class,'index']);
Route::get('/series/criar',[SeriesController::class,'create']); //rota do metodo create
Route::post('/series/salvar',[SeriesController::class,'store']);
