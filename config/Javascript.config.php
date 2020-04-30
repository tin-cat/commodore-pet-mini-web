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
	"cacheTtl" => \Cherrycake\CACHE_TTL_LONGEST, // The TTL for Javascript sets
	"cacheProviderName" => "engine", // The cache provider for Javascript sets
	"isCache" => !$e->isDevel(), // The default value for isCache in each set
	"isHttpCache" => false, // Whether to send HTTP Cache headers or not
	"lastModifiedTimestamp" => mktime(2, 0, 0, 22, 1, 2019), // The global version
	"httpCacheMaxAge" => \Cherrycake\CACHE_TTL_LONGEST,
	"isMinify" => !$e->isDevel(),
	"defaultSets" => [ // An array of Javascript sets with its files that should be always configured, will be added to the group "main"
		"main" => [
			"directory" => \CherrycakeApp\DIR_RES."/javascript/main"
		],
		"uicomponents" => [
			"directory" => \CherrycakeApp\DIR_RES."/javascript/uicomponents"
		]
	]
];