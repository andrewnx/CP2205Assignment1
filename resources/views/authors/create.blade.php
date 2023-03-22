@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Add New Author</h1>
    <form action="{{ route('authors.store') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" name="name" id="name" class="mt-1 border-2 rounded p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="bio" class="block text-gray-700">Bio:</label>
            <textarea name="bio" id="bio" class="mt-1 border-2 rounded p-2 w-full" rows="5"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600py-2 px-4 rounded btn btn-success">Save</button>
    </form>
</div>
@endsection