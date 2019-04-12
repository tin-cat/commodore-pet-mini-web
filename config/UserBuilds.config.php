<?php

/**
 * Security config
 *
 * Holds the configuration for the Security module
 *
 * @package CherrycakeSkeleton
 */

namespace Cherrycake;

$UserBuildsConfig = [
	"builds" => [
        [
            "serialNumber" => 1,
            "name" => "Vince Weaver",
            "url" => "https://twitter.com/deater78",
            "date" => mktime(0, 0, 0, 4, 5, 2019),
            "text" => "Thanks to Vince, this little buddy has been showcased in an exhibition held on april this year at the <a href=\"https://umaine.edu/\" target=\"external\">University of Maine</a>, where <a href=\"https://www.commodore.ca/commodore-history/the-legendary-chuck-peddle-inventor-of-the-personal-computer/\" target=\"external\">Chuck Peddle</a> itself, the designer of the authentic Commodore PET and the 6502 microprocessor, and a visionary computer pioneer who shaped the modern era of computing gave a speech and found time to take a photo holding this Commodore PET Mini. Thanks Mr.Peddle for giving us great computers!"
        ],
        [
            "serialNumber" => 0,
            "name" => "Lorenzo Herrera",
            "url" => TWITTER_URL,
            "date" => mktime(0, 0, 0, 1, 31, 2019),
            "text" => "This is the first prototype print of the Commodore PET Mini, I used it to debug lots of errors on the 3D models, but after some retouching it ended working fine. It's now proudly standing in my desk."
        ]
    ],
    "serialNumberMinimumDigits" => 4,
    "imagesBaseDir" => "res/builds"
];