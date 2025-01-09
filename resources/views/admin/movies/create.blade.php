@extends('layouts.admin')

@section('content')
    <div class="container">

        <h1 class="text-3xl font-bold mb-6 mt-5 px-3">Add New Movie</h1>

        @include('components.alert')

        <!-- Form wrapper with padding and centered layout -->
        <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data"
            class="max-w-6xl mx-auto p-6 bg-white shadow-lg rounded-lg lg:px-8 px-4 mb-6">

            @csrf

            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
                    <!-- Title Field -->
                    <div class="mb-4">
                        <label for="title" class="label">
                            <span class="label-text">Title</span>
                        </label>
                        <input type="text" name="title" id="title" class="input input-bordered w-full"
                            value="{{ old('title') }}">
                    </div>

                    <!-- Synopsis Field -->
                    <div class="mb-2">
                        <label for="synopsis" class="label">
                            <span class="label-text">Synopsis</span>
                        </label>
                       <textarea name="synopsis" id="synopsis" class="textarea textarea-bordered w-full h-36"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="trailer_link" class="label">
                            <span class="label-text">Trailer Link</span>
                        </label>
                        <input type="url" name="trailer_link" id="trailer_link" class="input input-bordered w-full"
                            value="{{ old('trailer_link') }}">
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
                    <!-- Poster Field -->
                    <div class="mb-4">
                        <label for="poster" class="label">
                            <span class="label-text">Poster</span>
                        </label>
                        <input type="file" name="poster" id="poster" class="file-input file-input-bordered w-full">
                    </div>

                    <!-- Year Field -->
                    <div class="mb-3">
                        <label for="year" class="label">
                            <span class="label-text">Year</span>
                        </label>
                        <input type="number" name="year" id="year" class="input input-bordered w-full"
                            value="{{ old('year') }}">
                    </div>

                    <!-- Available Checkbox -->
                    <div class="flex flex-col">
                        <div class="mb-3">
                            <label for="genre_id" class="label">
                                <span class="label-text">Genre</span>
                            </label>
                            <select name="genre_id" id="genre_id" class="select select-bordered w-full">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}"
                                        {{ old('genre_id') == $genre->id ? 'selected' : '' }}>
                                        {{ $genre->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="duration" class="label">
                                <span class="label-text">Duration (*On Minutes)</span>
                            </label>
                            <input type="number" name="duration" id="duration" class="input input-bordered w-full"
                                value="{{ old('duration') }}">
                        </div>
                    </div>
                </div>
                <div class="mb-4 flex items-center px-4">
                    <input type="checkbox" name="available" id="available" class="checkbox checkbox-primary mr-2"
                        {{ old('available') ? 'checked' : '' }}>
                    <label for="available" class="label-text">Available</label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-full py-2 mt-6">Save Movie</button>
        </form>
    </div>
@endsection
