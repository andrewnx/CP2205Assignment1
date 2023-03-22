@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title:</label>
            <input type="text" name="title" id="title" class="mt-1 border-2 rounded p-2 w-full"
                value="{{ $book->title }}">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description:</label>
            <textarea name="description" id="description" class="mt-1 border-2 rounded p-2 w-full"
                rows="5">{{ $book->description }}</textarea>
        </div>
        <div class="mb-4">
            <label for="author_id" class="block text-gray-700">Author:</label>
            <select name="author_id" id="author_id" class="mt-1 border-2 rounded p-2 w-full">
                @foreach($authors as $author)
                <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{
                    $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded btn btn-success">Save
            Changes</button>
    </form>
</div>
@endsection