<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

	// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'help',
		'about',
		'top',
		array(
			'About' => 'index',
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:about/ext_icon.gif',
			'labels' => 'LLL:EXT:lang/locallang_mod_help_about.xlf',
		)
	);
}
?>