<?php

namespace App\Http\Controllers;

use App\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index (Request $request)
    {
        $items = Author::all();
        return view ('author.index', ['items' => $items]);
    }
}
