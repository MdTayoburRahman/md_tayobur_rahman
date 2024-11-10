<?php

use App\Console\Commands\GenerateSitemap;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('generate:sitemap', function () {
    $this->call(GenerateSitemap::class);
})->purpose('Generate the sitemap for the website');
