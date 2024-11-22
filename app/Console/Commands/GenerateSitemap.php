<?php

namespace App\Console\Commands;

use App\Models\BlogPost;
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
        // Clear and re-cache configuration
        $this->call('config:clear');
        config(['app.url' => env('APP_URL', 'https://mdtayoburrahman.com')]);
        // Get the site URL from environment or config
        $siteUrl = config('app.url', 'https://mdtayoburrahman.com');
        // If the config or environment is not properly set, explicitly assign here as fallback
        if ($siteUrl === 'http://localhost') {
            $siteUrl = 'https://mdtayoburrahman.com';
        }
        // Create a new sitemap
        $sitemap = Sitemap::create();

        // Add static URLs to the sitemap
        $staticUrls = [
            '/',
            '/contact',
            '/projects',
            '/resume',
            '/service',
            '/blog',
            '/about',
            '/web-development',
            '/android-app-development',
            '/business-management-software',
        ];

        foreach ($staticUrls as $staticUrl) {
            $sitemap->add(Url::create($siteUrl . $staticUrl));
        }

        // Add dynamic URLs for blog posts
        foreach (BlogPost::all() as $post) {
            if ($post->slug) {
                $url = $siteUrl . "/post/{$post->slug}";
                $this->info("Adding URL: {$url}");
                $sitemap->add(Url::create($url)
                    ->setPriority(0.8)
                    ->setLastModificationDate($post->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS));
            }
        }

        // Save the sitemap to the public directory
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
