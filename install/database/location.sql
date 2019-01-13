-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2018 a las 09:25:58
-- Versión del servidor: 10.0.37-MariaDB-0+deb8u1
-- Versión de PHP: 7.0.32-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cherrycake-skeleton`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cherrycake_location_cities`
--

CREATE TABLE `cherrycake_location_cities` (
  `id` int(8) UNSIGNED NOT NULL,
  `regions_id` int(8) UNSIGNED DEFAULT NULL,
  `countries_id` int(8) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urlName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `isImportant` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cherrycake_location_countries`
--

CREATE TABLE `cherrycake_location_countries` (
  `id` int(6) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `polygons` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `browserLanguageMatchingRegexp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency` tinyint(1) UNSIGNED DEFAULT NULL,
  `dateFormat` tinyint(1) UNSIGNED DEFAULT NULL,
  `temperatureUnits` tinyint(1) UNSIGNED DEFAULT NULL,
  `decimalMark` tinyint(1) UNSIGNED DEFAULT '1',
  `measurementSystem` tinyint(1) UNSIGNED NOT NULL DEFAULT '2',
  `timezones_id` mediumint(255) DEFAULT NULL COMMENT 'The timezone of the country when user have not selected a city with associated timezone',
  `language` tinyint(1) UNSIGNED DEFAULT NULL,
  `phonePrefix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cherrycake_location_regions`
--

CREATE TABLE `cherrycake_location_regions` (
  `id` int(8) UNSIGNED NOT NULL,
  `countries_id` int(6) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `polygons` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `timezones_id` int(5) UNSIGNED DEFAULT NULL,
  `fips` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iso` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cherrycake_location_timezones`
--

CREATE TABLE `cherrycake_location_timezones` (
  `id` int(5) UNSIGNED NOT NULL,
  `countries_id` int(6) UNSIGNED NOT NULL,
  `timezone` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Timezone string  as supported by PHP (http://www.php.net/manual/en/timezones.php)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cherrycake_location_cities`
--
ALTER TABLE `cherrycake_location_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`regions_id`),
  ADD KEY `country_id` (`countries_id`),
  ADD KEY `name` (`name`),
  ADD KEY `latitude and longitude` (`latitude`,`longitude`);

--
-- Indices de la tabla `cherrycake_location_countries`
--
ALTER TABLE `cherrycake_location_countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `search by url_name` (`urlName`),
  ADD KEY `name` (`name`);

--
-- Indices de la tabla `cherrycake_location_regions`
--
ALTER TABLE `cherrycake_location_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`countries_id`),
  ADD KEY `search by url_name` (`urlName`),
  ADD KEY `name` (`name`);

--
-- Indices de la tabla `cherrycake_location_timezones`
--
ALTER TABLE `cherrycake_location_timezones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cherrycake_location_cities`
--
ALTER TABLE `cherrycake_location_cities`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294774;
--
-- AUTO_INCREMENT de la tabla `cherrycake_location_countries`
--
ALTER TABLE `cherrycake_location_countries`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT de la tabla `cherrycake_location_regions`
--
ALTER TABLE `cherrycake_location_regions`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4012;
--
-- AUTO_INCREMENT de la tabla `cherrycake_location_timezones`
--
ALTER TABLE `cherrycake_location_timezones`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
