<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    function page(Request $request)
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'Blog')->first();
        return view('pages.blog', ['seo' => $seo]);
    }

    public function getAllBlogPosts(Request $request)
    {
        try {
            $perPage = 9;  // Number of items per page
            // Fetch all blogs with only title, sub_title, and thumbnail
            $blogs = Blog::select('title', 'sub_title', 'thumbnail')->paginate($perPage);
            if ($blogs->isEmpty()) {
                return response()->json(['message' => 'No blog posts found.'], 404);
            }

            return response()->json([
                'data' => $blogs->items(),
                'meta' => [
                    'current_page' => $blogs->currentPage(),
                    'last_page' => $blogs->lastPage(),
                    'total' => $blogs->total(),
                    // Other pagination metadata as needed
                ]
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Failed to fetch blog posts.'], 500);
        }
    }

    /**
     * Retrieves a blog post by its ID from the database.
     *
     * @param Request $request The incoming request containing the blog post ID.
     *
     * @return \Illuminate\Http\JsonResponse The blog post as a JSON response.
     * If the blog post is not found, a 404 HTTP response is returned.
     */
    function getBlogByID(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        return response()->json($blog);
    }

    /**
     * Creates a new blog post in the database.
     *
     * @param Request $request The incoming request containing the blog post data.
     *
     * @return \Illuminate\Http\JsonResponse The newly created blog post as a JSON response.
     *
     * @throws \Illuminate\Validation\ValidationException If the request data fails validation.
     */
    public function createBlog(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'sub_title' => 'required|string|max:255',
                'body' => 'required',
                'thumbnail' => 'nullable|string',
                'likes' => 'required|integer',
                'slug' => 'required|string|unique:blogs',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string',
                'meta_keywords' => 'nullable|string',
                'image_alt_text' => 'nullable|string|max:255',
            ]);
            $blog = Blog::create($validated);
            return response()->json($blog);
        } catch (Exception $e) {
            Logger::error($e->getMessage());
            return response()->json(['message' => 'Failed to create blog: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Retrieves a single blog post from the database.
     *
     * @param Blog $blog The blog post to be retrieved.
     *
     * @return \Illuminate\Http\JsonResponse The blog post as a JSON response.
     */
    public function viewBlog(Blog $blog)
    {
        try {
            return response()->json($blog);
        } catch (Exception $e) {
            Logger::error($e->getMessage());
            return response()->json(['message' => 'Failed to retrieve blog: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Updates a blog post in the database.
     *
     * @param Request $request The incoming request containing the blog post data.
     * @param Blog $blog The blog post to be updated.
     *
     * @return \Illuminate\Http\JsonResponse The updated blog post as a JSON response.
     */
    public function update(Request $request, Blog $blog)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'sub_title' => 'required|string|max:255',
                'body' => 'required',
                'thumbnail' => 'nullable|string',
                'likes' => 'required|integer',
                'slug' => 'required|string|unique:blogs,slug,' . $blog->id,
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string',
                'meta_keywords' => 'nullable|string',
                'image_alt_text' => 'nullable|string|max:255',
            ]);

            $blog->update($validated);
            return response()->json($blog);
        } catch (Exception $e) {
            Logger::error($e->getMessage());
            return response()->json(['message' => 'Failed to update blog: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Deletes a blog post from the database.
     *
     * @param Blog $blog The blog post to be deleted.
     *
     * @return \Illuminate\Http\JsonResponse A JSON response indicating the success of the deletion.
     */
    public function deleteblog(Blog $blog)
    {
        try {
            $blog->delete();
            return response()->json(['message' => 'Blog deleted successfully']);
        } catch (Exception $e) {
            Logger::error($e->getMessage());
            return response()->json(['message' => 'Failed to delete blog: ' . $e->getMessage()], 500);
        }
    }
}
