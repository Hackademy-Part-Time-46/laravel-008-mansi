<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        //$array = ['Libro 2', 'Divina Commedia', 'Otello'];
        $array = Book::all();

        return view('welcome', ['books' => $array]);
    }
}
