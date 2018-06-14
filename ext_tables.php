<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}
// Declare static TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY, 'Configuration/TypoScript/',
    'Tarte au citron'
);