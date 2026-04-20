<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function portfolio()
    {
        $project = [
            'slug' => 'portfolio',
            'name' => 'Portfolio',
            'desc' => 'A bespoke, component-based portfolio built with Laravel and Alpine.js.',
            'long_desc' => 'This site was designed to move away from standard web patterns and move toward a Futuristic looking interface. The technical goal was to implement an almost Single Page Application (SPA) feel using only Blade and Alpine.js, ensuring high performance and deep modularity through Blade Components.',
            'stack' => ['Laravel', 'Alpine.js', 'Tailwind CSS'],
            'repo' => 'https://github.com/thijsderogee/portfolio-v3',
            'url' => 'https://thijsderogee.nl',
        ];

        return view('projects.Portfolio', compact('project'));
    }

    public function cargoGrid()
    {
        $project = [
            'name' => 'Cargo Grid',

            'long_desc' => 'Cargo Grid is a high-performance grid system designed for precise, interactive 3D object placement. 
            Built for trucking simulators and puzzle games, it handles real-time collision checks, dynamic grid resizing, and "best-fit" logic for complex cargo shapes.',

            'stack' => ['Unity', 'C#'],
            'repo' => 'https://github.com/KaketoeYT/project_package',
        ];

        return view('projects.CargoGrid', compact('project'));
    }

    public function bandsite()
    {
        $project = [
            'name' => 'Band Site',
            
            'long_desc' => 'A high-impact, minimalist fan portal for the band "Gore." The project focuses on a "Brutalist" aesthetic, 
            utilizing high-contrast typography and optimized media delivery to capture the band\'s raw energy while maintaining fast load times.',

            'stack' => ['HTML', 'CSS', 'JS'],
            'features' => ['Responsive Design', 'Asset Optimization', 'Custom Typography'],
            'repo' => 'https://github.com/KaketoeYT/band-site',
            'url' => 'https://thijsderogee.nl/projects/gore/',
        ];

        return view('projects.BandSite', compact('project'));
    }

    public function characterselect()
    {
        $project = [
            'name' => 'Character Select',

            'long_desc' => 'A Three.js recreation of the Deadlock character select screen.',

            'stack' => ['Three.js', 'GLSL', 'Laravel', 'Vite'],
            'features' => ['Responsive Design', 'Asset Optimization', 'Custom Typography'],
            'repo' => 'https://github.com/KaketoeYT/character-select',
            'url' => 'https://github.com/KaketoeYT/deadlock-heroselect',
        ];

        return view('projects.CharacterSelect', compact('project'));
    }

    public function mtgbrowser()
    {
        $project = [
            'name' => 'Browser Card game',
            
            'long_desc' => 'This project served as my deep dive into Vanilla JavaScript. I built a simplified Magic: The Gathering game that runs entirely in the browser, 
            utilizing the PeerJS library for real-time multiplayer functionality. It requests all the cards from the Scryfall API and stores them in a local database.',
            
            'stack' => ['JavaScript', 'PeerJS', 'API', 'HTML', 'CSS'],
            'repo' => '#',
            'url' => 'https://github.com/KaketoeYT/mtgweb',
        ];

        return view('projects.MTGBrowser', compact('project'));
    }

    public function apioptimisation()
    {
        $project = [
            'name' => 'API Optimisation',
            
            'long_desc' => 'This project was a challenge in data synchronization. To provide real-time hauling routes, I had to fetch prices from massive community APIs. 
            I implemented a multi-layered caching strategy and request-throttling to minimize server load while maintaining sub-second route calculations.',
            
            'stack' => ['Laravel', 'API'],
            'repo' => '#',
            'url' => 'https://github.com/KaketoeYT/sc-routeplanner',
        ];

        return view('projects.APIOptimisation', compact('project'));
    }
}
