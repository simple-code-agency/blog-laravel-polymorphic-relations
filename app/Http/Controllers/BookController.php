<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Just count number of likes here
        return view('books', [
            'books' => Book::withCount('likes')->get()
        ]);
    }
}
