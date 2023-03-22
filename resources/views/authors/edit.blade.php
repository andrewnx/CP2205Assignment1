@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Edit Author</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" name="name" id="name" class="mt-1 border-2 rounded p-2 w-full"
                value="{{ $author->name }}">
        </div>
        <div class="mb-4">
            <label for="bio" class="block text-gray-700">Bio:</label>
            <textarea name="bio" id="bio" class="mt-1 border-2 rounded p-2 w-full"
                rows="5">{{ $author->bio }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded btn btn-success">Save
            Changes</button>
    </form>
</div>
@endsection