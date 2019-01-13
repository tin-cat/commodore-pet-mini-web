<?php

/**
 * UiComponentFonts config
 *
 * Holds the configuration for the UiComponentFonts UiComponent
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$UiComponentFontsConfig = [
	"directory" => \CherrycakeApp\DIR_RES."/fonts", // The directory where font files are stored
	"fonts" => [
		[
			"family" => "Inconsolata",
			"variants" => [
				[
					"style" => "regular",
					"weight" => "400",
					"baseFileName" => "Inconsolata-Regular"
				],
				[
					"style" => "bold",
					"weight" => "600",
					"baseFileName" => "Inconsolata-Bold"
				]
			]
		],
		[
			"family" => "Roboto Slab",
			"variants" => [
				[
					"style" => "semibold",
					"weight" => "400",
					"baseFileName" => "RobotoSlab-Regular"
				]
			]
		]
	]
];