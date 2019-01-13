<?php

/**
 * Cherrycake Skeleton
 * Index file
 *
 * @copyright Tin.cat 2014
 */

namespace CherrycakeApp;

// Include the cherrycake loader script
require "load.php";

// Creates a cherrycake engine
$e = new \Cherrycake\Engine;

// Inits the engine and runs the App if initting has gone ok.
if ($e->init([
	"namespace" => __NAMESPACE__,
	"baseCherrycakeModules" => [
		"Output",
		"Errors",
		"Actions",
		"Cache"
	],
	"additionalAppConfigFiles" => [
		"App.config.php"
	]
]))
	$e->attendWebRequest();

// Ends the engine
$e->end();