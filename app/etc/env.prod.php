<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '767a564826c2d9064f97fce4a59ee458'
    ],
    'db' => [
        'table_prefix' => 'm2_',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'rostyslav_panteleichuk_local',
                'username' => 'rostyslav_panteleichuk_local',
                'password' => 'rostyslav_panteleichuk_local',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_'
            ],
            'page_cache' => [
                'id_prefix' => '69d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'rostyslav-panteleichuk.local'
    ],
    'install' => [
        'date' => 'Sat, 03 Oct 2020 11:43:52 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://rostyslav-panteleichuk.local/',
                    'base_link_url' => '{{unsecure_base_url}}',
                    'base_static_url' => 'https://rostyslav-panteleichuk.local/static/',
                    'base_media_url' => 'https://rostyslav-panteleichuk.local/media/'
                ],
                'secure' => [
                    'base_url' => 'https://rostyslav-panteleichuk.local/',
                    'base_link_url' => '{{secure_base_url}}',
                    'base_static_url' => 'https://rostyslav-panteleichuk.local/static/',
                    'base_media_url' => 'https://rostyslav-panteleichuk.local/media/'
                ]
            ]
        ],
        'websites' => [
            'additional_website' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'https://rostyslav-panteleichuk-additional.local/',
                        'base_link_url' => 'https://rostyslav-panteleichuk-additional.local/',
                        'base_static_url' => 'https://rostyslav-panteleichuk-additional.local/static/',
                        'base_media_url' => 'https://rostyslav-panteleichuk-additional.local/media/'
                    ],
                    'secure' => [
                        'base_url' => 'https://rostyslav-panteleichuk-additional.local/',
                        'base_link_url' => 'https://rostyslav-panteleichuk-additional.local/',
                        'base_static_url' => 'https://rostyslav-panteleichuk-additional.local/static/',
                        'base_media_url' => 'https://rostyslav-panteleichuk-additional.local/media/'
                    ]
                ]
            ]
        ]
    ]
];
