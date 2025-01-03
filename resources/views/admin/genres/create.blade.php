@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-semibold mb-4">Create New Genre</h1>

    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="label">
                <span class="label-text">Genre Name</span>
            </label>
            <input type="text" name="name" id="name" class="input input-bordered w-full" value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Genre</button>
    </form>
</div>
@endsection
