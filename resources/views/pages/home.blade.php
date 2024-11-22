@extends('app')
@section('link')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
@endsection

@section('style')
    <style>
        .profile-img {
            position: relative;
            width: 100%;
            /* Make the container flexible */
            max-width: 300px;
            /* Set the maximum size for larger screens */
            aspect-ratio: 1 / 1;
            /* Maintain a perfect circle (1:1 aspect ratio) */
            overflow: hidden;
            border-radius: 70%;
            margin: 0 auto;
            /* Center the image */
            border: 10px solid #d7edff;
            /* Optional: Add a border */
            /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); */
            /* Optional: Add shadow */
        }

        .profile-img img {
            width: 100%;
            /* Scale the image to fit the container */
            height: 100%;
            /* Match the height to the container */
            object-fit: scale-down;
            /* Ensure the image fills the circle while maintaining aspect ratio */
        }

        @media (max-width: 576px) {
            .profile-img {
                max-width: 150px;
                max-height: auto;
                /* Smaller size for mobile devices */
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .profile-img {
                max-width: 200px;
                max-height: auto;
                /* Medium size for tablets */
            }
        }
    </style>
@endsection

@section('content')
    @include('components.hero')
    @include('components.work_with')
    @include('components.my_profession')
    @include('components.about')
@endsection
