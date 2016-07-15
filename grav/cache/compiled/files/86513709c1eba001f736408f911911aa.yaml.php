<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/minicode/blueprints.yaml',
    'modified' => 1460326206,
    'data' => [
        'name' => 'Mini Code',
        'version' => '1.1.0',
        'description' => 'Output tiny html code (or text) from file. Use twig filter.',
        'icon' => 'sticky-note-o',
        'author' => [
            'name' => 'Takefumi Ota',
            'email' => 'taketakegogo@gmail.com',
            'url' => 'http://gracix.com'
        ],
        'homepage' => 'https://github.com/gracix/grav-plugin-minicode',
        'keywords' => 'snippet, minicode, html, plugin, shortcode',
        'bugs' => 'https://github.com/gracix/grav-plugin-minicode/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
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
                'enabled_in_admin' => [
                    'type' => 'toggle',
                    'label' => 'Enable in admin',
                    'highlight' => 0,
                    'default' => 0,
                    'help' => 'Should Smartypants plugin work in the admin during content preview',
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twig_filter' => [
                    'type' => 'toggle',
                    'label' => 'Twig filter',
                    'highlight' => 1,
                    'default' => 1,
                    'help' => 'Load the Twig filter to be availble in Twig templates',
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'data_directory' => [
                    'type' => 'text',
                    'label' => 'Minicode files directory',
                    'size' => 'large',
                    'validate' => [
                        'min' => 1
                    ]
                ]
            ]
        ]
    ]
];
