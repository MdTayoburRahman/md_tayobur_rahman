@extends('admin.master')

@section('title', $post->title)

@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="card-header">
                <h2>{{ $post->title }}</h2>
                <small class="text-muted">
                    Author: {{ $post->author }} | Created on: {{ $post->created_at->format('d M, Y') }}
                </small>
            </div>
            <div>
                <img src="{{ asset('assets/img/post_thumbnail/' . $post->thumbnail) }}" alt="Thumbnail" height="450px"
                    width="auto">
            </div>
            <div class="card-body">
                <div class="text-justify">{!! $post->content !!}</div>
            </div>
            <div class="card-footer">
                <a href="{{ route('blogs.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this blog post?');">Delete</button>
                </form>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
            </div>
        </div>
    </div>
@endsection
