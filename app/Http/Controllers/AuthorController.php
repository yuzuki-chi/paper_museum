<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    function view_list() {
        $authors = Author::all();
        return view('author.list', ['authors' => $authors]);
    }

    function store(Request $req) {
        /* 対応中 */
        $author = [
            'name_family' => $req->name_family,
            'name_first' => $req->name_first,
        ];
        Author::create($author);
        return view('author.list', ['authors' => Author::all()]);
    }
}
