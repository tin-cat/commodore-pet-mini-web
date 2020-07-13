<?php

/**
 * Css config
 *
 * Holds the configuration for the Css module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

global $e;

$CssConfig = [
	"lastModifiedTimestamp" => mktime(4, 0, 0, 7, 13, 2020), // The global version
	"isMinify" => !$e->isDevel(),
	"sets" => [ // An array of Css sets configured.
		"main" => [
			"variablesFile" => [\CherrycakeApp\DIR_RES."/css/CommonVariables.php"], // A file (or an array of files) to include whenever parsing this set files, usually for defining variables that can be later used inside the css files
			"isGenerateTextColorsCssHelpers" => true, // Whether or not to generate Css helper elements for text colors, based on variables defined in this set's variablesFile
			"isGenerateBackgroundColorsCssHelpers" => true, // Whether or not to generate Css helper elements for background colors, based on variables defined in this set's variablesFile
			"isGenerateBackgroundGradientsCssHelpers" => true, // Whether or not to generate Css helper elements for background gradients, based on variables defined in this set's variablesFile
			"directory" => \CherrycakeApp\DIR_RES."/css/main",
			"isIncludeAllFilesInDirectory" => true
		],
		"uiComponents" => [
			"variablesFile" => [\CherrycakeApp\DIR_RES."/css/CommonVariables.php"], // A file (or an array of files) to include whenever parsing this set files, usually for defining variables that can be later used inside the css files
			"directory" => \CherrycakeApp\DIR_RES."/css/uicomponents",
			"isIncludeAllFilesInDirectory" => true
		]
	]
];