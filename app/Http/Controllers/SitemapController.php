<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        // Define the URLs for the sitemap
        $urls = [
            [
                'loc' => url('/'),  // Homepage
                'lastmod' => now()->toDateString(),
                'priority' => '1.00',
                'changefreq' => 'daily',
            ],
            [
                'loc' => url('#about'),  // About Section
                'lastmod' => now()->toDateString(),
                'priority' => '0.80',
                'changefreq' => 'monthly',
            ],
            [
                'loc' => url('#services'),  // Services Section
                'lastmod' => now()->toDateString(),
                'priority' => '0.80',
                'changefreq' => 'monthly',
            ],
            [
                'loc' => url('#pricing'),  // Pricing Section
                'lastmod' => now()->toDateString(),
                'priority' => '0.80',
                'changefreq' => 'monthly',
            ],
            [
                'loc' => url('/contact'),  // Contact Page
                'lastmod' => now()->toDateString(),
                'priority' => '0.90',
                'changefreq' => 'weekly',
            ],
        ];

        // Return the sitemap XML response
        $xml = $this->generateSitemapXml($urls);

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }

    private function generateSitemapXml(array $urls)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
            $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
            $xml .= '<priority>' . $url['priority'] . '</priority>';
            $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return $xml;
    }
}
