<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Book $book)
    {
        return view('book-detail', [
            'categories' => Category::all(),
            'title' => $book->title,
            'book' => $book,
            'detail' => $book->detail,
        ]);
    }
}
