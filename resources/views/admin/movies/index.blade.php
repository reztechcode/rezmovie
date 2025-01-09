@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 px-5 mt-5">Movies List</h1>

    <div class="container mb-6 px-4">
        <a href="{{ route('movies.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-full mb-4">
            Add New Movie
        </a>
    </div>

    <div class="overflow-x-auto px-3">
        <table class="table-auto w-full border-collapse bg-white shadow-md rounded-3xl">
            <thead>
                <tr class="bg-blue-500 text-white text-left">
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Poster</th>
                    <th class="px-4 py-3">Genre</th>
                    <th class="px-4 py-3">Available</th>
                    <th class="px-4 py-3">Created</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-4 py-3 font-medium">{{ $movie->title }}</td>
                        <td class="px-4 py-3">
                            <a data-lightbox="post-content" href="{{ asset('storage/' . $movie->poster) }}">
                                <img src="{{ asset('storage/' . $movie->poster) }}" 
                                    alt="{{ $movie->title }}" 
                                    class="w-16 h-16 border">
                            </a>
                        </td>
                        <td class="px-4 py-3">{{ $movie->genre->name }}</td>
                        <td class="px-4 py-3">{{ $movie->available ? '✅' : '❌' }}</td>
                        <td class="px-4 py-3">{{ $movie->created_at->format('d-m-Y') }}</td>
                        <td class="px-4 py-3 text-center">
                            <div class="flex justify-center items-center gap-3">
                                <!-- Edit Button -->
                                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary text-white rounded-full">
                                    Edit
                                </a>
                                <!-- Delete Button -->
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" 
                                    onsubmit="return confirm('Are you sure you want to delete this movie?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-error text-white rounded-full">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <!-- Pagination -->
        <div class="mt-4">
            {{ $movies->links('pagination::tailwind') }}
        </div>
    </div>    
@endsection
