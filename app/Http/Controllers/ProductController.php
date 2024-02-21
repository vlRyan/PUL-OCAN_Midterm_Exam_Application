<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function books()
    {
        $books = ["Lord of the Rings", "The Hobbit", "Harry Potter"];
        return view('BookStore', compact('books'));
    }
}
