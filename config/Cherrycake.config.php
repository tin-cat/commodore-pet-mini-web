<?php

/**
 * Cherrycake config
 *
 * Holds the configuration for the Engine (Not a module)
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

define("IS_DEVEL_ENVIRONMENT", gethostname() == "lenny"); // Whether the app is running in the devel environment or not.
const IS_CACHE = false; // Whether to use caches or not.
const IS_HTTP_CACHE = false; // Whether to send HTTP headers caches or not.

const ADMIN_TECHNICAL_EMAIL = false; // The email where administrative reports about technical matters will be sent

const IS_UNDER_MAINTENANCE = false; // Whether the app is in maintenance. A maintenance error screen will be always shown
$underMaintenanceExceptionIps = []; // An array of IPs that will see the app running even when under maintenance

const CONFIG_DIR = "config"; // The directory where modules configuration files reside
const APP_MODULES_DIR = "modules"; // The directory where app modules reside
const APP_CLASSES_DIR = "classes"; // The directory where app classes reside
const TIMEZONENAME = "Etc/UTC"; // The system's timezone. All modules, including Database for date/time retrievals/saves will be made taking this timezone into account. The server is expected to run on this timezone. Standard "Etc/UTC" is recommended.
const TIMEZONEID = 532; // The system's timezone. The same as TIMEZONENAME, but the matching id on the cherrycake timezones database table

// Location
const LOCATION_DATABASE_PROVIDER_NAME = "main"; // The name of the DatabaseProvider to use when requesting location data from the Database, as defined in database.config.php
const LOCATION_CACHE_PROVIDER_NAME = "fast"; // The name of the CacheProvider to use, as defined in cache.config.php
const LOCATION_CACHE_TTL = 2592000; // TTL For the location data (2592000 = 1 Month)