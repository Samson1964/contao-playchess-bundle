<?php

// Anpassung der Palette
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace
(
	'gender;',
	'gender;{playchess_legend:hide},playchessID;',
	$GLOBALS['TL_DCA']['tl_member']['palettes']['default']
);

// Hinzufügen der Feld-Konfiguration
// PKZ in DeWIS
$GLOBALS['TL_DCA']['tl_member']['fields']['playchessID'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['playchessID'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array
	(
		'mandatory'           => false, 
		'maxlength'           => 255, 
		'tl_class'            => 'long',
		'feEditable'          => true,
		'feViewable'          => true,
		'feGroup'             => 'playchess'
	),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
