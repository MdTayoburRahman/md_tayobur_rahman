@extends('app')
@section('link')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
    @include('components.experience')
    @include('components.certifications')
    @include('components.professional-skills')
    {{-- @include('components.education') --}}

    @include('components.languages')
@endsection
