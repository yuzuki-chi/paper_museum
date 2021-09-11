<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    // use HasFactory;
    
    // WhiteList
    protected $fillable = [ 
        'title', 
        'submit', 
        'paper_type', 
        'belonging_id', 
        'lab_id', 
        'url', 
        'description'
    ];
}
