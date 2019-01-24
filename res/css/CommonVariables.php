<?php

namespace Cherrycake;

$fonts = [
	"interface" => [
		"family" => "Inconsolata",
		"size" => $e->Css->unit(11, "pt"),
		"weight" => "400",
		"height" => "1.4em"
	],
	"titles" => [
		"family" => "Roboto Slab",
		"weight" => "400",
		"height" => "1.4em"
	]
];

$colorPalette = [
	// Main
	"mainBackgroundColor" => new Color("withHex", "#ffffff"),
	"mainBackgroundColorLighter" => new Color("withHex", "#ff316f"),
	"darkBackgroundColor" => new Color("withHex", "#111"),
	"defaultTextColor" => new Color("withRgb", [30, 30, 30]),
	"darkBackgroundTextColor" => new Color("withRgb", [255, 255, 255]),
	"defaultAnchorColor" => new Color("withHex", "#ff114f"),
	"defaultAnchorColorHighlighted" => new Color("withRgb", [49, 240, 255]),
	"defaultAccentColor" =>  new Color("withHex", "#ff114f"),
	"defaultAccentColorHighlighted" =>  new Color("withHex", "#ffb1bf")
];

$baseGap = 10;