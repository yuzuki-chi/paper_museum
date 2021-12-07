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
        return view('paper.specific', ['paper' => $paper]);
    }

    public function store(Request $req) {
        $title = $req->title;
        Paper::create(['title' => $title]);
        return view('paper.list', ['papers' => Paper::all()]);
    }
}
