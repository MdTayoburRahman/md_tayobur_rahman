@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">

            <!-- Statistics Section -->
            <div class="statistics-section my-5">
                <div class="card mx-auto" style="max-width: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Total Blog Posts</h5>
                        <p class="card-text display-4">{{ \App\Models\BlogPost::count() }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
