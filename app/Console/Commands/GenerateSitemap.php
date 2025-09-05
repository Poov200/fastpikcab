<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap.xml from all Laravel routes';

    public function handle()
    {
        $sitemap = Sitemap::create();

        foreach (Route::getRoutes() as $route) {
            $uri = $route->uri();

            // Skip system routes (API, Sanctum, etc.)
            if (str_starts_with($uri, 'api') || str_starts_with($uri, '_')) {
                continue;
            }

            // Add route URL
            $sitemap->add(
                Url::create(url($uri))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8)
            );
        }

        // Save sitemap to public/sitemap.xml
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully at public/sitemap.xml');
    }
}
