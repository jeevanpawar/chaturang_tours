-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2013 at 09:12 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chaturang`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_head`
--

CREATE TABLE IF NOT EXISTS `account_head` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_type` text NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE IF NOT EXISTS `booking_form` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `bkg_date` date NOT NULL,
  `b_se` varchar(25) NOT NULL,
  `b_office` varchar(25) NOT NULL,
  `b_pax` int(11) NOT NULL,
  `b_adult` int(11) NOT NULL,
  `b_child` int(11) NOT NULL,
  `b_total_amt` float NOT NULL,
  `b_gross` float NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(25) NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(25) NOT NULL,
  `h_address` text NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_acomodation`
--

CREATE TABLE IF NOT EXISTS `hotel_acomodation` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `h_vendor` varchar(25) NOT NULL,
  `h_hotel` varchar(25) NOT NULL,
  `h_place` varchar(25) NOT NULL,
  `h_room` varchar(25) NOT NULL,
  `h_meal` varchar(25) NOT NULL,
  `h_cin` varchar(25) NOT NULL,
  `h_cout` varchar(25) NOT NULL,
  `h_amt` double NOT NULL,
  `h_pay_detail` varchar(25) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `p_amt` double NOT NULL,
  `p_total` double NOT NULL,
  `p_type` double NOT NULL,
  `p_checkno` bigint(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE IF NOT EXISTS `room_type` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_type` varchar(25) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_term` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`t_id`, `t_term`) VALUES
(1, 'After Completion of work, Issue the Cheque immediately.'),
(2, 'For AMC you have to pay 100% in advance by cheque only.'),
(3, 'For our Machines, Electricity and Water is provided by you.');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE IF NOT EXISTS `tourist` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `t_name` varchar(25) NOT NULL,
  `t_gender` varchar(25) NOT NULL,
  `t_age` varchar(25) NOT NULL,
  `t_dob` varchar(25) NOT NULL,
  `t_contact` varchar(25) NOT NULL,
  `t_email` varchar(25) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `u_password` varchar(25) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_password`) VALUES
(1, 'jeevan', 'jeevan'),
(2, 'viviek', 'viviek');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(25) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_transportation`
--

CREATE TABLE IF NOT EXISTS `vehicle_transportation` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `v_type` varchar(25) NOT NULL,
  `v_pick_date` date NOT NULL,
  `v_pickpoint` varchar(25) NOT NULL,
  `v_drop_date` date NOT NULL,
  `v_drop_point` varchar(25) NOT NULL,
  `v_days` int(25) NOT NULL,
  `v_amt` double NOT NULL,
  `v_paydetail` varchar(25) NOT NULL,
  PRIMARY KEY (`v_id`,`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
