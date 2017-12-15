<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'            => 'oxac_adminsample',
    'title'         => [
        'en'    =>	'Sample admin extension',
        'de'    =>	'Beispiel-Erweiterung für den Shop-Admin',
    ],
    'description'	=> [
        'en'    =>	'Sample extension by OXID Academy',
        'de'    =>	'Beispielerweiterung von OXID Academy',
    ],
    'thumbnail'     => '',
    'version'       => '1.0.0',
    'author'        => 'Johannes Ackermann',
    'url'           => 'https://www.oxid-esales.com/oxid-welt/academy/schulungen/',
    'email'         => 'johannes.ackermann@oxid-esales.com',
    'controllers'   => [
        // Admin view controller
        'oxac_adminsample_main'     =>  OxidEsales\OxidAcademy\AdminSample\Controller\admin\AdminSample_Main::class,
    ],
    'templates'		=> [
        // Admin view
        'oxac_adminsample_main.tpl' =>  'oxac/oxac_adminsample/views/admin/oxac_adminsample_main.tpl'
    ],
];
