<?php

/**
 * Actions config
 *
 * Holds the configuration for the Actions module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$ActionsConfig = [
	"defaultActionCacheProviderName" => "fast", // The default cache provider name to asign to cached Action objects
	"defaultActionCacheTtl" => \Cherrycake\Modules\CACHE_TTL_MINIMAL, // The default cache TTL to assign to cached Action objects
	"defaultActionCachePrefix" => "Actions", // The default cache prefix to assign to cached Action objects
	"actionableCherrycakeModuleNames" => [ // Cherrycake modules known to need Actions
		"Janitor",
		"Css",
		"Javascript"
	],
	"actionableAppModuleNames" => [ // App modules known to need Actions
		"Home",
		"Documentation",
		"UserBuilds",
		"Order",
		"Contribute",
		"ToDo",
		"Goodies",
		"Press"
	]
];