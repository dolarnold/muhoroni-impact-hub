<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch data for the home page (e.g., featured programs, testimonials, etc.)
        $featuredPrograms = [
            ['id' => 1, 'title' => 'Education for All', 'description' => 'Providing quality education to underprivileged children.'],
            ['id' => 2, 'title' => 'Women Empowerment', 'description' => 'Empowering women through skill development programs.'],
        ];

        return view('home', compact('featuredPrograms'));
    }
}
