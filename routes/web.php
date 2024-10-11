<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages/{id}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::post('/pages/{id}/content-blocks', [PageController::class, 'addContentBlock'])->name('pages.addContentBlock');
