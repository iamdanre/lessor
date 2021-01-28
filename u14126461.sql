-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 30, 2019 at 12:29 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `u14126461`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbLocations`
--

CREATE TABLE `tbLocations` (
  `projID` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `address` char(100) NOT NULL,
  `type` char(50) NOT NULL,
  `description` text NOT NULL,
  `creationdate` date NOT NULL,
  `owner` char(50) NOT NULL,
  `members` text NOT NULL,
  `status` char(50) NOT NULL DEFAULT 'new',
  `files` blob,
  `pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbLocations`
--

INSERT INTO `tbLocations` (`projID`, `name`, `address`, `type`, `description`, `creationdate`, `owner`, `members`, `status`, `files`, `pic`) VALUES
(1, 'Maushaus', '123 William, Brooklyn, Pretoria', 'mobile', 'Student housing with a friendly atmosphere', '2019-08-29', 'iamdanre@gmail.com', 'iamdanre@gmail.com', 'available', NULL, 'maus.jpg'),
(2, 'Woodstead', '432 Glyn, Hatfield, Pretoria', 'web', 'Wooden cabin in garden', '2019-08-29', 'iamdanre@gmail.com', 'iamdanre@gmail.com', 'available', NULL, 'wood.jpg'),
(3, 'Garden Hut', '420 Dank Street', 'framework', 'Cozy hut in residential area with very green garden', '2019-08-29', 'john@doe.com', 'john@doe.com', 'available', NULL, 'hut.jpg'),
(4, 'Backpackers Inn', '42 Smith Street, Groenkloof, Pretoria', 'library', 'Affordable overnight accommodation for tourists', '2019-08-29', 'john@doe.com', 'john@doe.com', 'available', NULL, 'back.jpg'),
(5, 'Playboy Mansion', '735 4th Avenue, LA, California', 'mobile', 'Upmarket mansion for bachelors', '2019-08-29', 'iamdanre@gmail.com', 'iamdanre@gmail.com', 'available', NULL, 'play.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbMessages`
--

CREATE TABLE `tbMessages` (
  `toEmail` varchar(50) DEFAULT NULL,
  `fromEmail` varchar(50) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `messageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbMessages`
--

INSERT INTO `tbMessages` (`toEmail`, `fromEmail`, `message`, `messageId`) VALUES
('iamdanre@gmail.com', 'john@doe.com', 'had issues with water at the Maushaus', 428);

-- --------------------------------------------------------

--
-- Table structure for table `tbUsers`
--

CREATE TABLE `tbUsers` (
  `user_id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `surname` char(100) NOT NULL,
  `password` char(100) NOT NULL,
  `email` char(100) NOT NULL,
  `birthday` date NOT NULL,
  `projects` text,
  `more` varchar(500) DEFAULT NULL,
  `friends` varchar(2000) DEFAULT NULL,
  `newMessage` int(11) NOT NULL DEFAULT '0',
  `cnumber` char(20) NOT NULL,
  `picurl` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbUsers`
--

INSERT INTO `tbUsers` (`user_id`, `name`, `surname`, `password`, `email`, `birthday`, `projects`, `more`, `friends`, `newMessage`, `cnumber`, `picurl`) VALUES
(1, 'Danré', 'Retief', 'awe', 'iamdanre@gmail.com', '1995-08-04', '', 'admin lessor', 'luke@rebels.com, john@doe.com', 0, '0784585144', 'me.jpg'),
(2, 'John', 'Doe', 'awe', 'john@doe.com', '1993-02-01', NULL, 'LA based lessor and frequent traveller to South Africa', NULL, 0, '0812723853', 'john.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbLocations`
--
ALTER TABLE `tbLocations`
  ADD PRIMARY KEY (`projID`);

--
-- Indexes for table `tbMessages`
--
ALTER TABLE `tbMessages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `tbUsers`
--
ALTER TABLE `tbUsers`
  ADD PRIMARY KEY (`user_id`);
