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
	"isAutoBannedIps" => true // Whether to automatically ban IPs when a hack is detected
];