<?php


$tempColumns = array(
	'subtitle' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:extnews/Resources/Private/Language/locallang_db.xml:tx_extnews_domain_model_extnews.subtitle',
		'config' => array(
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns, true);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news','subtitle','','after:title');