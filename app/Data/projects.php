<?php
// app/Data/projects.php
namespace App\Data;

return [
    [
        'id' => 'project-1',
        'file' => 'project-1.php',
        'title' => 'HelioCam', // Main project title
        'category' => 'Software',
        // New Nested Array for multiple images!
        'mockups' => [
            [
                'title' => 'Dashboard Page',
                'type' => 'mobile',
                'image' => 'dashboard-heliocam.png',
                'angle_class' => 'rotate-6'
            ],
            [
                'title' => 'Dashboard Page',
                'type' => 'mobile',
                'image' => 'history-Helio.png',
                'angle_class' => 'rotate-6'
            ],
            [
                'title' => 'Surveillance',
                'type' => 'desktop',
                'image' => 'surveillance-heliocam.png', // Add your desktop image filename here
                'angle_class' => 'rotate-0'
            ],
            [
                'title' => 'Session',
                'type' => 'desktop',
                'image' => 'create-session-helio.png', // Add your desktop image filename here
                'angle_class' => 'rotate-0'
            ]
        ]
    ],
    [
        'id' => 'project-2',
        'file' => 'project-2.php',
        'title' => 'ITRF',
        'category' => 'Software',
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
    ]
];