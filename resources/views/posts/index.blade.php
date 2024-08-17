@extends('layouts.app')
@section('title') Index @endsection
@section('hello')
<div class="text-center">
    <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->created_at }}</td>
            <td>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
