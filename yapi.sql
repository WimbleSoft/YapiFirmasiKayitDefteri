-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2019 at 05:27 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `fatura`
--

DROP TABLE IF EXISTS `fatura`;
CREATE TABLE IF NOT EXISTS `fatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `toplam` float NOT NULL,
  `geneltoplam` float NOT NULL,
  `kdv` float NOT NULL,
  `vergidairesi` varchar(100) NOT NULL,
  `vergino` varchar(50) NOT NULL,
  `fiilisevktarihi` date NOT NULL,
  `duzenlemesaati` varchar(10) NOT NULL,
  `duzenlemetarihi` date NOT NULL,
  `yalniz` varchar(150) NOT NULL,
  `sayin` text NOT NULL,
  `aciklamax1` varchar(50) DEFAULT NULL,
  `aciklamax2` varchar(50) DEFAULT NULL,
  `aciklamax3` varchar(50) DEFAULT NULL,
  `aciklamax4` varchar(50) DEFAULT NULL,
  `aciklamax5` varchar(50) DEFAULT NULL,
  `aciklamax6` varchar(50) DEFAULT NULL,
  `aciklamax7` varchar(50) DEFAULT NULL,
  `aciklamax8` varchar(50) DEFAULT NULL,
  `aciklamax9` varchar(50) DEFAULT NULL,
  `aciklamax10` varchar(50) DEFAULT NULL,
  `aciklamax11` varchar(50) DEFAULT NULL,
  `aciklamax12` varchar(50) DEFAULT NULL,
  `aciklamax13` varchar(50) DEFAULT NULL,
  `aciklamax14` varchar(50) DEFAULT NULL,
  `aciklamax15` varchar(50) DEFAULT NULL,
  `aciklamax16` varchar(50) DEFAULT NULL,
  `aciklamax17` varchar(50) DEFAULT NULL,
  `aciklamax18` varchar(50) DEFAULT NULL,
  `aciklamax19` varchar(50) DEFAULT NULL,
  `aciklamax20` varchar(50) DEFAULT NULL,
  `sirax1` float DEFAULT NULL,
  `sirax2` float DEFAULT NULL,
  `sirax3` float DEFAULT NULL,
  `sirax4` float DEFAULT NULL,
  `sirax5` float DEFAULT NULL,
  `sirax6` float DEFAULT NULL,
  `sirax7` float DEFAULT NULL,
  `sirax8` float DEFAULT NULL,
  `sirax9` float DEFAULT NULL,
  `sirax10` float DEFAULT NULL,
  `sirax11` float DEFAULT NULL,
  `sirax12` float DEFAULT NULL,
  `sirax13` float DEFAULT NULL,
  `sirax14` float DEFAULT NULL,
  `sirax15` float DEFAULT NULL,
  `sirax16` float DEFAULT NULL,
  `sirax17` float DEFAULT NULL,
  `sirax18` float DEFAULT NULL,
  `sirax19` float DEFAULT NULL,
  `sirax20` float DEFAULT NULL,
  `tur1` varchar(10) DEFAULT NULL,
  `tur2` varchar(10) DEFAULT NULL,
  `tur3` varchar(10) DEFAULT NULL,
  `tur4` varchar(10) DEFAULT NULL,
  `tur5` varchar(10) DEFAULT NULL,
  `tur6` varchar(10) DEFAULT NULL,
  `tur7` varchar(10) DEFAULT NULL,
  `tur8` varchar(10) DEFAULT NULL,
  `tur9` varchar(10) DEFAULT NULL,
  `tur10` varchar(10) DEFAULT NULL,
  `tur11` varchar(10) DEFAULT NULL,
  `tur12` varchar(10) DEFAULT NULL,
  `tur13` varchar(10) DEFAULT NULL,
  `tur14` varchar(10) DEFAULT NULL,
  `tur15` varchar(10) DEFAULT NULL,
  `tur16` varchar(10) DEFAULT NULL,
  `tur17` varchar(10) DEFAULT NULL,
  `tur18` varchar(10) DEFAULT NULL,
  `tur19` varchar(10) DEFAULT NULL,
  `tur20` varchar(10) DEFAULT NULL,
  `birimfiyatix1` float DEFAULT NULL,
  `birimfiyatix2` float DEFAULT NULL,
  `birimfiyatix3` float DEFAULT NULL,
  `birimfiyatix4` float DEFAULT NULL,
  `birimfiyatix5` float DEFAULT NULL,
  `birimfiyatix6` float DEFAULT NULL,
  `birimfiyatix7` float DEFAULT NULL,
  `birimfiyatix8` float DEFAULT NULL,
  `birimfiyatix9` float DEFAULT NULL,
  `birimfiyatix10` float DEFAULT NULL,
  `birimfiyatix11` float DEFAULT NULL,
  `birimfiyatix12` float DEFAULT NULL,
  `birimfiyatix13` float DEFAULT NULL,
  `birimfiyatix14` float DEFAULT NULL,
  `birimfiyatix15` float DEFAULT NULL,
  `birimfiyatix16` float DEFAULT NULL,
  `birimfiyatix17` float DEFAULT NULL,
  `birimfiyatix18` float DEFAULT NULL,
  `birimfiyatix19` float DEFAULT NULL,
  `birimfiyatix20` float DEFAULT NULL,
  `birimi1` varchar(5) NOT NULL,
  `birimi2` varchar(5) NOT NULL,
  `birimi3` varchar(5) NOT NULL,
  `birimi4` varchar(5) NOT NULL,
  `birimi5` varchar(5) NOT NULL,
  `birimi6` varchar(5) NOT NULL,
  `birimi7` varchar(5) NOT NULL,
  `birimi8` varchar(5) NOT NULL,
  `birimi9` varchar(5) NOT NULL,
  `birimi10` varchar(5) NOT NULL,
  `birimi11` varchar(5) NOT NULL,
  `birimi12` varchar(5) NOT NULL,
  `birimi13` varchar(5) NOT NULL,
  `birimi14` varchar(5) NOT NULL,
  `birimi15` varchar(5) NOT NULL,
  `birimi16` varchar(5) NOT NULL,
  `birimi17` varchar(5) NOT NULL,
  `birimi18` varchar(5) NOT NULL,
  `birimi19` varchar(5) NOT NULL,
  `birimi20` varchar(5) NOT NULL,
  `kur` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `firma`
--

DROP TABLE IF EXISTS `firma`;
CREATE TABLE IF NOT EXISTS `firma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firmaadi` varchar(50) NOT NULL,
  `ad` varchar(20) NOT NULL,
  `soyad` varchar(25) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `adres` text NOT NULL,
  `vd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `firma_santiyeler`
--

DROP TABLE IF EXISTS `firma_santiyeler`;
CREATE TABLE IF NOT EXISTS `firma_santiyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `santiyeadi` varchar(20) NOT NULL,
  `firmaid` int(11) NOT NULL,
  `ad` varchar(30) NOT NULL,
  `soyad` varchar(20) NOT NULL,
  `adres` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gunluk`
--

DROP TABLE IF EXISTS `gunluk`;
CREATE TABLE IF NOT EXISTS `gunluk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` varchar(10) NOT NULL,
  `aciklama` varchar(20) NOT NULL,
  `gelir_nakit` float NOT NULL,
  `gelir_cek` float NOT NULL,
  `gider_nakit` float NOT NULL,
  `gider_cek` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `insaat_kasa`
--

DROP TABLE IF EXISTS `insaat_kasa`;
CREATE TABLE IF NOT EXISTS `insaat_kasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` date NOT NULL,
  `aciklama` varchar(20) NOT NULL,
  `gelir_nakit` float NOT NULL,
  `gelir_cek` float NOT NULL,
  `gider_nakit` float NOT NULL,
  `gider_cek` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kasa`
--

DROP TABLE IF EXISTS `kasa`;
CREATE TABLE IF NOT EXISTS `kasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` varchar(10) NOT NULL,
  `aciklama` varchar(100) NOT NULL,
  `gelir_nakit` varchar(20) NOT NULL,
  `gelir_cek` varchar(20) NOT NULL,
  `gider_nakit` varchar(20) NOT NULL,
  `gider_cek` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) NOT NULL,
  `soyad` varchar(30) NOT NULL,
  `maas` varchar(10) NOT NULL,
  `tcno` varchar(11) NOT NULL,
  `adres` text NOT NULL,
  `baslamatarihi` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personel_avanslar`
--

DROP TABLE IF EXISTS `personel_avanslar`;
CREATE TABLE IF NOT EXISTS `personel_avanslar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personelid` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `avanslar` float NOT NULL,
  `ay` varchar(10) NOT NULL,
  `yil` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santiyeler_cari`
--

DROP TABLE IF EXISTS `santiyeler_cari`;
CREATE TABLE IF NOT EXISTS `santiyeler_cari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `santiyeid` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `alinan_cek` float NOT NULL,
  `alinannakit_tl` float NOT NULL,
  `alinannakit_usd` float NOT NULL,
  `hakedistutari_tl` float NOT NULL,
  `hakedistutari_usd` float NOT NULL,
  `kur` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santiyeler_fatura`
--

DROP TABLE IF EXISTS `santiyeler_fatura`;
CREATE TABLE IF NOT EXISTS `santiyeler_fatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yalniz` varchar(50) NOT NULL,
  `kur` float NOT NULL,
  `santiyeid` int(11) NOT NULL,
  `firmaid` varchar(50) NOT NULL,
  `toplam` float NOT NULL,
  `geneltoplam` float NOT NULL,
  `kdv` float NOT NULL,
  `konu` varchar(50) NOT NULL,
  `tarih` date NOT NULL,
  `aciklamax1` varchar(50) DEFAULT NULL,
  `aciklamax2` varchar(50) DEFAULT NULL,
  `aciklamax3` varchar(50) DEFAULT NULL,
  `aciklamax4` varchar(50) DEFAULT NULL,
  `aciklamax5` varchar(50) DEFAULT NULL,
  `aciklamax6` varchar(50) DEFAULT NULL,
  `aciklamax7` varchar(50) DEFAULT NULL,
  `aciklamax8` varchar(50) DEFAULT NULL,
  `aciklamax9` varchar(50) DEFAULT NULL,
  `aciklamax10` varchar(50) DEFAULT NULL,
  `aciklamax11` varchar(50) DEFAULT NULL,
  `aciklamax12` varchar(50) DEFAULT NULL,
  `aciklamax13` varchar(50) DEFAULT NULL,
  `aciklamax14` varchar(50) DEFAULT NULL,
  `aciklamax15` varchar(50) DEFAULT NULL,
  `aciklamax16` varchar(50) DEFAULT NULL,
  `aciklamax17` varchar(50) DEFAULT NULL,
  `aciklamax18` varchar(50) DEFAULT NULL,
  `aciklamax19` varchar(50) DEFAULT NULL,
  `aciklamax20` varchar(50) DEFAULT NULL,
  `sirax1` float DEFAULT NULL,
  `sirax2` float DEFAULT NULL,
  `sirax3` float DEFAULT NULL,
  `sirax4` float DEFAULT NULL,
  `sirax5` float DEFAULT NULL,
  `sirax6` float DEFAULT NULL,
  `sirax7` float DEFAULT NULL,
  `sirax8` float DEFAULT NULL,
  `sirax9` float DEFAULT NULL,
  `sirax10` float DEFAULT NULL,
  `sirax11` float DEFAULT NULL,
  `sirax12` float DEFAULT NULL,
  `sirax13` float DEFAULT NULL,
  `sirax14` float DEFAULT NULL,
  `sirax15` float DEFAULT NULL,
  `sirax16` float DEFAULT NULL,
  `sirax17` float DEFAULT NULL,
  `sirax18` float DEFAULT NULL,
  `sirax19` float DEFAULT NULL,
  `sirax20` float DEFAULT NULL,
  `tur1` varchar(10) DEFAULT NULL,
  `tur2` varchar(10) DEFAULT NULL,
  `tur3` varchar(10) DEFAULT NULL,
  `tur4` varchar(10) DEFAULT NULL,
  `tur5` varchar(10) DEFAULT NULL,
  `tur6` varchar(10) DEFAULT NULL,
  `tur7` varchar(10) DEFAULT NULL,
  `tur8` varchar(10) DEFAULT NULL,
  `tur9` varchar(10) DEFAULT NULL,
  `tur10` varchar(10) DEFAULT NULL,
  `tur11` varchar(10) DEFAULT NULL,
  `tur12` varchar(10) DEFAULT NULL,
  `tur13` varchar(10) DEFAULT NULL,
  `tur14` varchar(10) DEFAULT NULL,
  `tur15` varchar(10) DEFAULT NULL,
  `tur16` varchar(10) DEFAULT NULL,
  `tur17` varchar(10) DEFAULT NULL,
  `tur18` varchar(10) DEFAULT NULL,
  `tur19` varchar(10) DEFAULT NULL,
  `tur20` varchar(10) DEFAULT NULL,
  `birimfiyatix1` float DEFAULT NULL,
  `birimfiyatix2` float DEFAULT NULL,
  `birimfiyatix3` float DEFAULT NULL,
  `birimfiyatix4` float DEFAULT NULL,
  `birimfiyatix5` float DEFAULT NULL,
  `birimfiyatix6` float DEFAULT NULL,
  `birimfiyatix7` float DEFAULT NULL,
  `birimfiyatix8` float DEFAULT NULL,
  `birimfiyatix9` float DEFAULT NULL,
  `birimfiyatix10` float DEFAULT NULL,
  `birimfiyatix11` float DEFAULT NULL,
  `birimfiyatix12` float DEFAULT NULL,
  `birimfiyatix13` float DEFAULT NULL,
  `birimfiyatix14` float DEFAULT NULL,
  `birimfiyatix15` float DEFAULT NULL,
  `birimfiyatix16` float DEFAULT NULL,
  `birimfiyatix17` float DEFAULT NULL,
  `birimfiyatix18` float DEFAULT NULL,
  `birimfiyatix19` float DEFAULT NULL,
  `birimfiyatix20` float DEFAULT NULL,
  `birimi1` varchar(5) NOT NULL,
  `birimi2` varchar(5) NOT NULL,
  `birimi3` varchar(5) NOT NULL,
  `birimi4` varchar(5) NOT NULL,
  `birimi5` varchar(5) NOT NULL,
  `birimi6` varchar(5) NOT NULL,
  `birimi7` varchar(5) NOT NULL,
  `birimi8` varchar(5) NOT NULL,
  `birimi9` varchar(5) NOT NULL,
  `birimi10` varchar(5) NOT NULL,
  `birimi11` varchar(5) NOT NULL,
  `birimi12` varchar(5) NOT NULL,
  `birimi13` varchar(5) NOT NULL,
  `birimi14` varchar(5) NOT NULL,
  `birimi15` varchar(5) NOT NULL,
  `birimi16` varchar(5) NOT NULL,
  `birimi17` varchar(5) NOT NULL,
  `birimi18` varchar(5) NOT NULL,
  `birimi19` varchar(5) NOT NULL,
  `birimi20` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `santiyeid` (`santiyeid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santiyeler_hakedis`
--

DROP TABLE IF EXISTS `santiyeler_hakedis`;
CREATE TABLE IF NOT EXISTS `santiyeler_hakedis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yalniz` varchar(50) NOT NULL,
  `kur` float NOT NULL,
  `santiyeid` int(11) NOT NULL,
  `firmaid` varchar(50) NOT NULL,
  `toplam` float NOT NULL,
  `geneltoplam` float NOT NULL,
  `kdv` float NOT NULL,
  `konu` varchar(50) NOT NULL,
  `tarih` date NOT NULL,
  `aciklamax1` varchar(50) DEFAULT NULL,
  `aciklamax2` varchar(50) DEFAULT NULL,
  `aciklamax3` varchar(50) DEFAULT NULL,
  `aciklamax4` varchar(50) DEFAULT NULL,
  `aciklamax5` varchar(50) DEFAULT NULL,
  `aciklamax6` varchar(50) DEFAULT NULL,
  `aciklamax7` varchar(50) DEFAULT NULL,
  `aciklamax8` varchar(50) DEFAULT NULL,
  `aciklamax9` varchar(50) DEFAULT NULL,
  `aciklamax10` varchar(50) DEFAULT NULL,
  `aciklamax11` varchar(50) DEFAULT NULL,
  `aciklamax12` varchar(50) DEFAULT NULL,
  `aciklamax13` varchar(50) DEFAULT NULL,
  `aciklamax14` varchar(50) DEFAULT NULL,
  `aciklamax15` varchar(50) DEFAULT NULL,
  `aciklamax16` varchar(50) DEFAULT NULL,
  `aciklamax17` varchar(50) DEFAULT NULL,
  `aciklamax18` varchar(50) DEFAULT NULL,
  `aciklamax19` varchar(50) DEFAULT NULL,
  `aciklamax20` varchar(50) DEFAULT NULL,
  `sirax1` float DEFAULT NULL,
  `sirax2` float DEFAULT NULL,
  `sirax3` float DEFAULT NULL,
  `sirax4` float DEFAULT NULL,
  `sirax5` float DEFAULT NULL,
  `sirax6` float DEFAULT NULL,
  `sirax7` float DEFAULT NULL,
  `sirax8` float DEFAULT NULL,
  `sirax9` float DEFAULT NULL,
  `sirax10` float DEFAULT NULL,
  `sirax11` float DEFAULT NULL,
  `sirax12` float DEFAULT NULL,
  `sirax13` float DEFAULT NULL,
  `sirax14` float DEFAULT NULL,
  `sirax15` float DEFAULT NULL,
  `sirax16` float DEFAULT NULL,
  `sirax17` float DEFAULT NULL,
  `sirax18` float DEFAULT NULL,
  `sirax19` float DEFAULT NULL,
  `sirax20` float DEFAULT NULL,
  `tur1` varchar(10) DEFAULT NULL,
  `tur2` varchar(10) DEFAULT NULL,
  `tur3` varchar(10) DEFAULT NULL,
  `tur4` varchar(10) DEFAULT NULL,
  `tur5` varchar(10) DEFAULT NULL,
  `tur6` varchar(10) DEFAULT NULL,
  `tur7` varchar(10) DEFAULT NULL,
  `tur8` varchar(10) DEFAULT NULL,
  `tur9` varchar(10) DEFAULT NULL,
  `tur10` varchar(10) DEFAULT NULL,
  `tur11` varchar(10) DEFAULT NULL,
  `tur12` varchar(10) DEFAULT NULL,
  `tur13` varchar(10) DEFAULT NULL,
  `tur14` varchar(10) DEFAULT NULL,
  `tur15` varchar(10) DEFAULT NULL,
  `tur16` varchar(10) DEFAULT NULL,
  `tur17` varchar(10) DEFAULT NULL,
  `tur18` varchar(10) DEFAULT NULL,
  `tur19` varchar(10) DEFAULT NULL,
  `tur20` varchar(10) DEFAULT NULL,
  `birimfiyatix1` float DEFAULT NULL,
  `birimfiyatix2` float DEFAULT NULL,
  `birimfiyatix3` float DEFAULT NULL,
  `birimfiyatix4` float DEFAULT NULL,
  `birimfiyatix5` float DEFAULT NULL,
  `birimfiyatix6` float DEFAULT NULL,
  `birimfiyatix7` float DEFAULT NULL,
  `birimfiyatix8` float DEFAULT NULL,
  `birimfiyatix9` float DEFAULT NULL,
  `birimfiyatix10` float DEFAULT NULL,
  `birimfiyatix11` float DEFAULT NULL,
  `birimfiyatix12` float DEFAULT NULL,
  `birimfiyatix13` float DEFAULT NULL,
  `birimfiyatix14` float DEFAULT NULL,
  `birimfiyatix15` float DEFAULT NULL,
  `birimfiyatix16` float DEFAULT NULL,
  `birimfiyatix17` float DEFAULT NULL,
  `birimfiyatix18` float DEFAULT NULL,
  `birimfiyatix19` float DEFAULT NULL,
  `birimfiyatix20` float DEFAULT NULL,
  `birimi1` varchar(5) NOT NULL,
  `birimi2` varchar(5) NOT NULL,
  `birimi3` varchar(5) NOT NULL,
  `birimi4` varchar(5) NOT NULL,
  `birimi5` varchar(5) NOT NULL,
  `birimi6` varchar(5) NOT NULL,
  `birimi7` varchar(5) NOT NULL,
  `birimi8` varchar(5) NOT NULL,
  `birimi9` varchar(5) NOT NULL,
  `birimi10` varchar(5) NOT NULL,
  `birimi11` varchar(5) NOT NULL,
  `birimi12` varchar(5) NOT NULL,
  `birimi13` varchar(5) NOT NULL,
  `birimi14` varchar(5) NOT NULL,
  `birimi15` varchar(5) NOT NULL,
  `birimi16` varchar(5) NOT NULL,
  `birimi17` varchar(5) NOT NULL,
  `birimi18` varchar(5) NOT NULL,
  `birimi19` varchar(5) NOT NULL,
  `birimi20` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `santiyeid` (`santiyeid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santiyeler_montajcilar`
--

DROP TABLE IF EXISTS `santiyeler_montajcilar`;
CREATE TABLE IF NOT EXISTS `santiyeler_montajcilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `santiyeid` int(11) NOT NULL,
  `montajekibi` varchar(50) NOT NULL,
  `doseme_metraji` float NOT NULL,
  `doseme_fiyati` float NOT NULL,
  `supurgelik_metraji` float NOT NULL,
  `supurgelik_fiyati` float NOT NULL,
  `sove_metraji` float NOT NULL,
  `sove_fiyati` float NOT NULL,
  `denizlik_metraji` float NOT NULL,
  `denizlik_fiyati` float NOT NULL,
  `basamak_metraji` float NOT NULL,
  `basamak_fiyati` float NOT NULL,
  `hakedis_toplami` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santiyeler_montajcilar_avanslar`
--

DROP TABLE IF EXISTS `santiyeler_montajcilar_avanslar`;
CREATE TABLE IF NOT EXISTS `santiyeler_montajcilar_avanslar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `santiye_montajci_id` int(11) NOT NULL,
  `tarihi` date NOT NULL,
  `miktari` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santiyeler_teklif`
--

DROP TABLE IF EXISTS `santiyeler_teklif`;
CREATE TABLE IF NOT EXISTS `santiyeler_teklif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yalniz` varchar(50) NOT NULL,
  `kur` float NOT NULL,
  `santiyeid` int(11) NOT NULL,
  `firmaid` varchar(50) NOT NULL,
  `toplam` float NOT NULL,
  `geneltoplam` float NOT NULL,
  `kdv` float NOT NULL,
  `konu` text NOT NULL,
  `tarih` date NOT NULL,
  `aciklamax1` text,
  `aciklamax2` text,
  `aciklamax3` text,
  `aciklamax4` text,
  `aciklamax5` text,
  `aciklamax6` text,
  `aciklamax7` text,
  `aciklamax8` text,
  `aciklamax9` text,
  `aciklamax10` text,
  `aciklamax11` text,
  `aciklamax12` text,
  `aciklamax13` text,
  `aciklamax14` text,
  `aciklamax15` text,
  `aciklamax16` text,
  `aciklamax17` text,
  `aciklamax18` text,
  `aciklamax19` text,
  `aciklamax20` text,
  `sirax1` float DEFAULT NULL,
  `sirax2` float DEFAULT NULL,
  `sirax3` float DEFAULT NULL,
  `sirax4` float DEFAULT NULL,
  `sirax5` float DEFAULT NULL,
  `sirax6` float DEFAULT NULL,
  `sirax7` float DEFAULT NULL,
  `sirax8` float DEFAULT NULL,
  `sirax9` float DEFAULT NULL,
  `sirax10` float DEFAULT NULL,
  `sirax11` float DEFAULT NULL,
  `sirax12` float DEFAULT NULL,
  `sirax13` float DEFAULT NULL,
  `sirax14` float DEFAULT NULL,
  `sirax15` float DEFAULT NULL,
  `sirax16` float DEFAULT NULL,
  `sirax17` float DEFAULT NULL,
  `sirax18` float DEFAULT NULL,
  `sirax19` float DEFAULT NULL,
  `sirax20` float DEFAULT NULL,
  `tur1` varchar(10) DEFAULT NULL,
  `tur2` varchar(10) DEFAULT NULL,
  `tur3` varchar(10) DEFAULT NULL,
  `tur4` varchar(10) DEFAULT NULL,
  `tur5` varchar(10) DEFAULT NULL,
  `tur6` varchar(10) DEFAULT NULL,
  `tur7` varchar(10) DEFAULT NULL,
  `tur8` varchar(10) DEFAULT NULL,
  `tur9` varchar(10) DEFAULT NULL,
  `tur10` varchar(10) DEFAULT NULL,
  `tur11` varchar(10) DEFAULT NULL,
  `tur12` varchar(10) DEFAULT NULL,
  `tur13` varchar(10) DEFAULT NULL,
  `tur14` varchar(10) DEFAULT NULL,
  `tur15` varchar(10) DEFAULT NULL,
  `tur16` varchar(10) DEFAULT NULL,
  `tur17` varchar(10) DEFAULT NULL,
  `tur18` varchar(10) DEFAULT NULL,
  `tur19` varchar(10) DEFAULT NULL,
  `tur20` varchar(10) DEFAULT NULL,
  `birimfiyatix1` float DEFAULT NULL,
  `birimfiyatix2` float DEFAULT NULL,
  `birimfiyatix3` float DEFAULT NULL,
  `birimfiyatix4` float DEFAULT NULL,
  `birimfiyatix5` float DEFAULT NULL,
  `birimfiyatix6` float DEFAULT NULL,
  `birimfiyatix7` float DEFAULT NULL,
  `birimfiyatix8` float DEFAULT NULL,
  `birimfiyatix9` float DEFAULT NULL,
  `birimfiyatix10` float DEFAULT NULL,
  `birimfiyatix11` float DEFAULT NULL,
  `birimfiyatix12` float DEFAULT NULL,
  `birimfiyatix13` float DEFAULT NULL,
  `birimfiyatix14` float DEFAULT NULL,
  `birimfiyatix15` float DEFAULT NULL,
  `birimfiyatix16` float DEFAULT NULL,
  `birimfiyatix17` float DEFAULT NULL,
  `birimfiyatix18` float DEFAULT NULL,
  `birimfiyatix19` float DEFAULT NULL,
  `birimfiyatix20` float DEFAULT NULL,
  `birimi1` varchar(5) NOT NULL,
  `birimi2` varchar(5) NOT NULL,
  `birimi3` varchar(5) NOT NULL,
  `birimi4` varchar(5) NOT NULL,
  `birimi5` varchar(5) NOT NULL,
  `birimi6` varchar(5) NOT NULL,
  `birimi7` varchar(5) NOT NULL,
  `birimi8` varchar(5) NOT NULL,
  `birimi9` varchar(5) NOT NULL,
  `birimi10` varchar(5) NOT NULL,
  `birimi11` varchar(5) NOT NULL,
  `birimi12` varchar(5) NOT NULL,
  `birimi13` varchar(5) NOT NULL,
  `birimi14` varchar(5) NOT NULL,
  `birimi15` varchar(5) NOT NULL,
  `birimi16` varchar(5) NOT NULL,
  `birimi17` varchar(5) NOT NULL,
  `birimi18` varchar(5) NOT NULL,
  `birimi19` varchar(5) NOT NULL,
  `birimi20` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `santiyeid` (`santiyeid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tedarikciler`
--

DROP TABLE IF EXISTS `tedarikciler`;
CREATE TABLE IF NOT EXISTS `tedarikciler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tedarikciler_faturalari`
--

DROP TABLE IF EXISTS `tedarikciler_faturalari`;
CREATE TABLE IF NOT EXISTS `tedarikciler_faturalari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` date NOT NULL,
  `tutar_tl` float NOT NULL,
  `tedarikciid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tedarikciler_faturalari_odemeleri`
--

DROP TABLE IF EXISTS `tedarikciler_faturalari_odemeleri`;
CREATE TABLE IF NOT EXISTS `tedarikciler_faturalari_odemeleri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tedarikciid` int(11) NOT NULL,
  `odenen_tl` float NOT NULL,
  `odenen_cek` float NOT NULL,
  `tarih` date NOT NULL,
  `kalan_tl` float NOT NULL,
  `kalan_cek` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `yoneticiler`
--

DROP TABLE IF EXISTS `yoneticiler`;
CREATE TABLE IF NOT EXISTS `yoneticiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(25) DEFAULT NULL,
  `kadi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `eposta` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `adsoyad`, `kadi`, `sifre`, `eposta`, `telefon`) VALUES
(8, 'Fatih Sağlam', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'm.fatihsaglam@outlook.com', '+905422121727');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
