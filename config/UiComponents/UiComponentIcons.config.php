<?php

/**
 * UiComponentIcons config
 *
 * Holds the configuration for the UiComponentIcons UiComponent
 *
 * @package Movefy
 */

namespace Cherrycake;

$UiComponentIconsConfig = [
	"directory" => \CherrycakeApp\DIR_RES."/icons", // Where the icon files reside, each subdirectory is named after an style, containing the SVG icons for that style
	"sizes" => [12, 14, 16, 32, 64, 128, 256],  // The icon sizes to generate
	"sizeUnits" => "px", // The unit on which sizes are specified
	"defaultSize" => 16, // The default icon size to use when no size Css class is specified
	"spinningIcons" => ["loading", "working"], // An array of icon names that must be spinning
	"isEmbedInline" => false, // Wheter to embed icon VG files on the CSS itself in Base 64 to avoid multiple HTTP calls or not.
	"method" => "mask", // The method to use to build css icons; "backgroundImage" or "mask". "backgroundImage" does not allows for coloring but is more compatible. "mask" allows for coloring via css but is less cross-browser compatible
	"colors" => [ // A hash array of additional color styles when using the "mask" method, where each key is the color name, and the value is the color in HTML hex value.
		"black" => "#000",
		"white" => "#fff",
		"lightGrey" => "#ccc",
		"darkGrey" => "#888"
	]
];