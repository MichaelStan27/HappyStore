<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'books' => Book::with('detail')->paginate(5),
            'categories' => Category::all(),
        ]);
    }
}
