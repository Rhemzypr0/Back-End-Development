-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: sdb-57.hosting.stackcp.net
-- Generation Time: Mar 27, 2023 at 03:45 PM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student80-353031357e39`
--

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`classID`, `CLASSNAME`, `CLASSSECTION`, `CLASSCAPACITY`, `STUDENTID`, `Teacher ID`, `Student ID`) VALUES
(1, 'YEAR 1', 'SECTION 1', 52, 0, 0, 0),
(2, 'YEAR 2', 'SECTION 2', 52, 0, 0, 0),
(3, 'YEAR 3', 'SECTION 3', 52, 0, 0, 0),
(4, 'YEAR 4', 'SECTION 4', 52, 0, 0, 0),
(5, 'YEAR 5', 'SECTION 5', 52, 0, 0, 0),
(6, 'YEAR 6', 'SECTION 6', 52, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
