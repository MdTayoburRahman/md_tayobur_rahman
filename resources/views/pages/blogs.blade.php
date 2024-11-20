@extends('app')
@section('link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
@endsection

@section('style')
    <link href="{{ asset('css/blog_style.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/page_header_3.webp') }});">
        <div class="container position-relative">
            <h1>Blogs</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home /</a></li>
                    <li class="current"> Blogs</li>
                </ol>
            </nav>
        </div>
    </div>

    @include('components.all_blogs_items')
@endsection
