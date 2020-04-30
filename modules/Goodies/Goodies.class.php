<?php

/**
 * Goodies
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * Goodies
 *
 * A module that manages the Goodies screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class Goodies extends \Cherrycake\Module {
	
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
			"goodies",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Goodies",
				"methodName" => "home",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "goodies"
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
		$e->Ui->uiComponents["UiComponentPanel"]->setOutputResponse([
			"content" => $e->Patterns->parse("Goodies/Home.html"),
			"mainOptionSelected" => "goodies"
		]);
		return true;
	}
}