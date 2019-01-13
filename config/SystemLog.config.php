<?php

/**
 * SystemLog config
 *
 * Holds the configuration for the SystemLog module
 *
 * @package CherrycakeSkeleton
 */

namespace Cherrycake;

$SystemLogConfig = [
	"databaseProviderName" => "main", // The name of the database provider where the system log table is found
	"cacheProviderName" => "huge", // The name of the cache provider that will be used to temporally store log events as they happen, to be later added to the database by the JanitorTaskLog. Must support queueing
	"isQueueInCache" => true // Whether to store the log events into cache (queue it) in order to be later processed by JanitorTaskSystemLog, or directly store it on the database. Defaults to true.
];