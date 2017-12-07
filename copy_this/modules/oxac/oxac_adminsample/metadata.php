<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

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
    'version'		=> '0.1.0',
    'author'		=> 'Johannes Ackermann',
    'url'			=> 'http://www.oxid-esales.com',
    'email' 		=> 'johannes.ackermann@oxid-esales.com',
    'controllers'	=> array(

        // Controller
        'oxac_adminsample_main'		=>	OxidEsales\OxidAcademy\AdminSample\Controller\AdminSample_Main::class,
    ),
    'templates'		=> array(

        // Admin back-end
        'oxac_adminsample_main.tpl'	=>	'oxac/oxac_adminsample/views/admin/oxac_adminsample_main.tpl'
    ),
);
