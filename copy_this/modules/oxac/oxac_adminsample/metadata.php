<?php

$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
		'id'			=> 'oxac_adminsample',
		'title'			=> array(
				'en'		=>	'Sample admin extension',
				'de'		=>	'Beispiel-Erweiterung für den Shop-Admin',
		),
		'description'	=> array(
				'en'		=>	'Sample extension by OXID Academy',
				'de'		=>	'Beispielerweiterung von OXID Academy',
		),
		'thumbnail'		=> '',
		'version'		=> '0.0.2',
		'author'		=> 'Johannes Ackermann',
		'url'			=> 'http://www.oxid-esales.com',
		'email' 		=> 'johannes.ackermann@oxid-esales.com',
		'extend'		=> array(
		),
		'files'			=> array(
				'oxac_adminsample_main'		=>	'oxac/oxac_adminsample/controllers/admin/oxac_adminsample_main.php',
		),
		'templates'		=> array(
				'oxac_adminsample_main.tpl'	=>	'oxac/oxac_adminsample/views/admin/oxac_adminsample_main.tpl'
		),
);
