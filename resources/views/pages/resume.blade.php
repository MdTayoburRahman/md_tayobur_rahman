@extends('app')
@section('link')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('style')
@endsection
@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/page_header_3.webp') }});">
        <div class="container position-relative">
            <h1>Resume</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home /</a></li>
                    <li class="current"> resume</li>
                </ol>
            </nav>
        </div>
    </div>



    @include('components.experience')
    @include('components.certifications')
    @include('components.professional-skills')
    {{-- @include('components.education') --}}
    {{-- @include('components.languages') --}}
    @include('components.contact_v2')
@endsection


@section('script')
    {{-- here all script --}}
@endsection
