@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Involved - Muhoroni Impact Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
    <!-- Hero Section -->
    <div class="hero-section bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">Get Involved</h1>
            <p class="mt-4 text-xl">Join us in making a difference in Muhoroni.</p>
        </div>
    </div>

    <!-- Ways to Get Involved -->
    <div class="ways-to-get-involved py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center">How You Can Help</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                @foreach($waysToGetInvolved as $way)
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <i class="{{ $way['icon'] }} text-4xl text-blue-600"></i>
                        <h3 class="text-xl font-bold mt-4">{{ $way['title'] }}</h3>
                        <p class="mt-2 text-gray-700">{{ $way['description'] }}</p>
                        <a href="{{ $way['link'] }}" class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg">Learn More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- Newsletter Signup -->
<div class="newsletter-section bg-gray-100 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold">Stay Updated</h2>
        <p class="mt-4 text-gray-700">Subscribe to our newsletter to receive the latest news and updates.</p>
        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mt-8 max-w-md mx-auto">
            @csrf
            <div class="flex">
                <input type="email" name="email" placeholder="Enter your email" class="w-full px-4 py-2 border rounded-l-lg focus:outline-none" required>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-r-lg">Subscribe</button>
            </div>
        </form>
    </div>
</div>
    <!-- Call to Action -->
    <div class="cta-section bg-blue-600 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Ready to Make a Difference?</h2>
            <p class="mt-4 text-xl">Join us today and be part of the change.</p>
            <div class="mt-8">
                <a href="#donate" class="bg-white text-blue-600 px-6 py-3 rounded-lg mr-4">Donate Now</a>
                <a href="#volunteer" class="bg-transparent border border-white text-white px-6 py-3 rounded-lg">Volunteer</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Muhoroni Impact Hub. All rights reserved.</p>
        </div>
    </div>
</body>
</html>