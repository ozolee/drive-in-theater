<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'title', 'description', 'age_rating', 'language', 'poster_image',
    ];

    public function screenings()
    {
        return $this->hasMany(Screening::class);
    }
}
