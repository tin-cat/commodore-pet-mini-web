<?php

/**
 * Javascript config
 *
 * Holds the configuration for the Javascript module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

global $e;

$JavascriptConfig = [
	"lastModifiedTimestamp" => mktime(2, 0, 0, 22, 1, 2019), // The global version
	"isMinify" => false,
	"sets" => [ // An array of Javascript sets with its files that should be always configured, will be added to the group "main"
		"main" => [
			"directory" => \CherrycakeApp\DIR_RES."/javascript/main"
		],
		"uiComponents" => [
			"directory" => \CherrycakeApp\DIR_RES."/javascript/uicomponents"
		]
	]
];