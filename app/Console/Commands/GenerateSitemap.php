<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.xml file including all pages and blogs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting Sitemap Generation...');

        $sitemap = Sitemap::create();
        $routeCollection = Route::getRoutes();
        $addedCount = 0;
        $skippedCount = 0;

        // 1. Process All Web Routes
        foreach ($routeCollection as $route) {

            // Only index GET routes
            if (!in_array('GET', $route->methods())) {
                continue;
            }

            $uri = $route->uri();

            // --- EXCLUSION LOGIC ---
            // Skip Admin, API, Auth, and System routes
            if (
                str_starts_with($uri, 'admin') ||
                str_starts_with($uri, 'api') ||
                str_starts_with($uri, '_') ||
                str_starts_with($uri, 'sanctum') ||
                $uri === 'login' ||
                $uri === 'logout' ||
                $uri === 'deleteaccount'
            ) {
                $skippedCount++;
                continue;
            }

            // Skip routes with parameters (like {id} or {slug})
            // because we can't guess the value. We handle Blogs separately below.
            if (str_contains($uri, '{')) {
                $skippedCount++;
                continue;
            }

            // Add the page to sitemap
            $url = url($uri);

            $sitemap->add(
                Url::create($url)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority($uri === '/' ? 1.0 : 0.8)
            );

            $addedCount++;
            // Optional: Print first few to console to verify
            if ($addedCount <= 5) {
                $this->line(" + Added: $uri");
            }
        }

       

        // 3. Save File
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info("---------------------------------------");
        $this->info("✅ Sitemap Generated Successfully!");
        $this->info("   Total Pages Added:   $addedCount");
        $this->info("   System URLs Skipped: $skippedCount");
        $this->info("   Location:            " . public_path('sitemap.xml'));
    }
}
