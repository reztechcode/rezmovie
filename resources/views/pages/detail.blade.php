@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center lg:py-12">
    <div class="bg-white shadow-xl rounded-2xl max-w-4xl w-full p-6 space-y-6">
        <p class="font-semibold text-xl">Detail Movie - {{ $movies->title }}</p>
        <!-- Header Film -->
        <div class="flex flex-col md:flex-row items-center justify-between">
            <a data-lightbox="post-content" href="{{ asset('storage/' . $movies->poster) }}">
            <img src="{{ asset('storage/' . $movies->poster) }}" alt="Film Poster" class="rounded-lg shadow-lg w-36 md:w-56 mb-4 md:mb-0">
            </a>
            <div class="ml-0 md:ml-6 w-full">
                <h2 class="text-3xl font-bold text-gray-800">{{ $movies->title }}</h2>
                <p class="text-lg text-gray-500 pt-1">{{ $movies->year }}</p>
                <div class="flex items-center space-x-3 mt-2">
                    <span class="text-yellow-400">★</span>
                    <span class="text-lg">8.7</span>
                </div>
                <div class="mt-4 flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-4">
                    <a href="{{ $movies->trailer_link }}" target="_blank" class="btn btn-primary w-full rounded-full md:w-auto">Watch Trailer</a>
                    @auth
                    <button class="btn btn-secondary w-full rounded-full md:w-auto">Add to Watchlist</button>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Plot and Description -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-800">Synopsis</h3>
            <p class="text-gray-600 mt-2">{{ $movies->synopsis }}</p>
        </div>

        <!-- Genres and Other Info -->
        <div class="mt-6">
            <h3 class="text-xl font-semibold text-gray-800">Genres</h3>
            <div class="flex flex-wrap space-x-4 mt-2">
                <span class="badge badge-secondary badge-outline uppercase">{{ $movies->genre->name }}</span>
            </div>
        </div>

         <!-- Director and Cast -->
         <div class="mt-6">
            <h3 class="text-xl font-semibold text-gray-800">Cast</h3>
            <div class="mt-2">
                <p class="font-medium text-gray-800 mt-2">Cast: 
                    @foreach ($movies['cast'] as $item)
                    <span class="text-gray-600">{{ $item->name }}, </span>
                    @endforeach
                </p>
            </div>
        </div>
        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-800">Status Availability: 
                @if ($movies->available)
                <div class="badge badge-primary">Tersedia</div>
                @else
                <div class="badge badge-error">Tidak Tersedia</div>
                @endif

            </h3>
        </div>

        <!-- More Info -->
        <div class="mt-6 flex justify-between items-center">
            <a href="{{ url('/') }}" class="btn btn-warning text-white btn-sm rounded-full">Kembali</a>
            <span class="text-sm text-gray-500">Duration: {{ $movies->duration }}</span>
        </div>
    </div>
</div>
@endsection
