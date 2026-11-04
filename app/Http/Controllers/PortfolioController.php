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
            ['value' => '6', 'label' => 'Certifications Earned'],
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
                'title' => 'Introduction to Modern AI',
                'issuer' => 'Cisco Networking Academy',
                'year' => 'October 21, 2026',
                'date' => '2026-10-21',
                'icon' => '',
                'image' => 'certificates/cert5.jpg',
            ],
            [
                'title' => 'Understanding Startups & Getting Your Idea Ready for the Philippine Startup Challenge XI',
                'issuer' => 'DICT Cordillera Administrative Region',
                'year' => 'September 7, 2026',
                'date' => '2026-09-07',
                'icon' => '',
                'image' => 'certificates/cert4.jpg',
            ],
            [
                'title' => 'Stay Alert, Stay Secure: Promoting Cyber Awareness Online and Scam Prevention',
                'issuer' => 'CHED',
                'year' => 'July 23, 2026',
                'date' => '2026-07-23',
                'icon' => '',
                'image' => 'certificates/cert%201.png',
            ],
            [
                'title' => 'Online Safety Through Netiquette',
                'issuer' => 'DICT',
                'year' => 'July 23, 2026',
                'date' => '2026-07-23',
                'icon' => '',
                'image' => 'certificates/cert%202.png',
            ],
            [
                'title' => 'National Certificate (NC) II in Computer Systems Servicing',
                'issuer' => 'Technical Education and Skills Development Authority',
                'year' => 'September 6, 2025',
                'date' => '2025-09-06',
                'icon' => '',
                'image' => 'certificates/nc2 cert.png',
            ],
            [
                'title' => 'Empowering the Next Gen: ICT Career Prep Essentials Webinar',
                'issuer' => 'DICT Cordillera Administrative Region',
                'year' => 'June 26, 2025',
                'date' => '2025-06-26',
                'icon' => '',
                'image' => 'certificates/cert%203.png',
            ],
        ];

        $certificates = collect($certificates)->sortByDesc('date')->values()->all();

        $projects = [
            [
                'title' => 'Bangued-Ka-Fuel',
                'description' => 'A web-based fuel price monitoring system for Bangued, Abra. It plots fuel stations on an interactive map, lets visitors filter stations by brand, and gives station managers an admin dashboard for managing stations, updating fuel prices, and keeping listing statuses current.',
                'tags' => ['Web Application', 'Interactive Map', 'Admin Dashboard'],
                'screenshots' => [
                    ['label' => 'Station map & brand filters', 'image' => 'images/project1.png'],
                    ['label' => 'Station management dashboard', 'image' => 'images/project2.png'],
                    ['label' => 'Fuel prices & station details', 'image' => 'images/project3.png'],
                ],
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
