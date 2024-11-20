<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all blog posts to pass to the dashboard view
        $blogPosts = BlogPost::all();
        return view('admin.page.dashboard', compact('blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create blog post form view
        return view('admin.page.create');
    }

    /** Store a newly created resource in storage. */
    // public function store(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required',
    //         'author' => 'required|max:100',
    //     ]);

    //     // Create a new blog post
    //     BlogPost::create([
    //         'title' => $request->title,
    //         'content' => $request->content,
    //         'author' => $request->author,
    //         'slug' => Str::slug($request->title),
    //         'is_published' => $request->has('is_published') ? true : false,
    //     ]);

    //     // Redirect to the admin dashboard with a success message
    //     return redirect()->route('admin.dashboard')->with('success', 'Blog post created successfully!');
    // }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:100',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Optional image validation
        ]);

        // Create a new blog post
        $blogPost = new BlogPost([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'slug' => \Illuminate\Support\Str::slug($request->title),
            'is_published' => $request->has('is_published') ? true : false,
        ]);

        // Handle the thumbnail image upload
        if ($request->hasFile('thumbnail')) {
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('assets/img/post_thumbnail/'), $imageName);
            $blogPost->thumbnail = $imageName;
        }

        $blogPost->save();

        // Redirect to the admin postlist with a success message
        return redirect()->route('admin.postlist')->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the blog post by ID
        $post = BlogPost::findOrFail($id);

        // Return the view to show the blog post details
        return view('admin.page.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the blog post by ID
        $post = BlogPost::findOrFail($id);

        // Return the edit form view
        return view('admin.page.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:100',
        ]);

        // Find the blog post by ID
        $post = BlogPost::findOrFail($id);

        // Update the blog post data
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'slug' => Str::slug($request->title),
            'is_published' => $request->has('is_published') ? true : false,
        ]);

        // Redirect to the admin dashboard with a success message
        return redirect()->route('admin.postlist')->with('success', 'Blog post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the blog post by ID
        $post = BlogPost::findOrFail($id);
        // Check if a thumbnail exists, and delete it from storage
        if ($post->thumbnail) {
            $thumbnailPath = public_path('assets/img/post_thumbnail/' . $post->thumbnail);
            if (file_exists($thumbnailPath)) {
                unlink($thumbnailPath);  // Delete the file from the public/images directory
            }
        }
        // Delete the blog post
        $post->delete();

        // Redirect to the admin dashboard with a success message
        return redirect()->route('admin.postlist')->with('success', 'Blog post deleted successfully!');
    }
}
