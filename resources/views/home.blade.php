<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhoroni Impact Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
    <!-- Hero Section -->
    <div class="hero-section bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('images/hero-bg.jpg');">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold">Welcome to Muhoroni Impact Hub</h1>
            <p class="mt-4 text-xl">Empowering communities for a better future.</p>
            <div class="mt-8">
                <a href="{{ route('get-involved') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg mr-4">Get Involved</a>
                <a href="{{ route('programs') }}" class="bg-transparent border border-white text-white px-6 py-3 rounded-lg">Learn More</a>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="mission-section py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Our Mission</h2>
            <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
                To create sustainable impact in Muhoroni through education, empowerment, and community development.
            </p>
        </div>
    </div>

    <!-- Programs Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
    @foreach($featuredPrograms as $program)
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('images/' . ($program['image'] ?? 'default.jpg')) }}" alt="{{ $program['title'] }}" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-xl font-bold mt-4">{{ $program['title'] }}</h3>
            <p class="mt-2 text-gray-700">{{ $program['description'] }}</p>
            <a href="{{ route('programs') }}" class="text-gray-700 hover:text-blue-600">Programs</a>
    @endforeach
</div>

    <!-- Footer -->
    <div class="footer bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Muhoroni Impact Hub. All rights reserved.</p>
        </div>
    </div>
</body>
</html>