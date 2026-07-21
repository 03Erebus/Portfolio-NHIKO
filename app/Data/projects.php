<?php

return [
    [  // For Project 1 details
        'id' => 'project-1',
        'file' => 'project-1.php',
        'title' => 'HelioCam', // Main project title
        'category' => 'Software',
        'year' => '2024-2025',
        'platforms' => 'MOBILE | WEB',
        'thumbnail' => 'Project-Thumbnail1-v2.png',
        // New Nested Array for multiple images!
        'mockups' => [
            [
                'title' => 'Dashboard Page',
                'type' => 'mobile',
                'image' => 'dashboard-heliocam.png',
                'angle' => 'rotate-6'
            ],
            [
                'title' => 'Dashboard Page',
                'type' => 'mobile',
                'image' => 'history-Helio.png',
                'angle' => 'rotate-6'
            ],
            [
                'title' => 'Surveillance',
                'type' => 'desktop',
                'image' => 'surveillance-heliocam.png', // Add your desktop image filename here
                'angle' => 'rotate-0'
            ],
            [
                'title' => 'Session',
                'type' => 'desktop',
                'image' => 'create-session-helio.png', // Add your desktop image filename here
                'angle' => 'rotate-0'
            ]
        ]
    ],
    [ // For Project 2 details
        'id' => 'project-2',
        'file' => 'project-2.php',
        'title' => 'ITRF',
        'category' => 'Software',
        'year' => '2026',
        'platforms' => 'MOBILE | WEB',
        'thumbnail' => 'Project-Thumbnail2.png',
        'mockups' => [
            [
                'title' => 'Mobile View',
                'type' => 'mobile',
                'image' => 'mobile-dashboard-ITRF.png',
                'angle' => 'rotate-6'
            ],
            [
                'title' => 'Desktop View',
                'type' => 'desktop',
                'image' => 'web-dashboard1-ITRF.png',
                'angle' => 'rotate-0'
            ]
        ]
    ],
    [ // For Project 3 details
        'id' => 'project-3',
        'file' => 'project-3.php',
        'title' => 'FitNEase',
        'category' => 'Software',
        'year' => '2026',
        'platforms' => 'MOBILE',
        'thumbnail' => 'Project-Thumbnail3.png',
        'mockups' => [
            [
                'title' => 'Mobile View',
                'type' => 'mobile',
                'image' => 'achieved_FitNEase.jpg',
                'angle' => 'rotate-6'
            ],
            [
                'title' => 'Mobile View',
                'type' => 'mobile',
                'image' => 'complete_FitNEase.jpg',
                'angle' => 'rotate-6'
            ],
            [
                'title' => 'Mobile View',
                'type' => 'mobile',
                'image' => 'group_FitNEase.jpg',
                'angle' => 'rotate-6'
            ],
            [
                'title' => 'Mobile View',
                'type' => 'mobile',
                'image' => 'working_FitNEase.jpg',
                'angle' => 'rotate-6'
            ]
        ]
    ]
];