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
            "serialNumber" => 11,
            "name" => "Dr. Slump 🇮🇹",
            "date" => mktime(0, 0, 0, 2, 29, 2020),
            "text" => "I have a CBM PET 4032 currently under repair but I think when it is ready I will put it next to its brother to make it look beautiful."
        ],
		[
            "serialNumber" => 10,
            "name" => "Matthias Prögel (Bavaria)",
            "date" => mktime(0, 0, 0, 2, 28, 2020),
            "text" => "Matthias has built a second Commodore PET Mini and contributed an HDMI mod and this gorgeous keyboard-based gamepad."
        ],
		[
            "serialNumber" => 9,
            "name" => "Matthias Prögel (Bavaria)",
            "date" => mktime(0, 0, 0, 1, 17, 2020),
            "text" => "My PET mini has got a 3,5\" IPS HDMI display (it is way faster than LCD-screens with GPIO-connection) and built-in stereo speakers. You can change the volume from outside, I made different changes to the 3D-models for that (bigger cut out and different hooks for the screen and changes for speakers, amplifier, on/off-switch and power-connector). It was so much fun building this tiny little PET, and it looks like my Original CBM 4032 from 1980 (which is still working, but missing it's front sticker). Another one is in the making to improve more of the 3D-printed parts (cutouts for the HDMI-connector in the housing). I painted it in RAL9001, which is a creme-white color (as you mentioned to do). Next thing is constructing and printing a \"CBM-styled\"-controller for the games with cherry MX switches. I'm hoping that somebody can create a good model of the floppy-drive! That would be awesome!"
        ],
		[
            "serialNumber" => 8,
            "name" => "Massimo 'Max' Sernesi 🇮🇹",
            "date" => mktime(0, 0, 0, 12, 17, 2019),
            "text" => "I send you the photos of the last minipet I made. I have build 3 in total, this one will be put on the market probably via eBay, then I end the production. This one have audio capabilities also. It’s a fun project and a joy to build, but it need patience and some skill for a good result. In the two last models I have put two tiny screws to keep closed the monitor."
        ],
		[
            "serialNumber" => 7,
            "name" => "Massimo 'Max' Sernesi 🇮🇹",
            "date" => mktime(0, 0, 0, 12, 10, 2019),
            "text" => "I enjoyed a lot building this little PET, I have a regular working one, and his little brother is so cute. So cute that I had to build another one for a friend &hellip; Hardest part is the display cable: building it with pins, connectors and thin cables is easy but boring work. I have decided to keep the 3D print raw appearance, but I didn't like the all black keyboard, so I painted it like a real 8032 PET, a good result, I think. I've also used a common barrel connector so I can use an old no-USB power supply. <blockquote>Max has contributed ideas to create printable keycaps for an astounding looking mini keyboard and a serial plaque that makes his PET Mini unique!</blockquote>"
        ],
		[
            "serialNumber" => 6,
            "name" => "Shon Burton 🇺🇸",
            "url" => "https://twitter.com/Shon",
            "date" => mktime(0, 0, 0, 9, 25, 2019),
            "text" => "The hardest parts of the build were getting the screen holder to print nicely, finding good screws, and placing the front PET label 😂. I plan to connect this first pet to a 20TB drive array and use it as a home file server and interactive display. <blockquote>Fun fact: Shon's PET Mini has now a storage capacity more than 670 million times bigger than the original Commodore PET!</blockquote>"
        ],
		[
            "serialNumber" => 5,
            "name" => "Luca H. 🇮🇹",
            "url" => false,
            "date" => mktime(0, 0, 0, 8, 18, 2019),
            "text" => "It was fun to make the Mini PET as a small project. The 3D-printing files were great to print out and the finished model looks pretty neat. Because I already had the PiTFT Plus 2.8 display at home, I used that one. I had to mirror the Monitor frame so I could attach the display to the frame. It was real fun to do and I can definitely recommend this project. Thanks a lot for these great instructions!"
        ],
		[
            "serialNumber" => 4,
            "name" => "Matt Kasdorf 🇨🇦",
            "url" => false,
            "date" => mktime(0, 0, 0, 6, 16, 2019),
            "text" => "I came upon the CommodorePETmini.com website through a posting to the <a href=\"http://calgarycommodore.ca\" target=\"_newwindow\">Calgary Commodore Users Group</a> forum. My build turned out to be more difficult as I substituted the recommended display for a cheaper 2.8\" SPI display. I ended up using an older version of RetroPie, and a RPi3B. My kids and I decided keep the 3D printed appearance, but I'm going to paint the inside black to help retain the light leakage. I too tried Combian64, and was unsuccessful getting it to work with my TFT display.  I'm currently modifying it and hope to release a version, which I'm calling \"CommPi\", with a bunch of PET 2001/4032 software pre-installed."
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
            "name" => "Javier Couñago 🇪🇸",
            "url" => "https://www.commodorespain.es/como-construir-un-commodore-pet-mini",
            "date" => mktime(0, 0, 0, 5, 21, 2019),
            "text" => "My name is Javier Couñago, author of the web portal <a href=\"https://www.commodorespain.es\" target=\"_newwindow\">Commodore Spain</a>. When I met your project I fell in love with the Mini Pet. He already had his older brother, but his mini version is simply lovely so I decided to do it and take him to the annual <a href=\"https://twitter.com/ExCommodore\" target=\"_newwindow\">Explora Commodore event</a> in Barcelona on 11/05/2019. There I showed it to the friends and followers of Commodore. They all said the same thing. It's awesome! Now my Pet 4032 will no longer feel so alone ;-)"
        ],
        [
            "serialNumber" => 1,
            "name" => "Vince Weaver 🇺🇸",
            "url" => "https://twitter.com/deater78",
            "date" => mktime(0, 0, 0, 4, 5, 2019),
            "text" => "Thanks to Vince, this little buddy has been showcased in an exhibition held on april this year at the <a href=\"https://umaine.edu/\" target=\"external\">University of Maine</a>, where <a href=\"https://www.commodore.ca/commodore-history/the-legendary-chuck-peddle-inventor-of-the-personal-computer/\" target=\"external\">Chuck Peddle</a> itself, the designer of the authentic Commodore PET and the 6502 microprocessor, and a visionary computer pioneer who shaped the modern era of computing gave a speech and found time to take a photo holding this Commodore PET Mini. Thanks Mr.Peddle for giving us great computers!"
        ],
        [
            "serialNumber" => 0,
            "name" => "Lorenzo Herrera 🇪🇸",
            "url" => TWITTER_URL,
            "date" => mktime(0, 0, 0, 1, 31, 2019),
            "text" => "This is the first prototype print of the Commodore PET Mini, I used it to debug lots of errors on the 3D models, but after some retouching it ended working fine. It's now proudly standing in my desk."
        ]
    ],
    "serialNumberMinimumDigits" => 4,
    "imagesBaseDir" => "res/builds"
];