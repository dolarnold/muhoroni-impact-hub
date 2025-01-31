<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Fetch data for the about page (e.g., mission, vision, team, etc.)
        $mission = "To create sustainable impact in Muhoroni through education, empowerment, and community development.";
        $vision = "A world where every individual has the opportunity to thrive.";

        return view('about', compact('mission', 'vision'));
    }
}
