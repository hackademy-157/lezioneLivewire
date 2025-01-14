<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class , 'home'])->name('home');
Route::get('/article/index' , [PublicController::class , 'index'])->name('article.index');
Route::get('/article/{id}' , [PublicController::class , 'edit'])->name('article.edit');
