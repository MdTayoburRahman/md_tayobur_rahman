<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Env;

class BlogsController extends Controller
{
    function page()
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'blog')->first();
        $blogPosts = BlogPost::paginate(6);  // Retrieves 6 blog posts per page
        return view('pages.blogs', ['seo' => $seo, 'blogPosts' => $blogPosts]);
    }

    function viewposts($slug)
    {
        // Fetch the exact blog post by ID
        $post = BlogPost::where('slug', $slug)->firstOrFail();

        // Check if the blog post exists
        if (!$post) {
            return response()->json(['error' => 'Blog post not found'], 404);
        }
        $seo = (object) [
            'title' => $post->title,
            'description' => $post->content,
            'keywords' => $post->title,
            'url' => route('post', ['slug' => $post->slug]),
            'ogSiteName' => env('APP_NAME'),
            'ogUrl' => route('post', ['slug' => $post->slug]),
            'ogTitle' => $post->title,
            'ogDescription' => $post->content,
            'ogImage' => asset('assets/img/post_thumbnail/' . $post->thumbnail)
        ];
        

        // Pass data to the view using compact
        return view('pages.viewblog', ['post' => $post, 'seo' => $seo]);
    }
}
