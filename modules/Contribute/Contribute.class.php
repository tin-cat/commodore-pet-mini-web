<?php

/**
 * Home
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp;

/**
 * Contribute
 *
 * A module that manages the contribute screen
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class Contribute  extends \Cherrycake\Module {
	
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
			"howToContribute",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Contribute",
				"methodName" => "howToContribute",
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

		$e->Actions->mapAction(
			"contributionKeycaps",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Contribute",
				"methodName" => "contributionKeycaps",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "contribute"
                        ]),
						new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "keycaps"
                        ])
                    ]
				])
			])
		);

		$e->Actions->mapAction(
			"contributionHDMIMod",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Contribute",
				"methodName" => "contributionHDMIMod",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "contribute"
                        ]),
						new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "hdmi-mod"
                        ])
                    ]
				])
			])
		);

		$e->Actions->mapAction(
			"contributionKeyboardGamePad",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Contribute",
				"methodName" => "keyboardGamePad",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "contribute"
                        ]),
						new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "keyboard-gamepad"
                        ])
                    ]
				])
			])
		);

		$e->Actions->mapACtion(
			"contributionWorkingKeyboard",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Contribute",
				"methodName" => "workingKeyboard",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "contribute"
                        ]),
						new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "working-keyboard"
                        ])
                    ]
				])
			])
		);
	}

	/**
	 * Outputs the howToContribute
	 * @return boolean True if the request could be attended, false otherwise.
	 */
	function howToContribute() {
		global $e;
		$e->UiComponentPanel->setOutputResponse([
			"content" => $e->Patterns->parse("Contribute/HowToContribute.html"),
			"mainOptionSelected" => "contribute"
		]);
		return true;
	}

	/**
	 * Outputs the contributionKeycaps
	 * @return boolean True if the request could be attended, false otherwise.
	 */
	function contributionKeycaps() {
		global $e;
		$e->UiComponentPanel->setOutputResponse([
			"content" => $e->Patterns->parse("Contribute/Keycaps.html"),
			"mainOptionSelected" => "contribute",
			"mainSubOptionSelected" => "keycaps"
		]);
		return true;
	}

	/**
	 * Outputs the contributionHDMIMod
	 * @return boolean True if the request could be attended, false otherwise.
	 */
	function contributionHDMIMod() {
		global $e;
		$e->UiComponentPanel->setOutputResponse([
			"content" => $e->Patterns->parse("Contribute/HDMIMod.html"),
			"mainOptionSelected" => "contribute",
			"mainSubOptionSelected" => "hdmiMod"
		]);
		return true;
	}

	/**
	 * Outputs the keyboardGamePad
	 * @return boolean True if the request could be attended, false otherwise.
	 */
	function keyboardGamePad() {
		global $e;
		$e->UiComponentPanel->setOutputResponse([
			"content" => $e->Patterns->parse("Contribute/KeyboardGamePad.html"),
			"mainOptionSelected" => "contribute",
			"mainSubOptionSelected" => "keyboardGamePad"
		]);
		return true;
	}

	/**
	 * Outputs the workingKeyboard
	 * @return boolean True if the request could be attended, false otherwise.
	 */
	function workingKeyboard() {
		global $e;
		$e->UiComponentPanel->setOutputResponse([
			"content" => $e->Patterns->parse("Contribute/WorkingKeyboard.html"),
			"mainOptionSelected" => "contribute",
			"mainSubOptionSelected" => "workingKeyboard"
		]);
		return true;
	}
}