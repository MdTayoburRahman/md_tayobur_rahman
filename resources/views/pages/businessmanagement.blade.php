@extends('app')
@section('link')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('style')
    <style>
        .mainimg {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: transparent;
            mix-blend-mode: multiply;
        }
    </style>
@endsection

@section('content')
    @include('components.businessdevsoft')
    @include('components.faq.businesssoftfaq')
    @include('components.contact_v2')
@endsection


@section('script')
    <!-- Include Bootstrap JS and dependencies before the closing body tag -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
