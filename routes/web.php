<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PapersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

/**
 * ログイン機能
 */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/**
 * 基本機能
 */

Route::get('/paper', [PapersController::class, 'index']);

Route::get('/paper/list', [PapersController::class, 'showAll']);

Route::get('/paper/new', function () {
    return view('paper_new');
});

/* search */
Route::get('/paper/search', function () {
    return view('paper_search');
});

Route::get('/paper/{paper_id}', [PapersController::class, 'show']);

Route::get('/paper/{paper_id}/edit', function ($paper_id) {
    return view('paper_edit', ['paper_id'=>$paper_id]);
});