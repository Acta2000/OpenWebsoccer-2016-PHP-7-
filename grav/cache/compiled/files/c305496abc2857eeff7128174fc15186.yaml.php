<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/metadata_extended/metadata_extended.yaml',
    'modified' => 1460326206,
    'data' => [
        'enabled' => true,
        'fields' => [
            'og' => [
                'title' => '{% if page.title %}{{ page.title | e(\'html_attr\') }} - {% endif %}{{ site.title | e(\'html_attr\') }}',
                'description' => '{% if page.summary %}{{ page.summary | striptags | e(\'html_attr\') }}{% else %}{{ site.metadata.description | e(\'html_attr\') }}{% endif %}',
                'type' => 'page',
                'url' => '{{ page.url(true) }}',
                'image' => '{% if page.media.images is iterable %}{% set image = page.media.images | first %}{{ image.url }}{% endif %}',
                'updated_time' => '{{ page.modified }}'
            ]
        ]
    ]
];
