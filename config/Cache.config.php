<?php

/**
 * Cache config
 *
 * Holds the configuration for the Cache module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$CacheConfig = [
	"providers" => [
		"fast" => [
			"providerClassName" => "CacheProviderApcu"
		],
		"huge" => [
			"providerClassName" => "CacheProviderRedis",
			"config" => [
				"scheme" => "tcp",
				"host" => "redis", // Example: localhost
				"port" => 6379, // Example: 6379
				"database" => 0,
				"prefix" => "CherrycakeApp:"
			]
		]
	]
];