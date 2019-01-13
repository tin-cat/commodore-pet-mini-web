<?php

/**
 * Javascript config
 *
 * Holds the configuration for the Javascript module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$JavascriptConfig = [
	"cacheTtl" => \Cherrycake\Modules\CACHE_TTL_LONGEST, // The TTL for Javascript sets
	"cacheProviderName" => "fast", // The cache provider for Javascript sets
	"isCache" => IS_CACHE, // The default value for isCache in each set
	"isHttpCache" => IS_HTTP_CACHE, // Whether to send HTTP Cache headers or not
	"lastModifiedTimestamp" => mktime(0, 0, 0, 8, 1, 2014), // The global version
	"httpCacheMaxAge" => \Cherrycake\Modules\CACHE_TTL_LONGEST,
	"isMinify" => !IS_DEVEL_ENVIRONMENT,
	"defaultSets" => [ // An array of Javascript sets with its files that should be always configured, will be added to the group "main"
		"main" => [
			"directory" => \CherrycakeApp\DIR_RES."/javascript/main"
		],
		"uicomponents" => [
			"directory" => \CherrycakeApp\DIR_RES."/javascript/uicomponents"
		]
	]
];