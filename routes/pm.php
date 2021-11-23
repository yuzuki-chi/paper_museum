<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperController;
use \Illuminate\Support\Facades\Auth;

Route::get('/pm', function () {
   return view('pm');
});

Route::get('/paper', [PaperController::class, 'index']);
Route::get('/paper/new', function () {
    if (Auth::check()) {
        return view('paper.new');
    } else {
        return redirect('login');
    }
});
Route::post('/paper/new', [PaperController::class, 'store']);
