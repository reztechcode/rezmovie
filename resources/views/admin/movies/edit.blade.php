@extends('layouts.admin')

@section('content')
    <div class="px-4 md:px-8 py-6">
        <h1 class="text-3xl font-semibold mb-6">Edit Movie - {{ $movie->title }}</h1>

        <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6 bg-white p-6 shadow-lg rounded-lg">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
                    <!-- Title Field -->
                    <div class="mb-4">
                        <label for="title" class="label">
                            <span class="label-text">Title</span>
                        </label>
                        <input type="text" name="title" id="title" class="input input-bordered w-full"
                            value="{{ old('title', $movie->title) }}">
                    </div>

                    <!-- Synopsis Field -->
                    <div class="mb-4">
                        <label for="synopsis" class="label">
                            <span class="label-text">Synopsis</span>
                        </label>
                        <textarea name="synopsis" id="synopsis" class="textarea textarea-bordered w-full h-44">{{ old('synopsis', $movie->synopsis) }}</textarea>
                    </div>


                    <div class="flex flex-wrap gap-3">
                        <!-- Genre Dropdown -->
                        <div class="mb-4 w-48">
                            <label for="genre_id" class="label">
                                <span class="label-text">Genre</span>
                            </label>
                            <select name="genre_id" id="genre_id" class="select select-bordered w-full">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}"
                                        {{ $movie->genre_id == $genre->id ? 'selected' : '' }}>
                                        {{ $genre->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- Duration --}}
                        <div class="mb-4 w-1/2">
                            <label for="duration" class="label">
                                <span class="label-text">Duration (on Minutes)</span>
                            </label>
                            <input type="number" name="duration" id="duration" class="input input-bordered w-full"
                                value="{{ $movie->duration }}">
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <!-- Available Checkbox -->
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" name="available" id="available" class="checkbox checkbox-primary mr-2"
                                {{ $movie->available ? 'checked' : '' }}>
                            <label for="available" class="label-text">Available</label>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
                    <!-- Poster Field -->
                    <div class="mb-4">
                        @if ($movie->poster)
                            <div class="mt-4">
                                <a href="{{ asset('storage/' . $movie->poster) }}" data-lightbox="post-content">
                                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->title }}"
                                        class="w-16 mx-auto rounded-md shadow-md mt-3 mb-5">
                                </a>
                            </div>
                        @endif
                        <label for="poster" class="label">
                            <span class="label-text">Poster</span>
                        </label>
                        <input type="file" name="poster" id="poster" class="file-input file-input-bordered w-full">
                    </div>

                    <!-- Year Field -->
                    <div class="mb-4">
                        <label for="year" class="label">
                            <span class="label-text">Year</span>
                        </label>
                        <input type="number" name="year" id="year" class="input input-bordered w-full"
                            value="{{ old('year', $movie->year) }}">
                    </div>

                    <div class="mb-4">
                        <label for="trailer_link" class="label">
                            <span class="label-text">Trailer Link</span>
                        </label>
                        <input type="url" name="trailer_link" id="trailer_link" class="input input-bordered w-full"
                            value="{{ old('trailer_link', $movie->trailer_link) }} ">
                    </div>
                </div>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn rounded-full  btn-primary w-full py-2 mt-6 text-white text-md">
                Update Movie
            </button>
        </form>
        <div class="card bg-base-100 lg:w-96 shadow-xl mt-5">
            <div class="card-body p-5">
                <h2 class="card-title px-3">Cast Movie</h2>
                <div class="col">
                    <button class="btn btn-sm btn-primary rounded-full" onclick="my_modal_3.showModal()">Add Cast</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse bg-white shadow-md rounded-3xl">
                        <thead class="rounded-t-3xl">
                            <tr class="bg-blue-500 text-white text-left">
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Age</th>
                            </tr>
                        </thead>
                        <tbody class="rounded-b-3xl">
                            @foreach ($movie['cast'] as $cast)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="px-4 py-3 font-medium">{{ $cast->name }}</td>
                                    <td class="px-4 py-3">{{ $cast->age }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- You can open the modal using ID.showModal() method -->
        <dialog id="my_modal_3" class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Add Cast</h3>
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <form class="w-full p-4 mx-auto bg-white rounded-lg shadow-md" enctype="multipart/form-data" method="post"
                    accept="image/*" action="{{ route('casts.store') }}">
                    @csrf
                    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name"
                            class="block w-full p-2 mt-1 text-sm text-gray-700 bg-white border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                        <input type="number" id="age" name="age"
                            class="block w-full p-2 mt-1 text-sm text-gray-700 bg-white border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="biodata" class="block text-sm font-medium text-gray-700">Biodata</label>
                        <textarea id="biodata" name="biodata"
                            class="block w-full p-2 mt-1 text-sm text-gray-700 bg-white border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="avatar" class="block text-sm font-medium text-gray-700">Avatar</label>
                        <input type="file" id="avatar" name="avatar"
                            class="block w-full p-2 mt-1 text-sm text-gray-700 bg-white border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <button type="submit"
                        class="w-full px-4 py-2 text-sm text-white bg-blue-500 rounded-md hover:bg-blue-700 focus:ring-blue-500 focus:border-blue-500">Submit</button>
                </form>
            </div>
        </dialog>
    </div>
@endsection
