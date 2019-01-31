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