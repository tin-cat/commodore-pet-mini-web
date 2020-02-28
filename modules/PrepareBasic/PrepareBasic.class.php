<?php

/**
 * PrepareBasic
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * PrepareBasic
 *
 * A module that performs common tasks in preparation for some basic sections of the site, which are handled by its own modules like Home and Default.
 * A module like this can be used when preparations need to be made equal for various other modules, for example: To prepare a UiComponentMenuBar or a UiComponentPanel that should appear in many sections.
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class PrepareBasic extends \Cherrycake\Module {
	protected $isConfigFile = true;

	var $dependentCherrycakeModules = [
		"Ui"
	];
	
	var $dependentAppModules = [
		"Documentation",
		"AffiliateLinks"
	];
	
	function init() {
		global $e;

		if (!parent::init())
			return false;

		// Add options to the UiComponentMenuBar
		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"topRight",
			[
				"github" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "GitHub",
					"iconName" => "github",
					"iconVariant" => "white",
					"href" => REPOSITORY_URL,
					"isNewWindow" => true
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"topRight",
			[
				"twitter" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Twitter",
					"iconName" => "twitter",
					"iconVariant" => "white",
					"href" => TWITTER_URL,
					"isNewWindow" => true
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"home" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Home",
					"href" => $e->Actions->getAction("homePage")->request->buildUrl(),
					"iconName" => "home",
					"iconVariant" => "white"
				])
			]
		);

		// Go through the documentationPages config array and add the options to the main section of  UiComponentPanel
		$documentationPages = $this->getConfig("documentationPages");
		foreach ($documentationPages as $pageName => $pageSetup) {
			if (!is_array($pageSetup["subPages"])) {

				$e->Ui->uiComponents["UiComponentPanel"]->addBlock(
					"main",
					$pageName,
					\Cherrycake\UiComponentMenuOption::build([
						"title" => $pageSetup["title"],
						"iconName" => $pageSetup["iconName"],
						"iconVariant" => "white",
						"href" => $e->Actions->getAction("documentationPage")->request->buildUrl([
							"parameterValues" => [
								"pageName" => $pageName
							]
						])
					])
				);

			}
			else {

				unset($subOptions);
				foreach ($pageSetup["subPages"] as $subPageName => $subPageSetup) {
					if (is_null($subPageSetup))
						continue;
					$subOptions[$subPageName] =
						\Cherrycake\UiComponentMenuOption::build([
							"title" => isset($subPageSetup["title"]) ? $subPageSetup["title"] : false,
							"iconName" => isset($subPageSetup["iconName"]) ? $subPageSetup["iconName"] : false,
							"iconVariant" => "white",
							"href" => $e->Actions->getAction("documentationSubPage")->request->buildUrl([
								"parameterValues" => [
									"sectionName" => $pageName,
									"pageName" => $subPageName
								]
							])
						]);
				}

				$e->Ui->uiComponents["UiComponentPanel"]->addBlock(
					"main",
					$pageName,
					\Cherrycake\UiComponentMenuOptionWithSuboptions::build([
						"title" => $pageSetup["title"],
						"iconName" => $pageSetup["iconName"],
						"iconVariant" => "white",
						"subOptions" => $subOptions
					])
				);

			}
		}

		/*
		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"order" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Order part kits",
					"iconName" => "order",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("order")->request->buildUrl()
				])
			]
		);
		*/

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"contribute" => \Cherrycake\UiComponentMenuOptionWithSuboptions::build([
					"title" => "Contributions",
					"iconName" => "contribute",
					"iconVariant" => "white",
					"subOptions" => [
						"keycaps" => \Cherrycake\UiComponentMenuOption::build([
							"title" => "Keycap labels",
							"href" => $e->Actions->getAction("contributionKeycaps")->request->buildUrl()
						]),
						"hdmiMod" => \Cherrycake\UiComponentMenuOption::build([
							"title" => "HDMI mod",
							"href" => $e->Actions->getAction("contributionHDMIMod")->request->buildUrl()
						]),
						"keyboardGamePad" => \Cherrycake\UiComponentMenuOption::build([
							"title" => "Keyboard game pad",
							"href" => $e->Actions->getAction("contributionKeyboardGamePad")->request->buildUrl()
						]),
						"howToContribute" => \Cherrycake\UiComponentMenuOption::build([
							"title" => "How to contribute",
							"href" => $e->Actions->getAction("howToContribute")->request->buildUrl()
						])
					]
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"userBuilds" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Builds",
					"iconName" => "builds",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("userBuilds")->request->buildUrl()
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"todo" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "To do",
					"iconName" => "todo",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("todo")->request->buildUrl()
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"goodies" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Goodies",
					"iconName" => "goodies",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("goodies")->request->buildUrl()
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"press" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Press",
					"iconName" => "press",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("press")->request->buildUrl()
				])
			]
		);

		return true;
	}
}