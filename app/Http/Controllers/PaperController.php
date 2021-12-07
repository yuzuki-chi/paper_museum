<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        if($paper->file_locate == 1) {
            // $file_entity に実体のURLを貼ることで, 外部のURLにも対応する
            $file_entity = "/storage/paper_pdf/" . $paper->id . ".pdf";
        } else {
            $file_entity = null;
        }
        return view('paper.specific', ['paper' => $paper, 'author' => $author, 'file_entity' => $file_entity]);
    }

    public function store(Request $req) {
        $file_locate = 0;
        if(!empty($req->file('paper_pdf'))) {
            $pdf_path = $this->upload( $req->file( 'paper_pdf' ),
                                       Paper::max( 'id' ) + 1 . ".pdf" );
            $file_locate = 1;
        }

        $paper = [
            'title' => $req->title,
            'author_id' => $req->author_id ?: null,
            'url' => $pdf_path ?: null,
            'file_locate' => $file_locate ?: 0,
        ];
        Paper::create($paper);
        return view('paper.list', ['papers' => Paper::all()]);
    }

    private function upload($file, $file_name) {
        if (!is_null($file)) {
            date_default_timezone_set('Asia/Tokyo');

            $originalName = $file->getClientOriginalName();

            $dir = 'public/paper_pdf';
//            $file_name = $originalName;

            return $file->storeAs($dir, $file_name);
        }
        return null;
    }
}
