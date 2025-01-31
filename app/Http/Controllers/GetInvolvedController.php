<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GetInvolvedController extends Controller
{
    public function index(): View
    {
        // Define ways to get involved
        $waysToGetInvolved = [
            [
                'title' => 'Donate',
                'description' => 'Your financial contributions help us fund our programs and make a lasting impact.',
                'icon' => 'fas fa-donate', // Font Awesome icon
                'link' => '#donate', // Link to donation section or page
            ],
            [
                'title' => 'Volunteer',
                'description' => 'Join our team of dedicated volunteers and contribute your time and skills.',
                'icon' => 'fas fa-hands-helping', // Font Awesome icon
                'link' => '#volunteer', // Link to volunteer section or page
            ],
            [
                'title' => 'Partner With Us',
                'description' => 'Collaborate with us to create sustainable solutions for the community.',
                'icon' => 'fas fa-handshake', // Font Awesome icon
                'link' => '#partner', // Link to partnership section or page
            ],
            [
                'title' => 'Spread the Word',
                'description' => 'Help us raise awareness by sharing our mission on social media.',
                'icon' => 'fas fa-share-alt', // Font Awesome icon
                'link' => '#spread-the-word', // Link to social media section or page
            ],
        ];

        return view('get-involved', compact('waysToGetInvolved'));
    }
}