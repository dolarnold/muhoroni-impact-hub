
@extends('layouts.app')

@section('content')
    <div class="contact-section py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center">Contact Us</h1>
            <div class="mt-8 max-w-2xl mx-auto">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="5" class="w-full px-4 py-2 border rounded-lg" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection