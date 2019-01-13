<?php

/**
 * Session config
 *
 * Holds the configuration for the Session module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$SessionConfig = [
    "cookieName" => "cherrycake_application_name", // The name of the cookie.
    "cookieDomain" => "", // Must be set at config-level to the domain on which the session cookie must function. Usually something like ".domain.com" to make it work for all subdomains
    "sessionDuration" => false, // The duration of the session in seconds. If set to zero, the session will last until the browser is closed.
    "isSessionRenew" => true, // When set to true, the duration of the session will be renewed to a new sessionDuration. If set to false, the cookie will expire after sessionDuration, no matter how many times the session is requested.
];