<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PapersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ./vendor/bin/sail artisan db:seed --class=PapersTableSeeder
     * @return void
     */
    public function run()
    {
        $make_count = 10;
        
        for ($i=0; $i < $make_count; $i++) { 
            DB::table('papers')->insert([
                'title' => Str::random(10),
                'submit' => '2021/07/31',
                'paper_type' => 1,
                'belonging_id' => 1,
                'lab_id' => 1,
                'url' => Str::random(10). '.jp',
                'description' => Str::random(300),
            ]);
        }
    }
}
