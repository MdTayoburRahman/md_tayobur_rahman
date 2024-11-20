<aside class="bg-light p-3" style="min-width: 250px; height: 100vh;">
    <h4>Admin Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('blogs.create') }}">Create a Post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.postlist') }}">Blog Post list</a>
        </li>


        <br>
        <hr>
        <li class="nav-item">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link nav-link" style="border: none; padding: 0;">Logout</button>
            </form>
        </li>
    </ul>
</aside>
