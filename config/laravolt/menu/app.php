<?php 

return [
    'App' => [
        'menu' => [
            'Dashboard' => [
                'route' => ['dashboard'],
                'active' => 'dashboard/*',
                'icon' => 'chart-bar',
            ],
            'Posts' => [
                'icon' => 'newspaper',
                'menu' => [
                    'Published' => [
                        'route' => ['posts.index', ['type' => 'published']],
                        'active' => 'posts?type=draft',
                    ],
                    'Draft' => [
                        'route' => ['posts.index', ['type' => 'draft']],
                        'active' => 'posts?type=draft',
                    ],
                ],

            ],
        ],
    ],
];