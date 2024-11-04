<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServicePageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');

    return 'Cache is cleared.';
});

// Page Routes
Route::get('/', [HomeController::class, 'page']);
Route::get('/contact', [ContactController::class, 'page']);
Route::get('/projects', [ProjectController::class, 'page']);
Route::get('/resume', [ResumeController::class, 'page']);
Route::get('/service', [ServicePageController::class, 'page']);
Route::get('/about', [AboutController::class, 'page']);

// Ajax Call Routes
Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socialData', [HomeController::class, 'socialData']);
Route::get('/projectsData', [ProjectController::class, 'projectsData']);
Route::get('/applist', [ProjectController::class, 'applist']);
Route::get('/resumeLink', [ResumeController::class, 'resumeLink']);
Route::get('/certifications', [ResumeController::class, 'certifications']);
Route::get('/experiencesData', [ResumeController::class, 'experiencesData']);
Route::get('/educationData', [ResumeController::class, 'educationData']);
Route::get('/skillsData', [ResumeController::class, 'skillsData']);
Route::get('/languageData', [ResumeController::class, 'languageData']);
Route::post('/contactRequest', [ContactController::class, 'contactRequest']);
Route::get('/download-pdf', [ResumeController::class, 'downloadPDF']);

// Route::group(['prefix' => 'blog'], function () {
//     Route::post('/create', [BlogController::class, 'createBlog']);
//     Route::get('/all', [BlogController::class, 'getAllBlogPosts']);
//     Route::get('/{id}/view', [BlogController::class, 'viewBlog']);
//     Route::put('/{id}/edit', [BlogController::class, 'editBlog']);
//     Route::put('/{id}/update', [BlogController::class, 'updateBlog']);
//     Route::delete('/{id}/delete', [BlogController::class, 'deleteBlog']);
// });
