@extends('admin.master')

@section('title', 'Create Blog Post')

@section('content')
    <div class="container">
        <h2>Create Blog Post</h2>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <!-- Title Input -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <!-- Content Textarea with Rich Text Editor -->
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
            </div>

            <!-- Author Input -->
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}"
                    required>
            </div>

            <!-- Thumbnail Image Upload -->
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Post Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
            </div>

            <!-- Publish Checkbox -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_published" name="is_published"
                    {{ old('is_published') ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Publish</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Create Post</button>
        </form>
    </div>
@endsection

@section('scripts')
    <!-- CKEditor Script -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for the content textarea
        CKEDITOR.replace('content');
    </script>
@endsection
