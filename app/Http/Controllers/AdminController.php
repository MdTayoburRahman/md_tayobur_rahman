<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Fetch paginated blog posts (e.g., 10 posts per page)
        $blogPosts = BlogPost::paginate(10);

        // Pass paginated blog posts to the view
        return view('admin.page.dashboard', compact('blogPosts'));
    }

    public function postlist()
    {
        // Fetch paginated blog posts (e.g., 10 posts per page)
        $blogPosts = BlogPost::paginate(10);

        // Pass paginated blog posts to the view
        return view('admin.page.post_list', compact('blogPosts'));
    }
}
