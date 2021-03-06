<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/magangci/blog/user/themes/pinpress/blueprints.yaml',
    'modified' => 1469690261,
    'data' => [
        'name' => 'Pinpress',
        'version' => '1.2.0',
        'description' => 'PinPress is a creative Flat Blog/Magazine grav theme and it is the perfect choice for professionals who’s looking for a magazine theme or a personal niche, corporate, and marketing blogs.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-pinpress',
        'demo' => 'http://demo.getgrav.org/pinpress-skeleton',
        'keywords' => 'pinpress, theme, onepage, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-pinpress/issues',
        'license' => 'CC BY 3.0',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
