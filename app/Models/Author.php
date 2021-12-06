<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name_family',
        'name_family_kana',
        'name_first',
        'name_first_kana'
    ];
}
