<?php

/**
 * UiComponentPanel config
 *
 * Holds the configuration for the UiComponentPanel UiComponent
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;
$UiComponentPanelConfig = [
    "theme" => false, // The default theme. Set it to false to not apply any specific theme
    "style" => "",
    "logo" => [ // Sets up the logo
        "fullImageUrl" => "/res/img/commodorePetMiniLogoWhite.svg?v=2", // The image to show as logo when the panel is working in a big screen
        "smallImageUrl" => "/res/img/commodorePetMiniIconWhite.svg", // The image to show as logo when the panel is working in a small screen
        "linkRequest" => "homePage" // If set, the logo will link to this request
    ],
    "iconHamburgerVariant" => "white"
];