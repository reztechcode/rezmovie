<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\CastMovie;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->paginate(10);
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('admin.movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        // Validasi input data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'poster' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'year' => 'required|integer',
            'trailer_link' => 'nullable|string',
            'duration' => 'nullable|integer',
            'available' => 'nullable|string|in:on,off',
            'genre_id' => 'required|exists:genres,id',
        ]);
        $validated['available'] = $request->input('available') === 'on' ? 1 : 0;

        // Menyimpan file poster
        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
        }

        // Membuat movie baru
        Movie::create([
            'title' => $validated['title'],
            'synopsis' => $validated['synopsis'],
            'poster' => $posterPath ?? null,
            'year' => $validated['year'],
            'trailer_link' => $validated['trailer_link'],
            'duration' => $validated['duration'],
            'available' => $validated['available'],
            'genre_id' => $validated['genre_id'],
        ]);

        return redirect()->route('movies.index')->with('success', 'Movie created successfully');
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('admin.movies.show', compact('movie'));
    }

    public function edit($id)
    {
        $genres = Genre::all();
        $movie = Movie::with('cast')->findOrFail($id);
        return view('admin.movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'poster' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'year' => 'required|integer',
            'trailer_link' => 'nullable|string',
            'duration' => 'nullable|integer',
            'available' => 'nullable|string|in:on,off',
            'genre_id' => 'required|exists:genres,id',
        ]);
        $validated['available'] = $request->input('available') === 'on' ? 1 : 0;
        $movie = Movie::findOrFail($id);

        // Menyimpan file poster baru jika ada
        if ($request->hasFile('poster')) {
            if ($movie->poster && Storage::exists('public/' . $movie->poster)) {
                Storage::delete('public/' . $movie->poster);
            }
            $posterPath = $request->file('poster')->store('posters', 'public');
            $movie->poster = $posterPath;
        }

        $movie->update([
            'title' => $validated['title'],
            'synopsis' => $validated['synopsis'],
            'year' => $validated['year'],
            'trailer_link' => $validated['trailer_link'],
            'duration' => $validated['duration'],
            'available' => $validated['available'],
            'genre_id' => $validated['genre_id'],
        ]);

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        if ($movie->poster && Storage::exists('public/' . $movie->poster)) {
            Storage::delete('public/' . $movie->poster);
        }
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
    }
}
