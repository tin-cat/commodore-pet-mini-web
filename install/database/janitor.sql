-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2018 a las 09:25:28
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
-- Estructura de tabla para la tabla `cherrycake_janitor_log`
--

CREATE TABLE `cherrycake_janitor_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `executionDate` datetime NOT NULL,
  `executionSeconds` float DEFAULT NULL,
  `taskName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultCode` tinyint(3) UNSIGNED NOT NULL,
  `resultDescription` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cherrycake_janitor_log`
--
ALTER TABLE `cherrycake_janitor_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `executionDate` (`executionDate`),
  ADD KEY `taskName` (`taskName`(191)),
  ADD KEY `resultCode` (`resultCode`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cherrycake_janitor_log`
--
ALTER TABLE `cherrycake_janitor_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195186;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
