<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Xmwhd Portfolio',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Xmwhd\\XmwhdPortfolio\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Maik Demuth',
    'author_email' => 'maik.demuth@outlook.com',
    'author_company' => 'Xmwhd',
    'version' => '1.0.0',
];
