<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\AuthorController;
use \Illuminate\Support\Facades\Auth;

Route::get('/pm', function () {
   return view('pm');
});

/**
 * Paper
 */
Route::get('/paper', [PaperController::class, 'view_list']);
Route::get('/paper/new', function () {
    if (Auth::check()) {
        return view('paper.new');
    } else {
        return redirect('login');
    }
});
Route::post('/paper/new', [PaperController::class, 'store']);
Route::get('/paper/{paper_id}', [PaperController::class, 'view_specific']);

/**
 * Author
 */
Route::get('/author', [AuthorController::class, 'view_list']);
Route::get('/author/new', function () {
    if (Auth::check()) {
        return view('author.new');
    } else {
        return redirect('login');
    }
});
Route::post('/author/new', [AuthorController::class, 'store']);
Route::get('/author/{author_id}', [AuthorController::class, 'view_specific']);
