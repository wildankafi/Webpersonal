<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/magangci/blog/user/themes/medium/blueprints.yaml',
    'modified' => 1469693219,
    'data' => [
        'name' => 'Medium',
        'version' => '2.0.2',
        'description' => 'Medium is a simple and modern blogging theme based on Medium\'s design language, built for Grav CMS.',
        'icon' => 'medium',
        'author' => [
            'name' => 'Matthew Blode',
            'email' => 'm.blode@gmail.com',
            'url' => 'http://matthewblode.com'
        ],
        'homepage' => 'https://github.com/mblode/grav-theme-medium',
        'demo' => 'http://medium.matthewblode.com.au',
        'keywords' => 'medium, theme, minimal, modern, fast, responsive, html5, css3, multilanguage',
        'bugs' => 'https://github.com/getgrav/grav-theme-medium/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'infinite_scroll' => [
                    'type' => 'toggle',
                    'label' => 'Infinite Scroll',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'analytics' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Google Analytics Code',
                    'default' => 'UA-YOURCODE',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'social.twitter' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Twitter',
                    'default' => '@mblode',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
