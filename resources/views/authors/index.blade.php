@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Authors</h1>
    <table class="container">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a></td>
                <td class="text-center"><a href="{{ route('authors.edit', $author->id) }}"
                        class="mx-5 btn btn-success">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('authors.create') }}"
        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded btn btn-success mb-3">Add New
        Author</a>
</div>
@endsection