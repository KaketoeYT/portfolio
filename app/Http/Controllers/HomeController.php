<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sections = [
            ['id' => 'launch', 'title' => 'Home'],
            ['id' => 'projects', 'title' => 'Projects'],
            ['id' => 'pilot', 'title' => 'About Me'],
            ['id' => 'engine', 'title' => 'Skills'],
        ];

        $projects = [
            [
                'slug' => 'cargogrid',
                'name' => 'Cargo Grid',
                'desc' => '3D spatial placement system for Unity.',
                'long_desc' => 'CargoGrid is a high-performance grid system designed for precise, interactive 3D object placement. Built for trucking simulators and puzzle games, it handles real-time collision checks, dynamic grid resizing, and "best-fit" logic for complex cargo shapes.',
                'stack' => ['Unity', 'C#'],
                'repo' => '#', 
                'url' => '#',
            ],
            [
                'slug' => 'characterselect',
                'name' => 'Character Select',
                'desc' => 'A Three.js recreation of the Deadlock character select screen.',
                'long_desc' => 'A technical experiment in porting high-fidelity game UI to the web. This project involves loading complex GLTF models, implementing custom GLSL shaders for character glows, and using Laravel as a backend to manage character stats and loadout data.',
                'stack' => ['Three.js', 'GLSL', 'Laravel', 'Vite'],
                'repo' => '#', 
                'url' => '#',
            ],
            [
                'slug' => 'mtgbrowser',
                'name' => 'Browser Card game',
                'desc' => 'A browser-based Magic: The Gathering game built to learn JavaScript and Peer-to-Peer using PeerJS fundamentals.',
                'long_desc' => 'This project served as my deep dive into Vanilla JavaScript. I built a simplified Magic: The Gathering game that runs entirely in the browser, utilizing the PeerJS library for real-time multiplayer functionality. It requests all the cards from the Scryfall API and stores them in a local database.',
                'stack' => ['JavaScript',  'PeerJS', 'API', 'HTML', 'CSS'],
                'repo' => '#', 
                'url' => '#',
            ],
            [
                'slug' => 'apioptimisation',
                'name' => 'API Optimisation',
                'desc' => 'A trade route optimizer for Star Citizen focused on API efficiency.',
                'long_desc' => 'This project was a challenge in data synchronization. To provide real-time hauling routes, I had to fetch prices from massive community APIs. I implemented a multi-layered caching strategy and request-throttling to minimize server load while maintaining sub-second route calculations.',
                'stack' => ['Laravel', 'API'],
                'repo' => '#',
                'url' => '#',
            ],
            [
                'slug' => 'bandsite',
                'name' => 'Band Site',
                'desc' => 'A simple, modern fan website for the band "Gore."',
                'long_desc' => 'A simple, modern fan website for the band "Gore."',
                'stack' => ['HTML', 'CSS'],
                'repo' => '#', 
                'url' => '#',
            ],
            [
                'slug' => 'portfolio',
                'name' => 'Portfolio',
                'desc' => 'A bespoke, component-based portfolio built with Laravel and Alpine.js.',
                'long_desc' => 'This site was designed to move away from standard web patterns and move toward a Futuristic looking interface. The technical goal was to implement a Single Page Application (SPA) feel using only Blade and Alpine.js, ensuring high performance and deep modularity through Blade Components.',
                'stack' => ['Laravel', 'Alpine.js', 'Tailwind CSS'],
                'repo' => 'https://github.com/KaketoeYT/portfolio',
                'url' => 'https://thijsderogee.nl',
            ]
            
            
        ];

        $skills = [
            ['name' => 'C#', 'percent' => '65'],
            ['name' => 'Unity', 'percent' => '65'],
            ['name' => 'Unreal', 'percent' => '65'],
            ['name' => 'PHP', 'percent' => '65'],
            ['name' => 'HTML', 'percent' => '65'],
            ['name' => 'CSS', 'percent' => '65'],
            ['name' => 'Laravel', 'percent' => '55'],
            ['name' => 'JavaScript', 'percent' => '65'],
            ['name' => 'Three.js', 'percent' => '65'],
            ['name' => 'SQL', 'percent' => '65'],
            ['name' => 'Python', 'percent' => '25'],
        ];

        return view('home', compact('sections', 'projects', 'skills'));
    }
}