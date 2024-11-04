<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    function page()
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'about')->first();
        return view('pages.about', ['seo' => $seo]);
    }
}
