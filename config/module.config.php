<?php
namespace CiteShare;

return [
    'view_manager' => [
        'template_path_stack' => [
            OMEKA_PATH . '/modules/CiteShare/view',
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'CiteShare' => View\Helper\CiteShare::class,
        ]
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => dirname(__DIR__) . '/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
];