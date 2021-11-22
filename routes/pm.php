<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperController;

Route::get('/pm', function () {
   return view('pm');
});

Route::get('/paper', [PaperController::class, 'index']);
Route::get('/paper/new', function () {
    return view('paper.new');
});
Route::post('/paper/new', [PaperController::class, 'store']);
