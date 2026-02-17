<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $blog->meta_title ?? $blog->title }} | Fastpikcab</title>
    <meta name="description" content="{{ $blog->meta_description ?? Str::limit($blog->excerpt, 160) }}">
    <meta name="keywords" content="{{ $blog->keywords ?? 'taxi booking, airport taxi, travel tips' }}">
    <meta name="author" content="Fastpikcab Team">

    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ $blog->excerpt }}" />
    <meta property="og:image" content="{{ asset('storage/' . $blog->image) }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Fastpikcab" />
    <meta property="article:published_time" content="{{ $blog->created_at->toIso8601String() }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->title }}">
    <meta name="twitter:description" content="{{ $blog->excerpt }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $blog->image) }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
      },
      "headline": "{{ $blog->title }}",
      "image": [
        "{{ asset('storage/' . $blog->image) }}"
      ],
      "datePublished": "{{ $blog->created_at->toIso8601String() }}",
      "dateModified": "{{ $blog->updated_at->toIso8601String() }}",
      "author": {
        "@type": "Organization",
        "name": "Fastpikcab"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Fastpikcab",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ asset('images/logo.png') }}"
        }
      },
      "description": "{{ $blog->excerpt }}"
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
        "item": "{{ url('/') }}"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Blog",
        "item": "{{ url('/blog') }}"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "{{ Str::limit($blog->title, 20) }}",
        "item": "{{ url()->current() }}"
      }]
    }
    </script>
</head>

<body class="bg-white text-gray-800 antialiased">

    <div class="booking-banner">
    <span>📞 For Immediate Booking: <a href="tel:8825694157">+91 8825694157</a></span>
</div>

<!-- Header Section -->
<header class="bg-gray-900 shadow-md sticky  z-50" style="top: 37px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex flex-wrap items-center justify-between py-4">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="flex items-center">

                    <img style="max-width:150px; height: 55px; " src="../img/FastPik Logo.png" alt="image">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex flex-wrap items-center space-x-6">
                <a href="/" class="text-white hover:text-yellow-400 font-medium">Home</a>

                <a href="{{ route('contactpage') }}" class="text-white hover:text-yellow-400 font-medium">Contact</a>
                <a href="{{ route('blogs') }}" class="text-white hover:text-yellow-400 font-medium">Blogs</a>
                {{-- <a href="#" class="text-white hover:text-yellow-400 font-medium">FAQ</a> --}}
            </div>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#booking"
                    class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-lg transition duration-300 whitespace-nowrap">
                    Book Now
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-yellow-400 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden bg-white py-4 hidden">
            <div class="flex flex-col space-y-4">
                <a href="#"
                    class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Home</a>

                <a href="#contact" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Contact</a>
                <a href="{{ route('blogs') }}" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Blogs</a>
                {{-- <a href="#" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">FAQ</a> --}}
                <div class="px-4 pt-2">
                    <a href="#booking"
                        class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-6 rounded-lg transition duration-300">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="max-w-4xl mx-auto px-4 py-8 sm:py-12">

    <nav class="text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex items-center">
            <li><a href="/" class="hover:text-blue-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li><a href="/blog" class="hover:text-blue-600 hover:underline">Blog</a></li>
            <li class="mx-2">/</li>
            <li class="text-gray-800 font-medium truncate max-w-xs">{{ $blog->title }}</li>
        </ol>
    </nav>

    <article>
        <header class="mb-8">
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-semibold uppercase tracking-wide mb-3">
                {{ $blog->category ?? 'Taxi Guide' }}
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                {{ $blog->title }}
            </h1>

            <div class="flex items-center text-gray-500 text-sm border-b pb-6">
                <span class="mr-3">By <span class="text-gray-900 font-medium">Fastpikcab Team</span></span>
                <span class="mx-2">&bull;</span>
                <time datetime="{{ $blog->created_at->toIso8601String() }}">
                    {{ $blog->created_at->format('F d, Y') }}
                </time>
                 <span class="mx-2">&bull;</span>
                 <span>{{ ceil(str_word_count(strip_tags($blog->content))/200) }} min read</span>
            </div>
        </header>

        <figure class="mb-10">
            <img src="{{ asset($blog->image) }}"
                 alt="{{ $blog->title }} - Fastpikcab"
                 class="w-full h-auto rounded-xl shadow-md object-cover max-h-[500px]"
                 loading="eager"
                 width="800"
                 height="450">
            @if($blog->image_caption)
                <figcaption class="text-center text-gray-500 text-xs mt-2 italic">
                    {{ $blog->image_caption }}
                </figcaption>
            @endif
        </figure>

        <div class="prose prose-lg prose-blue max-w-none prose-img:rounded-lg prose-a:text-blue-600 hover:prose-a:text-blue-500">
            {!! nl2br(e($blog->content)) !!}
        </div>

    </article>

    <div class="mt-12 pt-8 border-t">
        <h3 class="font-bold text-gray-900 mb-4">Share this article</h3>
        <div class="flex space-x-4">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">Facebook</a>
            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $blog->title }}" target="_blank" class="px-4 py-2 bg-blue-400 text-white text-sm rounded hover:bg-blue-500 transition">Twitter</a>
            <a href="https://wa.me/?text={{ $blog->title }} {{ url()->current() }}" target="_blank" class="px-4 py-2 bg-green-500 text-white text-sm rounded hover:bg-green-600 transition">WhatsApp</a>
        </div>
    </div>

    @if(isset($relatedBlogs) && count($relatedBlogs) > 0)
    <div class="mt-16 bg-gray-50 p-6 rounded-xl">
        <h3 class="text-2xl font-bold mb-6">Read Next</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($relatedBlogs as $related)
                <a href="/blog/{{ $related->slug }}" class="group block">
                    <h4 class="font-bold text-gray-900 group-hover:text-blue-600 transition">{{ $related->title }}</h4>
                    <p class="text-sm text-gray-500 mt-1">{{ Str::limit($related->excerpt, 80) }}</p>
                </a>
            @endforeach
        </div>
    </div>
    @endif

</main>
@include('layouts.footer')

</body>
</html>
