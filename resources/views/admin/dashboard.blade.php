@extends('layouts.admin')

@section('content')
    <div class="admin-dashboard py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold">Admin Dashboard</h1>
            <div class="mt-8">
                <a href="{{ route('admin.programs.index') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Manage Programs</a>
                <a href="{{ route('admin.blog.index') }}" class="ml-4 bg-green-500 text-white px-6 py-3 rounded-lg">Manage Blog</a>
            </div>
        </div>
    </div>
@endsection