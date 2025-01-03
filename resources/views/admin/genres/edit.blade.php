@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-semibold mb-4">Edit Genre</h1>

    <form action="{{ route('genres.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="label">
                <span class="label-text">Genre Name</span>
            </label>
            <input type="text" name="name" id="name" class="input input-bordered w-full" value="{{ old('name', $genre->name) }}" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Genre</button>
    </form>
</div>
@endsection
