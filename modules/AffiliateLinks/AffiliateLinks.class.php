<?php

/**
 * AffiliateLinks
 *
 * @package CherrycakeApp
 */

namespace CherrycakeApp\Modules;

/**
 * A module that manages affiliate links. Depending on the user's country, it returns the appropriate affiliate link.
 *
 * @package CherrycakeApp
 * @category AppModules
 */

class AffiliateLinks  extends \Cherrycake\Module {

    protected $isConfigFile = true;
	
	var $dependentCoreModules = [
		"Locale"
    ];
    
    function getLink($key) {
        global $e;

        $location = $e->Locale->guessLocation();
        if (!$location)
            $countryCode = $this->getConfig("defaultCountryCode");
        else
            $countryCode = $location->getCountry()["code"];
        
        // If found, return the link for the detected country
        if ($link = $this->getLinkForCountryCode($key, $countryCode))
            return $this->getHtmlLink($link, $this->getTitle($key));

        // If no link for the detected country has been found, return the default country one
        return $this->getHtmlLink($this->getLinkForCountryCode($key, $this->getConfig("defaultCountryCode")), $this->getTitle($key));
    }

    function getLinkForCountryCode($key, $countryCode) {
        $linkData = $this->getConfig("links")[$key]["linkData"];
        foreach ($linkData as $countryVariant) {
            if (!in_array($countryCode, $countryVariant["countryCodes"]))
                continue;
            if ($countryVariant["link"])
                return $countryVariant["link"];
        }
        return false;
    }

	function getTitle($key) {
		$linkData = $this->getConfig("links")[$key];
		return $linkData["title"];
	}

	function getHtmlLink($href, $title) {
		return "<a href=\"".$href."\" data-linkInfo=\"paid\">".$title."</a>";
	}

}