<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $genreId = $request->query('genre_id');
        $year = $request->query('year');

        $genres = Genre::all();

        $query = Movie::with('genre');

        if ($genreId) {
            $query = $query->where('genre_id', $genreId);
        }
        if ($year) {
            $query = $query->where('year', $year);
        }

        $movies = $query->get();

        return view('movies.index', compact('movies', 'genres', 'genreId', 'year'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'genre_id' => 'required|exists:genres,id',
            'rating' => 'required|numeric|min:0|max:10',
            'year' => 'required|integer|min:1900|max:2100',
        ]);

        Movie::create($validated);

        return redirect()->route('movies.index')->with('success', 'Movie added successfully.');
    }

    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    public function featured()
    {
        $movie = Movie::findOrFail(3);
        return view('movies.show', compact('movie'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
