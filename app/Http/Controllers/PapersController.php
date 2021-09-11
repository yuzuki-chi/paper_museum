<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PapersController extends Controller
{
    public function index ()
    {
        // return view('paper');
        // return Paper::lateset()->paginate();
        return DB::table('papers')->get();
    }

    public function store(Request $request) 
    {
        return Paper::create($request->all());
    }

    public function show (Paper $paper)
    {
        // return view('paper_page', ['paper_id'=>$paper_id]);
        // return DB::table('papers')->where('id', $paper->id)->first();
        return $paper;
    }

    public function update(Request $request, Paper $paper)
    {
        $paper->update($request->all());
        return $paper;
    }

    public function destroy(Paper $paper)
    {
        $deleted = $paper->delete();
        return compact('deleted');
    }
}