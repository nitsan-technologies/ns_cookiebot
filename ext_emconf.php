<?php

$EM_CONF['ns_cookiebot'] = [
    'title' => 'TYPO3 Cookie Consent (Cookiebot)',
    'description' => 'Integrate Cookiebot into your TYPO3 site to ensure GDPR and ePrivacy compliance. Automatically manage cookie consent and transparency for users.',
    
    'category' => 'plugin',
    'author' => 'Team T3Planet',
    'author_email' => 'info@t3planet.de',
    'author_company' => 'T3Planet',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '4.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '6.0.0-13.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
