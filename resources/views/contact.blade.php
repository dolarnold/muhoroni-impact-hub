@extends('layouts.app')

@section('content')
    <div class="blog-section py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center">Blog</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                @foreach($posts as $post)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <p class="mt-2 text-gray-700">{{ $post->excerpt }}</p>
                        <a href="{{ route('blog.show', $post->id) }}" class="mt-4 inline-block text-blue-500">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection