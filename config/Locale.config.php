<?php

/**
 * Locale config
 *
 * Holds the configuration for the Locale module
 *
 * @package CherrycakeSkeleton
 */

namespace Cherrycake;

$LocaleConfig = [
	"availableLocales" => [ // An array of possible different localizations based on the domain requested
		"main" => [
			"domains" => false, // An array of domains that will trigger this localization. No domains specified here because this locale should work for all domains as a default one.
			"language" => \Cherrycake\Modules\LANGUAGE_ENGLISH, // The default language
			"dateFormat" => \Cherrycake\Modules\DATE_FORMAT_MIDDLE_ENDIAN, // The default date format
			"temperatureUnits" => \Cherrycake\Modules\TEMPERATURE_UNITS_FAHRENHEIT, // The default temperature units
			"currency" => \Cherrycake\Modules\CURRENCY_EURO, // The default currency
			"decimalMark" => \Cherrycake\Modules\DECIMAL_MARK_POINT,
			"measurementSystem" => \Cherrycake\Modules\MEASUREMENT_SYSTEM_IMPERIAL,
			"timeZone" => 216 // The default timezone id, from the cherrycake_location_timezones table (216 = "America/New_York")
		]
	],
	"defaultLocale" => "main", // The localization to use if none could have been guessed
	"canonicalLocale" => "main", // The locale to consider canonical, used i.e. in the HtmlDocument module to set the rel="canonical" meta tag, in order to let search engines understand that there are different pages in different languages that represent the same content.
	"availableLanguages" => [\Cherrycake\Modules\LANGUAGE_ENGLISH], // An array of the languages that are available for the APP. The textsTableName should contain at least this languages.
	"textsDatabaseProviderName" => "main", // The name of the database provider where the localized multilingual texts are found
	"timeZonesDatabaseProviderName" => "main", // The name of the database provider where the timezones are found
];