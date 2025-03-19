<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Screening;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Lists all the movies
     *
     * @return Collection
     */
    public function index()
    {
        return Film::all();
    }

    /**
     * Shows a specific movie with screening details
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $film = Film::with('screenings')->findOrFail($id);
        return response()->json($film);
    }

    /**
     * Save new movie into database
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'age_rating' => 'required|string',
            'language' => 'required|string',
            'poster_image' => 'required|string',
        ]);

        return Film::create($validated);
    }

    /**
     * Update movie
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);
        $validated = $request->validate([
            'title' => 'string|max:255',
            'description' => 'string',
            'age_rating' => 'string',
            'language' => 'string',
            'poster_image' => 'string',
        ]);

        $film->update($validated);
        return $film;
    }

    /**
     * Remove movie
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        if ($film) {
            Screening::where('film_id', $id)->delete();
        }
        $film->delete();
        return response()->json(['message' => 'Filmadatok sikeresen törölve!'], 200);
    }
}
