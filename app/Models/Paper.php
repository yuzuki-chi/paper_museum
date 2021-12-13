<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = [
        'title',
        'submit',
        'author_id',
        'url',
        'file_locate',
        'description',
    ];
}
