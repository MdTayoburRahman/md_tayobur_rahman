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
        // Create a new Sitemap instance
        $sitemap = Sitemap::create();

        // Add your routes
        $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        $sitemap->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create('/projects')->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        $sitemap->add(Url::create('/resume')->setPriority(0.7)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create('/service')->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/about')->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        
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
