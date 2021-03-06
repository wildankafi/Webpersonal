<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/magangci/blog/user/themes/purity/blueprints.yaml',
    'modified' => 1469692985,
    'data' => [
        'name' => 'Purity',
        'version' => '0.5.5',
        'description' => 'Purity: Pure CSS from Yahoo ported into Grav, with customised options for theme colours, menu design & layout control.',
        'icon' => 'group',
        'author' => [
            'name' => 'Lawrence Meckan',
            'email' => 'media@absalom.biz',
            'url' => 'http://www.absalom.biz'
        ],
        'homepage' => 'https://github.com/absalomedia/grav-theme-purity',
        'keywords' => 'purity, purecss, yahoo, minimalist, theme, modern, fast, responsive, html5, css3, blog, marketing',
        'bugs' => 'https://github.com/absalomedia/grav-theme-purity/issues',
        'license' => 'BSD-2-Clause',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tagline' => [
                    'type' => 'text',
                    'label' => 'Tagline',
                    'default' => 'Creating a blog layout using Pure',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'footer' => [
                    'type' => 'toggle',
                    'label' => 'Enable Footer',
                    'highlight' => 0,
                    'default' => 1,
                    'options' => [
                        0 => 'Off',
                        1 => 'On'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'layout' => [
                    'type' => 'toggle',
                    'label' => 'Layout',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        0 => 'Blog',
                        1 => 'Marketing',
                        2 => 'Email'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'style' => [
                    'type' => 'toggle',
                    'label' => 'Styling',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        0 => 'Dark',
                        1 => 'Light'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'menu' => [
                    'type' => 'select',
                    'label' => 'Menu style',
                    'default' => 0,
                    'options' => [
                        0 => 'None',
                        1 => 'Vertical',
                        2 => 'Tabbed',
                        3 => 'Horizontal'
                    ],
                    'validate' => [
                        'type' => 'number'
                    ]
                ]
            ]
        ]
    ]
];
