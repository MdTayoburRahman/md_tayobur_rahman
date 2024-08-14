<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicePageController extends Controller
{
    function page()
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'service')->first();
        return view('pages.service', ['seo' => $seo]);
    }
}
