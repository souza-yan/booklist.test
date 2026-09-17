<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::latest()->take(3)->get();

        return view('index', [
            'books' => $books,
        ]);
    }
}
