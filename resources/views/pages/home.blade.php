@extends('app')
@section('link')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
@endsection

@section('content')
    @include('components.hero')
    @include('components.work_with')
    @include('components.my_profession')
    @include('components.about')
@endsection
