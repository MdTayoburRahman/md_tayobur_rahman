@extends('app')

@section('link')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
@endsection

@section('content')
    {{-- @include('components.project-list') --}}
    @include('components.service')
    {{-- @include('components.call-action') --}}
@endsection
