<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    protected $fillable = [
        'time', 'available_seats', 'film_id',
    ];

    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
