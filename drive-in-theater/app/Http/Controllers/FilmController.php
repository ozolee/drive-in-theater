<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Screening;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    public function show($id)
    {
        $film = Film::with('screenings')->findOrFail($id);
        return response()->json($film);
    }

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
