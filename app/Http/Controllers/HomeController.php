<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Fetch data for the home page (e.g., featured programs, testimonials, etc.)
        $featuredPrograms = [
            [
         'id' => 1,
            'title' => 'Education for All',
            'description' => 'Providing quality education to underprivileged children.',
            'image' => 'education.jpg', // Ensure this key exists
        ],
        [
            'id' => 2,
            'title' => 'Women Empowerment',
            'description' => 'Empowering women through skill development programs.',
            'image' => 'women-empowerment.jpg', // Ensure this key exists
        ],
    ];


        // Return the 'home' view with the $featuredPrograms data
        return view('home', compact('featuredPrograms'));
    }
}