<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/guestbook/blueprints.yaml',
    'modified' => 1468608692,
    'data' => [
        'name' => 'Guestbook',
        'version' => '0.3.1',
        'description' => 'Adds a Guestbook functionality to a page',
        'icon' => 'book',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-guestbook',
        'keywords' => 'guestbook, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-guestbook/issues',
        'readme' => 'https://github.com/getgrav/grav-plugin-guestbook/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'form',
            1 => 'email'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'filename' => [
                    'type' => 'text',
                    'label' => 'Filename',
                    'size' => 'medium',
                    'placeholder' => 'messages.yaml',
                    'default' => 'messages.yaml',
                    'help' => 'The filename where to store the guestbook messages, under user/data/guestbook'
                ]
            ]
        ]
    ]
];
