@extends('layouts.app')

@section('content')
    <div class="programs-section py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center">Our Programs</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                @foreach($programs as $program)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('images/' . ($program->image ?? 'default.jpg')) }}" alt="{{ $program->title }}" class="w-full h-48 object-cover rounded-lg">
                        <h3 class="text-xl font-bold mt-4">{{ $program->title }}</h3>
                        <p class="mt-2 text-gray-700">{{ $program->description }}</p>
                        <a href="{{ route('programs.show', $program->id) }}" class="mt-4 inline-block text-blue-500">Learn More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection