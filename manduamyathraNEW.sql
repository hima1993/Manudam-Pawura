-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 03:32 PM
-- Server version: 5.7.18-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manduamyathra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `systemUser_systemUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` varchar(450) NOT NULL,
  `image_path` varchar(225) NOT NULL,
  `datetime` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `expire_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `title`, `content`, `image_path`, `datetime`, `user_id`, `expire_on`) VALUES
(1, 'Cricket Bats Donations', 'Since starting their non-profit organisation, Bats4Life, last year, the teens have refurbished and donated more than 100 bats, according to their website. They describe themselves as just “a group of Year 9 students, who recognise how fortunate we are to be getting new cricket gear every year whilst some kids don’t have gear at all.”', 'bats.jpg', '2018-05-24', 3, '2018-05-09'),
(2, 'Computer Donation', 'Since starting their non-profit organisation, Bats4Life, last year, the teens have refurbished and donated more than 100 bats, according to their website. They describe themselves as just “a group of Year 9 students, who recognise how fortunate we are to be getting new cricket gear every year whilst some kids don’t have gear at all.”', 'abc.jpg', '2018-05-24', 4, '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `adver_comment`
--

CREATE TABLE `adver_comment` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `cmt_article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adver_comment`
--

INSERT INTO `adver_comment` (`comment_id`, `name`, `comment`, `time`, `cmt_article_id`) VALUES
(16, 'Wanith', 'hi', '2018-05-28 - 10:25 am', 17),
(17, 'Wanith', 'hi', '2018-05-28 - 10:26 am', 17),
(18, 'Wanith', 'not bad', '2018-05-28 - 10:31 am', 19),
(19, 'Wanith', 'wow', '2018-05-28 - 10:33 am', 19),
(20, 'Wanith', ' great', '2018-05-28 - 10:33 am', 19);

-- --------------------------------------------------------

--
-- Table structure for table `blog_articles`
--

CREATE TABLE `blog_articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `article_body` varchar(1000) NOT NULL,
  `article_date` date NOT NULL,
  `article_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_articles`
--

INSERT INTO `blog_articles` (`article_id`, `title`, `article_body`, `article_date`, `article_user`) VALUES
(1, 'Project Wasuliya', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '2018-05-22', 4),
(2, 'Supply Books For Waliweriyans', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '2018-05-22', 3),
(3, 'Giving to the water', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '2018-05-24', 5);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `time` varchar(100) NOT NULL,
  `cmt_article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`comment_id`, `name`, `emailid`, `comment`, `time`, `cmt_article_id`) VALUES
(1, 'Himaruk', 'hima@gmai.com', 'hi', '12:34', 1),
(2, 'Harin Samaranayake', 'harin.ncsl@gmail.com', ' hi', '2018-05-22 - 09:27 pm', 2),
(3, 'Wanith', 'wanith@gmail.com', 'hii ', '2018-05-22 - 09:48 pm', 2),
(4, 'sandali', 'san@gmail.com', 'good ', '2018-05-23 - 04:32 am', 2),
(6, 'undefined', 'undefined', 'undefined', '2018-05-23 - 07:43 am', 1),
(7, 'undefined', 'undefined', 'undefined', '2018-05-23 - 07:43 am', 1),
(8, 'undefined', 'undefined', 'undefined', '2018-05-23 - 07:48 am', 2),
(9, 'Harin Samaranayake', 'harin.ncsl@gmail.com', ' hs', '2018-05-23 - 07:54 am', 1),
(10, 'Hima', 'ha@gmai.com', 'hdhd ', '2018-05-23 - 07:56 am', 1),
(11, 'hima', 'hima@gmail.com', 'hs ', '2018-05-23 - 07:57 am', 1),
(12, 'Lochana', 'lh@gmail.com', 'hi ', '2018-05-23 - 08:04 am', 2),
(13, 'Udara', 'us@gmail.com', ' woe', '2018-05-23 - 08:04 am', 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_vote`
--

CREATE TABLE `blog_vote` (
  `vote_id` int(10) NOT NULL,
  `blog_vote` float NOT NULL,
  `blog_id` int(10) NOT NULL,
  `ip_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_vote`
--

INSERT INTO `blog_vote` (`vote_id`, `blog_vote`, `blog_id`, `ip_address`) VALUES
(100, 3, 1, 27),
(101, 4, 1, 16),
(110, 2, 1, 18),
(111, 4, 2, 14),
(112, 4, 2, 18),
(113, 2, 22, 18),
(114, 2, 21, 18),
(115, 1, 20, 18),
(116, 1, 19, 18),
(117, 1, 18, 18),
(118, 1, 17, 18),
(123, 1, 22, 31),
(124, 1, 21, 31);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donation_has_donor`
--

CREATE TABLE `donation_has_donor` (
  `donation_donationId` int(11) NOT NULL,
  `donor_donorid` int(11) NOT NULL,
  `donor_systemUser_systemUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donorid` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `systemUser_systemUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorid`, `rate`, `systemUser_systemUserId`) VALUES
(1, 0, 4),
(2, 0, 6),
(3, 0, 7),
(4, 0, 8),
(5, 0, 9),
(6, 0, 26),
(7, 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `infrastructureId` int(11) NOT NULL,
  `NeedFor` varchar(250) DEFAULT NULL,
  `request_category_request_categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginId` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(400) NOT NULL,
  `systemUser_systemUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `email`, `password`, `systemUser_systemUserId`) VALUES
(1, 'wanith', '18b1d9100be71db7c38ad20e0f1db1d0', 2),
(2, 'achiraka', '103ca003b56e97bd12245f140c8159bf', 3),
(3, 'Thevindu', '89091cb86fe40a009dfbca63f00dd02a', 4),
(4, 'Nethuli', '2d93a538d51a6eeab736e5129685c70a', 5),
(5, 'nethu', '2d93a538d51a6eeab736e5129685c70a', 6),
(6, 'nethuli', '2d93a538d51a6eeab736e5129685c70a', 7),
(7, 'dammi', 'dc7a545e578b6640083980fbd8a219e0', 8),
(8, 'dinayaduran', 'f093c0fed979519fbc43d772b76f5c86', 9),
(9, 'watha', 'bc06161a7a7b7897129be963a05b0233', 10),
(10, 'harin', '4225e9dab5e1adfd7224803ea0f69a96', 11),
(11, 'haha', '01ddae4032e17a1c338baac9c4322b30', 12),
(12, 'aq', 'ecd782f5b01daad7a13dba45ebd51c8e', 13),
(13, 'aq', 'ecd782f5b01daad7a13dba45ebd51c8e', 14),
(14, 'Udara', '6fd9dc767551bf70beed1e95a15a576e', 15),
(15, 'ss', '1aabac6d068eef6a7bad3fdf50a05cc8', 16),
(16, 'hari', '0769e56eb5d72039f01530d705e971da', 17),
(17, 'a', '80c9ef0fb86369cd25f90af27ef53a9e', 18),
(18, 'q', '1692fcfff3e01e7ba8cffc2baadef5f5', 19),
(19, 'z', '3fd5c518759b2c820c6102ae5629578a', 20),
(20, 'ff', '6e0d0cdf9e48538255bc003a8587e6d0', 21),
(21, 'f@gmail.com', '6e0d0cdf9e48538255bc003a8587e6d0', 22),
(22, 'f@gmail.com', '6e0d0cdf9e48538255bc003a8587e6d0', 23),
(23, 'm@gmail.com', '1e2a796539042ca860c3091662aa4346', 24),
(24, 'v@gmail.co', 'bb2495c2b8e05a7b27d14bdf986ec113', 25),
(25, 'z@gmail.com', '3fd5c518759b2c820c6102ae5629578a', 26),
(26, 'j@gmail.com', '3b29ba53c507b00a745ca7e2cbfd6acf', 27),
(27, 'k@gmail.com', '1d430d0a0757ca4b16a57dbc5c436353', 28),
(28, 'o@gmail.com', '03d32ced79eb05fbf8498bce991d9cd0', 29),
(29, 'himaruksilva@gmail.com', 'e6034140a76d286b314d3a214fdfe827', 30),
(30, 'wanithhimaruk@yahoo.com', '18b1d9100be71db7c38ad20e0f1db1d0', 31);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `otherId` int(11) NOT NULL,
  `mainNeed` varchar(250) DEFAULT NULL,
  `request_category_request_categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reciepient`
--

CREATE TABLE `reciepient` (
  `reciepientid` int(11) NOT NULL,
  `recommendation` varchar(450) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `school` varchar(450) DEFAULT NULL,
  `systemUser_systemUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reciepient`
--

INSERT INTO `reciepient` (`reciepientid`, `recommendation`, `role`, `school`, `systemUser_systemUserId`) VALUES
(1, 'www', 0, '', 1),
(2, '', 5, '', 10),
(3, '', 5, '', 24),
(4, '', 5, '', 27),
(5, '', 5, '', 28),
(6, 'second_part.pdf', 5, '', 29),
(7, '150013014.pdf', 2, NULL, 31);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestId` int(11) NOT NULL,
  `projectTopic` varchar(200) DEFAULT NULL,
  `description` varchar(450) DEFAULT NULL,
  `attachment` varchar(250) DEFAULT NULL,
  `frontimage` varchar(250) DEFAULT NULL,
  `requestdate` date DEFAULT NULL,
  `completiondate` date DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `reciepient_reciepientid` int(11) NOT NULL,
  `reciepient_systemUser_systemUserId` int(11) NOT NULL,
  `request_category_request_categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestId`, `projectTopic`, `description`, `attachment`, `frontimage`, `requestdate`, `completiondate`, `flag`, `reciepient_reciepientid`, `reciepient_systemUser_systemUserId`, `request_category_request_categoryId`) VALUES
(17, 'Need Water Bottles', 'hi', '15001301.pdf', '14330037_10208781371483109_3634630327491666338_n.jpg', '2018-05-27', '2018-04-17', 0, 1, 1, 1),
(18, 'Water Supply', 'hi', '150013011.pdf', '14333062_1143655185670752_6776282769584173290_n.jpg', '2018-05-28', '2018-04-17', 0, 1, 1, 2),
(19, NULL, NULL, '38ed71a431157299a697975306e71f43--wise-words-dreams.jpg', '150013012.pdf', '2018-05-28', '2018-04-03', 0, 1, 1, 3),
(20, 'Computer lab', 'hi', '19429740_539950076129076_140718894174454043_n.jpg', 'cs_2016_lec5.pdf', '2018-05-28', '2018-04-17', 0, 1, 1, 10),
(21, 'Infra', 'hi', '18952930_1410492672376524_1079959540768198662_n.jpg', '150013013.pdf', '2018-05-28', '2018-04-28', 0, 1, 1, 8),
(22, 'Water need', 'hii', 'cs_2016_lec51.pdf', 'aa.jpg', '2018-05-28', '2018-04-24', 0, 6, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_category`
--

CREATE TABLE `request_category` (
  `request_categoryId` int(11) NOT NULL,
  `MainNeed` varchar(250) NOT NULL,
  `SubNeed` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_category`
--

INSERT INTO `request_category` (`request_categoryId`, `MainNeed`, `SubNeed`) VALUES
(1, 'Water', 'Drinking'),
(2, 'Water', 'Other'),
(3, 'Stationary', 'Books'),
(4, 'Stationary', 'Equipments'),
(6, 'Stationary', 'Other'),
(7, 'Infrastructure', 'Buildings'),
(8, 'Infrastructure', 'Electronics'),
(9, 'Infrastructure', 'Other'),
(10, 'Sanitory', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `stationaryId` int(11) NOT NULL,
  `NeedFor` varchar(250) DEFAULT NULL,
  `request_category_request_categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE `systemuser` (
  `systemUserId` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `addresslineone` varchar(45) DEFAULT NULL,
  `addresslinetwo` varchar(45) DEFAULT NULL,
  `contactno` varchar(45) DEFAULT NULL,
  `role` varchar(250) NOT NULL,
  `validBit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`systemUserId`, `firstname`, `lastname`, `addresslineone`, `addresslinetwo`, `contactno`, `role`, `validBit`) VALUES
(1, 'Himaruk', 'Silva', 'No 72', 'Rathmalana', '066333', '', 0),
(2, 'wanith', 'silva', 'no 72, Katy', 'rathmalana', '0775491112', '', 0),
(3, 'achiraka', 'kaveen', 'no 34 , katu', 'hshsh', '0776543423', '', 0),
(4, 'Thevindu', 'Kalhara', 'No 45,miriswatte', 'Palawatte', '0775401234', '', 0),
(5, 'Nethuli', 'Nimsara', 'No 45,miriswatte', 'mathugama', '0776543423', '', 0),
(6, 'nethu', '', '', '', '', '', 0),
(7, 'nethuli', 'nimsara', 'hdhd', 'ddd', '8777333333', '', 0),
(8, 'dammi', 'vitha', 'no 89', 'rathmalana', '0765432323', '', 0),
(9, 'dinayaduran', 'hima', 'hdhd', 'hdhdhd', '098755222', '', 0),
(10, 'watha', 'hhh', 'wah', 'hdhd', '8272627', '', 0),
(11, 'harin', 'samara', 'him', 'hdhd', '076543232', '', 0),
(12, 'haha', 'aaa', 'dd', 'ddd', '9876363', '', 0),
(13, 'aq', 'aaa', 'aa', 'aa', '11', '', 0),
(14, 'aq', 'aaa', 'aa', 'aa', '11', '', 0),
(15, 'Udara', 'Sena', 'shshs', 'djdd', '0765432321', '', 0),
(16, 'ss', 'ss', 'dd', 'dd', '3444', '', 0),
(17, 'hari', 'haaha', 'ss', 'ss', '6363636', '', 0),
(18, 'a', 'aa', 'SS', 'SS', '124', '', 0),
(19, 'q', 'qq', 'ss', 'ss', '12234', '', 0),
(20, 'z', 'zz', 'zzz', 'zz', '123', '', 0),
(21, 'ff', 'ffff', 'ss', 'ss', '123456', '', 0),
(22, 'ff', 'ffff', 'ss', 'ss', '123456', '', 0),
(23, 'ff', 'ffff', 'ss', 'ss', '123456', '', 0),
(24, 'mm', 'mmmm', 'ss', 'ww', '12233', '', 0),
(25, 'ddd', 'sss', 'dd', 'sss', '123', '', 0),
(26, 'zz', 'zzz', 'zz', 'zzz', '540', '', 0),
(27, 'jj', 'jjj', 'jj', 'jjj', '540', '', 0),
(28, 'k', 'kk', 'kkk', 'kkk', '123', '', 0),
(29, 'o', 'oo', 'o', 'ooo', '1234', '', 0),
(30, 'Himaruk', 'Silva', 'no 72,katukurudu watte rd', 'Rathmalana', '0775401352', 'Donor', 0),
(31, 'Wanith', 'Himaruk', 'no 34 , katu', 'rathmalana', '0775401352', 'Other Academic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE `water` (
  `waterid` int(11) NOT NULL,
  `needFor` varchar(250) DEFAULT NULL,
  `requestcatId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`,`systemUser_systemUserId`),
  ADD KEY `fk_admin_systemUser1_idx` (`systemUser_systemUserId`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_reciepient` (`user_id`);

--
-- Indexes for table `adver_comment`
--
ALTER TABLE `adver_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FK_reqst` (`cmt_article_id`);

--
-- Indexes for table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `FK_article` (`article_user`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FK_articlenew` (`cmt_article_id`);

--
-- Indexes for table `blog_vote`
--
ALTER TABLE `blog_vote`
  ADD PRIMARY KEY (`vote_id`),
  ADD KEY `Fk_rateuser` (`ip_address`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationId`);

--
-- Indexes for table `donation_has_donor`
--
ALTER TABLE `donation_has_donor`
  ADD PRIMARY KEY (`donation_donationId`,`donor_donorid`,`donor_systemUser_systemUserId`),
  ADD KEY `fk_donation_has_donor_donor1_idx` (`donor_donorid`,`donor_systemUser_systemUserId`),
  ADD KEY `fk_donation_has_donor_donation1_idx` (`donation_donationId`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donorid`,`systemUser_systemUserId`),
  ADD KEY `fk_donor_systemUser1_idx` (`systemUser_systemUserId`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`infrastructureId`,`request_category_request_categoryId`),
  ADD KEY `fk_infrastructure_request_category1_idx` (`request_category_request_categoryId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginId`,`systemUser_systemUserId`),
  ADD KEY `fk_login_systemUser_idx` (`systemUser_systemUserId`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`otherId`,`request_category_request_categoryId`),
  ADD KEY `fk_other_request_category1_idx` (`request_category_request_categoryId`);

--
-- Indexes for table `reciepient`
--
ALTER TABLE `reciepient`
  ADD PRIMARY KEY (`reciepientid`,`systemUser_systemUserId`),
  ADD KEY `fk_reciepient_systemUser1_idx` (`systemUser_systemUserId`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestId`,`reciepient_reciepientid`,`reciepient_systemUser_systemUserId`,`request_category_request_categoryId`),
  ADD KEY `fk_request_reciepient1_idx` (`reciepient_reciepientid`,`reciepient_systemUser_systemUserId`),
  ADD KEY `fk_request_request_category1_idx` (`request_category_request_categoryId`);

--
-- Indexes for table `request_category`
--
ALTER TABLE `request_category`
  ADD PRIMARY KEY (`request_categoryId`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`stationaryId`,`request_category_request_categoryId`),
  ADD KEY `fk_stationary_request_category1_idx` (`request_category_request_categoryId`);

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD PRIMARY KEY (`systemUserId`);

--
-- Indexes for table `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`waterid`),
  ADD KEY `Fk_reqcat` (`requestcatId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `adver_comment`
--
ALTER TABLE `adver_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `blog_vote`
--
ALTER TABLE `blog_vote`
  MODIFY `vote_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `infrastructureId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `otherId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reciepient`
--
ALTER TABLE `reciepient`
  MODIFY `reciepientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `request_category`
--
ALTER TABLE `request_category`
  MODIFY `request_categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `stationaryId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `systemuser`
--
ALTER TABLE `systemuser`
  MODIFY `systemUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `water`
--
ALTER TABLE `water`
  MODIFY `waterid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_systemUser1` FOREIGN KEY (`systemUser_systemUserId`) REFERENCES `systemuser` (`systemUserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `Fk_reciepient` FOREIGN KEY (`user_id`) REFERENCES `reciepient` (`reciepientid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `adver_comment`
--
ALTER TABLE `adver_comment`
  ADD CONSTRAINT `FK_reqst` FOREIGN KEY (`cmt_article_id`) REFERENCES `request` (`requestId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD CONSTRAINT `FK_article` FOREIGN KEY (`article_user`) REFERENCES `donor` (`donorid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `FK_articlenew` FOREIGN KEY (`cmt_article_id`) REFERENCES `blog_articles` (`article_id`);

--
-- Constraints for table `blog_vote`
--
ALTER TABLE `blog_vote`
  ADD CONSTRAINT `Fk_rateuser` FOREIGN KEY (`ip_address`) REFERENCES `systemuser` (`systemUserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donation_has_donor`
--
ALTER TABLE `donation_has_donor`
  ADD CONSTRAINT `fk_donation_has_donor_donation1` FOREIGN KEY (`donation_donationId`) REFERENCES `donation` (`donationId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donation_has_donor_donor1` FOREIGN KEY (`donor_donorid`,`donor_systemUser_systemUserId`) REFERENCES `donor` (`donorid`, `systemUser_systemUserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_donor_systemUser1` FOREIGN KEY (`systemUser_systemUserId`) REFERENCES `systemuser` (`systemUserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD CONSTRAINT `fk_infrastructure_request_category1` FOREIGN KEY (`request_category_request_categoryId`) REFERENCES `request_category` (`request_categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_systemUser` FOREIGN KEY (`systemUser_systemUserId`) REFERENCES `systemuser` (`systemUserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `other`
--
ALTER TABLE `other`
  ADD CONSTRAINT `fk_other_request_category1` FOREIGN KEY (`request_category_request_categoryId`) REFERENCES `request_category` (`request_categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reciepient`
--
ALTER TABLE `reciepient`
  ADD CONSTRAINT `fk_reciepient_systemUser1` FOREIGN KEY (`systemUser_systemUserId`) REFERENCES `systemuser` (`systemUserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_request_category` FOREIGN KEY (`request_category_request_categoryId`) REFERENCES `request_category` (`request_categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_reciepient1` FOREIGN KEY (`reciepient_reciepientid`,`reciepient_systemUser_systemUserId`) REFERENCES `reciepient` (`reciepientid`, `systemUser_systemUserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stationary`
--
ALTER TABLE `stationary`
  ADD CONSTRAINT `fk_rqs_cat` FOREIGN KEY (`request_category_request_categoryId`) REFERENCES `request_category` (`request_categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `water`
--
ALTER TABLE `water`
  ADD CONSTRAINT `Fk_reqcat` FOREIGN KEY (`requestcatId`) REFERENCES `request_category` (`request_categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
