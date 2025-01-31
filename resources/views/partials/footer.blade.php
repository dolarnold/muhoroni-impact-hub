<!-- Footer -->
<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-xl font-bold">About Us</h3>
                <p class="mt-4 text-gray-400">
                    Muhoroni Impact Hub is dedicated to empowering communities through education, empowerment, and development.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold">Quick Links</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About</a></li>
                    <li><a href="{{ route('programs') }}" class="text-gray-400 hover:text-white">Programs</a></li>
                    <li><a href="{{ route('get-involved') }}" class="text-gray-400 hover:text-white">Get Involved</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div>
                <h3 class="text-xl font-bold">Contact Us</h3>
                <ul class="mt-4 space-y-2 text-gray-400">
                    <li>Email: info@muhoroniimpacthub.org</li>
                    <li>Phone: +254 712 345 678</li>
                    <li>Address: Muhoroni, Kenya</li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Muhoroni Impact Hub. All rights reserved.</p>
        </div>
    </div>
</footer>