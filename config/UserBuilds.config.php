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
            "serialNumber" => 4,
            "name" => "Matt Kasdorf",
            "url" => "",
            "date" => mktime(0, 0, 0, 6, 16, 2019),
            "text" => false
        ],
		[
            "serialNumber" => 3,
            "name" => "Brian Roy",
            "url" => "",
            "date" => mktime(0, 0, 0, 6, 2, 2019),
            "text" => "I had lots of fun making this Mini Commodore Pet, and it didn’t seem too difficult either. I own an original Pet 2001n with 32k ram, and from a distance, the smaller version looks like a Mini-Me. I installed Retropie on the mini pet along with Vice, but I would love to get Combian 64 working on it with the TFT display. Maybe someday. I collect a lot of old computers, there’s so much nostalgia with these beautiful machines. The Pet is one of my favorites when it comes to looks. Thank you for making this project possible. It’s an excellent design!"
        ],
		[
            "serialNumber" => 2,
            "name" => "Javier Couñago",
            "url" => "https://www.commodorespain.es/como-construir-un-commodore-pet-mini",
            "date" => mktime(0, 0, 0, 5, 21, 2019),
            "text" => "My name is Javier Couñago, author of the web portal <a href=\"https://www.commodorespain.es\" target=\"_newwindow\">Commodore Spain</a>. When I met your project I fell in love with the Mini Pet. He already had his older brother, but his mini version is simply lovely so I decided to do it and take him to the annual <a href=\"https://twitter.com/ExCommodore\" target=\"_newwindow\">Explora Commodore event</a> in Barcelona on 11/05/2019. There I showed it to the friends and followers of Commodore. They all said the same thing. It's awesome! Now my Pet 4032 will no longer feel so alone ;-)"
        ],
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