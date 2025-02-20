<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Define the books array
        $books = [
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'year' => 1960],
            ['title' => '1984', 'author' => 'George Orwell', 'year' => 1949],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'year' => 1813],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'year' => 1925],
            ['title' => 'Moby-Dick', 'author' => 'Herman Melville', 'year' => 1851]
        ];

        return view('products.index', compact('books'));
    }
}
