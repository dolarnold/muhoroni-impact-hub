<!-- Header -->
<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">Muhoroni Impact Hub</a>

        <!-- Navigation Menu (Desktop) -->
        <nav class="hidden md:flex space-x-8">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600">About</a>
            <a href="{{ route('programs') }}" class="text-gray-700 hover:text-blue-600">Programs</a>
            <a href="{{ route('get-involved') }}" class="text-gray-700 hover:text-blue-600">Get Involved</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md">
        <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Home</a>
        <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">About</a>
        <a href="{{ route('programs') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Programs</a>
        <a href="{{ route('get-involved') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Get Involved</a>
        <a href="{{ route('contact') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Contact</a>
    </div>
</header>

<!-- Mobile Menu Script -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>