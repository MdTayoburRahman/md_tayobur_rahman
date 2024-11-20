@extends('admin.master')

@section('title', 'Blog Posts')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Blog Posts</h2>
            <a href="{{ route('blogs.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Create New Blog Post
            </a>

        </div>

        <!-- Display Success Messages -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Blog Posts Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>thumbnail</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogPosts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>
                            @if ($post->thumbnail)
                                <img src="{{ asset('assets/img/post_thumbnail/' . $post->thumbnail) }}" alt="Thumbnail" width="100">
                            @else
                                <span>No Thumbnail</span>
                            @endif
                        </td>

                        <td>{{ $post->created_at->format('d M, Y') }}</td>
                        <td>
                            <a href="{{ route('blogs.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this blog post?');">Delete</button>
                            </form>
                            <a href="{{ route('blogs.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Blog Posts Available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $blogPosts->links() }}
        </div>
    </div>
@endsection
