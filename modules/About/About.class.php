<?php

/**
 * About
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp;

/**
 * About
 *
 * A module that manages the About screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class About extends \Cherrycake\Module {
	
	var $dependentCoreModules = [
		"Patterns",
		"HtmlDocument"
	];

	var $dependentAppModules = [
		"PrepareBasic"
	];

	/**
	 * mapActions
	 *
	 * Maps the Actions to which this module must respond
	 */
	public static function mapActions() {
		global $e;
		$e->Actions->mapAction(
			"about",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "About",
				"methodName" => "home",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "about"
                        ])
                    ]
				])
			])
		);
	}

	/**
	 * Outputs the home page
	 * @return boolean True if the request could be attended, false otherwise.
	 */
	function home() {
		global $e;
		$e->UiComponentPanel->setOutputResponse([
			"content" => $e->Patterns->parse("About/Home.html"),
			"mainOptionSelected" => "about"
		]);
		return true;
	}
}