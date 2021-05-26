<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('papers')->insert([
            'title' => Str::random(30),
            'submit' => '2021/05/25',
            'paper_type' => 1,
            'belonging_id' => 1,
            'lab_id' => 1,
            'url' => '/paper/2021/paper.pdf',
            'description' => Str::random(255),
        ]);
    }
}
