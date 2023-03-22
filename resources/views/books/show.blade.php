@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">{{ $book->title }}</h1>
    <p>{{ $book->description }}</p>
    <p>Author: {{ $book->author->name }}</p>
    <a href="{{ route('books.edit', $book->id) }}"
        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600py-2 px-4 rounded btn btn-success">Edit Book</a>
</div>
@endsection