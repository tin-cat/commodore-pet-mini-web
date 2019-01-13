<?php

/**
 * Security config
 *
 * Holds the configuration for the Security module
 *
 * @package CherrycakeSkeleton
 */

namespace Cherrycake;

$SecurityConfig = [
	"permanentlyBannedIps" => false, // An array of banned IPs that must be blocked from accessing the application
	"isAutoBannedIps" => true, // Whether to automatically ban IPs when a hack is detected
	"autoBannedIpsCacheProviderName" => "fast", // The name of the CacheProvider used to store banned Ips
	"autoBannedIpsCacheTtl" => \Cherrycake\Modules\CACHE_TTL_12_HOURS, // The TTL of banned Ips. Auto banned IPs TTL expiration is resetted if more hack detections are detected for that Ip
	"autoBannedIpsThreshold" => 10 // The number hack intrusions detected from the same Ip to consider it banned
];