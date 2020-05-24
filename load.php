<?php

    // Include the cherrycake loader script, set this to the proper path to your installation of the Cherrycake engine
    // Since the Cherrycake engine is normally installed via composer, this should normally be set to "vendor/tin-cat/cherrycake/load.php"

	require in_array($_SERVER["HTTP_HOST"] ?? false, ["commodorepetmini.com.buzz", "localhost"]) ? "/engine/load.php" : "../vendor/tin-cat/cherrycake-engine/load.php";