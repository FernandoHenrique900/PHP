<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hail', function () {
    echo "Hail to the King";
    });

Route::get('/series',[SeriesController::class,'listarSeries']);
