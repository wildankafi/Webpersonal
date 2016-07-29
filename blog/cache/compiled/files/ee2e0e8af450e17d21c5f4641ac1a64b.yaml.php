<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/magangci/blog/user/themes/materialize/blueprints.yaml',
    'modified' => 1469693495,
    'data' => [
        'name' => 'Materialize',
        'version' => '1.3.8',
        'description' => 'The Materialize theme is built using the **Materialize** Framework',
        'icon' => 'google',
        'author' => [
            'name' => 'Bob Rockefeller',
            'email' => 'bob@bobrockefeller.com',
            'url' => 'http://www.bobrockefeller.com'
        ],
        'homepage' => 'https://github.com/bobrocke/grav-theme-materialize',
        'demo' => 'http://materialize.bobrockefeller.com/',
        'keywords' => 'materialize, theme, framework',
        'bugs' => 'https://github.com/bobrocke/grav-theme-materialize/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'materializer'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
