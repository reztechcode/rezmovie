@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-semibold">Genres</h1>
        <a href="{{ route('genres.create') }}" class="btn btn-primary rounded-full">Add Genre</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success px-3 mb-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table-auto table-zebra w-full border-collapse bg-white shadow-md rounded-3xl">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="py-2 px-4 text-left">No</th>
                <th class="py-2 px-4 text-left">Genre Name</th>
                <th class="py-2 px-4 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $key => $genre)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4">{{ $key + 1 }}</td>
                    <td class="py-2 px-4">{{ $genre->name }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-sm btn-primary rounded-full">Edit</a>
                        <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-error rounded-full">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
