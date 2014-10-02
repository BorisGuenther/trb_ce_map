<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * SETUP COLUMNS
 */
$columns	= array(
	'tx_trb_ce_map_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_ce_map/Resources/Private/Language/locallang_db.xlf:column.name',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_ce_map_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_ce_map/Resources/Private/Language/locallang_db.xlf:column.address',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'required,trim'
			),
	),
	'tx_trb_ce_map_map' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_ce_map/Resources/Private/Language/locallang_db.xlf:column.map',
			'config' => array(
					'type' => 'select',
					'default' => '',
					'items' => array(
							array('Map', ''),
							array('Satelite', 'k'),
					)
			),
	),
	'tx_trb_ce_map_height' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_ce_map/Resources/Private/Language/locallang_db.xlf:column.height',
			'config' => array(
					'type' => 'input',
					'default' => 400,
					'size' => 4,
					'eval' => 'required,int'
			)
	),
	'tx_trb_ce_map_aspect' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_ce_map/Resources/Private/Language/locallang_db.xlf:column.aspect',
			'config' => array(
					'type' => 'select',
					'default' => '14',
					'items' => array(
							array('World', '0'),
							array('4.000 km', '1'),
							array('2.000 km', '2'),
							array('1.000 km', '3'),
							array('400 km', '4'),
							array('200 km', '5'),
							array('100 km', '6'),
							array('50 km', '7'),
							array('30 km', '8'),
							array('15 km', '9'),
							array('8 km', '10'),
							array('4 km', '11'),
							array('2 km', '12'),
							array('1 km', '13'),
							array('400 m', '14'),
							array('200 m', '15'),
							array('100 m', '16'),
							array('50 m', '17'),
							array('25 m', '18'),
							array('10 m', '19'),
							array('5 m', '20'),
							array('2,5 m', '21'),
					)
			),
	),
);


/*
 * REGISTER COLUMNS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $columns);


/*
 * SETUP PALETTE
 */
$GLOBALS['TCA']['tt_content']['palettes']['trbcemap_map']['canNotCollapse']	= 1;
$GLOBALS['TCA']['tt_content']['palettes']['trbcemap_map']['showitem']		= '
	tx_trb_ce_map_name,
	--linebreak--,
	tx_trb_ce_map_address,
	--linebreak--,
	tx_trb_ce_map_aspect,
	tx_trb_ce_map_map,
	tx_trb_ce_map_height
';


/*
 * SETUP TYPE
 */
$GLOBALS['TCA']['tt_content']['types']['trbcemap_map']['showitem']	= '
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
	layout;LLL:EXT:cms/locallang_ttc.xlf:layout_formlabel,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.header;header,
	--palette--;LLL:EXT:trb_ce_map/Resources/Private/Language/locallang_db.xlf:palette.map;trbcemap_map,

--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,

--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended,

--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,
	categories
';
