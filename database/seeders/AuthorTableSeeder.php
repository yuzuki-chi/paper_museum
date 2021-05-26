<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name_famiry' => Str::random(10),
            'name_famiry_kana' => Str::random(10),
            'name_first' => Str::random(10),
            'name_first_kana' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'homepage' => 'https://'.Str::random(5).'com',
            'phone' => '000-0000-0000',
            'alias_name' => Str::random(10),
        ]);
    }
}
