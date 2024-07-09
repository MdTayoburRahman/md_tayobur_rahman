<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function page(Request $request)
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'projects')->first();
        return view('pages.projects', ['seo' => $seo]);
    }

    function projectsData(Request $request)
    {
        return DB::table('projects')->get();
    }

    function applist(Request $request)
    {
        $apps = AppGallery::all();
        return response()->json($apps);
    }
}
