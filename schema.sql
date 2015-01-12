-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg17.eigbox.net
-- Generation Time: Jul 16, 2013 at 02:22 PM
-- Server version: 5.0.91
-- PHP Version: 4.4.9
-- 
-- Database: `citicupid`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `account`
-- 

CREATE TABLE `account` (
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `secret_key` int(30) NOT NULL,
  `verified` int(5) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `account`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `actor_comments`
-- 

CREATE TABLE `actor_comments` (
  `id` int(10) NOT NULL auto_increment,
  `comment` varchar(100) default NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `website` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `like_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `phone` varchar(250) default NULL,
  `address` varchar(200) default NULL,
  `state` varchar(50) default NULL,
  `rate` varchar(50) default NULL,
  `info` varchar(250) default NULL,
  `county` varchar(100) default NULL,
  `ratemin` int(10) default NULL,
  `ratemax` int(10) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `event_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

-- 
-- Dumping data for table `attending`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `business`
-- 

CREATE TABLE `business` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `website` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `like_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `phone` varchar(250) default NULL,
  `address` varchar(200) default NULL,
  `state` varchar(50) default NULL,
  `rate` varchar(50) default NULL,
  `info` varchar(250) default NULL,
  `county` varchar(100) default NULL,
  `ratemin` int(10) default NULL,
  `ratemax` int(10) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `match_field` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- 
-- Dumping data for table `confirm_email`
-- 

INSERT INTO `confirm_email` VALUES (32, 'lala@gmail.com', 'IDELOGT0D');
INSERT INTO `confirm_email` VALUES (27, 'lynn@wcmm.com', 'IDT6I6CC3');
INSERT INTO `confirm_email` VALUES (26, 'djdazmix@gmail.com', 'IDRCQH8MK');
INSERT INTO `confirm_email` VALUES (29, 'kim2kim@gmail.com', 'IDYNOTO7Q');
INSERT INTO `confirm_email` VALUES (24, 'engeealexander@gmail.com', 'ID67UOOIR');

-- --------------------------------------------------------

-- 
-- Table structure for table `contractor_work`
-- 

CREATE TABLE `contractor_work` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `email` varchar(100) default NULL,
  `phone` varchar(100) default NULL,
  `cost` varchar(100) default NULL,
  `duration` varchar(100) default NULL,
  `specialty` varchar(100) default NULL,
  `licensed` varchar(100) default NULL,
  `kitchen` varchar(100) default NULL,
  `bathroom` varchar(100) default NULL,
  `bedroom` varchar(100) default NULL,
  `patio` varchar(100) default NULL,
  `livingroom` varchar(100) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `description` varchar(200) default NULL,
  `workdone` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `contractor_work`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `dj`
-- 

CREATE TABLE `dj` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `website` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `like_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `phone` varchar(250) default NULL,
  `address` varchar(200) default NULL,
  `state` varchar(50) default NULL,
  `rate` varchar(50) default NULL,
  `info` varchar(250) default NULL,
  `county` varchar(100) default NULL,
  `ratemin` int(10) default NULL,
  `ratemax` int(10) default NULL,
  `about` varchar(1000) default NULL,
  `venues` varchar(250) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `comment` varchar(100) default NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `username` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `amount` varchar(100) default NULL,
  `artist_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `dj_counters`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `dj_offers`
-- 

CREATE TABLE `dj_offers` (
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `amount` varchar(100) default NULL,
  `artist_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `dj_offers`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `dj_venue_fan`
-- 

CREATE TABLE `dj_venue_fan` (
  `id` int(11) NOT NULL auto_increment,
  `dj_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(11) NOT NULL auto_increment,
  `venue_id` int(11) NOT NULL,
  `dj_id` int(11) NOT NULL,
  `info_days` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `dj_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `djrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `escortmember`
-- 

CREATE TABLE `escortmember` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `cupsize` varchar(30) default NULL,
  `gender` varchar(20) default NULL,
  `height` varchar(10) default NULL,
  `weight` varchar(10) default NULL,
  `eyecolor` varchar(10) default NULL,
  `haircolor` varchar(10) default NULL,
  `hairstyle` varchar(10) default NULL,
  `bodytype` varchar(10) default NULL,
  `ethnicity` varchar(30) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `publicprofile` varchar(10) default 'off',
  `hot_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `soulmate_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `escortrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `event_comments`
-- 

CREATE TABLE `event_comments` (
  `id` int(10) NOT NULL auto_increment,
  `comment` varchar(100) default NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `event_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
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
  `id` bigint(20) NOT NULL auto_increment,
  `create_date` datetime default NULL,
  `name` varchar(30) default NULL,
  `email` varchar(30) default NULL,
  `description` varchar(250) default NULL,
  `images` varchar(100) default NULL,
  `location` varchar(50) default NULL,
  `date` varchar(50) default NULL,
  `city` varchar(100) default NULL,
  `attending` int(10) default NULL,
  `enabled` int(1) default NULL,
  `likes` int(5) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- 
-- Dumping data for table `events`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `guest_comments`
-- 

CREATE TABLE `guest_comments` (
  `id` int(10) NOT NULL auto_increment,
  `comment` varchar(100) default NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `gender` varchar(20) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `county` varchar(100) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `email` varchar(100) default NULL,
  `phone` varchar(100) default NULL,
  `deadline` varchar(100) default NULL,
  `style` varchar(100) default NULL,
  `budget` varchar(100) default NULL,
  `material` varchar(100) default NULL,
  `color` varchar(100) default NULL,
  `surface` varchar(100) default NULL,
  `kitchen` varchar(100) default NULL,
  `bathroom` varchar(100) default NULL,
  `bedroom` varchar(100) default NULL,
  `patio` varchar(100) default NULL,
  `livingroom` varchar(100) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `profession` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `hot_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `publicprofile` varchar(10) default 'on',
  `referred_by` varchar(50) default NULL,
  `info` varchar(250) default NULL,
  `address` varchar(200) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `soulmate_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- 
-- Dumping data for table `hosterrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `members`
-- 

CREATE TABLE `members` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(150) default NULL,
  `password` varchar(100) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `city` varchar(250) default NULL,
  `active` smallint(1) default NULL,
  `is_dj` smallint(1) default NULL,
  `new_member` smallint(1) default '0',
  `nickname` varchar(50) default NULL,
  `login_count` int(11) default '0',
  PRIMARY KEY  (`id`),
  KEY `logintime` (`username`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `members` VALUES (52, 'emilrafael@gmail.com', '8eac94485d3c1cda261b41d7ab790a24', '3', 14, 1995, 'male', '/publicimages/icons/TurnTable.jpg', '2013-07-05 16:29:43', 'Hip-Hop', 'Sherman Oaks', 1, 0, 0, 'Emil', 1);
INSERT INTO `members` VALUES (53, 'lala@gmail.com', '8ce87b8ec346ff4c80635f667d1592ae', '0', 0, 0, 'none', '/publicimages/icons/TurnTable.jpg', '2013-07-16 14:13:34', '', 'long beach', 0, 1, 0, 'lala', 0);
INSERT INTO `members` VALUES (50, 'kim@citipromo.com', '17bfef773733e86ed25a1d5dc7652282', '5', 1, 1979, '', '/publicimages/icons/TurnTable.jpg', '2013-07-12 00:23:10', 'Electro', 'Northridge', 1, 1, 0, 'kim', 14);

-- --------------------------------------------------------

-- 
-- Table structure for table `model_comments`
-- 

CREATE TABLE `model_comments` (
  `id` int(10) NOT NULL auto_increment,
  `comment` varchar(100) default NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `model_comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `modelrating`
-- 

CREATE TABLE `modelrating` (
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `dj_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `modelrating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `models`
-- 

CREATE TABLE `models` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `website` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `like_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `phone` varchar(250) default NULL,
  `address` varchar(200) default NULL,
  `state` varchar(50) default NULL,
  `rate` varchar(50) default NULL,
  `info` varchar(250) default NULL,
  `county` varchar(100) default NULL,
  `ratemin` int(10) default NULL,
  `ratemax` int(10) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `comment` varchar(100) default NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `website` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `like_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `phone` varchar(250) default NULL,
  `address` varchar(200) default NULL,
  `state` varchar(50) default NULL,
  `rate` varchar(50) default NULL,
  `info` varchar(250) default NULL,
  `county` varchar(100) default NULL,
  `ratemin` int(10) default NULL,
  `ratemax` int(10) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `created_on` datetime default NULL,
  `category` varchar(100) default NULL,
  `artist` varchar(100) default NULL,
  `title` varchar(100) default NULL,
  `likes` int(50) default '0',
  `email` varchar(100) default NULL,
  `link` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(10) NOT NULL auto_increment,
  `comment` varchar(100) default NULL,
  `item_id` int(10) NOT NULL,
  `create_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `producer_comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `producers`
-- 

CREATE TABLE `producers` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `website` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `gender` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `musictype` varchar(200) default NULL,
  `like_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `phone` varchar(250) default NULL,
  `address` varchar(200) default NULL,
  `state` varchar(50) default NULL,
  `rate` varchar(50) default NULL,
  `info` varchar(250) default NULL,
  `county` varchar(100) default NULL,
  `ratemin` int(10) default NULL,
  `ratemax` int(10) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `email` varchar(100) default NULL,
  `soulmate_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

-- 
-- Dumping data for table `rating`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `soulmate`
-- 

CREATE TABLE `soulmate` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `zip` varchar(30) default NULL,
  `profession` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `income` varchar(30) default NULL,
  `gender` varchar(20) default NULL,
  `height` varchar(10) default NULL,
  `weight` varchar(10) default NULL,
  `eyecolor` varchar(10) default NULL,
  `haircolor` varchar(10) default NULL,
  `hairstyle` varchar(10) default NULL,
  `bodytype` varchar(10) default NULL,
  `ethnicity` varchar(30) default NULL,
  `persona` varchar(30) default NULL,
  `otherincome` varchar(30) default NULL,
  `othergender` varchar(20) default NULL,
  `otherheight` varchar(10) default NULL,
  `otherweight` varchar(10) default NULL,
  `othereyecolor` varchar(10) default NULL,
  `otherhaircolor` varchar(10) default NULL,
  `otherhairstyle` varchar(10) default NULL,
  `otherbodytype` varchar(10) default NULL,
  `otherethnicity` varchar(100) default NULL,
  `otherpersona` varchar(30) default NULL,
  `status` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `otherstatus` varchar(20) default NULL,
  `publicprofile` varchar(10) default 'off',
  `musictype` varchar(100) default NULL,
  `hobbies` varchar(100) default NULL,
  `hot_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  `referred_by` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `facebook` varchar(30) default NULL,
  `zip` varchar(30) default NULL,
  `profession` varchar(30) default NULL,
  `bmonth` varchar(30) default NULL,
  `bday` int(4) default NULL,
  `byear` int(10) default NULL,
  `income` varchar(30) default NULL,
  `gender` varchar(20) default NULL,
  `height` varchar(10) default NULL,
  `weight` varchar(10) default NULL,
  `eyecolor` varchar(10) default NULL,
  `haircolor` varchar(10) default NULL,
  `hairstyle` varchar(10) default NULL,
  `bodytype` varchar(10) default NULL,
  `ethnicity` varchar(30) default NULL,
  `persona` varchar(30) default NULL,
  `otherincome` varchar(30) default NULL,
  `othergender` varchar(20) default NULL,
  `otherheight` varchar(10) default NULL,
  `otherweight` varchar(10) default NULL,
  `othereyecolor` varchar(10) default NULL,
  `otherhaircolor` varchar(10) default NULL,
  `otherhairstyle` varchar(10) default NULL,
  `otherbodytype` varchar(10) default NULL,
  `otherethnicity` varchar(100) default NULL,
  `otherpersona` varchar(30) default NULL,
  `status` varchar(20) default NULL,
  `images` varchar(250) default NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `otherstatus` varchar(20) default NULL,
  `publicprofile` varchar(10) default 'off',
  `musictype` varchar(100) default NULL,
  `hobbies` varchar(100) default NULL,
  `hot_count` int(50) default '0',
  `city` varchar(250) NOT NULL default 'los angeles',
  PRIMARY KEY  (`id`),
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
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `website` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `city` varchar(100) default NULL,
  `zip` varchar(50) default NULL,
  `phone` varchar(100) default NULL,
  `hours` varchar(100) default NULL,
  `images` varchar(100) default NULL,
  `info` varchar(250) default NULL,
  `parking` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `venues`
-- 


