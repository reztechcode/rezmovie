<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\CastMovie;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari movie berdasarkan query
        if ($query) {
            $movies = Movie::where('title', 'like', "%{$query}%")
                ->orWhere('year', 'like', "%{$query}%")
                ->limit(8)
                ->get();
        } else {
            // Jika query kosong, ambil semua movie
            $movies = Movie::limit(8)->get();
        }

        // Mengembalikan data dalam format JSON jika permintaan AJAX
        if ($request->ajax()) {
            return view('partials.movies', compact('movies'))->render();
        }

        // Kembali ke response JSON jika bukan AJAX
        return view('partials.movies', compact('movies'))->render();
    }

    public function show(string $id)
    {
        $movies = Movie::with('cast')->with('genre')->findOrFail($id);
        return view('pages.detail', compact('movies'));
    }

    public function dashboard()
    {
        $countMovies = Movie::count();
        $countGenres = Genre::count();
        $countCast = Cast::count();
        return view('admin.dashboard', compact('countMovies', 'countGenres', 'countCast'));
    }

    public function all(){
        $filter = request()->query('filter');
        $search = request()->query('search');
    
        if ($search) {
            $movies = Movie::where('title', 'like', "%{$search}%")->paginate(10);
        } elseif ($filter == 'latest') {
            $movies = Movie::latest()->paginate(10);
        } else {
            $movies = Movie::orderBy('created_at', 'desc')->paginate(10);
        }
    
        return view('pages.movie', compact('movies'));
    }
}
