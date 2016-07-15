<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/read_later/read_later.yaml',
    'modified' => 1460326212,
    'data' => [
        'enabled' => true,
        'services' => [
            'instapaper' => [
                'url' => 'http://www.instapaper.com/hello2?url={url}&title={title}',
                'label' => 'Add to Instapaper',
                'enabled' => true
            ],
            'pocket' => [
                'url' => 'https://getpocket.com/save?url={url}&title={title}',
                'label' => 'Save to Pocket',
                'enabled' => true
            ],
            'readability' => [
                'url' => 'http://www.readability.com/save?url={url}',
                'label' => 'Add to Readability',
                'enabled' => true
            ]
        ],
        'separator' => ' &middot; '
    ]
];
