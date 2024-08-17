@extends('layouts.app')

@section('title') Edit @endsection

@section('hello')
<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" type="text" value="{{ old('title', $post->title) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="3">{{ old('description', $post->description) }}</textarea>
    </div>
    <button class="btn btn-primary">Update</button>
</form>

@endsection
