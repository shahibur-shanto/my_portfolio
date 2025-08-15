@extends('layouts.app')


@section('content')
    <div class="container mx-auto px-4 py-12">
        <!-- Project Header -->
        <div class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-4xl font-bold text-gray-900">{{ $project->title }}</h1>
                @auth
                    @if(auth()->user()->name ==='admin')
                        <a href="{{ route('admin.projects.edit', $project) }}"
                           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Edit Project
                        </a>
                    @endif
                @endauth
            </div>

{{--            <div class="flex flex-wrap gap-4 mb-6">--}}
{{--                @foreach($project->categories as $category)--}}
{{--                    <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">--}}
{{--                    {{ $category->name }}--}}
{{--                </span>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <p class="text-gray-600 mb-4">--}}
{{--                <span class="font-medium">Client:</span> {{ $project->client }}--}}
{{--            </p>--}}

{{--            <p class="text-gray-600">--}}
{{--                <span class="font-medium">Completed:</span>--}}
{{--                {{ $project->completed_at->format('F Y') }}--}}
{{--            </p>--}}
        </div>

{{--        <!-- Project Gallery -->--}}
{{--        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">--}}
{{--            <div class="col-span-1">--}}
{{--                <img src="{{ asset($project->featured_image) }}"--}}
{{--                     alt="{{ $project->title }}"--}}
{{--                     class="w-full h-auto rounded-lg shadow-lg">--}}
{{--            </div>--}}
{{--            @foreach($project->gallery_images as $image)--}}
{{--                <div class="col-span-1">--}}
{{--                    <img src="{{ asset($image) }}"--}}
{{--                         alt="{{ $project->title }} gallery image"--}}
{{--                         class="w-full h-auto rounded-lg shadow-lg">--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

        <!-- Project Details -->
        <div class="prose max-w-none mb-12">
            {!! $project->description !!}
        </div>

{{--        <!-- Project Features -->--}}
{{--        @if($project->features)--}}
{{--            <div class="mb-12">--}}
{{--                <h2 class="text-2xl font-bold mb-6">Key Features</h2>--}}
{{--                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">--}}
{{--                    @foreach($project->features as $feature)--}}
{{--                        <li class="flex items-start">--}}
{{--                            <svg class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />--}}
{{--                            </svg>--}}
{{--                            <span>{{ $feature }}</span>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <!-- Related Projects -->--}}
{{--        @if($relatedProjects->count() > 0)--}}
{{--            <div class="mt-16">--}}
{{--                <h2 class="text-2xl font-bold mb-8">Related Projects</h2>--}}
{{--                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">--}}
{{--                    @foreach($relatedProjects as $related)--}}
{{--                        <a href="{{ route('projects.show', $related) }}" class="group">--}}
{{--                            <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-shadow">--}}
{{--                                <img src="{{ asset($related->thumbnail) }}"--}}
{{--                                     alt="{{ $related->title }}"--}}
{{--                                     class="w-full h-48 object-cover group-hover:scale-105 transition-transform">--}}
{{--                                <div class="p-4">--}}
{{--                                    <h3 class="font-semibold text-lg group-hover:text-blue-600">--}}
{{--                                        {{ $related->title }}--}}
{{--                                    </h3>--}}
{{--                                    <p class="text-gray-600 text-sm mt-1">--}}
{{--                                        {{ Str::limit($related->excerpt, 100) }}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
    </div>

@endsection
