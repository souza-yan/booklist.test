<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/livros', function () {
    return view('books.index');
})->name('books.index');
