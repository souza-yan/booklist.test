<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/livros', [BooksController::class, 'index'])->name('books.index');
Route::get('/livros/criar', [BooksController::class, 'create'])->name('books.create');
Route::post('/livros/criar', [BooksController::class, 'store'])->name('books.store');
Route::get('/livros/{book}', [BooksController::class, 'show'])->name('books.show');
Route::get('/livros/{book}/editar', [BooksController::class, 'edit'])->name('books.edit');
Route::put('/livros/{book}/editar', [BooksController::class, 'update'])->name('books.update');
Route::delete('/livros/{book}/excluir', [BooksController::class, 'destroy'])->name('books.destroy');
