<?php

/**
 * Home
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * UserBuilds
 *
 * A module that manages the user builds screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class UserBuilds extends \Cherrycake\Module {
	
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
			"userBuilds",
			new \Cherrycake\Action([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "UserBuilds",
				"methodName" => "home",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "UserBuilds"
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
			"content" => $e->Patterns->parse("UserBuilds/Home.html"),
			"mainOptionSelected" => "userBuilds"
		]);
		return true;
	}
}