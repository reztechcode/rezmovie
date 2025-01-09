@extends('layouts.admin')
@section('content')
<main class="flex-grow p-6 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Example Card -->
        <div class="p-6 bg-white shadow-md rounded-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Genre</h3>
            <p class="mt-2 text-3xl font-bold text-indigo-600">{{ $countGenres }}</p>
        </div>
        <div class="p-6 bg-white shadow-md rounded-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Movie</h3>
            <p class="mt-2 text-3xl font-bold text-green-600">{{ $countMovies }}</p>
        </div>
        <div class="p-6 bg-white shadow-md rounded-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Cast</h3>
            <p class="mt-2 text-3xl font-bold text-red-600">{{ $countCast }}</p>
        </div>
    </div>
</main>
@endsection