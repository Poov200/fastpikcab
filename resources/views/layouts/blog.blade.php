<!DOCTYPE html>
<html lang="en" ng-app="userBlogApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Taxi Booking Blogs, Airport Fares & Travel News | Fastpikcab</title>
    <meta name="description" content="Explore expert taxi booking tips, latest airport cab fare guides, and outstation travel news. Save money and travel smarter with Fastpikcab updates.">
    <meta name="keywords" content="taxi booking blog, airport taxi fare, outstation cab guide, car rental tips, Fastpikcab news, india travel blog">
    <meta name="robots" content="index, follow">
    
    <link rel="canonical" href="https://www.fastpikcab.com/blog" />

    <meta property="og:title" content="Taxi Booking Blogs & Travel News | Fastpikcab">
    <meta property="og:description" content="Read latest taxi booking guides, fare tips, and travel blogs.">
    <meta property="og:image" content="https://www.fastpikcab.com/images/blog-default-og.jpg">
    <meta property="og:url" content="https://www.fastpikcab.com/blog">
    <meta property="og:type" content="blog">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Taxi Booking Blogs & Travel News | Fastpikcab">
    <meta name="twitter:description" content="Expert taxi tips and travel guides.">
    <meta name="twitter:image" content="https://www.fastpikcab.com/images/blog-default-og.jpg">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <script src="https://cdn.jsdelivr.net/npm/angular@1.8.2/angular.min.js"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Blog",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.fastpikcab.com/blog"
      },
      "headline": "Taxi Booking Blogs & Travel News",
      "description": "Taxi booking guides, airport taxi fares, outstation cab blogs",
      "publisher": {
        "@type": "Organization",
        "name": "Fastpikcab",
        "logo": {
            "@type": "ImageObject",
            "url": "https://www.fastpikcab.com/logo.png"
        }
      }
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://www.fastpikcab.com/"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Blog",
        "item": "https://www.fastpikcab.com/blog"
      }]
    }
    </script>

    <style>
        /* Prevent CLS (Layout Shift) before Angular loads */
        [ng-cloak] { display: none !important; }
        .blog-card { transition: transform 0.2s, box-shadow 0.2s; }
        .blog-card:hover { transform: translateY(-3px); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); }
    </style>
</head>

<body ng-controller="UserBlogController" class="bg-gray-50 text-gray-800 antialiased">

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <nav class="text-sm text-gray-500 mb-4" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="/" class="hover:text-blue-600 transition">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
            </li>
            <li class="font-semibold text-gray-700">Blog</li>
        </ol>
    </nav>

    <div class="flex flex-col md:flex-row justify-between items-center mb-10 border-b pb-6">
        <div class="mb-4 md:mb-0">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                Travel & Taxi Insights
            </h1>
            <p class="mt-2 text-gray-600">
                Guides, news, and tips for your next journey.
            </p>
        </div>
        
        <div class="relative w-full md:w-1/3">
            <input type="text" 
                   ng-model="searchText" 
                   placeholder="Search articles..." 
                   class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                   aria-label="Search blogs">
            <span class="absolute left-3 top-2.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </span>
        </div>
    </div>

    <div ng-if="isLoading" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-200 h-80 rounded-lg animate-pulse" ng-repeat="n in [1,2,3]"></div>
    </div>

    <div ng-cloak ng-if="!isLoading" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <article ng-repeat="blog in blogs | filter:searchText"
             class="blog-card bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col h-full">

            <a ng-href="/blog/@{{ blog.slug }}" aria-label="Read @{{ blog.title }}">
                <img ng-src="/storage/@{{ blog.image }}"
                     alt="@{{ blog.title }} - Taxi guide"
                     class="w-full h-52 object-cover"
                     width="400" 
                     height="210"
                     loading="lazy">
            </a>

            <div class="p-6 flex flex-col flex-grow">
                
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 px-3 py-1 rounded-full">
                        @{{ blog.category }}
                    </span>
                    <time class="text-xs text-gray-400" datetime="@{{ blog.created_at }}">
                        @{{ blog.created_at | date:'MMM dd, yyyy' }}
                    </time>
                </div>

                <h2 class="text-xl font-bold text-gray-900 mb-3 leading-snug hover:text-blue-700 transition">
                    <a ng-href="/blog/@{{ blog.slug }}">
                        @{{ blog.title }}
                    </a>
                </h2>

                <p class="text-gray-600 text-sm mb-4 flex-grow line-clamp-3">
                    @{{ blog.excerpt }}
                </p>

                <div class="mt-auto border-t pt-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-500 mr-2">
                            FC
                        </div>
                        <span class="text-xs text-gray-500 font-medium">Fastpikcab Team</span>
                    </div>
                    <a ng-href="/blog/@{{ blog.slug }}"
                       class="text-blue-600 hover:text-blue-800 text-sm font-semibold flex items-center group">
                        Read 
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>

            </div>
        </article>

    </div>

    <noscript>
        <div class="p-4 bg-red-50 text-red-700">
            Javascript is required to view our taxi booking blogs. Please enable Javascript.
        </div>
    </noscript>

    <div ng-cloak ng-if="!isLoading && blogs.length === 0"
         class="text-center py-20">
        <p class="text-gray-500 text-lg">No articles found matching your criteria.</p>
    </div>

</main>

<script>
var app = angular.module('userBlogApp', []);

app.controller('UserBlogController', function ($scope, $http) {

    $scope.blogs = [];
    $scope.isLoading = true; // Loading state

    $scope.loadBlogs = function () {
        $http.get('/api/admin/blogs?status=published')
            .then(function (res) {
                if (res.data.status) {
                    $scope.blogs = res.data.data;
                }
            }, function () {
                console.error('Failed to load blogs');
            })
            .finally(function() {
                $scope.isLoading = false;
            });
    };

    $scope.loadBlogs();
});
</script>

</body>
</html>