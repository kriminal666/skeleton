-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-11-2014 a las 07:18:27
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `skeleton`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `locationId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `shortName` varchar(150) NOT NULL,
  `description` text,
  `entryDate` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `creationUserId` int(11) DEFAULT NULL,
  `lastupdateUserId` int(11) DEFAULT NULL,
  `parentLocation` int(11) DEFAULT NULL,
  `markedForDeletion` enum('n','y') NOT NULL,
  `markedForDeletionDate` datetime NOT NULL,
  PRIMARY KEY (`locationId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizational_unit`
--

CREATE TABLE IF NOT EXISTS `organizational_unit` (
  `organizational_unit_Id` int(11) NOT NULL AUTO_INCREMENT,
  `organizational_unit_externalCode` int(11) NOT NULL,
  `organizational_unit_name` varchar(150) NOT NULL,
  `organizational_unit_shortName` varchar(150) NOT NULL,
  `organizational_unit_description` text,
  `organizational_unit_parent` int(11) NOT NULL,
  `organizational_unit_entryDate` datetime NOT NULL,
  `organizational_unit_last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organizational_unit_creationUserId` int(11) DEFAULT NULL,
  `organizational_unit_lastupdateUserId` int(11) DEFAULT NULL,
  `organizational_unit_location` int(11) DEFAULT NULL,
  `organizational_unit_markedForDeletion` enum('n','y') NOT NULL,
  `organizational_unit_markedForDeletionDate` datetime NOT NULL,
  PRIMARY KEY (`organizational_unit_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_givenName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_sn1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_sn2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_secondary_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_official_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_official_id_type` int(11) NOT NULL,
  `person_date_of_birth` date NOT NULL,
  `person_gender` enum('F','M') CHARACTER SET utf8 NOT NULL,
  `person_secondary_official_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_secondary_official_id_type` int(11) NOT NULL,
  `person_homePostalAddress` varchar(750) CHARACTER SET utf8 NOT NULL,
  `person_photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_locality_id` int(11) NOT NULL,
  `person_telephoneNumber` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_mobile` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_bank_account_id` int(11) NOT NULL,
  `person_notes` text CHARACTER SET utf8 NOT NULL,
  `person_entryDate` datetime NOT NULL,
  `person_last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `person_creationUserId` int(11) DEFAULT NULL,
  `person_lastupdateUserId` int(11) DEFAULT NULL,
  `person_markedForDeletion` enum('n','y') NOT NULL DEFAULT 'n',
  `person_markedForDeletionDate` datetime NOT NULL,
  `username_original_ldap` varchar(255) NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Teacher`
--

CREATE TABLE IF NOT EXISTS `Teacher` (
  `teacher_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `teacher_lastname` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `teacher_dni` varchar(9) NOT NULL,
  `teacher_birthdate` date NOT NULL,
  `teacher_birthplace` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `teacher_address` varchar(50) NOT NULL,
  `teacher_phone` int(9) NOT NULL,
  `teacher_address2` varchar(50) DEFAULT NULL,
  `teacher_dpt` varchar(60) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `teacher_situation` varchar(60) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `teacher_title` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `teacher_catLevel` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `teacher_createDate` datetime NOT NULL,
  `teacher_specialty` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `teacher_town_id` int(5) unsigned NOT NULL,
  `teacher_creationUserID` int(11) unsigned NOT NULL,
  `teacher_observations` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`teacher_id`),
  KEY `teacher_town_id` (`teacher_town_id`),
  KEY `teacher_town_id_2` (`teacher_town_id`),
  KEY `teacher_creationUserID` (`teacher_creationUserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELACIONES PARA LA TABLA `Teacher`:
--   `teacher_creationUserID`
--       `users` -> `id`
--   `teacher_town_id`
--       `Town` -> `town_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Town`
--

CREATE TABLE IF NOT EXISTS `Town` (
  `town_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `town_postalCode` int(5) unsigned NOT NULL,
  `town_village` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`town_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `mainOrganizationaUnitId` int(11) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_realm` varchar(50) NOT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- RELACIONES PARA LA TABLA `users_groups`:
--   `group_id`
--       `groups` -> `id`
--   `user_id`
--       `users` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_preferences`
--

CREATE TABLE IF NOT EXISTS `user_preferences` (
  `user_preferencesId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `language` enum('catalan','spanish','english') NOT NULL DEFAULT 'catalan',
  `theme` enum('flexigrid','datatables','twitter-bootstrap') NOT NULL DEFAULT 'flexigrid',
  `dialogforms` enum('n','y') NOT NULL DEFAULT 'n',
  `description` text,
  `entryDate` datetime NOT NULL,
  `manualEntryDate` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `manualLast_update` datetime NOT NULL,
  `creationUserId` int(11) DEFAULT NULL,
  `lastupdateUserId` int(11) DEFAULT NULL,
  `markedForDeletion` enum('n','y') NOT NULL DEFAULT 'n',
  `markedForDeletionDate` datetime NOT NULL,
  PRIMARY KEY (`user_preferencesId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Teacher`
--
ALTER TABLE `Teacher`
  ADD CONSTRAINT `Teacher_ibfk_2` FOREIGN KEY (`teacher_creationUserID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `Teacher_ibfk_1` FOREIGN KEY (`teacher_town_id`) REFERENCES `Town` (`town_id`);

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
