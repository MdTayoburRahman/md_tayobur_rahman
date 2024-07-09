@extends('app')
@section('link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
@endsection

@section('style')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" />
@endsection

@section('content')
    {{-- content gose here --}}
    <div class="text-center mb-2">
        <h1 class="display-5 fw-bolder mb-5 mt-5"><span class="text-gradient d-inline">Blogs</span></h1>
    </div>
    @include('components.blogItems')
@endsection
