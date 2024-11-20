<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
</head>

<body>
    <div class="d-flex">
        <!-- Aside Menu -->
        @include('admin.component.aside')

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            {{-- @include('admin.component.header') --}}

            <!-- Page Content -->
            <div class="container my-5">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('admin.component.footer')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>

</html>
