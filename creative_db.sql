-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 12:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistID` int(11) NOT NULL,
  `website` varchar(30) DEFAULT NULL,
  `signature_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistID`, `website`, `signature_name`) VALUES
(1, 'www.trod.com', 'atarist'),
(6, 'www.other.org', 'Other Artists');

-- --------------------------------------------------------

--
-- Table structure for table `artistsubscriber`
--

CREATE TABLE `artistsubscriber` (
  `artistID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `dateSubscribed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `artworkID` int(11) NOT NULL,
  `artworkTitle` varchar(50) DEFAULT NULL,
  `artistID` int(11) DEFAULT NULL,
  `fieldID` int(11) DEFAULT NULL,
  `artworkDescription` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `dateCreated` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`artworkID`, `artworkTitle`, `artistID`, `fieldID`, `artworkDescription`, `quantity`, `price`, `dateCreated`, `status`) VALUES
(1, 'ALberta', 1, 1, 'President of Ghana', 1, 10, '2023-01-01', 1),
(2, 'Rainbow', 6, 4, 'colors of the world', 3, 20, '2023-02-06', 1),
(3, 'the Hidden', 6, 4, 'Find your way out', 3, 20, '2023-02-01', 1),
(4, 'Woman', 6, 4, 'Beautiful', 3, 20, '2023-02-01', 1),
(5, 'Bottleneck', 6, 4, 'The challenges of this world', 3, 20, '2023-02-01', 1),
(6, 'Psycho', 6, 1, 'Lonely', 3, 20, '2023-02-01', 1),
(7, 'Treasures', 6, 1, 'Lonely', 3, 20, '2023-02-01', 1),
(8, 'Home', 6, 4, 'Silence', 1, 10, '2023-02-01', 1),
(9, 'Along the Street', 6, 1, 'Avoid', 10, 20, '2023-02-01', 1),
(10, 'Beyond Understanding', 1, 1, 'gratitude from heart', 3, 20, '2023-02-01', 1),
(11, 'Divine love', 6, 1, 'justapost the old mansion', 3, 20, '2023-02-01', 1),
(12, 'Perpetrate', 1, 1, 'Let go off old tides', 3, 20, '2023-02-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `artworklikes`
--

CREATE TABLE `artworklikes` (
  `artworkID` int(11) NOT NULL,
  `numLikes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artworklikes`
--

INSERT INTO `artworklikes` (`artworkID`, `numLikes`) VALUES
(1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `artworkID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `datePosted` datetime DEFAULT NULL,
  `commentMessage` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentlike`
--

CREATE TABLE `commentlike` (
  `commentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `dateLiked` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_artist`
--

CREATE TABLE `company_artist` (
  `artistID` int(11) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `date_of_setup` date DEFAULT NULL,
  `company_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_artist`
--

INSERT INTO `company_artist` (`artistID`, `company_name`, `date_of_setup`, `company_description`) VALUES
(6, 'Other Artists', '2023-02-05', 'This is a company of artists. We all love art. ');

-- --------------------------------------------------------

--
-- Table structure for table `company_visitor`
--

CREATE TABLE `company_visitor` (
  `visitorID` int(11) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `company_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_visitor`
--

INSERT INTO `company_visitor` (`visitorID`, `company_name`, `company_description`) VALUES
(4, 'Eun Promoters', 'We support art.');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryID` int(11) NOT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `country_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryID`, `country_code`, `country_name`) VALUES
(1, '93', 'Afghanistan'),
(2, '358', 'Aland Islands'),
(3, '355', 'Albania'),
(4, '213', 'Algeria'),
(5, '1684', 'American Samoa'),
(6, '376', 'Andorra'),
(7, '244', 'Angola'),
(8, '1264', 'Anguilla'),
(9, '672', 'Antarctica'),
(10, '1268', 'Antigua and Barbuda'),
(11, '54', 'Argentina'),
(12, '374', 'Armenia'),
(13, '297', 'Aruba'),
(14, '61', 'Australia'),
(15, '43', 'Austria'),
(16, '994', 'Azerbaijan'),
(17, '1242', 'Bahamas'),
(18, '973', 'Bahrain'),
(19, '880', 'Bangladesh'),
(20, '1246', 'Barbados'),
(21, '375', 'Belarus'),
(22, '32', 'Belgium'),
(23, '501', 'Belize'),
(24, '229', 'Benin'),
(25, '1441', 'Bermuda'),
(26, '975', 'Bhutan'),
(27, '591', 'Bolivia'),
(28, '599', 'Bonaire, Sint Eustat'),
(29, '387', 'Bosnia and Herzegovi'),
(30, '267', 'Botswana'),
(31, '55', 'Bouvet Island'),
(32, '55', 'Brazil'),
(33, '246', 'British Indian Ocean'),
(34, '673', 'Brunei Darussalam'),
(35, '359', 'Bulgaria'),
(36, '226', 'Burkina Faso'),
(37, '257', 'Burundi'),
(38, '855', 'Cambodia'),
(39, '237', 'Cameroon'),
(40, '1', 'Canada'),
(41, '238', 'Cape Verde'),
(42, '1345', 'Cayman Islands'),
(43, '236', 'Central African Repu'),
(44, '235', 'Chad'),
(45, '56', 'Chile'),
(46, '86', 'China'),
(47, '61', 'Christmas Island'),
(48, '672', 'Cocos (ling) Islands'),
(49, '57', 'Colombia'),
(50, '269', 'Comoros'),
(51, '242', 'Congo'),
(52, '242', 'Congo, Democratic Re'),
(53, '682', 'Cook Islands'),
(54, '506', 'Costa Rica'),
(55, '385', 'Croatia'),
(56, '53', 'Cuba'),
(57, '599', 'Curacao'),
(58, '357', 'Cyprus'),
(59, '420', 'Czech Republic'),
(60, '45', 'Denmark'),
(61, '253', 'Djibouti'),
(62, '1767', 'Dominica'),
(63, '1809', 'Dominican Republic'),
(64, '593', 'Ecuador'),
(65, '20', 'Egypt'),
(66, '503', 'El Salvador'),
(67, '240', 'Equatorial Guinea'),
(68, '291', 'Eritrea'),
(69, '372', 'Estonia'),
(70, '251', 'Ethiopia'),
(71, '500', 'Falkland Islands (vi'),
(72, '298', 'Faroe Islands'),
(73, '679', 'Fiji'),
(74, '358', 'Finland'),
(75, '33', 'France'),
(76, '594', 'French Guiana'),
(77, '689', 'French Polynesia'),
(78, '262', 'French Southern Terr'),
(79, '241', 'Gabon'),
(80, '220', 'Gambia'),
(81, '995', 'Georgia'),
(82, '49', 'Germany'),
(83, '233', 'Ghana'),
(84, '350', 'Gibraltar'),
(85, '30', 'Greece'),
(86, '299', 'Greenland'),
(87, '1473', 'Grenada'),
(88, '590', 'Guadeloupe'),
(89, '1671', 'Guam'),
(90, '502', 'Guatemala'),
(91, '44', 'Guernsey'),
(92, '224', 'Guinea'),
(93, '245', 'Guinea-Bissau'),
(94, '592', 'Guyana'),
(95, '509', 'Haiti'),
(96, '0', 'Heard Island and Mcd'),
(97, '39', 'Holy See (ican City '),
(98, '504', 'Honduras'),
(99, '852', 'Hong Kong'),
(100, '36', 'Hungary'),
(101, '354', 'Iceland'),
(102, '91', 'India'),
(103, '62', 'Indonesia'),
(104, '98', 'Iran, Islamic Republ'),
(105, '964', 'Iraq'),
(106, '353', 'Ireland'),
(107, '44', 'Isle of Man'),
(108, '972', 'Israel'),
(109, '39', 'Italy'),
(110, '1876', 'Jamaica'),
(111, '81', 'Japan'),
(112, '44', 'Jersey'),
(113, '962', 'Jordan'),
(114, '7', 'Kazakhstan'),
(115, '254', 'Kenya'),
(116, '686', 'Kiribati'),
(117, '371', 'Latvia'),
(118, '961', 'Lebanon'),
(119, '266', 'Lesotho'),
(120, '231', 'Liberia'),
(121, '218', 'Libyan Arab Jamahiri'),
(122, '423', 'Liechtenstein'),
(123, '370', 'Lithuania'),
(124, '352', 'Luxembourg'),
(125, '853', 'Macao'),
(126, '389', 'Macedonia, the Forme'),
(127, '261', 'Madagascar'),
(128, '265', 'Malawi'),
(129, '60', 'Malaysia'),
(130, '960', 'Maldives'),
(131, '223', 'Mali'),
(132, '356', 'Malta'),
(133, '692', 'Marshall Islands'),
(134, '596', 'Martinique'),
(135, '222', 'Mauritania'),
(136, '230', 'Mauritius'),
(137, '269', 'Mayotte'),
(138, '52', 'Mexico'),
(139, '691', 'Micronesia, Federate'),
(140, '373', 'Moldova, Republic of'),
(141, '377', 'Monaco'),
(142, '976', 'Mongolia'),
(143, '382', 'Montenegro'),
(144, '1664', 'Montserrat'),
(145, '212', 'Morocco'),
(146, '258', 'Mozambique'),
(147, '95', 'Myanmar'),
(148, '264', 'Namibia'),
(149, '674', 'Nauru'),
(150, '977', 'Nepal'),
(151, '31', 'Netherlands'),
(152, '599', 'Netherlands Antilles'),
(153, '687', 'New Caledonia'),
(154, '64', 'New Zealand'),
(155, '505', 'Nicaragua'),
(156, '227', 'Niger'),
(157, '234', 'Nigeria'),
(158, '683', 'Niue'),
(159, '672', 'Norfolk Island'),
(160, '1670', 'Northern Mariana Isl'),
(161, '47', 'Norway'),
(162, '968', 'Oman'),
(163, '92', 'Pakistan'),
(164, '680', 'Palau'),
(165, '970', 'Palestinian Territor'),
(166, '507', 'Panama'),
(167, '675', 'Papua New Guinea'),
(168, '595', 'Paraguay'),
(169, '51', 'Peru'),
(170, '63', 'Philippines'),
(171, '64', 'Pitcairn'),
(172, '48', 'Poland'),
(173, '351', 'Portugal'),
(174, '1787', 'Puerto Rico'),
(175, '974', 'Qatar'),
(176, '262', 'Reunion'),
(177, '40', 'Romania'),
(178, '70', 'Russian Federation'),
(179, '250', 'Rwanda'),
(180, '590', 'Saint Barthelemy'),
(181, '290', 'Saint Helena'),
(182, '1869', 'Saint Kitts and Nevi'),
(183, '1758', 'Saint Lucia'),
(184, '590', 'Saint Martin'),
(185, '508', 'Saint Pierre and Miq'),
(186, '1784', 'Saint Vincent and th'),
(187, '684', 'Samoa'),
(188, '378', 'San Marino'),
(189, '239', 'Sao Tome and Princip'),
(190, '966', 'Saudi Arabia'),
(191, '221', 'Senegal'),
(192, '381', 'Serbia'),
(193, '381', 'Serbia and Montenegr'),
(194, '248', 'Seychelles'),
(195, '232', 'Sierra Leone'),
(196, '65', 'Singapore'),
(197, '1', 'Sint Maarten'),
(198, '421', 'Slovakia'),
(199, '386', 'Slovenia'),
(200, '677', 'Solomon Islands'),
(201, '252', 'Somalia'),
(202, '27', 'South Africa'),
(203, '500', 'South Georgia and th'),
(204, '211', 'South Sudan'),
(205, '34', 'Spain'),
(206, '94', 'Sri Lanka'),
(207, '249', 'Sudan'),
(208, '597', 'Suriname'),
(209, '47', 'Svalbard and Jan May'),
(210, '268', 'Swaziland'),
(211, '46', 'Sweden'),
(212, '41', 'Switzerland'),
(213, '963', 'Syrian Arab Republic'),
(214, '886', 'Taiwan, Province of '),
(215, '992', 'Tajikistan'),
(216, '255', 'Tanzania, United Rep'),
(217, '66', 'Thailand'),
(218, '670', 'Timor-Leste'),
(219, '228', 'Togo'),
(220, '690', 'Tokelau'),
(221, '676', 'Tonga'),
(222, '1868', 'Trinidad and Tobago'),
(223, '216', 'Tunisia'),
(224, '90', 'Turkey'),
(225, '7370', 'Turkmenistan'),
(226, '1649', 'Turks and Caicos Isl'),
(227, '688', 'Tuvalu'),
(228, '256', 'Uganda'),
(229, '380', 'Ukraine'),
(230, '971', 'United Arab Emirates'),
(231, '44', 'United Kingdom'),
(232, '1', 'United States'),
(233, '1', 'United States Minor '),
(234, '598', 'Uruguay'),
(235, '998', 'Uzbekistan'),
(236, '678', 'Vanuatu'),
(237, '58', 'Venezuela'),
(238, '84', 'Viet Nam'),
(239, '1284', 'Virgin Islands, Brit'),
(240, '1340', 'Virgin Islands, U.s.'),
(241, '681', 'Wallis and Futuna'),
(242, '212', 'Western Sahara'),
(243, '967', 'Yemen'),
(244, '260', 'Zambia'),
(245, '263', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `fieldID` int(11) NOT NULL,
  `field_name` varchar(10) NOT NULL,
  `field_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`fieldID`, `field_name`, `field_description`) VALUES
(1, 'Poetry', 'Literature that evokes a concentrated imaginative awareness of experience or a specific emotional re'),
(2, 'Design', 'Design is a discipline of study and practice focused on the interaction between a person — a ‘user’—'),
(3, 'Stories', 'A story is a piece of prose fiction that can typically be read in a single sitting and focuses on a '),
(4, 'Paint', ' The expression of ideas and emotions, with the creation of certain aesthetic qualities, in a two-di');

-- --------------------------------------------------------

--
-- Table structure for table `individual_artist`
--

CREATE TABLE `individual_artist` (
  `artistID` int(11) NOT NULL,
  `f_name` varchar(10) DEFAULT NULL,
  `l_name` varchar(10) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `individual_artist`
--

INSERT INTO `individual_artist` (`artistID`, `f_name`, `l_name`, `gender`, `date_of_date`) VALUES
(1, 'Tinotenda', 'Rodney', 'Male', '1999-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `individual_visitor`
--

CREATE TABLE `individual_visitor` (
  `visitorID` int(11) NOT NULL,
  `f_name` varchar(10) DEFAULT NULL,
  `l_name` varchar(10) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `individual_visitor`
--

INSERT INTO `individual_visitor` (`visitorID`, `f_name`, `l_name`, `gender`, `date_of_birth`) VALUES
(4, 'Reynolds', 'Artist', 'Male', '2002-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `artworkID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`artworkID`, `userID`) VALUES
(1, 2),
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `linkID` int(11) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`linkID`, `link`) VALUES
(1, 'images/five.png'),
(2, 'images/a1.png'),
(3, 'images/a2.png'),
(4, 'images/eight.png'),
(5, 'images/nineteen.jpg'),
(6, 'images/four.png'),
(7, 'images/hero_1.jpg'),
(8, 'images/six.png'),
(9, 'images/hero_2.jpg'),
(10, 'images/i2.jpg'),
(11, 'images/i4.jpg'),
(12, 'images/i6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(11) NOT NULL,
  `fieldID` int(11) DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `news_description` varchar(200) DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `textID` int(11) DEFAULT NULL,
  `textContent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userfield`
--

CREATE TABLE `userfield` (
  `artistID` int(11) DEFAULT NULL,
  `fieldID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpurchase`
--

CREATE TABLE `userpurchase` (
  `orderID` int(11) NOT NULL,
  `artworkID` int(11) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `datePurchased` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `passcode` varchar(255) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `countryID` int(11) DEFAULT NULL,
  `date_joined` date DEFAULT current_timestamp(),
  `isAdmin` tinyint(1) DEFAULT 0,
  `fieldID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `phone_number`, `email`, `image`, `passcode`, `account_number`, `countryID`, `date_joined`, `isAdmin`, `fieldID`) VALUES
(1, '0209246449', 'trodneyu@gamil.com', 'artists/ewurama.jpg', '123', 1234567890, 4, '2023-02-22', 0, 1),
(2, '020202020', 'rey@gmail.com', 'artists/ewurama.jpg', '456', 1734567890, 70, '2023-02-05', 0, 2),
(3, '0772111265', 'cliff@gmail.com', 'artists/pic1.jpg', '000', 76767670, 10, '2023-01-29', 1, 2),
(4, '0773538333', 'eun@gmail.com', 'artists/i2.jpg', '789', 123456767, 23, '2022-12-01', 0, 3),
(6, '055345678', 'other@gmail.com', '', '111', 12323230, 2, '2023-02-05', 0, 1),
(7, '0546396053', 'vivianaboagye04@gmail.com', '', 'artists/piggy.jpg', 0, 1, NULL, 0, 1),
(8, '55679', 'lekanestyve@gmail.com', '', '$2y$10$WUgpIC9mplSEUG8M1qoP5uSJ54PIVQARpQDZUg5qUlejT.Tr9D/4y', 0, 1, NULL, 0, 1),
(9, '4444444', 'reynolds.boakye@ashesi.edu.gh', '', '$2y$10$/HN1OUwkDrJcGk7FLwI5Y.miXpv6LOSAo4KkhiywRcA3jI3oaapq.', 0, 1, NULL, 0, 1),
(10, '4444444', 'reynolds.boakye@ashesi.edu.gh', '', '$2y$10$/HN1OUwkDrJcGk7FLwI5Y.miXpv6LOSAo4KkhiywRcA3jI3oaapq.', 0, 19, NULL, 0, 1),
(11, '4444444', 'reynolds.boakye@ashesi.edu.gh', '', '$2y$10$/HN1OUwkDrJcGk7FLwI5Y.miXpv6LOSAo4KkhiywRcA3jI3oaapq.', 0, 19, NULL, 0, 1),
(12, '4444444', '', '', '', 0, 19, '2023-02-26', 0, 1),
(15, '298272727', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$LmwZKWE1GmHx9U9usbkvkOpjviX16A9GK//KOJ7GqJOhDUQvdjJRW', 0, 83, '2023-03-03', 0, 1),
(16, '+233209246449', 'ti@gmail.com', '', '$2y$10$Mkdbfgzdf0Cv4RBydPgvEewdJoPCOyJHJH5B83izP3qqk4syMwmny', 0, 83, '2023-03-03', 0, 1),
(17, '+233209246449', 'artist@gmail.com', '', '$2y$10$./mp2/p3OgaXQnFn4JqJCeC2RJu6YpqS8R4Ym3EvRcyEW9Li40C/i', 0, 83, '2023-03-03', 0, 1),
(18, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$baPaQKIm5aa3NGD/Dnf.5.9VPjmPFsAehySscS19GQQG7eBV3awOe', 0, 245, '2023-03-03', 0, 1),
(19, '+233209246449', 'ttar@gmail.com', '', '$2y$10$1Mjkomamj.U8R9IA.Mo8FOt2vLljHRlZxhElfGPZ6sRfBh4LvCfN.', 2333222, 83, '2023-03-03', 0, 1),
(20, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$PGaWo1XKMpzAD3gDZ.gb9eBgOUEqnYW/Gw0OtO/UD2VIxuthyQ7iC', 2333222, 83, '2023-03-03', 0, 1),
(21, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$Cl/58QCwmvEwTXCRpJQzLuffRa9AWubJTk.M.UhpacA0pmEKkGb6.', 44444, 83, '2023-03-03', 0, 1),
(22, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$Cl/58QCwmvEwTXCRpJQzLuffRa9AWubJTk.M.UhpacA0pmEKkGb6.', 44444, 83, '2023-03-03', 0, 1),
(23, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$Cl/58QCwmvEwTXCRpJQzLuffRa9AWubJTk.M.UhpacA0pmEKkGb6.', 44444, 83, '2023-03-03', 0, 1),
(24, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$Cl/58QCwmvEwTXCRpJQzLuffRa9AWubJTk.M.UhpacA0pmEKkGb6.', 44444, 83, '2023-03-03', 0, 1),
(25, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$Cl/58QCwmvEwTXCRpJQzLuffRa9AWubJTk.M.UhpacA0pmEKkGb6.', 44444, 83, '2023-03-03', 0, 1),
(26, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$Cl/58QCwmvEwTXCRpJQzLuffRa9AWubJTk.M.UhpacA0pmEKkGb6.', 44444, 83, '2023-03-03', 0, 1),
(27, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$1hehC6Qrb.1NlIGp05QxcumfprBxChM1JooUXWptE7nVCOn/T86SG', 2333222, 83, '2023-03-03', 0, 1),
(28, '+233209246449', 'tinotenda.alfaneti@ashesi.edu.', '', '$2y$10$Q9.OwBRhOrGKx4UxlSFLaOJE8.2pMfT/.zzyX3HCU3I1c6P2TSJ/a', 2333222, 83, '2023-03-03', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitorID`) VALUES
(2),
(4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistID`),
  ADD UNIQUE KEY `signature` (`signature_name`);

--
-- Indexes for table `artistsubscriber`
--
ALTER TABLE `artistsubscriber`
  ADD PRIMARY KEY (`artistID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`artworkID`),
  ADD KEY `fieldID` (`fieldID`),
  ADD KEY `artistID` (`artistID`);

--
-- Indexes for table `artworklikes`
--
ALTER TABLE `artworklikes`
  ADD UNIQUE KEY `primary key` (`artworkID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `artworkID` (`artworkID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `commentlike`
--
ALTER TABLE `commentlike`
  ADD PRIMARY KEY (`commentID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `company_artist`
--
ALTER TABLE `company_artist`
  ADD PRIMARY KEY (`artistID`);

--
-- Indexes for table `company_visitor`
--
ALTER TABLE `company_visitor`
  ADD PRIMARY KEY (`visitorID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryID`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`fieldID`),
  ADD UNIQUE KEY `field_name` (`field_name`);

--
-- Indexes for table `individual_artist`
--
ALTER TABLE `individual_artist`
  ADD PRIMARY KEY (`artistID`);

--
-- Indexes for table `individual_visitor`
--
ALTER TABLE `individual_visitor`
  ADD PRIMARY KEY (`visitorID`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`artworkID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`linkID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`),
  ADD KEY `fieldID` (`fieldID`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD KEY `textID` (`textID`);

--
-- Indexes for table `userfield`
--
ALTER TABLE `userfield`
  ADD KEY `artistID` (`artistID`),
  ADD KEY `fieldID` (`fieldID`);

--
-- Indexes for table `userpurchase`
--
ALTER TABLE `userpurchase`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `artworkID` (`artworkID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `countryID` (`countryID`),
  ADD KEY `fieldID` (`fieldID`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `artworkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `fieldID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userpurchase`
--
ALTER TABLE `userpurchase`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artistsubscriber`
--
ALTER TABLE `artistsubscriber`
  ADD CONSTRAINT `artistsubscriber_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artistsubscriber_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `artwork_ibfk_1` FOREIGN KEY (`fieldID`) REFERENCES `field` (`fieldID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artwork_ibfk_2` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artworklikes`
--
ALTER TABLE `artworklikes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`artworkID`) REFERENCES `artwork` (`artworkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`artworkID`) REFERENCES `artwork` (`artworkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commentlike`
--
ALTER TABLE `commentlike`
  ADD CONSTRAINT `commentlike_ibfk_1` FOREIGN KEY (`commentID`) REFERENCES `comment` (`commentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentlike_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_artist`
--
ALTER TABLE `company_artist`
  ADD CONSTRAINT `company_artist_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_visitor`
--
ALTER TABLE `company_visitor`
  ADD CONSTRAINT `company_visitor_ibfk_1` FOREIGN KEY (`visitorID`) REFERENCES `visitor` (`visitorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `individual_artist`
--
ALTER TABLE `individual_artist`
  ADD CONSTRAINT `individual_artist_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `individual_visitor`
--
ALTER TABLE `individual_visitor`
  ADD CONSTRAINT `individual_visitor_ibfk_1` FOREIGN KEY (`visitorID`) REFERENCES `visitor` (`visitorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`artworkID`) REFERENCES `artwork` (`artworkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `link_ibfk_1` FOREIGN KEY (`linkID`) REFERENCES `artwork` (`artworkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`fieldID`) REFERENCES `field` (`fieldID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `text`
--
ALTER TABLE `text`
  ADD CONSTRAINT `text_ibfk_1` FOREIGN KEY (`textID`) REFERENCES `artwork` (`artworkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userfield`
--
ALTER TABLE `userfield`
  ADD CONSTRAINT `userfield_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userfield_ibfk_2` FOREIGN KEY (`fieldID`) REFERENCES `field` (`fieldID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userpurchase`
--
ALTER TABLE `userpurchase`
  ADD CONSTRAINT `userpurchase_ibfk_1` FOREIGN KEY (`artworkID`) REFERENCES `artwork` (`artworkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userpurchase_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`countryID`) REFERENCES `country` (`countryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`fieldID`) REFERENCES `field` (`fieldID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`visitorID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
