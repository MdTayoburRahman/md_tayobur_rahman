<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get the site URL from environment or config
        $siteUrl = "https://mdtayoburrahman.com";  // Default to localhost if not defined in .env

        // Create a new sitemap
        $sitemap = Sitemap::create();

        // Add URLs to the sitemap
        $sitemap
            ->add(Url::create($siteUrl . '/'))
            ->add(Url::create($siteUrl . '/contact'))
            ->add(Url::create($siteUrl . '/projects'))
            ->add(Url::create($siteUrl . '/resume'))
            ->add(Url::create($siteUrl . '/service'))
            ->add(Url::create($siteUrl . '/about'));

        // Route::get('/', [HomeController::class, 'page']);
        // Route::get('/contact', [ContactController::class, 'page']);
        // Route::get('/projects', [ProjectController::class, 'page']);
        // Route::get('/resume', [ResumeController::class, 'page']);
        // Route::get('/service', [ServicePageController::class, 'page']);
        // Route::get('/about', [AboutController::class, 'page']);

        // Add dynamic URLs (example for blog posts)
        // foreach (\App\Models\Post::all() as $post) {
        //     $sitemap->add(Url::create("/post/{$post->slug}")
        //                     ->setPriority(0.8)
        //                     ->setLastModificationDate($post->updated_at)
        //                     ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        // }

        // Save the sitemap to the public directory
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
