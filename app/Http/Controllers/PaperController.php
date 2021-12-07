<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaperController extends Controller
{
    public function view_list() {
        $papers = Paper::all();
        return view('paper.list', ['papers' => $papers]);
    }

    public function view_specific($paper_id) {
        $paper = DB::table('papers')->where('id', $paper_id)->first();
        if(!is_null($paper->author_id))
            $author = DB::table('authors')->where('id', $paper->author_id)->first();
        else
            $author = null;
        return view('paper.specific', ['paper' => $paper, 'author' => $author]);
    }

    public function store(Request $req) {
        $paper = [
            'title' => $req->title,
            'author_id' => $req->author_id ?: null,
        ];
        Paper::create($paper);
        return view('paper.list', ['papers' => Paper::all()]);
    }
}
