@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section bg-blue-500 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">Welcome to Muhoroni Impact Hub</h1>
            <p class="mt-4 text-xl">Empowering communities for a better future.</p>
            <a href="{{ route('programs') }}" class="mt-8 inline-block bg-white text-blue-500 px-6 py-3 rounded-lg">Explore Programs</a>
        </div>
    </div>

    <!-- Mission Statement -->
    <div class="mission-section py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Our Mission</h2>
            <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
                To create sustainable impact in Muhoroni through education, empowerment, and community development.
            </p>
        </div>
    </div>

    <!-- Featured Programs -->
    <div class="programs-section bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center">Featured Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                @foreach($featuredPrograms as $program)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold">{{ $program->title }}</h3>
                        <p class="mt-2 text-gray-700">{{ $program->description }}</p>
                        <a href="{{ route('programs.show', $program->id) }}" class="mt-4 inline-block text-blue-500">Learn More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection