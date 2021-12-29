<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::prefix('contents')->group(function() {
    Route::get('/list', [ContentController::class, 'list'])->name('contents.list');
    Route::get('/create/form', [ContentController::class, 'createForm'])->name('contents.create.form');
    Route::get('/update/form/{content_id}', [ContentController::class, 'updateForm'])->name('contents.update.form');
    Route::get('/delete/{content_id}', [ContentController::class, 'delete'])->name('contents.delete');
    Route::post('/create', [ContentController::class, 'create'])->name('contents.create');
    Route::post('/update', [ContentController::class, 'update'])->name('contents.update');
});

