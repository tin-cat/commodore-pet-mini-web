-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2019 at 07:53 AM
-- Server version: 10.0.38-MariaDB-0+deb8u1
-- PHP Version: 7.0.33-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `movefy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cherrycake_systemLog`
--

CREATE TABLE `cherrycake_systemLog` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varbinary(16) DEFAULT NULL,
  `httpHost` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `requestUri` text COLLATE utf8_unicode_ci,
  `browserString` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cherrycake_systemLog`
--
ALTER TABLE `cherrycake_systemLog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cherrycake_systemLog`
--
ALTER TABLE `cherrycake_systemLog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;