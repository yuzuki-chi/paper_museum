<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function index() {
        $papers = Paper::all();
        return view('paper.list', ['papers' => $papers]);
    }

    public function store(Request $req) {
        $title = $req->title;
        Paper::create(['title' => $title]);
        return view('paper.list', ['papers' => Paper::all()]);
    }
}
