-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2014 at 07:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kendramo_spacefinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `pictureID` int(11) NOT NULL AUTO_INCREMENT,
  `priKey` int(11) NOT NULL COMMENT 'Foriegn Key',
  `pic` blob NOT NULL,
  PRIMARY KEY (`pictureID`),
  KEY `priKey` (`priKey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`pictureID`, `priKey`, `pic`) VALUES
(41, 1, 0x4172726179),
(42, 1, ''),
(43, 2, ''),
(44, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `price` int(11) DEFAULT NULL,
  `sqftTotal` int(11) DEFAULT NULL,
  `levels` int(11) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `propTax` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `lot` int(11) DEFAULT NULL,
  `ha` int(11) DEFAULT NULL,
  `fence` int(11) DEFAULT NULL,
  `cooling` int(11) DEFAULT NULL,
  `dishwasher` int(11) DEFAULT NULL,
  `fridge` int(11) DEFAULT NULL,
  `oven` int(11) DEFAULT NULL,
  `oRange` int(11) DEFAULT NULL,
  `disposal` int(11) DEFAULT NULL,
  `microwave` int(11) DEFAULT NULL,
  `fireplace` int(11) DEFAULT NULL,
  `garageSize` int(11) DEFAULT NULL,
  `breakfastBar` int(11) DEFAULT NULL,
  `washer` int(11) DEFAULT NULL,
  `dryer` int(11) DEFAULT NULL,
  `heat` int(11) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `basement` int(11) DEFAULT NULL,
  `laundry` int(11) DEFAULT NULL,
  `pool` int(11) DEFAULT NULL,
  `gradeschool` int(11) DEFAULT NULL,
  `midschool` int(11) DEFAULT NULL,
  `highschool` int(11) DEFAULT NULL,
  `mBathLinen` int(11) DEFAULT NULL,
  `bathStorageB` int(11) DEFAULT NULL,
  `mBedCloset` int(11) DEFAULT NULL,
  `lRoom` int(11) DEFAULT NULL,
  `lStorage` int(11) DEFAULT NULL,
  `lLevel` int(11) DEFAULT NULL,
  `cabSpace` int(11) DEFAULT NULL,
  `panty` int(11) DEFAULT NULL,
  `den` int(11) DEFAULT NULL,
  `rec` int(11) DEFAULT NULL,
  `sun` int(11) DEFAULT NULL,
  `mud` int(11) DEFAULT NULL,
  `office` int(11) DEFAULT NULL,
  `hTub` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `space`
--

CREATE TABLE IF NOT EXISTS `space` (
  `priKey` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) DEFAULT NULL,
  `sqftTotal` int(11) DEFAULT NULL,
  `levels` decimal(11,2) DEFAULT NULL,
  `sqftFin` int(11) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `propTax` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `beds` decimal(11,2) DEFAULT NULL,
  `baths` decimal(11,2) DEFAULT NULL,
  `sqftUnFin` int(11) DEFAULT NULL,
  `lot` decimal(11,3) DEFAULT NULL,
  `ha` varchar(11) DEFAULT NULL,
  `dishwasher` varchar(11) DEFAULT NULL,
  `fridge` varchar(11) DEFAULT NULL,
  `oven` varchar(11) DEFAULT NULL,
  `disposal` varchar(11) DEFAULT NULL,
  `microwave` varchar(11) DEFAULT NULL,
  `fireplace` varchar(11) DEFAULT NULL,
  `garageSize` decimal(11,2) DEFAULT NULL,
  `breakfastBar` varchar(11) DEFAULT NULL,
  `washer` varchar(11) DEFAULT NULL,
  `dryer` varchar(11) DEFAULT NULL,
  `heat` varchar(11) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `basement` varchar(11) DEFAULT NULL,
  `pool` varchar(11) DEFAULT NULL,
  `gradeschool` int(11) DEFAULT NULL,
  `midschool` int(11) DEFAULT NULL,
  `highschool` int(11) DEFAULT NULL,
  `oRange` varchar(11) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(11) DEFAULT NULL,
  `typeKitchen` varchar(11) DEFAULT NULL,
  `kitchenFloor` varchar(11) DEFAULT NULL,
  `kitchenCabinets` varchar(11) DEFAULT NULL,
  `bathFloorA` varchar(50) DEFAULT NULL,
  `bathCounterA` varchar(50) DEFAULT NULL,
  `showerStallA` varchar(50) DEFAULT NULL,
  `basementFloor` varchar(11) DEFAULT NULL,
  `bedFloor` varchar(11) DEFAULT NULL,
  `fenceType` varchar(11) DEFAULT NULL,
  `daysOnMarket` int(11) DEFAULT NULL,
  `rating` decimal(11,4) DEFAULT NULL,
  `kitchenCounter` varchar(60) DEFAULT NULL,
  `bathStorageA` varchar(20) DEFAULT NULL,
  `bathFloorB` varchar(20) DEFAULT NULL,
  `bathCounterB` varchar(20) DEFAULT NULL,
  `showerStallB` varchar(20) DEFAULT NULL,
  `bathStorageB` varchar(20) DEFAULT NULL,
  `mBedCloset` varchar(60) DEFAULT NULL,
  `mBathFloor` varchar(60) DEFAULT NULL,
  `mBathLinen` varchar(60) DEFAULT NULL,
  `hallOne` varchar(60) DEFAULT NULL,
  `hallTwo` varchar(60) DEFAULT NULL,
  `hallThree` varchar(60) DEFAULT NULL,
  `hallFour` varchar(60) DEFAULT NULL,
  `lRoom` varchar(60) DEFAULT NULL,
  `lStorage` varchar(60) DEFAULT NULL,
  `lLevel` varchar(60) DEFAULT NULL,
  `cabSpace` varchar(60) DEFAULT NULL,
  `pantry` varchar(60) DEFAULT NULL,
  `den` varchar(60) DEFAULT NULL,
  `rec` varchar(60) DEFAULT NULL,
  `sun` varchar(60) DEFAULT NULL,
  `mud` varchar(60) DEFAULT NULL,
  `office` varchar(60) DEFAULT NULL,
  `hTub` varchar(60) DEFAULT NULL,
  `deck` varchar(60) DEFAULT NULL,
  `notes` varchar(60) DEFAULT NULL,
  `bedCloset` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`priKey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `space`
--

INSERT INTO `space` (`priKey`, `price`, `sqftTotal`, `levels`, `sqftFin`, `distance`, `propTax`, `age`, `beds`, `baths`, `sqftUnFin`, `lot`, `ha`, `dishwasher`, `fridge`, `oven`, `disposal`, `microwave`, `fireplace`, `garageSize`, `breakfastBar`, `washer`, `dryer`, `heat`, `rooms`, `basement`, `pool`, `gradeschool`, `midschool`, `highschool`, `oRange`, `street`, `city`, `typeKitchen`, `kitchenFloor`, `kitchenCabinets`, `bathFloorA`, `bathCounterA`, `showerStallA`, `basementFloor`, `bedFloor`, `fenceType`, `daysOnMarket`, `rating`, `kitchenCounter`, `bathStorageA`, `bathFloorB`, `bathCounterB`, `showerStallB`, `bathStorageB`, `mBedCloset`, `mBathFloor`, `mBathLinen`, `hallOne`, `hallTwo`, `hallThree`, `hallFour`, `lRoom`, `lStorage`, `lLevel`, `cabSpace`, `pantry`, `den`, `rec`, `sun`, `mud`, `office`, `hTub`, `deck`, `notes`, `bedCloset`) VALUES
(1, 124600, 3180, 5.00, 1740, 9, 2460, 64, 3.00, 2.00, 1440, 0.000, '0', 'yes', 'yes', 'yes', 'no', 'no', '0', 2.00, 'no', 'no', 'no', 'Forced Air', 6, 'Full, unfin', 'no', 3, 1, 2, 'yes', '400 Outer  Park Dr', 'Springfield', '', '', '', '', '', '', '', 'wood', 'partialFenc', 178, -22.0000, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 146000, 3180, 1.00, 2280, 17, 3068, 40, 3.00, 2.50, 900, 0.250, '0', 'no', 'yes', 'yes', 'yes', 'no', '0', 2.50, 'no', 'yes', 'yes', 'Heat Pump E', 9, 'Partial, pa', 'no', 4, 2, 6, 'yes', '2636 W Lawrence Avenue', 'Springfield', '', '', '', '', '', '', '', 'wood', 'partialFenc', 157, 6.1900, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`priKey`) REFERENCES `space` (`priKey`);
