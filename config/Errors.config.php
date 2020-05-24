<?php

/**
 * Errors config
 *
 * Holds the configuration for the Errors module
 *
 * @package CherrycakeSkeleton
 */

namespace Cherrycake;

$ErrorsConfig = [
	"isHtmlOutput" => true, // Whether to dump HTML formatted errors or not when not using a pattern to show errors. Defaults to true
	"isPattern" => true, // Set to true to trigger a pattern when an error occurs instead of just dumping plain, unformatted HTML. Defaults to false
	"patternNames" => [
		// \Cherrycake\ERROR_SYSTEM => "errors/error.html",
		// \Cherrycake\ERROR_APP => "errors/error.html",
		\Cherrycake\ERROR_NOT_FOUND => "Errors/NotFound.html",
		\Cherrycake\ERROR_NO_PERMISSION => "Errors/NoPermission.html"
	], // An array of pattern names to user when an error occurs, when isPattern is set to true. Defaults to "errors/error.html"
	"notificationEmail" => "lorenzo@tin.cat"
];