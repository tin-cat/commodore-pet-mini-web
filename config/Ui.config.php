<?php

/**
 * Ui config
 *
 * Holds the configuration for the Ui module
 *
 * @package CherrycakeSkeleton
 */

namespace Cherrycake;

$UiConfig = [
	"cherrycakeUiComponents" => [ // List of Cherrycake UiComponent classes (along with their configurations) that are used on this app
		"UiComponentFonts",
		"UiComponentIcons",
		"UiComponentButton",
		"UiComponentTable",
		"UiComponentMenu",
		"UiComponentPopup",
		"UiComponentNotice",
		"UiComponentTooltip",
		"UiComponentAjax",
		"UiComponentImage",
		"UiComponentButtonSwitchAjax",
		"UiComponentPanel",
		"UiComponentArticle"
	],
	"appUiComponents" => [ // List of App UiComponent classes (along with their configurations) that are used on this app
	]
];