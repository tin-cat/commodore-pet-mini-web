<?php

/**
 * PrepareBasic config
 *
 * Holds the configuration for the PrepareBasic module
 *
 * @package CherrycakeApp
 */

namespace Cherrycake;

$PrepareBasicConfig = [
	"documentationPages" => [
        "building" => [
            "title" => "Build it",
            "subPages" => [
                "what-you-need" => ["title" => "What you'll need"],
                "3d-printing" => ["title" => "3D printing the parts"],
                "pre-assembly" => ["title" => "Pre-assembly"],
                "install-retropie" => ["title" => "Install RetroPie"],
                "install-screen-drivers" => ["title" => "Install screen drivers"],
                "wiring-power-socket" => ["title" => "Wiring the power socket"],
                "wiring-screen" => ["title" => "Wiring the screen"],
                "final-assembly" => ["title" => "Final assembly"]
            ]
        ],
        "modding" => [
            "title" => "Modding your PET",
            "subPages" => [
                "sound" => ["title" => "Adding sound"],
                "portable-commodore-pet-mini" => ["title" => "Make it portable"],
                "paint" => ["title" => "Paint it"]
            ]
        ]
    ]
];