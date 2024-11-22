<?php

namespace App\Http\Controllers;

use SeoData;
use Illuminate\Http\Request;

class AndroidDevController extends Controller
{
    function page(Request $request)
    {
        $seo = new SeoData(
            'Android App Development',
            'Craft intuitive and dynamic Android apps using Java and Kotlin in Android Studio. Expertise includes Firebase integration, database management, and creating seamless user experiences.',
            'android app development, Java, Kotlin, Android Studio, Firebase, database management, user experience',
            'MD TAYOBUR RAHMAN',
            'https://mdtayoburrahman.com/android-app-development',
            'Professional Android App Development Services',
            'assets/img/site_content/androiddev.png',
            'We specialize in building intuitive and dynamic Android apps with seamless user experiences using Java, Kotlin, and Android Studio.'
        );
    
        return view('pages.androiddev', ['seo' => $seo]);
    }
}
