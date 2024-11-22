<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SeoData;

class WebDevelopmentController extends Controller
{
    function page(Request $request)
    {
        $seo = new SeoData(
            'Professional Web Development',
            'Build professional websites with HTML, CSS, Laravel, PHP, and WordPress. Perfect for enterprises and e-commerce platforms.',
            'web development, HTML, CSS, Laravel, PHP, WordPress, e-commerce',
            'Your Company Name',
            'https://mdtayoburrahman.com/web-development',
            'Professional Web Development Services',
            'assets/img/site_content/webdev.jpg',
            'We specialize in building enterprise websites and e-commerce platforms using modern technologies like Laravel and WordPress.'
        );
        // return view('pages.webdevelopment', ['seo' => $seo]);

        //  $seo = DB::table('seoproperties')->where('pageName', '=', 'about')->first();
        return view('pages.webdevelopment', ['seo' => $seo]);
    }
}
