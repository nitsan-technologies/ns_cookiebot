<?php

defined('TYPO3_MODE') || defined('TYPO3') or die();
$extKey = 'ns_cookiebot';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extKey,
    'Configuration/TypoScript',
    'Cookiebot'
);
