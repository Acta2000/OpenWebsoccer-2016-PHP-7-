<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/toc/languages.yaml',
    'modified' => 1460326220,
    'data' => [
        'de' => [
            'PLUGINS' => [
                'TOC' => [
                    'GLOBAL_CONFIG' => 'Globale Einstellungen',
                    'DEFAULT_CONFIG' => 'Standardeinstellungen für External Links',
                    'SPECIFIC_CONFIG' => 'Globale und seitenspezifische Einstellungen',
                    'PLUGIN_STATUS' => 'Plugin Status',
                    'BUILTIN_CSS' => 'Verwende mitgeliefertes CSS',
                    'TITLE' => 'Zeige Titel des Inhaltsverzeichnisses',
                    'ANCHORLINK' => 'Zeige Anker-Links',
                    'ANCHORLINK_HELP' => 'Aktivieren falls alle Überschriften mit Anker-Links versehen werden sollen.',
                    'PERMALINK' => 'Zeige Permalinks für Überschriften',
                    'PERMALINK_HELP' => 'Aktivieren um Permalinks für Überschriften hinzuzufügen.',
                    'PLACEMENT' => 'Platzierung der Anker-Links',
                    'PLACEMENT_LEFT' => 'Links',
                    'PLACEMENT_RIGHT' => 'Rechts',
                    'VISIBLILITY' => 'Sichtbarkeit der Anker-Links',
                    'VISIBLILITY_HOVER' => 'hover - Sichtbar beim Drüberfahren mit der Maus',
                    'VISIBLILITY_ALWAYS' => 'always - Immer sichtbar',
                    'ICON' => 'Text/Bild bevor Anker-Link',
                    'ICON_HELP' => 'Standard oder ein spezifisches Zeichen wie #, ¶, ❡, oder §.',
                    'CLASS' => 'Zusätzliche Klassen',
                    'CLASS_HELP' => 'Hinzufügen von zusätzlichen Klassen zum Anker-Link',
                    'BASELEVEL' => 'Beginne bei Überschrift x. Ordnung',
                    'HEADINGLEVEL' => 'Maximal angezeigte Ordnung von Überschriften in TOC/MINITOC',
                    'PROCESS' => 'Aktiviere <code>Toc</code>-Filter auf Seite',
                    'SLUG' => [
                        'SECTION' => 'Clean URL Erzeugung',
                        'TRUNCATE' => 'Überschriften kürzen',
                        'LENGTH' => 'Clean URL Länge',
                        'BREAK' => 'Trennzeichen',
                        'BREAK_HELP' => 'Trennzeichen welches zwischen Wörtern in der Clean URL eingesetzt wird',
                        'PAD' => 'Addendum',
                        'PAD_HELP' => 'Zusatz, der am Ende der verkürzte Clean URL kennzeichnet'
                    ],
                    'PATTERNS' => [
                        '~\\&~' => 'und',
                        '~[^\\p{L}\\d]+~u' => '-',
                        '~([A-Z]+)([A-Z][a-z])~' => '\\1-\\2',
                        '~([a-z]{2,})([A-Z])~' => '\\1-\\2'
                    ]
                ]
            ]
        ],
        'en' => [
            'PLUGINS' => [
                'TOC' => [
                    'GLOBAL_CONFIG' => 'Global plugin configurations',
                    'DEFAULT_CONFIG' => 'Default values for External Links configuration',
                    'SPECIFIC_CONFIG' => 'Global and page specific configurations',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'BUILTIN_CSS' => 'Use built in CSS',
                    'TITLE' => 'Show title in the Table of Contents',
                    'ANCHORLINK' => 'Show anchor links',
                    'ANCHORLINK_HELP' => 'Set to true to cause all headers to link to themselves.',
                    'PERMALINK' => 'Add permalinks for headings',
                    'PERMALINK_HELP' => 'Set to true to generate permanent links at the beginning of each header',
                    'PLACEMENT' => 'Placement of anchor link',
                    'PLACEMENT_LEFT' => 'Left',
                    'PLACEMENT_RIGHT' => 'Right',
                    'VISIBLILITY' => 'Visibility of anchor link',
                    'VISIBLILITY_HOVER' => 'hover - Visible on hover',
                    'VISIBLILITY_ALWAYS' => 'always - Always visible',
                    'ICON' => 'Icon of the anchor link',
                    'ICON_HELP' => 'Default link or a specific character like: #, ¶, ❡, and §.',
                    'CLASS' => 'Additional classes',
                    'CLASS_HELP' => 'Adds the provided class to the anchor link',
                    'BASELEVEL' => 'Base level for headings',
                    'HEADINGLEVEL' => 'Maximum heading level to show in TOC/MINITOC',
                    'PROCESS' => 'Activate <code>Toc</code> filter on the page',
                    'SLUG' => [
                        'SECTION' => 'Slug generation',
                        'TRUNCATE' => 'Truncate headings for slug generation',
                        'LENGTH' => 'Slug string length',
                        'BREAK' => 'Break delimiter',
                        'BREAK_HELP' => 'The break delimiter to divide the slug into pieces of words',
                        'PAD' => 'Addendum',
                        'PAD_HELP' => 'Added to the end of the truncated slug'
                    ],
                    'PATTERNS' => [
                        '~\\&~' => 'and',
                        '~[^\\p{L}\\d]+~u' => '-',
                        '~(\\w{4,})y\\-s\\-~i' => '$1ies-',
                        '~(\\w{4,})\\-s\\-~i' => '$1s-',
                        '~([A-Z]+)([A-Z][a-z])~' => '\\1-\\2',
                        '~([a-z]{2,})([A-Z])~' => '\\1-\\2'
                    ]
                ]
            ]
        ]
    ]
];
