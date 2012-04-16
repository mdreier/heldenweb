-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 16. April 2012 um 21:09
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
  `stand` varchar(50) NOT NULL,
  `titel` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Grunddaten der Helden';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eigenschaften`
--

CREATE TABLE IF NOT EXISTS `eigenschaften` (
  `id` varchar(36) NOT NULL,
  `kurzbezeichnung` varchar(5) NOT NULL,
  `name` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eigenschaften_helden`
--

CREATE TABLE IF NOT EXISTS `eigenschaften_helden` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `eigenschaft_id` varchar(36) NOT NULL,
  `wert` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fernkampfwaffen`
--

CREATE TABLE IF NOT EXISTS `fernkampfwaffen` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `talent_id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `fernkampfwert` int(11) NOT NULL,
  `trefferpunkte` varchar(10) NOT NULL,
  `ladezeit` int(11) NOT NULL,
  `munitionsart` text NOT NULL,
  `reichweite0` int(11) NOT NULL,
  `reichweite1` int(11) NOT NULL,
  `reichweite2` int(11) NOT NULL,
  `reichweite3` int(11) NOT NULL,
  `reichweite4` int(11) NOT NULL,
  `trefferpunkte0` int(11) NOT NULL,
  `trefferpunkte1` int(11) NOT NULL,
  `trefferpunkte2` int(11) NOT NULL,
  `trefferpunkte3` int(11) NOT NULL,
  `trefferpunkte4` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gegenstaende`
--

CREATE TABLE IF NOT EXISTS `gegenstaende` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `index` int(11) NOT NULL,
  `anzeigename` text NOT NULL,
  `anzahl` int(11) NOT NULL,
  `gewicht` float NOT NULL,
  `preis` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden`
--

CREATE TABLE IF NOT EXISTS `helden` (
  `id` varchar(36) NOT NULL COMMENT 'Eindeutige UUID des Helden',
  `identifier` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `geschlecht` varchar(15) NOT NULL,
  `kultur` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `rasse` varchar(40) NOT NULL,
  `stufe` int(11) NOT NULL,
  `zaubersprueche` tinyint(1) NOT NULL COMMENT 'Wird gesetzt, wenn der Held Zaubersprüche hat',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Grunddaten der Helden';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_sonderfertigkeiten`
--

CREATE TABLE IF NOT EXISTS `helden_sonderfertigkeiten` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `sonderfertigkeit_id` varchar(36) NOT NULL,
  `spezialisierung` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_talente`
--

CREATE TABLE IF NOT EXISTS `helden_talente` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `talent_id` varchar(36) NOT NULL,
  `talentwert` int(11) NOT NULL,
  `attacke` int(11) DEFAULT NULL,
  `parade` int(11) DEFAULT NULL,
  `behinderung` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_vorteile`
--

CREATE TABLE IF NOT EXISTS `helden_vorteile` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `vorteil_id` varchar(36) NOT NULL,
  `wert` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `helden_zauber`
--

CREATE TABLE IF NOT EXISTS `helden_zauber` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `zauber_id` varchar(36) NOT NULL,
  `zauberfertigkeitswert` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kampf`
--

CREATE TABLE IF NOT EXISTS `kampf` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `ausweichen` int(11) NOT NULL,
  `raufen_attacke` int(11) NOT NULL,
  `raufen_parade` int(11) NOT NULL,
  `raufen_trefferpunkte` varchar(10) NOT NULL,
  `ringen_attacke` int(11) NOT NULL,
  `ringen_parade` int(11) NOT NULL,
  `ringen_trefferpunkte` varchar(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `muenzen`
--

CREATE TABLE IF NOT EXISTS `muenzen` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `gruppe` text NOT NULL,
  `anzahl` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nahkampfwaffen`
--

CREATE TABLE IF NOT EXISTS `nahkampfwaffen` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `attacke` int(11) NOT NULL,
  `parade` int(11) NOT NULL,
  `trefferpunkte` varchar(10) NOT NULL,
  `trefferpunkte_final` varchar(10) NOT NULL,
  `talent_id` varchar(36) NOT NULL,
  `koerperkraftzuschlag` varchar(10) NOT NULL,
  `bruchfaktor_minimal` int(11) NOT NULL,
  `bruchfaktor_aktuell` int(11) NOT NULL,
  `inimodifikator` int(11) NOT NULL,
  `distanzklasse` text NOT NULL,
  `ausdauerschaden` tinyint(1) NOT NULL,
  `waffenmodifikator_attacke` int(11) NOT NULL,
  `waffenmodifikator_parade` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ruestungen`
--

CREATE TABLE IF NOT EXISTS `ruestungen` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `gesamt` tinyint(1) NOT NULL,
  `zeug` tinyint(1) NOT NULL,
  `anzahl_teile` int(11) NOT NULL,
  `behinderung_gesamt` int(11) NOT NULL,
  `schutz_gesamt` int(11) NOT NULL,
  `schutz_gesamt_zonen` int(11) NOT NULL,
  `schutz_bauch` int(11) NOT NULL,
  `schutz_brust` int(11) NOT NULL,
  `schutz_kopf` int(11) NOT NULL,
  `schutz_ruecken` int(11) NOT NULL,
  `schutz_arm_links` int(11) NOT NULL,
  `schutz_arm_rechts` int(11) NOT NULL,
  `schutz_bein_links` int(11) NOT NULL,
  `schutz_bein_rechts` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `schilde`
--

CREATE TABLE IF NOT EXISTS `schilde` (
  `id` varchar(36) NOT NULL,
  `held_id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `art` varchar(20) NOT NULL,
  `parade` int(11) NOT NULL,
  `inimodifikator` int(11) NOT NULL,
  `waffenmodifikator_attacke` int(11) NOT NULL,
  `waffenmodifikator_parade` int(11) NOT NULL,
  `bruchfaktor_minimal` int(11) NOT NULL,
  `bruchfaktor_aktuell` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sonderfertigkeiten`
--

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
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `talentarten`
--

CREATE TABLE IF NOT EXISTS `talentarten` (
  `id` varchar(36) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `talente`
--

CREATE TABLE IF NOT EXISTS `talente` (
  `id` varchar(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sprachkomplexitaet` int(11) DEFAULT NULL,
  `probe1` varchar(36) DEFAULT NULL,
  `probe2` varchar(36) DEFAULT NULL,
  `probe3` varchar(36) DEFAULT NULL,
  `talentart_id` varchar(36) CHARACTER SET latin1 NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Talente';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vorteile`
--

CREATE TABLE IF NOT EXISTS `vorteile` (
  `id` varchar(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `auswahl` tinyint(1) NOT NULL,
  `mehrfachauswahl` tinyint(1) NOT NULL,
  `nachteil` tinyint(1) NOT NULL,
  `wertvorteil` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werte`
--

CREATE TABLE IF NOT EXISTS `werte` (
  `id` varchar(36) NOT NULL COMMENT 'Eindeutige UUID des Helden',
  `held_id` varchar(36) NOT NULL,
  `ap_gesamt` int(11) NOT NULL,
  `ap_eingesetzt` int(11) NOT NULL,
  `ap_verfuegbar` int(11) NOT NULL,
  `gp_start` int(11) NOT NULL,
  `gp_rest` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Grunddaten der Helden';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zauber`
--

CREATE TABLE IF NOT EXISTS `zauber` (
  `id` varchar(36) NOT NULL,
  `name` text NOT NULL,
  `repraesentation` text NOT NULL,
  `basiskomplexitaet` varchar(2) NOT NULL,
  `lernkomplexitaet` varchar(2) NOT NULL,
  `hauszauber` tinyint(1) DEFAULT NULL,
  `merkmale` text,
  `probe1` varchar(36) NOT NULL,
  `probe2` varchar(36) NOT NULL,
  `probe3` varchar(36) NOT NULL,
  `kosten` text,
  `reichweite` text,
  `wirkungsdauer` text,
  `zauberdauer` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
