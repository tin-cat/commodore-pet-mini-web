<?php

/**
 * @package CherrycakeApp
 */

namespace CherrycakeApp;

/**
 * A module that manages the documentation section
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class Documentation  extends \Cherrycake\Module {
	
	var $dependentCoreModules = [
		"Errors",
		"Patterns",
		"Locale",
		"HtmlDocument",
		"Stats"
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
			"documentationPage",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Documentation",
				"methodName" => "viewPage",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "documentation"
                        ]),
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING,
							"name" => "pageName",
							"securityRules" => [
								\Cherrycake\SECURITY_RULE_SLUG
							]
						])
                    ]
				])
			])
        );
        
        $e->Actions->mapAction(
			"documentationSubPage",
			new \Cherrycake\ActionHtml([
				"moduleType" => \Cherrycake\ACTION_MODULE_TYPE_APP,
				"moduleName" => "Documentation",
				"methodName" => "viewSubPage",
				"request" => new \Cherrycake\Request([
					"pathComponents" => [
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_FIXED,
							"string" => "documentation"
                        ]),
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING,
							"name" => "sectionName",
							"securityRules" => [
								\Cherrycake\SECURITY_RULE_SLUG
							]
                        ]),
                        new \Cherrycake\RequestPathComponent([
							"type" => \Cherrycake\REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING,
							"name" => "pageName",
							"securityRules" => [
								\Cherrycake\SECURITY_RULE_SLUG
							]
						])
                    ]
				])
			])
		);
	}

	/**
	 * Outputs a documentation root page
	 */
	function viewPage($request) {
		global $e;

		// $documentationPages = $e->PrepareBasic->getConfig("documentationPages");
		// if (!isset($documentationPages[$request->sectionName]))
		// 	return false;
        
        $documentationPatternFileName = "Documentation/".$request->pageName.".html";

		if (!file_exists($documentationPatternFileName))
			return false;

        $e->Stats->trigger(new \CherrycakeApp\StatsEventDocumentationPageView([
            "pageName" => $request->pageName
        ]));

        if ($uiComponent = $e->UiComponentPanel->getBlock("main", $request->pageName))
			$uiComponent->setSelected(true);
        
		$e->UiComponentPanel->setOutputResponse([
            "content" => $e->Patterns->parse($documentationPatternFileName),
			"mainOptionSelected" => $request->pageName,
			"isAllMainOptionsOpen" => true
		]);

		return true;
    }
    
    /**
	 * Outputs a documentation page of a given section
	 */
	function viewSubPage($request) {
		global $e;
        
        $documentationPatternFileName = "Documentation/".$request->sectionName."/".$request->pageName.".html";

		$documentationPages = $e->PrepareBasic->getConfig("documentationPages");
		if (!isset($documentationPages[$request->sectionName]))
			return false;
		
		if (!isset($documentationPages[$request->sectionName]["subPages"][$request->pageName]))
			return false;
		
        
        $e->Stats->trigger(new \CherrycakeApp\StatsEventDocumentationPageView([
            "pageName" => $request->section."/".$request->pageName
		]));

		$e->UiComponentPanel->setOutputResponse([
            "content" => $e->Patterns->parse($documentationPatternFileName),
            "mainOptionSelected" => $request->sectionName,
			"mainSubOptionSelected" => $request->pageName
		]);

		return true;
	}
}