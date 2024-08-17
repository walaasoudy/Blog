@extends('layouts.app')
@section('title') Show @endsection
@section('hello')
    <div class="card">
        <div class="card-header">
            Post Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text"><strong>Posted by:</strong> {{ $post['created_at'] }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $post['updated_at'] }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to All Posts</a>
        </div>
    </div>
    @endsection
