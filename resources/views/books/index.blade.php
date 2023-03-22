@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Books</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col" class="text-center">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></td>
                <td class="text-center"><a href="{{ route('books.edit', $book->id) }}" class="btn btn-success">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('books.create') }}"
        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600py-2 px-4 rounded btn btn-success">Add
        New Book</a>
</div>
@endsection