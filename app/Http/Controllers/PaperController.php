<?php

namespace App\Http\Controllers;

use App\Paper;

use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function index (Request $request)
    {
        $items = Paper::all();
        return view ('paper.index', ['items' => $items]);
    }
}
