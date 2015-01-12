-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg27.eigbox.net
-- Generation Time: Mar 14, 2014 at 09:58 PM
-- Server version: 5.5.32
-- PHP Version: 4.4.9
-- 
-- Database: `genie`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `account`
-- 

CREATE TABLE `account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `secret_key` int(30) NOT NULL,
  `verified` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `account`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `actor_comments`
-- 

CREATE TABLE `actor_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `actor_comments`
-- 

INSERT INTO `actor_comments` VALUES (1, 'hello', 1, '2011-10-22 15:41:56');

-- --------------------------------------------------------

-- 
-- Table structure for table `actors`
-- 

CREATE TABLE `actors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `like_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `ratemin` int(10) DEFAULT NULL,
  `ratemax` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `actors`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `attending`
-- 

CREATE TABLE `attending` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `event_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

-- 
-- Dumping data for table `attending`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `business`
-- 

CREATE TABLE `business` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `like_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `ratemin` int(10) DEFAULT NULL,
  `ratemax` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `business`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `confirm_email`
-- 

CREATE TABLE `confirm_email` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `match_field` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

-- 
-- Dumping data for table `confirm_email`
-- 

INSERT INTO `confirm_email` VALUES (32, 'lala@gmail.com', 'IDELOGT0D');
INSERT INTO `confirm_email` VALUES (27, 'lynn@wcmm.com', 'IDT6I6CC3');
INSERT INTO `confirm_email` VALUES (26, 'djdazmix@gmail.com', 'IDRCQH8MK');
INSERT INTO `confirm_email` VALUES (29, 'kim2kim@gmail.com', 'IDYNOTO7Q');
INSERT INTO `confirm_email` VALUES (24, 'engeealexander@gmail.com', 'ID67UOOIR');
INSERT INTO `confirm_email` VALUES (33, 'kim@ccl.com', 'IDIBLG7BQ');
INSERT INTO `confirm_email` VALUES (34, 'Kim2kim@gmail.com', 'ID4YSYHFS');
INSERT INTO `confirm_email` VALUES (35, 'suki808@hotmail.com', 'IDIJHZEZR');
INSERT INTO `confirm_email` VALUES (36, 'john', 'IDD3P8AMP');
INSERT INTO `confirm_email` VALUES (37, 'ronny', 'IDDB7ZU6N');
INSERT INTO `confirm_email` VALUES (38, 'patrik', 'IDKPN8M3I');
INSERT INTO `confirm_email` VALUES (39, 'Madeline', 'IDIGD1VN6');
INSERT INTO `confirm_email` VALUES (40, 'Caroline', 'ID5E0OYAZ');
INSERT INTO `confirm_email` VALUES (41, 'Gabriella', 'IDNQB72MZ');
INSERT INTO `confirm_email` VALUES (42, 'gobiz', 'ID7BYB2C3');
INSERT INTO `confirm_email` VALUES (43, 'Zoey', 'IDLTPV8FG');
INSERT INTO `confirm_email` VALUES (44, 'Brandon', 'IDFJL2BJN');
INSERT INTO `confirm_email` VALUES (45, 'lightsoul', 'ID1769OPO');
INSERT INTO `confirm_email` VALUES (46, 'Sarah', 'IDZNRHUA3');
INSERT INTO `confirm_email` VALUES (47, 'Peyton', 'ID8WITYW8');
INSERT INTO `confirm_email` VALUES (48, 'Autumn', 'IDAT0WV6D');
INSERT INTO `confirm_email` VALUES (49, 'Oliver', 'ID1TX68J2');
INSERT INTO `confirm_email` VALUES (50, 'Mackenzie', 'IDTY608BO');
INSERT INTO `confirm_email` VALUES (51, 'kim2kim@gmail.com', 'IDKBXY4EC');
INSERT INTO `confirm_email` VALUES (52, 'Leslie', 'ID3QTRPFJ');
INSERT INTO `confirm_email` VALUES (53, 'Jada', 'IDO74IXW5');
INSERT INTO `confirm_email` VALUES (54, 'Aaliyah', 'IDY1GZBDL');
INSERT INTO `confirm_email` VALUES (55, 'Patrick', 'IDW8IVUPE');
INSERT INTO `confirm_email` VALUES (56, 'Brian', 'IDORUL5BV');

-- --------------------------------------------------------

-- 
-- Table structure for table `contractor_work`
-- 

CREATE TABLE `contractor_work` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `cost` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `specialty` varchar(100) DEFAULT NULL,
  `licensed` varchar(100) DEFAULT NULL,
  `kitchen` varchar(100) DEFAULT NULL,
  `bathroom` varchar(100) DEFAULT NULL,
  `bedroom` varchar(100) DEFAULT NULL,
  `patio` varchar(100) DEFAULT NULL,
  `livingroom` varchar(100) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(200) DEFAULT NULL,
  `workdone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `contractor_work`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `dj`
-- 

CREATE TABLE `dj` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `like_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `ratemin` int(10) DEFAULT NULL,
  `ratemax` int(10) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `venues` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `dj`
-- 

INSERT INTO `dj` VALUES (1, 'kim', 'kim@citipromo.com', '91324', 'http://www.genieloungecafe.com', '5', 1, 1979, 'female', '/publicimages/icons/img1.gif', '2011-10-13 23:34:15', 'R&B', 14, 'Santa Monica', '424-213-3050', '9349 Melvin Ave, Unit 12', 'CA', '400 - 1000 per event', '', 'los angeles', 0, 0, ' ', '1,');

-- --------------------------------------------------------

-- 
-- Table structure for table `dj_comments`
-- 

CREATE TABLE `dj_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- 
-- Dumping data for table `dj_comments`
-- 

INSERT INTO `dj_comments` VALUES (34, 'nice', 23, '2012-01-11 04:26:14', 'kim@citipromo.com');
INSERT INTO `dj_comments` VALUES (33, 'hey hey', 5, '2012-01-11 02:59:44', 'kim@citipromo.com');
INSERT INTO `dj_comments` VALUES (31, 'hi hi', 2, '2012-01-08 16:44:13', 'kim@citipromo.com');
INSERT INTO `dj_comments` VALUES (30, 'hi there', 21, '2012-01-08 16:41:51', 'kim@citipromo.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `dj_counters`
-- 

CREATE TABLE `dj_counters` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `artist_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `dj_counters`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `dj_offers`
-- 

CREATE TABLE `dj_offers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `artist_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `dj_offers`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `dj_venue_fan`
-- 

CREATE TABLE `dj_venue_fan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dj_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `dj_venue_fan`
-- 

INSERT INTO `dj_venue_fan` VALUES (1, 1, 1, 'kim@citipromo.com');
INSERT INTO `dj_venue_fan` VALUES (2, 1, 1, 'kim@citipromo.com');
INSERT INTO `dj_venue_fan` VALUES (3, 1, 1, 'kim@citipromo.com');
INSERT INTO `dj_venue_fan` VALUES (4, 1, 1, 'kim@citipromo.com');
INSERT INTO `dj_venue_fan` VALUES (5, 1, 1, 'kim2kim@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `dj_venue_hours`
-- 

CREATE TABLE `dj_venue_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_id` int(11) NOT NULL,
  `dj_id` int(11) NOT NULL,
  `info_days` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `dj_venue_hours`
-- 

INSERT INTO `dj_venue_hours` VALUES (1, 1, 1, 'Every Mondays @10pm, Wednesdays @10pm');
INSERT INTO `dj_venue_hours` VALUES (2, 0, 1, 'When are you here?');

-- --------------------------------------------------------

-- 
-- Table structure for table `djrating`
-- 

CREATE TABLE `djrating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `dj_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `djrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `escortmember`
-- 

CREATE TABLE `escortmember` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `cupsize` varchar(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `eyecolor` varchar(10) DEFAULT NULL,
  `haircolor` varchar(10) DEFAULT NULL,
  `hairstyle` varchar(10) DEFAULT NULL,
  `bodytype` varchar(10) DEFAULT NULL,
  `ethnicity` varchar(30) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publicprofile` varchar(10) DEFAULT 'off',
  `hot_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `escortmember`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `escortrating`
-- 

CREATE TABLE `escortrating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `soulmate_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `escortrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `event_comments`
-- 

CREATE TABLE `event_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `event_comments`
-- 

INSERT INTO `event_comments` VALUES (2, 'over', 0, '2011-10-26 00:51:49');

-- --------------------------------------------------------

-- 
-- Table structure for table `event_rating`
-- 

CREATE TABLE `event_rating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `event_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- 
-- Dumping data for table `event_rating`
-- 

INSERT INTO `event_rating` VALUES (25, 'kim@citipromo.com', 39);
INSERT INTO `event_rating` VALUES (24, 'kim2kim@gmail.com', 38);
INSERT INTO `event_rating` VALUES (23, 'kim2kim@gmail.com', 38);
INSERT INTO `event_rating` VALUES (22, 'kim2kim@gmail.com', 38);
INSERT INTO `event_rating` VALUES (21, 'kim2kim@gmail.com', 38);

-- --------------------------------------------------------

-- 
-- Table structure for table `events`
-- 

CREATE TABLE `events` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `create_date` datetime DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `attending` int(10) DEFAULT NULL,
  `enabled` int(1) DEFAULT NULL,
  `likes` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- 
-- Dumping data for table `events`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `guest_comments`
-- 

CREATE TABLE `guest_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `guest_comments`
-- 

INSERT INTO `guest_comments` VALUES (3, 'Just a sweetheart!', 108, '2011-10-08 00:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `guestlist`
-- 

CREATE TABLE `guestlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `county` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `guestlist`
-- 

INSERT INTO `guestlist` VALUES (6, 'info@ho.com', '908990', 'f', '2011-10-14 13:19:32', 'chicago');
INSERT INTO `guestlist` VALUES (5, 'info@citipromo.com', '909990', 'f', '2011-10-14 13:17:48', 'undefined');
INSERT INTO `guestlist` VALUES (7, '', '', 'undefined', '2011-10-14 16:12:02', 'LOS ANGELES');
INSERT INTO `guestlist` VALUES (8, 'sugarbeats!@aol.com', '90278', 'm', '2011-10-18 02:57:08', 'los angeles');
INSERT INTO `guestlist` VALUES (9, '', '0', 'undefined', '2011-10-23 16:56:22', 'LOS ANGELES');
INSERT INTO `guestlist` VALUES (10, '', '0', 'undefined', '2011-10-23 20:35:39', 'los angeles');
INSERT INTO `guestlist` VALUES (11, '', '', 'undefined', '2011-10-23 20:36:05', 'los angeles');

-- --------------------------------------------------------

-- 
-- Table structure for table `home_improvement`
-- 

CREATE TABLE `home_improvement` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `deadline` varchar(100) DEFAULT NULL,
  `style` varchar(100) DEFAULT NULL,
  `budget` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `surface` varchar(100) DEFAULT NULL,
  `kitchen` varchar(100) DEFAULT NULL,
  `bathroom` varchar(100) DEFAULT NULL,
  `bedroom` varchar(100) DEFAULT NULL,
  `patio` varchar(100) DEFAULT NULL,
  `livingroom` varchar(100) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `home_improvement`
-- 

INSERT INTO `home_improvement` VALUES (1, 'kim', 'kim2kim@gmail.com', '1231231234', '2/3/2004', 'spanish', '3000', 'cotton', 'dark', 'granite', 'on', '', '', '', '', '', '2012-09-29 14:26:40');
INSERT INTO `home_improvement` VALUES (2, '', 'Jj', '', 'none/none/none', 'none', 'Nnn', 'none', 'none', 'none', '', '', '', '', '', '', '2012-10-10 03:07:16');
INSERT INTO `home_improvement` VALUES (3, '', 'Nbb', 'Nbb', 'none/none/none', 'none', 'Hbb', 'none', 'none', 'none', '', '', '', '', '', '', '2012-10-10 03:24:58');

-- --------------------------------------------------------

-- 
-- Table structure for table `hoster`
-- 

CREATE TABLE `hoster` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `hot_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `publicprofile` varchar(10) DEFAULT 'on',
  `referred_by` varchar(50) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

-- 
-- Dumping data for table `hoster`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `hosterrating`
-- 

CREATE TABLE `hosterrating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `soulmate_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- 
-- Dumping data for table `hosterrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `members`
-- 

CREATE TABLE `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `active` smallint(1) DEFAULT NULL,
  `is_dj` smallint(1) DEFAULT NULL,
  `new_member` smallint(1) DEFAULT '0',
  `nickname` varchar(50) DEFAULT NULL,
  `login_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `logintime` (`username`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `members` VALUES (52, 'emilrafael@gmail.com', '8eac94485d3c1cda261b41d7ab790a24', '3', 14, 1995, 'male', '/publicimages/icons/TurnTable.jpg', '2013-07-05 16:29:43', 'Hip-Hop', 'Sherman Oaks', 1, 0, 0, 'Emil', 1);
INSERT INTO `members` VALUES (50, 'kim@citipromo.com', '17bfef773733e86ed25a1d5dc7652282', '5', 1, 1979, '', '/publicimages/icons/TurnTable.jpg', '2013-07-12 00:23:10', 'Electro', 'Northridge', 1, 1, 0, 'kim', 14);
INSERT INTO `members` VALUES (56, 'suki808@hotmail.com', '662f707d5491e9bce8238a6c0be92190', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-08-01 12:01:07', '', 'Reseda', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (57, 'john', '76c0b84f1aa37f11452e7cc0938442d2', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-10-04 21:13:21', 'All, Disco, Electro, Euro-Dance, Country, Bhangra, Hip-Hop, R&B, Rap, Alternative, Jazz, Pop, Tribal', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (58, 'ronny', '36108e41e4c254a5e2139244f99959a7', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-10-29 21:36:37', 'All, Disco, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, Old School, R&B, Rap, Jazz, Latin, Soul, Pop, Techno, House', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (59, 'patrik', '16ffbd272963d72cb4e155fc82875233', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-10-31 14:50:06', 'All, Ambient, Electro, Euro-Dance, Country, Hindi Remix, Hip-Hop, Old School, R&B, Jazz, Latin, Techno', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (60, 'Madeline', 'e8468ea67785c64df080bc6066ca62ee', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-12-27 10:28:14', ', Disco, Hindi Remix, R&B, Rap, Latin, Soul, Pop, House', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (61, 'Caroline', '6ce0bc6051bae2840d99580e5f313a52', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-12-27 10:28:16', ', All, Disco, Country, Hindi Remix, Bhangra, R&B, Rap, Alternative, Jazz, Latin, Soul, Pop, Techno, Trance, House, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (62, 'Gabriella', 'be9c507026251bf5d40cef2aff469e6a', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-12-27 10:28:17', ', All, Disco, Electro, Country, Hindi Remix, Bhangra, Hip-Hop, R&B, Rap, Alternative, Jazz, Latin, Soul, Pop, Techno, Trance, House, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (63, 'gobiz', 'e77cd11f732d979b7765f8ca49a29c03', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-12-27 10:28:18', ', All, Ambient, Disco, Electro, Country, Hindi Remix, Bhangra, Hip-Hop, R&B, Rap, Alternative, Jazz, Latin, Soul, Pop, Techno, Trance, House, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (64, 'Zoey', 'cf33a0f0a15335bc0e7235b3e6d53f01', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-12-27 10:28:20', 'All, Ambient, Disco, Electro, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, R&B, Rap, Alternative, Jazz, Latin, Soul, Pop, Techno, Trance, House, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (65, 'Brandon', 'dcfd6f151ea4ea26b07aacdc85cf766c', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-01-01 04:57:56', ', All, Ambient, Country, Hindi Remix, Bhangra, R&B, Rap, Techno, Trance, Tribal', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (66, 'lightsoul', 'd1dc876b36c333d8b6bffaa75a6d781e', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-01-01 04:58:01', 'All, Ambient, Euro-Dance, Country, Hindi Remix, Bhangra, Old School, R&B, Rap, Alternative, Latin, Techno, Trance, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (67, 'Sarah', '7a893741732c02c983590f3aa0a646e3', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-01-01 04:58:02', 'All, Ambient, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, Old School, R&B, Rap, Alternative, Jazz, Latin, Techno, Trance, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (68, 'Peyton', 'e38cf8348ab71f4910b184026255be72', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-01-01 04:58:05', ', All, Ambient, Disco, Electro, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, Old School, R&B, Rap, Alternative, Jazz, Latin, Pop, Techno, Trance, House, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (69, 'Autumn', '54b629e163082e434331a6c2d474c5ee', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-01-01 04:58:08', 'All, Ambient, Disco, Electro, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, Old School, R&B, Rap, Alternative, Jazz, Latin, Pop, Techno, Trance, House, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (70, 'Oliver', '9ccf744cc4721d3f9d7fc499b88932ae', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-01-21 09:19:57', ', All, Hip-Hop, R&B, Alternative, Techno, Trance, House, Tribal', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (71, 'Mackenzie', '751e59460612f55b5db777b44d02e036', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-01-24 06:59:33', 'All, Ambient, Country, Hindi Remix, R&B, Rap, Jazz, House, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (72, 'kim2kim@gmail.com', '662f707d5491e9bce8238a6c0be92190', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-02-10 01:02:17', 'Ambient', 'los angeles', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (73, 'Leslie', '789f03d0818597fafbd1aaf9c22ee63a', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-02-19 00:25:11', ', All, Electro, Hindi Remix, Bhangra, Alternative, Latin, Soul, Trance, Tribal', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (74, 'Jada', 'c8cc46524ed1fafb431f02e1d76d7757', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-02-19 00:25:21', ', All, Ambient, Electro, Country, Hindi Remix, Bhangra, Hip-Hop, Rap, Alternative, Jazz, Latin, Soul, Pop, Trance, Tribal', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (75, 'Aaliyah', 'd7fe4e60a84ce5e0f68635119434edf2', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-02-19 00:25:25', 'All, Ambient, Disco, Electro, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, Old School, R&B, Rap, Alternative, Jazz, Latin, Soul, Pop, Techno, Trance, Tribal', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (76, 'Patrick', '1b2c7bbbcd5cb18d2d6767989ae538a6', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-02-19 00:25:28', 'All, Ambient, Disco, Electro, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, Old School, R&B, Rap, Alternative, Jazz, Latin, Soul, Pop, Techno, Trance, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);
INSERT INTO `members` VALUES (77, 'Brian', '52421c32172eff9a3a54d7b1754a0dff', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2014-02-19 00:25:30', 'All, Ambient, Disco, Electro, Euro-Dance, Country, Hindi Remix, Bhangra, Hip-Hop, Old School, R&B, Rap, Alternative, Jazz, Latin, Soul, Pop, Techno, Trance, Tribal, Trip-Hop', 'New York', 0, 1, 0, 'hidden', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `model_comments`
-- 

CREATE TABLE `model_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `model_comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `modelrating`
-- 

CREATE TABLE `modelrating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `dj_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `modelrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `models`
-- 

CREATE TABLE `models` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `like_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `ratemin` int(10) DEFAULT NULL,
  `ratemax` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `models`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `photographer_comments`
-- 

CREATE TABLE `photographer_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `photographer_comments`
-- 

INSERT INTO `photographer_comments` VALUES (1, 'hello test', 1, '2011-10-23 04:21:04');

-- --------------------------------------------------------

-- 
-- Table structure for table `photographers`
-- 

CREATE TABLE `photographers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `like_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `ratemin` int(10) DEFAULT NULL,
  `ratemax` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `photographers`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `playlist`
-- 

CREATE TABLE `playlist` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `created_on` datetime DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `artist` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `likes` int(50) DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

-- 
-- Dumping data for table `playlist`
-- 

INSERT INTO `playlist` VALUES (56, '2011-10-09 22:38:13', 'R&B', 'Chris Brown featuring Tyga & Kevin McCall', 'Deuces', 0, 'kim@citipromo.com', '/publicimages/mp3/Chris Brown featuring Tyga & Kevin McCall - Deuces.mp3');
INSERT INTO `playlist` VALUES (57, '2011-10-09 22:43:04', 'R&B', 'Sean Kingston ft Nicki Minaj', 'Letting Go (Dutty Love)', 0, 'kim@citipromo.com', '/publicimages/mp3/Letting Go (Dutty Love) featuring Nicki Minaj.mp3');
INSERT INTO `playlist` VALUES (58, '2011-10-09 22:44:01', 'R&B', 'Tinchy Stryder Ft. N -Dubz', 'Number 1', 0, 'kim@citipromo.com', '/publicimages/mp3/Tinchy Stryder Ft. N -Dubz - Number 1.mp3');
INSERT INTO `playlist` VALUES (59, '2011-10-09 22:48:44', 'R&B', 'Lil Wayne ft. Drake', 'She Will', 0, 'kim@citipromo.com', '');
INSERT INTO `playlist` VALUES (60, '2011-10-09 22:52:02', 'R&B', 'Lil Wayne', 'How To Hate', 0, 'kim@citipromo.com', '');
INSERT INTO `playlist` VALUES (61, '2011-10-09 22:54:41', 'R&B', 'Lil Wayne', 'Sp Special', 0, 'kim@citipromo.com', '/publicimages/mp3/11 So Special.m4a');
INSERT INTO `playlist` VALUES (62, '2011-10-10 20:03:47', 'R&B', 'Kelly Rowland', 'Commander ft. David Guetta', 1, 'kim@citipromo.com', '/publicimages/mp3/Kelly Rowland - Commander ft. David Guetta.mp3');
INSERT INTO `playlist` VALUES (63, '2011-10-11 02:21:18', 'House', 'David Guetta ft Akon', 'Sexy Chick', 0, 'kim@citipromo.com', '/publicimages/mp3/David Guetta - Sexy Chick (Featuring Akon).mp3');
INSERT INTO `playlist` VALUES (64, '2011-10-11 03:03:38', 'House', 'Nadia Ali', 'Try', 0, 'kim@citipromo.com', '');
INSERT INTO `playlist` VALUES (65, '2011-10-11 03:05:21', 'House', 'Nadia Ali', 'The One', 0, 'kim@citipromo.com', '/publicimages/mp3/11 - The One (Ruby Edit).mp3');
INSERT INTO `playlist` VALUES (66, '2011-10-11 03:08:32', 'Pop', 'Kylie Minogue', 'In My Arms', 0, 'kim@citipromo.com', '/publicimages/mp3/Kylie Minogue - In My Arms.mp3');
INSERT INTO `playlist` VALUES (67, '2011-10-11 03:10:17', 'House', 'Nadia Ali', 'At The End', 0, 'kim@citipromo.com', '/publicimages/mp3/Nadia Ali - At The End (Ultrasun Mix).mp3');
INSERT INTO `playlist` VALUES (68, '2011-10-14 01:35:24', 'Rap', '2Pac', 'You Can Call', 2, 'kim@citipromo.com', '/publicimages/mp3/2Pac - U Can Call (Jazze Pha Remix).mp3');
INSERT INTO `playlist` VALUES (81, '2011-10-23 23:36:40', 'Euro-Dance', 'INNA', 'LOVE', 0, 'kim@citipromo.com', '/publicimages/mp3/INNA - Love [Official Video].mp3');
INSERT INTO `playlist` VALUES (72, '2011-10-23 17:53:32', 'R&B', 'Kelly Rowland', 'Down For Whatever', 0, 'kim@citipromo.com', '/publicimages/mp3/Kelly Rowland - Down For Whatever.mp3');
INSERT INTO `playlist` VALUES (88, '2011-10-30 05:59:59', 'R&B', 'J Cole', 'Work Out', 0, 'kim@citipromo.com', '/publicimages/mp3/J Cole - Work Out.mp3');
INSERT INTO `playlist` VALUES (87, '2011-10-30 05:55:47', 'R&B', 'Nicki Minaj, will i am Lyrics', 'Check It Out', 0, 'kim@citipromo.com', '/publicimages/mp3/Check It Out - Nicki Minaj, will i am Lyrics.mp3');
INSERT INTO `playlist` VALUES (85, '2011-10-26 02:13:21', '', '', '', 0, '', '');
INSERT INTO `playlist` VALUES (86, '2011-10-30 05:33:28', 'Hip-Hop', 'Nicki Minaj', 'You The Boss', 1, 'kim@citipromo.com', '/publicimages/mp3/Rick Ross ft. Nicki Minaj - You The Boss.mp3');
INSERT INTO `playlist` VALUES (84, '2011-10-23 23:55:45', 'Latin', 'David Tavare', 'Summer Love', 0, 'kim@citipromo.com', '/publicimages/mp3/David Tavare - Summer Love.mp3');
INSERT INTO `playlist` VALUES (83, '2011-10-23 23:47:46', 'Euro-Dance', 'Inna', 'Amazing', 0, 'kim@citipromo.com', '/publicimages/mp3/Inna - Amazing.mp3');
INSERT INTO `playlist` VALUES (82, '2011-10-23 23:41:09', 'R&B', 'Nicki Minaj', 'Right Through Me', 0, 'kim@citipromo.com', '/publicimages/mp3/Nicki Minaj - Right Thru Me.mp3');
INSERT INTO `playlist` VALUES (89, '2011-12-20 05:02:41', 'R&B', 'Kelly Rowland', 'Down For Whatever', 0, 'kim@citipromo.com', '/publicimages/mp3/Kelly Rowland - Down For Whatever.mp3');

-- --------------------------------------------------------

-- 
-- Table structure for table `producer_comments`
-- 

CREATE TABLE `producer_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `producer_comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `producers`
-- 

CREATE TABLE `producers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `musictype` varchar(200) DEFAULT NULL,
  `like_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `ratemin` int(10) DEFAULT NULL,
  `ratemax` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `producers`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rating`
-- 

CREATE TABLE `rating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `soulmate_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

-- 
-- Dumping data for table `rating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `soulmate`
-- 

CREATE TABLE `soulmate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `income` varchar(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `eyecolor` varchar(10) DEFAULT NULL,
  `haircolor` varchar(10) DEFAULT NULL,
  `hairstyle` varchar(10) DEFAULT NULL,
  `bodytype` varchar(10) DEFAULT NULL,
  `ethnicity` varchar(30) DEFAULT NULL,
  `persona` varchar(30) DEFAULT NULL,
  `otherincome` varchar(30) DEFAULT NULL,
  `othergender` varchar(20) DEFAULT NULL,
  `otherheight` varchar(10) DEFAULT NULL,
  `otherweight` varchar(10) DEFAULT NULL,
  `othereyecolor` varchar(10) DEFAULT NULL,
  `otherhaircolor` varchar(10) DEFAULT NULL,
  `otherhairstyle` varchar(10) DEFAULT NULL,
  `otherbodytype` varchar(10) DEFAULT NULL,
  `otherethnicity` varchar(100) DEFAULT NULL,
  `otherpersona` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otherstatus` varchar(20) DEFAULT NULL,
  `publicprofile` varchar(10) DEFAULT 'off',
  `musictype` varchar(100) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `hot_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  `referred_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

-- 
-- Dumping data for table `soulmate`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `soulmatebackup`
-- 

CREATE TABLE `soulmatebackup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `facebook` varchar(30) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `bmonth` varchar(30) DEFAULT NULL,
  `bday` int(4) DEFAULT NULL,
  `byear` int(10) DEFAULT NULL,
  `income` varchar(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `eyecolor` varchar(10) DEFAULT NULL,
  `haircolor` varchar(10) DEFAULT NULL,
  `hairstyle` varchar(10) DEFAULT NULL,
  `bodytype` varchar(10) DEFAULT NULL,
  `ethnicity` varchar(30) DEFAULT NULL,
  `persona` varchar(30) DEFAULT NULL,
  `otherincome` varchar(30) DEFAULT NULL,
  `othergender` varchar(20) DEFAULT NULL,
  `otherheight` varchar(10) DEFAULT NULL,
  `otherweight` varchar(10) DEFAULT NULL,
  `othereyecolor` varchar(10) DEFAULT NULL,
  `otherhaircolor` varchar(10) DEFAULT NULL,
  `otherhairstyle` varchar(10) DEFAULT NULL,
  `otherbodytype` varchar(10) DEFAULT NULL,
  `otherethnicity` varchar(100) DEFAULT NULL,
  `otherpersona` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otherstatus` varchar(20) DEFAULT NULL,
  `publicprofile` varchar(10) DEFAULT 'off',
  `musictype` varchar(100) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `hot_count` int(50) DEFAULT '0',
  `city` varchar(250) NOT NULL DEFAULT 'los angeles',
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`,`city`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

-- 
-- Dumping data for table `soulmatebackup`
-- 

INSERT INTO `soulmatebackup` VALUES (64, 'shoma hoque', 'shomamami@gmail.com', '', '90260', '', 'none', 0, 0, 'none', 'female', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', '', '', '', 'none', 'none', '', 'none', '', 'none', 'none', '/publicimages/icons/02132011022.jpg,', '2011-09-05 15:24:55', 'none', 'on', '', '', 14, 'los angeles');
INSERT INTO `soulmatebackup` VALUES (65, 'precious houston', 'shanewalter38@yahoo.com.au', '', '5000', '', 'none', 0, 0, 'none', '', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', '', '', '', 'none', 'none', '', 'none', '', 'none', 'none', '', '2011-09-06 00:57:20', 'none', 'on', '', '', 0, 'los angeles');
INSERT INTO `soulmatebackup` VALUES (86, 'khim 3 khim', 'kim2kim@gmail.com', 'adf', '90046', 'software engineer', 'none', 0, 0, 'none', '', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', '', '', '', 'none', 'none', '', 'none', '', 'none', 'none', '/publicimages/icons/02132011012.jpg,', '2011-09-07 13:27:03', 'none', 'on', 'r&b, rap, trance, house', 'fashion', 10, 'los angeles');
INSERT INTO `soulmatebackup` VALUES (85, 'khim ung', 'kim2kim@gmail.com', '', '90260', 'software engineer', 'none', 0, 0, 'none', 'female', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', '', '', '', 'none', 'none', '', 'none', '', 'none', 'none', '/publicimages/icons/02132011014.jpg,', '2011-09-07 13:13:59', 'none', 'on', 'r&b, rap, trance, house', 'fashion', 1, 'los angeles');
INSERT INTO `soulmatebackup` VALUES (84, 'khim ung', 'kim2kim@gmail.com', '', '90260', 'software engineer', 'none', 0, 0, 'none', 'female', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', '', '', '', 'none', 'none', '', 'none', '', 'none', 'none', '/publicimages/icons/02122011008.jpg,', '2011-09-07 13:01:42', 'none', 'on', 'r&b, rap, trance, house', 'fashion', 0, 'los angeles');
INSERT INTO `soulmatebackup` VALUES (88, 'Shaun', 'yossman@gmail.com', 'Shaun Yosslowitz', '90024', 'IT Consultant', 'none', 0, 0, 'none', 'male', '5''10''''', '150', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'female', '', '', 'none', 'none', '', 'none', 'Array', 'none', 'none', '/publicimages/icons/fb31.jpg,/publicimages/icons/fb32.jpg,/publicimages/icons/fb33.jpg,', '2011-09-07 13:44:39', 'none', 'on', 'Country', 'Ping Pong, Movies', 0, 'los angeles');
INSERT INTO `soulmatebackup` VALUES (89, 'Sarah', 'sarahksimon@gmail.com', 'Sarah Simon', '90024', 'Underwriter Analyst', 'none', 0, 0, 'none', 'female', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', '', '', '', 'none', 'none', '', 'none', '', 'none', 'none', '/publicimages/icons/DSCN2054.JPG,/publicimages/icons/DSCN2056.JPG,/publicimages/icons/DSCN2057.JPG,', '2011-09-07 16:18:50', 'none', 'on', 'Country', '', 0, 'los angeles');

-- --------------------------------------------------------

-- 
-- Table structure for table `venues`
-- 

CREATE TABLE `venues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `hours` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `info` varchar(250) DEFAULT NULL,
  `parking` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `venues`
-- 


