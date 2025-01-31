@extends('layouts.app')

@section('content')
    <div class="about-section py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center">About Us</h1>
            <div class="mt-8 max-w-2xl mx-auto text-gray-700">
                <p class="mt-4">
                    Muhoroni Impact Hub is a non-profit organization dedicated to improving the lives of people in Muhoroni through education, empowerment, and community development.
                </p>
                <p class="mt-4">
                    Our mission is: <strong>{{ $mission }}</strong>
                </p>
                <p class="mt-4">
                    Our vision is: <strong>{{ $vision }}</strong>
                </p>
            </div>
        </div>
    </div>
@endsection