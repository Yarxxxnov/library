<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show() {
        $books = Book::all();

        return view('spa', ['books' => $books]);
    }

    public function add(Request $request) {
        $books = new Book;
        $books->title = "Новая книга";
        $books->author = "Автор";
        $books->availability = true;
        $books->save();

        return back();
    }

    public function all() {
        return Book::all();
    }

    public function delete($id) {
        $books = Book::destroy($id);
        return back();
    }

    public function changeAvailabilty($id) {
        $books = Book::find($id);
        $books->availability = $id;
        $books->save();

        return back();
    }
}
