@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">{{ $author->name }}</h1>
    <p>{{ $author->bio }}</p>
    <div class="mb-5"><a href="{{ route('authors.edit', $author->id) }}"
            class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded btn btn-success">Edit Author</a>
    </div>

    <div class="mt-8">
        <h2>Books by {{ $author->name }}</h2>
        <ul>
            @foreach($author->books as $book)
            <li>
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>


</div>
@endsection