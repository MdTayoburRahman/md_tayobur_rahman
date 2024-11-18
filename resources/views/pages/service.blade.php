@extends('app')

@section('link')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
@endsection

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/page_header_3.webp') }});">
        <div class="container position-relative">
            <h1>Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home /</a></li>
                    <li class="current"> service</li>
                </ol>
            </nav>
        </div>
    </div>


    {{-- @include('components.project-list') --}}
    @include('components.service')
    {{-- @include('components.call-action') --}}
@endsection
