<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Fab.agile_carousel',
    'Pi1',
    array(
        'Carousel' => 'list',
    ),
    // non-cachable actions
    array()
);
