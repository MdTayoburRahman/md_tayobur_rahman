@extends('app')

@section('title', $post->title)

@section('content')
   @include('components.viewblog')
@endsection
