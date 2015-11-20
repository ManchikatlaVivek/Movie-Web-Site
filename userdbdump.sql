-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 13, 2015 at 10:32 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `userDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE `userInfo` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` text,
  `email` varchar(40) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `bday` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`id`, `username`, `password`, `mobile`, `email`, `gender`, `bday`) VALUES
(85, 'vivek', 'm', '9567036487', 'vivekmanchikatla1996@gmail.com', 'M', '2015-11-16'),
(86, 'c', 'c', '1234567890', 'b@gmail.com', 'M', '0000-00-00'),
(87, 'aravind', 'kanakadurga', '7736296712', 'aravindmudhiraj007@gmail.com', 'M', '1995-08-22'),
(92, 'a', 'a', '8989898989', 'ava@gmail.com', 'M', '2015-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userInfo`
--
ALTER TABLE `userInfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;