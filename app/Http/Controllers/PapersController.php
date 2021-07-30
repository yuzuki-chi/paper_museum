<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PapersController extends Controller
{
    public function index ()
    {
        return view('paper');
    }

    public function show ($paper_id)
    {
        return view('paper_page', ['paper_id'=>$paper_id]);
    }

    public function showAll ()
    {
        $papers = DB::table('papers')->get();
        return view('paper_list', ['papers'=>$papers]);
    }
}