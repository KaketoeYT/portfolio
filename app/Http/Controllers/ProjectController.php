<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    // Portfolio
    public function portfolio()
    {
        $project = [
            'slug' => 'portfolio',
            'name' => 'Portfolio',
            'desc' => 'A bespoke, component-based portfolio built with Laravel and Alpine.js.',
            'long_desc' => 'This site was designed to move away from standard web patterns and move toward a Futuristic looking interface. The technical goal was to implement an almost Single Page Application (SPA) feel using only Blade and Alpine.js, ensuring high performance and deep modularity through Blade Components.',
            'stack' => ['Laravel', 'Alpine.js', 'Tailwind CSS'],
            'repo' => 'https://github.com/KaketoeYT/portfolio',
            'url' => 'https://thijsderogee.nl',
            'stack_title' => 'Development Stack',
            'features_title' => 'Architecture Highlights',
            'features' => [
                'Blade Components for UI organization and reusability',
                'Alpine.js global state for section switching',
                'Dynamic Route Model Binding for project slugs',
            ],
            'learning_title' => 'The "Why"',
            'learning' => 'Built to demonstrate that a "simple" portfolio can be engineered with the same rigor as a production-grade SaaS application.',
        ];

        return view('projects.show', compact('project'));
    }

    // Cargo Grid
    public function cargoGrid()
    {
        $project = [
            'name' => 'Cargo Grid',

            'long_desc' => 'Cargo Grid is a high-performance grid system designed for precise, interactive 3D object placement. 
            Built for trucking simulators and puzzle games, it handles real-time collision checks, dynamic grid resizing, and "best-fit" logic for complex cargo shapes.',

            'stack' => ['Unity', 'C#'],
            'repo' => 'https://github.com/KaketoeYT/project_package',
            'url' => '#',

            'stack_title' => 'Engine & Language',

            'features_title' => 'Core Mechanics',

            'features' => [
                'Spatial Partitioning for collision optimization',
                'Smart rotation alignment logic',
                'Custom Vertex Shaders for grid visualization',
            ],

            'learning_title' => 'Use Case',

            'learning' => 'Optimized for heavy-physics environments where cargo weight distribution impacts vehicle handling in real-time. Made for a small indie game prototype, but the underlying system is designed to be modular and scalable for larger projects.',
        ];

        return view('projects.show', compact('project'));
    }

    // Band Site
    public function bandsite()
    {
        $project = [
            'name' => 'Band Site',

            'long_desc' => 'A high-impact, minimalist fan portal for the band "Gore." The project focuses on a "Brutalist" aesthetic, 
            utilizing high-contrast typography and optimized media delivery to capture the band\'s raw energy while maintaining fast load times.',

            'stack' => ['HTML', 'CSS', 'JS'],
            'repo' => 'https://github.com/KaketoeYT/band-site',
            'url' => 'https://thijsderogee.nl/projects/gore/',

            'stack_title' => 'Technologies',

            'features_title' => 'Design Philosophy',

            'features' => [
                'Brutalist Typography for visual impact',
                'Mobile-first responsive architecture',
                'Zero-dependency vanilla implementation',
            ],

            'learning_title' => 'Technical Goal',

            'learning' => 'Achieving a premium, media-heavy feel while keeping it barebones, using nothing but HTML, CSS, and JavaScript.',
        ];

        return view('projects.show', compact('project'));
    }

    // Character Select
    public function characterselect()
    {
        $project = [
            'name' => 'Character Select',

            'long_desc' => 'A Three.js recreation of the Deadlock character select screen.',

            'stack' => ['Three.js', 'GLSL', 'Laravel', 'Vite'],
            'repo' => 'https://github.com/KaketoeYT/character-select',
            'url' => 'http://characterselect.thijsderogee.nl/',

            'stack_title' => 'Core Engine',

            'features_title' => 'Rendering Pipeline',

            'features' => [
                'GLTF Model Caching',
                'Interactive experience',
                'Post-Processing: Bloom & SSAO',
            ],

            'learning_title' => 'The Learning Curve',

            'learning' => 'Transitioning from standard DOM elements to a WebGL context required a shift in how I handle state—synchronizing Alpine.js UI buttons with Three.js scene objects.',
        ];

        return view('projects.show', compact('project'));
    }

    // Browser card game
    public function mtgbrowser()
    {
        $project = [
            'name' => 'Browser Card Game',

            'long_desc' => 'This project served as my deep dive into Vanilla JavaScript. I built a simplified Magic: The Gathering game that runs entirely in the browser, 
            utilizing the PeerJS library for real-time multiplayer functionality. It requests all the cards from the Scryfall API and stores them in a local database.',

            'stack' => ['JavaScript',
                'PeerJS',
                'API',
                'HTML',
                'CSS',
            ],

            'repo' => 'https://github.com/KaketoeYT/mtgweb',
            'url' => 'http://mtgweb.thijsderogee.nl/',
            'stack_title' => 'Learning Stack',
            'features_title' => 'The Logic Engine',
            'features' => [
                'Turn-Phase Controller (Untap, Upkeep, Draw...)',
                'API-based card requests',
                'JSON card database integration',
            ],

            'learning_title' => 'The JS Pivot',
            'learning' => 'This project taught me the importance of "Data First." Instead of moving HTML elements, I learned to update a JavaScript object and let the UI react to that data.',
        ];

        return view('projects.show', compact('project'));
    }

    // Api optimisation
    public function apioptimisation()
    {
        $project = [
            'name' => 'API Optimisation',

            'long_desc' => 'This project was a challenge in data synchronization. To provide real-time hauling routes, I had to fetch prices from massive community APIs. 
            I implemented a multi-layered caching strategy and request-throttling to minimize server load while maintaining sub-second route calculations.',

            'stack' => ['Laravel', 'API'],
            'repo' => 'https://github.com/KaketoeYT/sc-routeplanner',
            'url' => 'http://scroutes.thijsderogee.nl/',

            'stack_title' => 'Backend Stack',

            'features_title' => 'Efficiency Strategy',

            'features' => [
                'Futuristic looking UI with fast response times through aggressive caching',
                'API batches instead of individual requests to reduce overhead',
                'Scheduled cache invalidation aligned with API',
            ],

            'learning_title' => 'The Result',

            'learning' => 'A sleek, responsive interface that delivers near-instant price updates while minimizing redundant API calls, demonstrating the power of strategic caching and data flow optimization.',
        ];

        return view('projects.show', compact('project'));
    }
}
