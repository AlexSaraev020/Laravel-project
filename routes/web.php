<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('principal');
})->name('principal');



Route::get('/post/preview',[\App\Http\Controllers\PostController::class,'preview'])->name('post.preview');

Route::get('/post/create',[\App\Http\Controllers\PostController::class,'create'])->name('post.create');

Route::post('/post/store',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');

Route::delete('/post/delete/{post}',[\App\Http\Controllers\PostController::class,'destroy'])->name('post.delete');

Route::get('/post/readmore/{post}',[\App\Http\Controllers\PostController::class,'readmore'])->name('post.readmore');

Route::get('/post/edit/{post}',[\App\Http\Controllers\PostController::class,'edit'])->name('post.edit');

Route::patch('/post/edit/{post}',[\App\Http\Controllers\PostController::class,'update'])->name('post.update');
