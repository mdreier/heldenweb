-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 02. April 2012 um 19:03
-- Server Version: 5.1.61
-- PHP-Version: 5.3.5-1ubuntu7.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `heldenWeb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `beschreibungen`
--

DROP TABLE IF EXISTS `beschreibungen`;
CREATE TABLE IF NOT EXISTS `beschreibungen` (
  `id` varchar(36) NOT NULL COMMENT 'Eindeutige UUID des Helden',
  `held_id` varchar(36) NOT NULL,
  `augenfarbe` varchar(30) NOT NULL,
  `aussehen` text NOT NULL,
  `familie` text NOT NULL,
  `geburtstag` varchar(30) NOT NULL,
  `gewicht` int(11) NOT NULL COMMENT 'Gewicht in Stein (kg)',
  `groesse` int(30) NOT NULL COMMENT 'Größe in Halbfingern (cm)',
  `haarfarbe` varchar(30) NOT NULL,
  `Stand` varchar(50) NOT NULL,
  `Titel` text NOT NULL,
  `sozialstatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Grunddaten der Helden';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eigenschaften`
--

DROP TABLE IF EXISTS `eigenschaften`;
CREATE TABLE IF NOT EXISTS `eigenschaften` (
  `id` varchar(36) NOT NULL,
  `kurzbezeichnung` varchar(2) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eigenschaften_helden`
--

DROP TABLE IF EXISTS `eigenschaften_helden`;
CREATE TABLE IF NOT EXISTS `eigenschaften_helden` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `eigenschaft_id` varchar(36) NOT NULL,
  `wert` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden`
--

DROP TABLE IF EXISTS `helden`;
CREATE TABLE IF NOT EXISTS `helden` (
  `id` varchar(36) NOT NULL COMMENT 'Eindeutige UUID des Helden',
  `name` text NOT NULL,
  `geschlecht` varchar(15) NOT NULL,
  `kultur` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `rasse` varchar(40) NOT NULL,
  `stufe` int(11) NOT NULL,
  `zaubersprueche` tinyint(1) NOT NULL COMMENT 'Wird gesetzt, wenn der Held Zaubersprüche hat',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Grunddaten der Helden';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_sonderfertigkeiten`
--

DROP TABLE IF EXISTS `helden_sonderfertigkeiten`;
CREATE TABLE IF NOT EXISTS `helden_sonderfertigkeiten` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `sonderfertigkeit_id` varchar(36) NOT NULL,
  `spezialisierung` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_talente`
--

DROP TABLE IF EXISTS `helden_talente`;
CREATE TABLE IF NOT EXISTS `helden_talente` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `talent_id` varchar(36) NOT NULL,
  `talentwert` int(11) NOT NULL,
  `attacke` int(11) DEFAULT NULL,
  `parade` int(11) DEFAULT NULL,
  `behinderung` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_vorteile`
--

DROP TABLE IF EXISTS `helden_vorteile`;
CREATE TABLE IF NOT EXISTS `helden_vorteile` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `vorteil_id` varchar(36) NOT NULL,
  `wert` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_zauber`
--

DROP TABLE IF EXISTS `helden_zauber`;
CREATE TABLE IF NOT EXISTS `helden_zauber` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `zauber_id` varchar(36) NOT NULL,
  `zauberfertigkeitswert` int(11) NOT NULL,
  `repraesentation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `repraesentationen`
--

DROP TABLE IF EXISTS `repraesentationen`;
CREATE TABLE IF NOT EXISTS `repraesentationen` (
  `id` varchar(36) NOT NULL,
  `zauber_id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sonderfertigkeiten`
--

DROP TABLE IF EXISTS `sonderfertigkeiten`;
CREATE TABLE IF NOT EXISTS `sonderfertigkeiten` (
  `id` varchar(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `art` int(11) NOT NULL,
  `talent_id` varchar(36) DEFAULT NULL,
  `elfenlied` tinyint(1) NOT NULL,
  `fernkampf_sonderfertigkeit` tinyint(1) NOT NULL,
  `gelaendekunde` tinyint(1) NOT NULL,
  `hexenfluch` tinyint(1) NOT NULL,
  `kampf_sonderfertigkeit` tinyint(1) NOT NULL,
  `klerikal` tinyint(1) NOT NULL,
  `liturgie` tinyint(1) NOT NULL,
  `liturgiekenntnis` tinyint(1) NOT NULL,
  `magisch` tinyint(1) NOT NULL,
  `manoever` tinyint(1) NOT NULL,
  `merkmalskenntnis` tinyint(1) NOT NULL,
  `nahkampf_sonderfertigkeit` tinyint(1) NOT NULL,
  `repraesentation` tinyint(1) NOT NULL,
  `ritual` tinyint(1) NOT NULL,
  `schamanen_ritualkenntnis` tinyint(1) NOT NULL,
  `talentspezialisierung` tinyint(1) NOT NULL,
  `waffenloser_kampfstil` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `talentarten`
--

DROP TABLE IF EXISTS `talentarten`;
CREATE TABLE IF NOT EXISTS `talentarten` (
  `id` varchar(36) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `talente`
--

DROP TABLE IF EXISTS `talente`;
CREATE TABLE IF NOT EXISTS `talente` (
  `id` varchar(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sprachkomplexitaet` int(11) DEFAULT NULL,
  `probe1` varchar(36) DEFAULT NULL,
  `probe2` varchar(36) DEFAULT NULL,
  `probe3` varchar(36) DEFAULT NULL,
  `talentart_id` varchar(36) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Talente';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vorteile`
--

DROP TABLE IF EXISTS `vorteile`;
CREATE TABLE IF NOT EXISTS `vorteile` (
  `id` varchar(35) NOT NULL,
  `name` varchar(50) NOT NULL,
  `auswahl` tinyint(1) NOT NULL,
  `mehrfachauswahl` tinyint(1) NOT NULL,
  `nachteil` tinyint(1) NOT NULL,
  `wertvorteil` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werte`
--

DROP TABLE IF EXISTS `werte`;
CREATE TABLE IF NOT EXISTS `werte` (
  `id` varchar(36) NOT NULL COMMENT 'Eindeutige UUID des Helden',
  `held_id` varchar(36) NOT NULL,
  `ap_gesamt` int(11) NOT NULL,
  `ap_eingesetzt` int(11) NOT NULL,
  `ap_verfuegbar` int(11) NOT NULL,
  `gp_start` int(11) NOT NULL,
  `gp_rest` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Grunddaten der Helden';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zauber`
--

DROP TABLE IF EXISTS `zauber`;
CREATE TABLE IF NOT EXISTS `zauber` (
  `id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `basiskomplexitaet` varchar(2) NOT NULL,
  `lernkomplexitaet` varchar(2) NOT NULL,
  `hauszauber` tinyint(1) DEFAULT NULL,
  `Merkmale` text,
  `probe1` varchar(2) NOT NULL,
  `probe2` varchar(2) NOT NULL,
  `probe3` varchar(2) NOT NULL,
  `kosten` text,
  `reichweite` text,
  `wirkungsdauer` text,
  `zauberdauer` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
