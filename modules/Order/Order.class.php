<?php

/**
 * Home
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * Order
 *
 * A module that manages the user builds screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class Order extends \Cherrycake\Module {
	protected $isConfigFile = true;
	
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
			"order",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Order",
				"methodName" => "home",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "order"
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
			"content" => $e->Patterns->parse("Order/Home.html"),
			"mainOptionSelected" => "order"
		]);
		return true;
	}
    
    function getProductConfig($productCode) {
        return $this->getConfig("products")[$productCode];
    }

    function getProductPrice($productCode) {
        return $this->getProductConfig($productCode)["price"][\Cherrycake\Modules\CURRENCY_EURO];
    }
}