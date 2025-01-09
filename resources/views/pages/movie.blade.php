@extends('layouts.app')
@section('content')
    <div class="container mx-auto mt-8 mb-8 min-h-full" id="movies" data-scroll-index="1">
        <h1 class="lg:text-3xl text-xl font-bold text-center text-gray-800 leading-tight mt-12 mb-8">
            Lihat Film Lebih banyak disini
        </h1>
        <form action="{{ url('/movies') }}" method="get">
            <div class="flex items-center justify-center mb-8 lg:p-0 px-3">
                <label class="input input-bordered flex items-center gap-2 rounded-3xl lg:w-1/2 w-full ">
                    <input id="search-input" name="search" type="text" class="grow p-2" placeholder="Cari Film, Ketik Lalu Enter" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </label>
            </div>
        </form>
        @if (Request::has('search'))
        <div class="text-center mb-5">
            <a href="{{ url('/movies') }}" class="btn btn-primary rounded-full btn-sm md:text-md text-xs">Reset</a>
        </div>
        @endif

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-6 gap-3 px-2 lg:px-6"
            id="movies-container">
            @forelse ($movies as $item)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden movie-item">
                    <a data-lightbox="post-content" href="{{ asset('storage/' . $item->poster) }}">
                        <img src="{{ asset('storage/' . $item->poster) }}" alt="{{ $item->title }}"
                            class="w-80 object-cover transition duration-500 ease-in-out hover:scale-90 hover:rounded-lg">
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/detail/' . $item->id) }}" class="block">
                            <h2
                                class="lg:text-xl text-lg font-semibold text-gray-900 hover:text-blue-600 transition duration-200 ease-in-out min-h-14 mb-2">
                                {{ $item->title }}
                            </h2>
                            <p class="text-sm text-gray-500 mt-2">{{ $item->created_at }}</p>
                            <div class="flex items-center mt-2 mb-2">
                                <span class="text-yellow-400">🗓️</span>
                                <span class="ml-1">{{ $item->year }}</span>
                            </div>
                            <a href="{{ url('/detail/' . $item->id) }}"
                                class="btn btn-primary ml-auto rounded-full btn-sm md:text-md text-xs">Lihat
                                Selengkapnya</a>
                        </a>
                    </div>
                </div>
            @empty
                <h3 class="text-center mb-5">Maaf Data Tidak Ditemukan</h3>
            @endforelse
        </div>
        <div class="justify-center mt-5">
            {{ $movies->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
