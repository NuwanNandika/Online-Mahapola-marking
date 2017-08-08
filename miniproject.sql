-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2017 at 05:26 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_students`
--

CREATE TABLE IF NOT EXISTS `add_students` (
  `reg_no` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_students`
--

INSERT INTO `add_students` (`reg_no`, `name`, `faculty`, `department`, `account_no`) VALUES
('13/AS/CI/011', 'Nuwan Nandika Dharmadasa', 'Aaalied Sciences', 'CIS', '77613246'),
('13/AS/CI/026', 'buddhika priyabhashana', 'Applied Sciences', 'CIS', '77568952'),
('13/AS/CI/048', 'Aparna Dissanayaka', 'Applied Sciences', 'CIS', '77664569'),
('13/AS/NR/024', 'Buwaneka Sudeera', 'Aaalied Sciences', 'NR', '77612584'),
('13/AS/NR/045', 'Charith Prabhagya', 'Applied Sciences', 'NR', '77625869'),
('13/MG/TM/025', 'Shehan kawshalya', 'Management', 'Tourism', '77625698');

-- --------------------------------------------------------

--
-- Table structure for table `mahapola`
--

CREATE TABLE IF NOT EXISTS `mahapola` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(255) DEFAULT NULL,
  `marking` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `marking date` date NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `account_no` (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `account_no`, `department`, `reg_no`, `email`, `password`, `join_date`, `role`) VALUES
(1, 'Nuwan Nandika Dharmadasa', '77613246', 'CIS', '13/AS/CI/011', 'nuwannandika8881@gmail.com', '48e912410d266e8acfc5491ffd418567', '2017-07-20', 'a'),
(2, 'Buwaneka Sudeera', '77612584', 'NR', '13/AS/NR/024', 'buwanekasudeera@gmail.com', '4f1377538173f86739b21402d94d288d', '2017-07-20', 'a'),
(3, 'Aparna Dissanayaka', '77664569', 'CIS', '13/AS/CI/048', 'aparna123@gmail.com', '46aab74d298e13f19d28aa38dda7277f', '2017-07-20', 'm'),
(4, 'Charith Prabhagya', '77625698', 'NR', '13/AS/NR/045', 'charith0000@gmail.com', '77deffc78ad6f273f427d7b84f1d4794', '2017-07-21', 'm');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahapola`
--
ALTER TABLE `mahapola`
  ADD CONSTRAINT `mahapola_ibfk_1` FOREIGN KEY (`account_no`) REFERENCES `add_students` (`reg_no`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `add_students` (`reg_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
