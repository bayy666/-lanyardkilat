@extends('layouts.app')

@section('title', 'Blog - LanyardKendal')
@section('description', 'Baca artikel terbaru seputar lanyard, tips, dan informasi menarik dari LanyardKendal.')

@section('content')

<!-- Featured Article Hero -->
<section class="pt-24 pb-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <article class="relative group cursor-pointer">
            <div class="aspect-[16/7] overflow-hidden rounded-2xl relative">
                <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=1400&q=80"
                     alt="Featured Article"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>

                <!-- Content Overlay -->
                <div class="absolute inset-0 flex items-center">
                    <div class="px-8 md:px-12 max-w-2xl">
                        <span class="inline-block px-3 py-1 bg-white text-gray-900 text-xs font-medium rounded-full mb-4">Featured</span>
                        <h1 class="text-2xl md:text-4xl lg:text-5xl font-semibold text-white leading-tight mb-4">
                            Breaking Into Product Design: Advice from Untitled Founder, Frankie
                        </h1>
                        <p class="text-white/80 text-sm md:text-base leading-relaxed hidden md:block">
                            Let's get one thing out of the way: you don't need a fancy Bachelor's Degree to get into product design...
                        </p>
                    </div>
                </div>

                <!-- Navigation Arrow -->
                <button class="absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </article>
    </div>
</section>

<!-- Recent Blog Posts -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <h2 class="text-2xl font-semibold text-gray-900 mb-8">Recent blog posts</h2>

        @php
        $articles = [
            [
                'title' => 'Migrating to Linear 101',
                'excerpt' => 'Linear helps streamline software projects, sprints, tasks, and bug tracking. Here\'s how to get started.',
                'author' => 'Phoenix Baker',
                'avatar' => 'https://randomuser.me/api/portraits/women/44.jpg',
                'date' => '19 Jan 2022',
                'category' => 'Design',
                'categoryColor' => 'bg-purple-100 text-purple-700',
                'image' => 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=600&q=80',
                'size' => 'large'
            ],
            [
                'title' => 'Building your API Stack',
                'excerpt' => 'The rise of RESTful APIs has been met by a rise in tools for creating, testing, and managing them.',
                'author' => 'Lana Steiner',
                'avatar' => 'https://randomuser.me/api/portraits/women/68.jpg',
                'date' => '18 Jan 2022',
                'category' => 'Software Engineering',
                'categoryColor' => 'bg-blue-100 text-blue-700',
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&q=80',
                'size' => 'small'
            ],
            [
                'title' => 'Bill Walsh leadership lessons',
                'excerpt' => 'Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning Dynasty?',
                'author' => 'Alec Whitten',
                'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg',
                'date' => '17 Jan 2022',
                'category' => 'Leadership',
                'categoryColor' => 'bg-pink-100 text-pink-700',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&q=80',
                'size' => 'small'
            ],
            [
                'title' => 'PM mental models',
                'excerpt' => 'Mental models are simple expressions of complex processes or relationships.',
                'author' => 'Demi Wilkinson',
                'avatar' => 'https://randomuser.me/api/portraits/women/65.jpg',
                'date' => '16 Jan 2022',
                'category' => 'Product',
                'categoryColor' => 'bg-indigo-100 text-indigo-700',
                'image' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=600&q=80',
                'size' => 'small'
            ],
            [
                'title' => 'What is Wireframing?',
                'excerpt' => 'Introduction to Wireframing and its Principles. Learn how to create wireframes.',
                'author' => 'Candice Wu',
                'avatar' => 'https://randomuser.me/api/portraits/women/45.jpg',
                'date' => '15 Jan 2022',
                'category' => 'Design',
                'categoryColor' => 'bg-purple-100 text-purple-700',
                'image' => 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?w=600&q=80',
                'size' => 'small'
            ],
            [
                'title' => 'How collaboration makes us better designers',
                'excerpt' => 'Collaboration can make our teams stronger, and our individual designs better.',
                'author' => 'Natali Craig',
                'avatar' => 'https://randomuser.me/api/portraits/women/33.jpg',
                'date' => '14 Jan 2022',
                'category' => 'Design',
                'categoryColor' => 'bg-purple-100 text-purple-700',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80',
                'size' => 'large'
            ],
            [
                'title' => 'How collaboration makes us better designers',
                'excerpt' => 'Collaboration can make our teams stronger, and our individual designs better.',
                'author' => 'Natali Craig',
                'avatar' => 'https://randomuser.me/api/portraits/women/55.jpg',
                'date' => '13 Jan 2022',
                'category' => 'Design',
                'categoryColor' => 'bg-purple-100 text-purple-700',
                'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&q=80',
                'size' => 'small'
            ],
            [
                'title' => 'Our top 10 Javascript frameworks to use',
                'excerpt' => 'JavaScript frameworks make development easy with extensive features and functionalities.',
                'author' => 'Drew Cano',
                'avatar' => 'https://randomuser.me/api/portraits/men/45.jpg',
                'date' => '12 Jan 2022',
                'category' => 'Software Engineering',
                'categoryColor' => 'bg-blue-100 text-blue-700',
                'image' => 'https://images.unsplash.com/photo-1627398242454-45a1465c2479?w=600&q=80',
                'size' => 'small'
            ],
            [
                'title' => 'Podcast: Creating a better CX Community',
                'excerpt' => 'Starting a community doesn\'t need to be complicated, but how do you get started?',
                'author' => 'Orlando Diggs',
                'avatar' => 'https://randomuser.me/api/portraits/men/22.jpg',
                'date' => '11 Jan 2022',
                'category' => 'Podcasts',
                'categoryColor' => 'bg-rose-100 text-rose-700',
                'image' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?w=600&q=80',
                'size' => 'small'
            ],
        ];
        @endphp

        <!-- First Row: 1 large + 2 small stacked -->
        <div class="grid lg:grid-cols-2 gap-8 mb-8">
            <!-- Large Card -->
            <article class="group cursor-pointer">
                <div class="aspect-[4/3] overflow-hidden rounded-xl mb-5">
                    <img src="{{ $articles[0]['image'] }}"
                         alt="{{ $articles[0]['title'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <span class="text-sm font-medium {{ $articles[0]['categoryColor'] }} px-2.5 py-1 rounded-full">{{ $articles[0]['category'] }}</span>
                <h3 class="text-xl font-semibold text-gray-900 mt-3 mb-2 group-hover:text-gray-600 transition-colors">
                    {{ $articles[0]['title'] }}
                </h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $articles[0]['excerpt'] }}</p>
                <div class="flex items-center gap-3">
                    <img src="{{ $articles[0]['avatar'] }}" alt="{{ $articles[0]['author'] }}" class="w-9 h-9 rounded-full object-cover">
                    <div>
                        <p class="text-sm font-medium text-gray-900">{{ $articles[0]['author'] }}</p>
                        <p class="text-xs text-gray-500">{{ $articles[0]['date'] }}</p>
                    </div>
                </div>
            </article>

            <!-- 2 Small Cards Stacked -->
            <div class="flex flex-col gap-8">
                @foreach([$articles[1], $articles[2]] as $article)
                <article class="group cursor-pointer flex gap-5">
                    <div class="w-80 h-48 overflow-hidden rounded-xl flex-shrink-0">
                        <img src="{{ $article['image'] }}"
                             alt="{{ $article['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="text-sm font-medium {{ $article['categoryColor'] }} px-2.5 py-1 rounded-full w-fit">{{ $article['category'] }}</span>
                        <h4 class="text-lg font-semibold text-gray-900 mt-3 mb-2 group-hover:text-gray-600 transition-colors">
                            {{ $article['title'] }}
                        </h4>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">{{ $article['excerpt'] }}</p>
                        <div class="flex items-center gap-3">
                            <img src="{{ $article['avatar'] }}" alt="{{ $article['author'] }}" class="w-9 h-9 rounded-full object-cover">
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{ $article['author'] }}</p>
                                <p class="text-xs text-gray-500">{{ $article['date'] }}</p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

        <!-- Second Row: 3 equal cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            @foreach([$articles[3], $articles[4], $articles[5]] as $article)
            <article class="group cursor-pointer">
                <div class="aspect-[4/3] overflow-hidden rounded-xl mb-5">
                    <img src="{{ $article['image'] }}"
                         alt="{{ $article['title'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <span class="text-sm font-medium {{ $article['categoryColor'] }} px-2.5 py-1 rounded-full">{{ $article['category'] }}</span>
                <h4 class="text-lg font-semibold text-gray-900 mt-3 mb-2 group-hover:text-gray-600 transition-colors">
                    {{ $article['title'] }}
                </h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">{{ $article['excerpt'] }}</p>
                <div class="flex items-center gap-3">
                    <img src="{{ $article['avatar'] }}" alt="{{ $article['author'] }}" class="w-9 h-9 rounded-full object-cover">
                    <div>
                        <p class="text-sm font-medium text-gray-900">{{ $article['author'] }}</p>
                        <p class="text-xs text-gray-500">{{ $article['date'] }}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <!-- Third Row: 3 equal cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            @foreach([$articles[6], $articles[7], $articles[8]] as $article)
            <article class="group cursor-pointer">
                <div class="aspect-[4/3] overflow-hidden rounded-xl mb-5">
                    <img src="{{ $article['image'] }}"
                         alt="{{ $article['title'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <span class="text-sm font-medium {{ $article['categoryColor'] }} px-2.5 py-1 rounded-full">{{ $article['category'] }}</span>
                <h4 class="text-lg font-semibold text-gray-900 mt-3 mb-2 group-hover:text-gray-600 transition-colors">
                    {{ $article['title'] }}
                </h4>
                <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">{{ $article['excerpt'] }}</p>
                <div class="flex items-center gap-3">
                    <img src="{{ $article['avatar'] }}" alt="{{ $article['author'] }}" class="w-9 h-9 rounded-full object-cover">
                    <div>
                        <p class="text-sm font-medium text-gray-900">{{ $article['author'] }}</p>
                        <p class="text-xs text-gray-500">{{ $article['date'] }}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center">
            <button class="inline-flex items-center gap-2 px-6 py-3 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">
                <svg class="w-5 h-5 animate-spin hidden" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Load more...
            </button>
        </div>
    </div>
</section>

@endsection

