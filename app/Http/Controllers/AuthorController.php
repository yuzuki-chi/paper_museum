<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class AuthorController extends Controller
{
    function view_list() {
        $authors = Author::all();
        return view('author.list', ['authors' => $authors]);
    }

    function view_specific($author_id) {
        $author = DB::table('authors')->where('id', $author_id)->first();
        return view('author.specific', ['author' => $author]);
    }

    function store(Request $req) {
        $author = [
            'name_family' => $req->name_family,
            'name_first' => $req->name_first,
            'name_family_kana' => $req->name_family_kana ?: null,
            'name_first_kana' => $req->name_first_kana ?: null,
        ];
        Author::create($author);
        return view('author.list', ['authors' => Author::all()]);
    }
}
