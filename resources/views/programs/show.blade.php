@extends('layouts.app')

@section('content')
    <div class="program-details py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center">{{ $program->title }}</h1>
            <div class="mt-8 max-w-2xl mx-auto">
                <img src="{{ asset('images/' . ($program->image ?? 'default.jpg')) }}" alt="{{ $program->title }}" class="w-full h-64 object-cover rounded-lg">
                <p class="mt-4 text-gray-700">{{ $program->description }}</p>
                <div class="mt-8">
                    <a href="{{ route('programs.index') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Back to Programs</a>
                </div>
            </div>
        </div>
    </div>
@endsection