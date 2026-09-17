<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::with('genre')->orderBy('title')->paginate(5);

        return view('books.index', [
            'books' =>  $books,
        ]);
    }

    public function create()
    {
        $genre = Genre::all();

        return view('books.create', [
            'genres' => $genre,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'published_year' => 'required|integer',
            'description' => 'nullable|string',
            'cover' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $validatedData['cover'] = $request->file('cover')->store();
        }

        // dd($request->all()); // debugando pra ver se os dados estão chegando corretamente
        //dd($validatedData); // debugando para ver se os dados validados estão corretos

        $book = Book::create($validatedData);

        return redirect()->route('books.index', $book->id);

    }


    public function show(Book $book)
    {
        $book->loadMissing('genre');
        return view('books.show', [
            'book' => $book,
        ]);
    }

    public function edit(Book $book)
    {
        $genres = Genre::all();

        return view('books.edit', [
            'book' => $book,
            'genres' => $genres,
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'published_year' => 'required|integer',
            'description' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            if ($book->cover) {

                Storage::delete($book->cover);
            }
            $validatedData['cover'] = $request->file('cover')->store();
        }

        $book->update($validatedData);

        return redirect()->route('books.show', $book->id);
    }

    public function destroy(Book $book)
    {
        if ($book->cover) {
            Storage::delete($book->cover);
        }

        $book->delete();

        return redirect()->route('books.index');
    }

}
