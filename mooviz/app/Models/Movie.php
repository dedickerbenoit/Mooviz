<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    //data that can be modified
    protected $fillable = [
        'title',
        'overview',
        'poster_path',
        'release_date',
        'vote_average',
        'vote_count'
    ];
}