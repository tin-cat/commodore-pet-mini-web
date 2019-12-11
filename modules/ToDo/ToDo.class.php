<?php

/**
 * Home
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * ToDo
 *
 * A module that manages the ToDo screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class ToDo extends \Cherrycake\Module {
	
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
			"todo",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "ToDo",
				"methodName" => "home",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "to-do"
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
			"content" => $e->Patterns->parse("ToDo/Home.html"),
			"mainOptionSelected" => "todo"
		]);
		return true;
	}
}