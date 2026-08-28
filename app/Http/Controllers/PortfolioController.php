<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    /**
     * Render the single-page portfolio with all content hardcoded as plain arrays.
     *
     * @return View
     */
    public function __invoke()
    {
        $profile = [
            'name' => 'Celyn Lisha Bueno',
            'title' => 'HOME, EDUCATION | Celyn Lisha Bueno',
            'photo' => 'images/profile.jpg',
            'initials' => 'CL',
            'role' => 'Bachelor of Science in Information Technology',
            'tagline' => 'BSIT student committed to learning, teamwork, and developing practical IT solutions.',
            'intro' => 'A dedicated Bachelor of Science in Information Technology (BSIT) student passionate about building real-world IT solutions.',
            'about' => [
                'A dedicated Bachelor of Science in Information Technology (BSIT) student passionate about building real-world IT solutions. I am a quick learner, dependable, and have strong communication skills. I enjoy taking on challenges, solving problems, and learning new technologies. I work well both in teams and independently. My goal is to apply my technical and professional skills to create meaningful projects and contribute to the IT industry.',
            ],
            'highlights' => [
                'Building practical IT solutions',
                'Strong teamwork and communication skills',
                'Quick learner who enjoys new technologies',
                'Works well both in teams and independently',
            ],
            'email' => 'lishabueno8@gmail.com',
            'phone' => '+63 928 733 4584',
            'location' => 'Philippines',
            'github' => 'https://lishabueno8.github.io',
        ];

        $navLinks = [
            ['label' => 'Home', 'href' => '#home', 'icon' => 'fa-house'],
            ['label' => 'About', 'href' => '#about', 'icon' => 'fa-user'],
            ['label' => 'Education', 'href' => '#education', 'icon' => 'fa-graduation-cap'],
            ['label' => 'Certificates', 'href' => '#certificates', 'icon' => 'fa-certificate'],
            ['label' => 'Projects', 'href' => '#projects', 'icon' => 'fa-folder'],
            ['label' => 'Contact', 'href' => '#contact', 'icon' => 'fa-envelope'],
        ];

        $stats = [
            ['value' => '3+', 'label' => 'Years of Experience'],
            ['value' => '4', 'label' => 'Certifications Earned'],
        ];

        $education = [
            [
                'institution' => 'Data Center College of the Philippines',
                'credential' => 'Bachelor of Science in Information Technology',
                'years' => '2023 - Present',
                'details' => '',
                'icon' => 'fa-graduation-cap',
            ],
            [
                'institution' => 'Langiden National High School',
                'credential' => 'Technical Vocational Livelihood - Agriculture',
                'years' => '2021 - 2023',
                'details' => 'With Honors',
                'icon' => 'fa-school',
            ],
        ];

        $certificates = [
            [
                'title' => 'Stay Alert, stay secure: Promoting Cyber Awarenss Online and Scam Prevention',
                'issuer' => 'CHED',
                'year' => 'July 23, 2026',
                'icon' => '',
                'image' => 'certificates/cert%201.png',
            ],
            [
                'title' => 'Online Safety Through Nettiquette',
                'issuer' => 'DICT',
                'year' => 'July 23, 2026',
                'icon' => '',
                'image' => 'certificates/cert%202.png',
            ],
            [
                'title' => 'Empowering the Next Gen: ICT Career Prep Essentials Webinar',
                'issuer' => 'DICT',
                'year' => 'July 23, 2026June 26, 2025',
                'icon' => '',
                'image' => 'certificates/cert%203.png',
            ],
            [
                'title' => 'National Certificate (NC) II in Computer Systems Servicing',
                'issuer' => 'Technical Education and Skills Development Authority',
                'year' => 'September 6, 2025',
                'icon' => '',
                'image' => 'certificates/nc2 cert.png',
            ],
        ];

        $projects = [
            [
                'title' => 'Laravel Blog Platform',
                'description' => 'A full-featured blogging system with authentication, markdown authoring, categories, comments, and an admin dashboard.',
                'tags' => ['Laravel', 'Blade', 'MySQL'],
                'github' => 'https://lishabueno8.github.io/blog-platform',
                'gradient' => 'from-emerald-500 to-green-600',
            ],
            [
                'title' => 'Task Manager REST API',
                'description' => 'A stateless JSON API for task management with token auth, validation, pagination, and API tests.',
                'tags' => ['Laravel', 'Sanctum', 'REST'],
                'github' => 'https://lishabueno8.github.io/task-manager-api',
                'gradient' => 'from-teal-500 to-cyan-600',
            ],
            [
                'title' => 'E-Commerce Storefront',
                'description' => 'A responsive storefront UI with product grids, cart interactions, and a smooth checkout flow.',
                'tags' => ['Tailwind', 'Alpine.js', 'Vite'],
                'github' => 'https://lishabueno8.github.io/storefront-ui',
                'gradient' => 'from-lime-500 to-green-600',
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'A live weather dashboard that consumes a public API to render forecasts, charts, and location search.',
                'tags' => ['JavaScript', 'REST API', 'Tailwind'],
                'github' => 'https://lishabueno8.github.io/weather-dashboard',
                'gradient' => 'from-emerald-600 to-teal-500',
            ],
            [
                'title' => 'Inventory Management System',
                'description' => 'An internal tool for tracking stock, handling supplier orders, and producing simple reports.',
                'tags' => ['Laravel', 'Livewire', 'SQLite'],
                'github' => 'https://lishabueno8.github.io/inventory-system',
                'gradient' => 'from-green-600 to-emerald-500',
            ],
            [
                'title' => 'This Portfolio',
                'description' => 'A static single-page portfolio built with Blade, Tailwind CSS v4, and Vite, using no database at all.',
                'tags' => ['Blade', 'Tailwind', 'Vite'],
                'github' => 'https://lishabueno8.github.io/BUENO_PORTFOLIO',
                'gradient' => 'from-teal-500 to-emerald-600',
            ],
        ];

        $socials = [
            ['label' => 'Facebook', 'href' => 'https://www.facebook.com/profile.php?id=100084993821745', 'icon' => 'facebook'],
            ['label' => 'Telegram', 'href' => 'https://t.me/09287334584', 'icon' => 'telegram'],
            ['label' => 'TikTok', 'href' => 'https://www.tiktok.com/@lishabueno348', 'icon' => 'tiktok'],
            ['label' => 'Discord', 'href' => 'https://discord.com/users/1458770880657227928', 'icon' => 'discord'],
            ['label' => 'Gmail', 'href' => 'mailto:lishabueno8@gmail.com', 'icon' => 'gmail'],
        ];

        return view('pages.portfolio', compact(
            'profile',
            'navLinks',
            'stats',
            'education',
            'certificates',
            'projects',
            'socials'
        ));
    }
}
