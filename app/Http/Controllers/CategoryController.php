<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $books = $category->books();

        return view('category', [
            'books' => $books->with('detail')->paginate(5),
            'categories' => Category::all(),
            'title' => $category->category,
            'category' => $category,
        ]);
    }
}
