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
					"iconVariant" => "white"
				])
			]
		);

		// Go through the documentationPages config array and add the options to the main section of  UiComponentPanel
		$documentationPages = $this->getConfig("documentationPages");
		while (list($pageName, $pageSetup) = each($documentationPages)) {
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
				while(list($subPageName, $subPageSetup) = each($pageSetup["subPages"])) {
					if (is_null($subPageSetup))
						continue;
					$subOptions[$subPageName] =
						\Cherrycake\UiComponentMenuOption::build([
							"title" => $subPageSetup["title"],
							"iconName" => $subPageSetup["iconName"],
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

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"userBuilds" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Builds",
					"href" => $e->Actions->getAction("userBuilds")->request->buildUrl()
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"order" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Order part kits",
					"href" => $e->Actions->getAction("order")->request->buildUrl()
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"contribute" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Contribute",
					"href" => $e->Actions->getAction("contribute")->request->buildUrl()
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"todo" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "To do",
					"href" => $e->Actions->getAction("todo")->request->buildUrl()
				])
			]
		);

		$e->Ui->uiComponents["UiComponentPanel"]->addBlocks(
			"main",
			[
				"press" => \Cherrycake\UiComponentMenuOption::build([
					"title" => "Press",
					"href" => $e->Actions->getAction("press")->request->buildUrl()
				])
			]
		);

		return true;
	}
}