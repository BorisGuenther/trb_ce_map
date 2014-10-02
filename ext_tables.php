<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * PLUGIN
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Map', 'Map');


/*
 * FLEXFORM
 */
$TCA['tt_content']['types']['list']['subtypes_excludelist']['trbcemap_map'] = 'layout,select_key,pages';
$TCA['tt_content']['types']['list']['subtypes_addlist']['trbcemap_map'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('trbcemap_map', 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/Map.xml');


/*
 * TYPOSCRIPT
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TRB CE Map');


/*
 * PAGE CONFIG
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:'.$_EXTKEY.'/Configuration/Page/">');
