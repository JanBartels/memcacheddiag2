<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "memcacheddiag2"
 *
 * Auto generated by Extension Builder 2016-08-05
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'memcacheddiag2',
	'description' => 'Displays diagnosis information about memcache',
	'category' => 'module',
	'version' => '1.0.1',
	'author' => 'Jan Bartels',
	'author_email' => 'j.bartels@arcor.de',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-8.7.99',
			'php' => '5.5.0-7.0.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);