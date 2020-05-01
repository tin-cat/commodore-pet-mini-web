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

class PrepareBasic  extends \Cherrycake\Module {
	protected $isConfigFile = true;

	var $dependentCoreModules = [
		"UiComponentPanel",
		"UiComponentButton",
		"UiComponentArticle"
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
		$e->UiComponentPanel->addBlocks(
			"topRight",
			[
				"github" => new \Cherrycake\Modules\UiComponentMenuOption([
					"title" => "GitHub",
					"iconName" => "github",
					"iconVariant" => "white",
					"href" => REPOSITORY_URL,
					"isNewWindow" => true
				])
			]
		);

		$e->UiComponentPanel->addBlocks(
			"topRight",
			[
				"twitter" => new \Cherrycake\Modules\UiComponentMenuOption([
					"title" => "Twitter",
					"iconName" => "twitter",
					"iconVariant" => "white",
					"href" => TWITTER_URL,
					"isNewWindow" => true
				])
			]
		);

		$e->UiComponentPanel->addBlocks(
			"main",
			[
				"home" => new \Cherrycake\Modules\UiComponentMenuOption([
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

				$e->UiComponentPanel->addBlock(
					"main",
					$pageName,
					new \Cherrycake\Modules\UiComponentMenuOption([
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
						new \Cherrycake\Modules\UiComponentMenuOption([
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

				$e->UiComponentPanel->addBlock(
					"main",
					$pageName,
					new \Cherrycake\Modules\UiComponentMenuOptionWithSuboptions([
						"title" => $pageSetup["title"],
						"iconName" => $pageSetup["iconName"],
						"iconVariant" => "white",
						"subOptions" => $subOptions
					])
				);

			}
		}

		/*
		$e->UiComponentPanel->addBlocks(
			"main",
			[
				"order" => new \Cherrycake\Modules\UiComponentMenuOption([
					"title" => "Order part kits",
					"iconName" => "order",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("order")->request->buildUrl()
				])
			]
		);
		*/

		$e->UiComponentPanel->addBlocks(
			"main",
			[
				"contribute" => new \Cherrycake\Modules\UiComponentMenuOptionWithSuboptions([
					"title" => "Contributions",
					"iconName" => "contribute",
					"iconVariant" => "white",
					"subOptions" => [
						"keycaps" => new \Cherrycake\Modules\UiComponentMenuOption([
							"title" => "Keycap labels",
							"href" => $e->Actions->getAction("contributionKeycaps")->request->buildUrl()
						]),
						"hdmiMod" => new \Cherrycake\Modules\UiComponentMenuOption([
							"title" => "HDMI mod",
							"href" => $e->Actions->getAction("contributionHDMIMod")->request->buildUrl()
						]),
						"keyboardGamePad" => new \Cherrycake\Modules\UiComponentMenuOption([
							"title" => "Keyboard game pad",
							"href" => $e->Actions->getAction("contributionKeyboardGamePad")->request->buildUrl()
						]),
						"howToContribute" => new \Cherrycake\Modules\UiComponentMenuOption([
							"title" => "How to contribute",
							"href" => $e->Actions->getAction("howToContribute")->request->buildUrl()
						])
					]
				])
			]
		);

		$e->UiComponentPanel->addBlocks(
			"main",
			[
				"userBuilds" => new \Cherrycake\Modules\UiComponentMenuOption([
					"title" => "Builds",
					"iconName" => "builds",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("userBuilds")->request->buildUrl()
				])
			]
		);

		$e->UiComponentPanel->addBlocks(
			"main",
			[
				"todo" => new \Cherrycake\Modules\UiComponentMenuOption([
					"title" => "To do",
					"iconName" => "todo",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("todo")->request->buildUrl()
				])
			]
		);

		$e->UiComponentPanel->addBlocks(
			"main",
			[
				"goodies" => new \Cherrycake\Modules\UiComponentMenuOption([
					"title" => "Goodies",
					"iconName" => "goodies",
					"iconVariant" => "white",
					"href" => $e->Actions->getAction("goodies")->request->buildUrl()
				])
			]
		);

		$e->UiComponentPanel->addBlocks(
			"main",
			[
				"press" => new \Cherrycake\Modules\UiComponentMenuOption([
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