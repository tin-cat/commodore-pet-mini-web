<?php

/**
 * Home
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * Contribute
 *
 * A module that manages the contribute screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class Contribute extends \Cherrycake\Module {
	
	var $dependentCherrycakeModules = [
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
			"contribute",
			new \Cherrycake\Action([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Contribute",
				"methodName" => "home",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "contribute"
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
			"content" => $e->Patterns->parse("Contribute/Home.html"),
			"mainOptionSelected" => "contribute",
			"isAllMainOptionsOpen" => true
		]);
		return true;
	}
}