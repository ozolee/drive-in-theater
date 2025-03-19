<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Screening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScreeningController extends Controller
{
    /**
     * Lists all the movies for a specific day
     *
     * @param $day
     * @return mixed
     */
    public function index($day)
    {
        $screenings = DB::table('screenings')
            ->select(['screenings.*', 'films.title','films.age_rating','films.poster_image'])
            ->leftJoin('films', 'films.id', '=', 'screenings.film_id')
            ->whereRaw("screenings.time LIKE '" . $day . "%'")
            ->get();

        return response()->json($screenings);
    }
}
