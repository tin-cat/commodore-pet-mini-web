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
        
        $linkData = $this->getConfig("links")[$key];
        foreach ($linkData as $countryVariant) {
            if (!in_array($countryCode, $countryVariant["countryCodes"]))
                continue;
            return $countryVariant["link"];
        }
    }

}