<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /** @use HasFactory<\Database\Factories\DirectorFactory> */
    use HasFactory;

    protected $fillable = ['name', 'birth_date', 'biography', 'profile_url'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_director');
    }
}
