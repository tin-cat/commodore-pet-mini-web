<?php

/**
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * A module that manages the documentation section
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class Documentation extends \Cherrycake\Module {
	
	var $dependentCherrycakeModules = [
		"Errors",
		"Patterns",
		"Locale",
		"HtmlDocument",
		"Ui",
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
        
        $documentationPatternFileName = "Documentation/".$request->pageName.".html";

        $e->Stats->trigger(new \CherrycakeApp\StatsEventDocumentationPageView([
            "pageName" => $request->pageName
        ]));

        if ($uiComponent = $e->Ui->uiComponents["UiComponentPanel"]->getBlock("main", $request->pageName))
            $uiComponent->setSelected(true);
        
		$e->Ui->uiComponents["UiComponentPanel"]->setOutputResponse([
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
        
        $e->Stats->trigger(new \CherrycakeApp\StatsEventDocumentationPageView([
            "pageName" => $request->section."/".$request->pageName
        ]));

		$e->Ui->uiComponents["UiComponentPanel"]->setOutputResponse([
            "content" => $e->Patterns->parse($documentationPatternFileName),
            "mainOptionSelected" => $request->sectionName,
			"mainSubOptionSelected" => $request->pageName
		]);

		return true;
	}
}