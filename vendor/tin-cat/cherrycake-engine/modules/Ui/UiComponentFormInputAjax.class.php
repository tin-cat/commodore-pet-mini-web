<?php

/**
 * UiComponentFormInputAjax
 *
 * @package Cherrycake
 */

namespace Cherrycake;

/**
 * A Ui component for form inputs that send the data independently via Ajax
 *
 * @package Cherrycake
 * @category Classes
 */
class UiComponentFormInputAjax extends UiComponent {
	protected $type = "text";
	protected $style;
	protected $additionalCssClasses;
	protected $domId;
	protected $value;
	protected $size;
	protected $width;
	protected $maxLength = 255;
	protected $placeHolder;
	protected $isCentered = false;
	protected $isDisabled = false;
	protected $isAutoComplete = true;
	protected $isAutocapitalize = false;
	protected $isAutocorrect = false;
	protected $isSpellCheck = false;
	protected $onChange;
	protected $title;

	protected $buttonTitle;
	protected $buttonIconName = "ok";

	protected $saveAjaxUrl;
	protected $saveAjaxKey = false;

	protected $dependentCherrycakeUiComponents = [
		"UiComponentJquery",
		"UiComponentJqueryEventUe",
		"UiComponentTooltip",
		"UiComponentFormInput",
		"UiComponentAnimationEffects",
		"UiComponentAjax"
	];

	protected $dependentCherrycakeModules = [
		"HtmlDocument",
		"Security"
	];

	/**
	 * AddCssAndJavascriptSetsToHtmlDocument
	 *
	 * Adds the Css and Javascript sets that are required to load by HtmlDocument module for this UI component to properly work
	 */
	function addCssAndJavascript() {
		parent::addCssAndJavascript();
		global $e;
		$e->Css->addFileToSet($this->getConfig("cssSetName"), "UiComponentFormInputAjax.css");
		$e->Javascript->addFileToSet($this->getConfig("javascriptSetName"), "UiComponentFormInputAjax.js");
	}

	/**
	 * Builds the HTML of the input. Any setup keys can be given, which will overwrite the ones (if any) given when constructing the object.
	 *
	 * @param array $setup A hash array with the setup keys. Refer to constructor to see what keys are available.
	 */
	function buildHtml($setup = false) {
		global $e;

		$this->setProperties($setup);

		if (!$this->domId)
			$this->domId = uniqid();

		$r =
			(
				$this->type != "hidden"
				?
				"<div ".
					"class=\"".
						"UiComponentFormInput ajax".
						($this->style ? " ".$this->style : null).
						($this->additionalCssClasses ? " ".$this->additionalCssClasses : null).
						($this->isCentered ? " centered" : null).
					"\"".
					($this->domId ? " id=\"".$this->domId."\"" : null).
				">".
				($this->title || is_null($this->title)  ? "<div class=\"title\">".$this->title."</div>" : null)
				:
				null
			).
				"<div class=\"wrapper\">".
				
				"<input ".
					($this->type ? "type=\"".$this->type."\" " : null).
					($this->value ? "value=\"".htmlspecialchars($this->value)."\" " : null).
					($this->size ? "size=\"".$this->size."\" " : null).
					($this->maxLength && $this->type != "hidden" ? "maxlength=\"".$this->maxLength."\" " : null).
					($this->placeHolder ? "placeholder=\"".htmlspecialchars($this->placeHolder)."\" " : null).
					($this->isDisabled ? "disabled " : null).
					($this->isAutoFocus ? "autofocus " : null).
					
					"autocomplete=\"".($this->isAutoComplete ? "on" : "off")."\" ".
					"autocapitalize=\"".($this->isAutocapitalize ? "on" : "off")."\" ".
					"autocorrect=\"".($this->isAutocorrect ? "on" : "off")."\" ".
					"spellcheck=\"".($this->isSpellCheck ? "true" : "false")."\" ".

					($this->onChange ? "onchange=\"".$this->onChange."\" " : null).
					($this->width ? "style=\"width: ".$this->width."px\" " : null).
				"/>".

				UiComponentButton::build([
					"style" => "mergedLeft",
					"additionalCssClasses" => "send",
					"title" => $this->buttonTitle,
					"iconName" => $this->buttonIconName
				]).

				"</div>".

			(
				$this->type != "hidden"
				?
				"</div>"
				:
				null
			);

		$e->HtmlDocument->addInlineJavascript("
			$('#".$this->domId."').UiComponentFormInputAjax({
				saveAjaxUrl: '".$this->saveAjaxUrl."',
				saveAjaxKey: '".$this->saveAjaxKey."'
			});
		");

		return $r;
	}
}