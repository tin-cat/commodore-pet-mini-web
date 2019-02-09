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

class AffiliateLinks extends \Cherrycake\Module {

    protected $isConfigFile = true;
	
	var $dependentCherrycakeModules = [
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
            return $link;

        // If no link for the detected country has been found, return the default country one
        return $this->getLinkForCountryCode($key, $this->getConfig("defaultCountryCode"));
    }

    function getLinkForCountryCode($key, $countryCode) {
        $linkData = $this->getConfig("links")[$key];
        foreach ($linkData as $countryVariant) {
            if (!in_array($countryCode, $countryVariant["countryCodes"]))
                continue;
            if ($countryVariant["link"])
                return $countryVariant["link"];
        }
        return false;
    }

}