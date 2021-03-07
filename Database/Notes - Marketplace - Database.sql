-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 12:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `CountryID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `CountryCode` varchar(100) NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`CountryID`, `Name`, `CountryCode`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'India', '91', '2021-02-25 13:48:35', NULL, NULL, NULL, b'1'),
(2, 'America', '1-684', '2021-02-25 13:48:35', NULL, NULL, NULL, b'1'),
(3, 'Canada', '1', '2021-02-25 13:50:59', NULL, NULL, NULL, b'1'),
(4, 'China', '86', '2021-02-25 13:50:59', NULL, NULL, NULL, b'1'),
(5, 'Australia', '61', '2021-02-25 13:52:13', NULL, NULL, NULL, b'1'),
(6, 'Brazil', '55', '2021-02-25 13:52:13', NULL, NULL, NULL, b'1'),
(7, 'Iran', '98', '2021-02-25 13:52:13', NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `DownloadID` int(11) NOT NULL,
  `NoteID` int(11) NOT NULL,
  `Seller` int(11) NOT NULL,
  `Downloader` int(11) NOT NULL,
  `IsSellerHasAllowedDownload` bit(1) NOT NULL,
  `AttachmentPath` mediumtext DEFAULT NULL,
  `IsAttachmentDownloaded` bit(1) NOT NULL,
  `AttachmentDownloadedDate` datetime DEFAULT NULL,
  `IsPaid` bit(1) NOT NULL,
  `PurchasedPrice` decimal(10,0) DEFAULT NULL,
  `NoteTitle` varchar(100) NOT NULL,
  `NoteCategory` varchar(100) NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`DownloadID`, `NoteID`, `Seller`, `Downloader`, `IsSellerHasAllowedDownload`, `AttachmentPath`, `IsAttachmentDownloaded`, `AttachmentDownloadedDate`, `IsPaid`, `PurchasedPrice`, `NoteTitle`, `NoteCategory`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`) VALUES
(1, 88, 88, 89, b'0', NULL, b'1', '2020-05-14 18:39:12', b'1', '56', 'aqwerwqr', 'Computer Science', '2021-02-27 19:29:49', NULL, '2021-03-07 16:53:45', NULL),
(2, 90, 88, 90, b'0', NULL, b'1', '2020-12-23 20:43:30', b'1', '89', 'brrq', 'IT', '2021-02-27 19:29:49', NULL, '2021-03-07 16:53:50', NULL),
(3, 111, 89, 90, b'0', NULL, b'1', '2021-03-17 21:26:24', b'0', NULL, 'cfds', 'Science', '2021-02-27 19:29:49', NULL, '2021-03-07 16:53:52', NULL),
(4, 83, 89, 90, b'0', NULL, b'1', '2021-03-31 21:26:30', b'1', '25', 'fsdf', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:40:45', NULL),
(5, 84, 89, 90, b'0', NULL, b'1', '2021-02-08 21:26:33', b'1', '79', 'efrgfsdg', 'Account', '2021-02-27 19:29:49', NULL, '2021-03-07 16:43:46', NULL),
(6, 85, 90, 88, b'0', NULL, b'1', '2021-03-09 16:48:06', b'1', '200', 'xdgvfdsf', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:48:08', NULL),
(7, 88, 88, 91, b'0', NULL, b'1', '2021-03-01 18:39:12', b'0', NULL, 't5e', 'Account', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:51', NULL),
(8, 90, 88, 92, b'0', NULL, b'1', '2021-02-07 20:43:30', b'1', '11', 'r', 'Science', '2021-02-27 19:29:49', NULL, '2021-03-07 16:49:07', NULL),
(9, 88, 88, 93, b'0', NULL, b'1', '2021-03-08 18:39:12', b'1', '32', 'qfghgf', 'Science', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:22', NULL),
(10, 90, 88, 94, b'0', NULL, b'1', '2021-02-10 20:43:30', b'1', '78', 'stry', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:49', NULL),
(11, 88, 88, 95, b'0', NULL, b'1', '2020-05-21 18:39:12', b'0', NULL, 'pfgh', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:20', NULL),
(12, 90, 88, 96, b'0', NULL, b'1', '2021-02-10 20:43:30', b'0', NULL, 'ogfhf', 'Account', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:19', NULL),
(13, 88, 88, 97, b'0', NULL, b'1', '2020-11-10 18:39:12', b'0', NULL, 'nvbnvn', 'IT', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:18', NULL),
(14, 90, 88, 98, b'0', NULL, b'1', '2021-01-05 20:43:30', b'1', '999', 'mvbnbv', 'IT', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:16', NULL),
(15, 88, 88, 99, b'0', NULL, b'1', '2021-03-17 18:39:12', b'0', NULL, 'lbvnbvn', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:15', NULL),
(16, 90, 88, 100, b'0', NULL, b'1', '2019-12-12 20:43:30', b'1', '45', 'khgfjh', 'IT', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:10', NULL),
(17, 88, 88, 101, b'0', NULL, b'1', '2020-11-11 18:39:12', b'1', '66', 'jhry', 'Account', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:07', NULL),
(18, 90, 88, 102, b'0', NULL, b'1', '2020-10-01 20:43:30', b'0', NULL, 'khfgh', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:13', NULL),
(19, 88, 88, 103, b'0', NULL, b'1', '2020-06-11 18:39:12', b'0', NULL, 'jrh', 'IT', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:09', NULL),
(20, 90, 88, 104, b'0', NULL, b'1', '2021-01-02 20:43:30', b'1', '9', 'iyrh', 'Computer Science', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:05', NULL),
(21, 89, 88, 105, b'0', NULL, b'1', '2020-09-05 20:43:30', b'1', '224', 'htry', 'Computer Science', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:03', NULL),
(22, 88, 88, 106, b'0', NULL, b'1', '2021-02-16 18:39:12', b'1', '199', 'grrg', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:54:01', NULL),
(23, 90, 88, 107, b'0', NULL, b'1', '2020-12-14 20:43:30', b'1', '456', 'feeee', 'Account', '2021-02-27 19:29:49', NULL, '2021-03-07 16:53:59', NULL),
(24, 88, 88, 108, b'0', NULL, b'1', '2020-10-06 18:39:12', b'0', NULL, 'eetr', 'IT', '2021-02-27 19:29:49', NULL, '2021-03-07 16:53:56', NULL),
(25, 90, 88, 109, b'0', NULL, b'1', '2019-11-06 20:43:30', b'1', '112', 'dsdf', 'History', '2021-02-27 19:29:49', NULL, '2021-03-07 16:53:54', NULL),
(26, 88, 88, 89, b'1', NULL, b'1', '2021-03-09 18:39:12', b'1', '7', 'sdfgh', 'Computer Science', '2021-02-01 19:29:49', NULL, '2021-03-07 16:47:35', NULL),
(27, 90, 88, 90, b'1', NULL, b'1', '2020-10-06 20:43:30', b'1', '70', 'ghj', 'IT', '2021-02-27 19:29:49', NULL, '2021-03-07 16:47:41', NULL),
(28, 88, 88, 91, b'1', NULL, b'1', '2021-01-05 18:39:12', b'0', NULL, 'rtyu', 'IT', '2021-01-04 19:29:49', NULL, '2021-03-07 16:47:44', NULL),
(29, 90, 88, 92, b'1', NULL, b'1', '2020-06-11 20:43:30', b'1', '78', 'et', 'Account', '2021-02-27 19:29:49', NULL, '2021-03-07 16:47:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `note_categories`
--

CREATE TABLE `note_categories` (
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note_categories`
--

INSERT INTO `note_categories` (`CategoryID`, `Name`, `Description`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'IT', 'Information Technology', '2021-02-25 13:16:22', NULL, NULL, NULL, b'1'),
(2, 'Computer Science', 'Computer Science', '2021-02-25 13:17:19', NULL, NULL, NULL, b'1'),
(3, 'Science', 'Science', '2021-02-25 13:17:19', NULL, NULL, NULL, b'1'),
(4, 'History', 'History', '2021-02-25 13:18:33', NULL, NULL, NULL, b'1'),
(5, 'Account', 'Account', '2021-02-25 13:18:33', NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `note_types`
--

CREATE TABLE `note_types` (
  `TypeID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note_types`
--

INSERT INTO `note_types` (`TypeID`, `Name`, `Description`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'Handwritten', 'Handwritten', '2021-02-25 13:34:05', NULL, NULL, NULL, b'1'),
(2, 'University Notes', 'University Notes', '2021-02-25 13:34:05', NULL, NULL, NULL, b'1'),
(3, 'Novel', 'Novel', '2021-02-25 13:34:41', NULL, NULL, NULL, b'1'),
(4, 'Story Book', 'Story Book', '2021-02-25 13:34:41', NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `reference_data`
--

CREATE TABLE `reference_data` (
  `RefID` int(11) NOT NULL,
  `Value` varchar(100) NOT NULL,
  `DataValue` varchar(100) NOT NULL,
  `RefCategory` varchar(100) NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reference_data`
--

INSERT INTO `reference_data` (`RefID`, `Value`, `DataValue`, `RefCategory`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'Male', 'M', 'Gender', '2021-02-10 18:23:19', 1, '2021-02-10 18:23:19', 1, b'1'),
(2, 'Female', 'Fe', 'Gender', '2021-02-10 18:25:07', 1, '2021-02-10 18:25:07', 1, b'1'),
(3, 'Unknown', 'U', 'Gender', '2021-02-10 18:25:07', 1, '2021-02-10 18:25:07', 1, b'0'),
(4, 'Paid', 'P', 'Selling Mode', '2021-02-10 18:26:38', 1, '2021-02-10 18:26:38', 1, b'1'),
(5, 'Free', 'F', 'Selling Mode', '2021-02-10 18:26:38', 1, '2021-02-10 18:26:38', 1, b'1'),
(6, 'Draft', 'Draft', 'Notes Status', '2021-02-10 18:30:11', 1, '2021-02-10 18:30:11', 1, b'1'),
(7, 'Submitted For Review', 'Submitted For Review', 'Notes Status', '2021-02-10 18:30:11', 1, '2021-02-10 18:30:11', 1, b'1'),
(8, 'In Review', 'In Review', 'Notes Status', '2021-02-10 18:30:11', 1, '2021-02-10 18:30:11', 1, b'1'),
(9, 'Published', 'Approved', 'Notes Status', '2021-02-10 18:30:11', 1, '2021-02-10 18:30:11', 1, b'1'),
(10, 'Rejected', 'Rejected', 'Notes Status', '2021-02-10 18:30:11', 1, '2021-02-10 18:30:11', 1, b'1'),
(11, 'Removed', 'Removed', 'Notes Status', '2021-02-10 18:30:11', 1, '2021-02-10 18:30:11', 1, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes`
--

CREATE TABLE `seller_notes` (
  `NoteID` int(11) NOT NULL,
  `SellerID` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `ActionedBy` int(11) DEFAULT NULL,
  `AdminRemarks` mediumtext DEFAULT NULL,
  `PublishedDate` datetime DEFAULT NULL,
  `Title` varchar(100) NOT NULL,
  `Category` int(11) NOT NULL,
  `DisplayPicture` varchar(500) DEFAULT NULL,
  `NoteType` int(11) DEFAULT NULL,
  `NumberOfPages` int(11) DEFAULT NULL,
  `Description` mediumtext NOT NULL,
  `UniversityName` varchar(200) DEFAULT NULL,
  `Country` int(11) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `CourseCode` varchar(100) DEFAULT NULL,
  `Professor` varchar(100) DEFAULT NULL,
  `IsPaid` bit(1) NOT NULL,
  `SellingPrice` decimal(10,0) DEFAULT NULL,
  `NotesPreview` mediumtext DEFAULT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_notes`
--

INSERT INTO `seller_notes` (`NoteID`, `SellerID`, `Status`, `ActionedBy`, `AdminRemarks`, `PublishedDate`, `Title`, `Category`, `DisplayPicture`, `NoteType`, `NumberOfPages`, `Description`, `UniversityName`, `Country`, `Course`, `CourseCode`, `Professor`, `IsPaid`, `SellingPrice`, `NotesPreview`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(195, 88, 6, NULL, NULL, NULL, 'PHP', 2, NULL, NULL, NULL, 'gfdgdfgf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:55:55', 88, NULL, NULL, b'1'),
(196, 88, 6, NULL, NULL, NULL, 'CMS', 1, NULL, NULL, NULL, 'sdfsdfdsfserts', NULL, NULL, NULL, NULL, NULL, b'1', '45', 'Preview_1615116379.pdf', '2021-03-07 16:56:19', 88, NULL, NULL, b'1'),
(197, 88, 6, NULL, NULL, NULL, 'Javascript', 1, NULL, NULL, NULL, 'sdfsdtfegag', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:56:36', 88, NULL, NULL, b'1'),
(198, 88, 6, NULL, NULL, NULL, 'CSS3', 2, NULL, NULL, NULL, 'fdhfdhdrswh', NULL, NULL, NULL, NULL, NULL, b'1', '789', 'Preview_1615116420.pdf', '2021-03-07 16:57:00', 88, NULL, NULL, b'1'),
(199, 88, 6, NULL, NULL, NULL, 'PHP CMS', 2, NULL, NULL, NULL, 'gfdgdfgf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:55:55', 88, NULL, NULL, b'1'),
(200, 88, 6, NULL, NULL, NULL, 'Flutter', 1, NULL, NULL, NULL, 'sdfsdfdsfserts', NULL, NULL, NULL, NULL, NULL, b'1', '45', 'Preview_1615116379.pdf', '2021-03-07 16:56:19', 88, NULL, NULL, b'1'),
(201, 88, 6, NULL, NULL, NULL, 'Bootstrap', 1, NULL, NULL, NULL, 'sdfsdtfegag', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:56:36', 88, NULL, NULL, b'1'),
(202, 88, 6, NULL, NULL, NULL, 'JQuery', 2, NULL, NULL, NULL, 'fdhfdhdrswh', NULL, NULL, NULL, NULL, NULL, b'1', '789', 'Preview_1615116420.pdf', '2021-03-07 16:57:00', 88, NULL, NULL, b'1'),
(203, 89, 6, NULL, NULL, NULL, 'Flutter', 1, NULL, NULL, NULL, 'sdfsdfdsfserts', NULL, NULL, NULL, NULL, NULL, b'1', '45', 'Preview_1615116379.pdf', '2021-03-07 16:56:19', 88, '2021-03-07 17:01:10', NULL, b'1'),
(204, 89, 6, NULL, NULL, NULL, 'Bootstrap', 1, NULL, NULL, NULL, 'sdfsdtfegag', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:56:36', 88, '2021-03-07 17:01:12', NULL, b'1'),
(205, 89, 6, NULL, NULL, NULL, 'JQuery', 2, NULL, NULL, NULL, 'fdhfdhdrswh', NULL, NULL, NULL, NULL, NULL, b'1', '789', 'Preview_1615116420.pdf', '2021-03-07 16:57:00', 88, '2021-03-07 17:01:16', NULL, b'1'),
(206, 88, 7, NULL, NULL, NULL, 'PHP CMS', 2, NULL, NULL, NULL, 'gfdgdfgf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:55:55', 88, '2021-03-07 17:01:36', NULL, b'1'),
(207, 88, 8, NULL, NULL, NULL, 'Flutter', 1, NULL, NULL, NULL, 'sdfsdfdsfserts', NULL, NULL, NULL, NULL, NULL, b'1', '45', 'Preview_1615116379.pdf', '2021-03-07 16:56:19', 88, '2021-03-07 17:01:39', NULL, b'1'),
(208, 88, 7, NULL, NULL, NULL, 'Bootstrap', 1, NULL, NULL, NULL, 'sdfsdtfegag', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:56:36', 88, '2021-03-07 17:01:46', NULL, b'1'),
(209, 88, 8, NULL, NULL, NULL, 'JQuery', 2, NULL, NULL, NULL, 'fdhfdhdrswh', NULL, NULL, NULL, NULL, NULL, b'1', '789', 'Preview_1615116420.pdf', '2021-03-07 16:57:00', 88, '2021-03-07 17:01:50', NULL, b'1'),
(210, 88, 9, NULL, NULL, NULL, 'PHP CMS', 2, NULL, NULL, NULL, 'gfdgdfgf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:55:55', 88, '2021-03-07 17:02:15', NULL, b'1'),
(211, 88, 9, NULL, NULL, NULL, 'Flutter', 1, NULL, NULL, NULL, 'sdfsdfdsfserts', NULL, NULL, NULL, NULL, NULL, b'1', '45', 'Preview_1615116379.pdf', '2021-03-07 16:56:19', 88, '2021-03-07 17:02:13', NULL, b'1'),
(212, 88, 9, NULL, NULL, NULL, 'Bootstrap', 1, NULL, NULL, NULL, 'sdfsdtfegag', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:56:36', 88, '2021-03-07 17:02:10', NULL, b'1'),
(213, 88, 9, NULL, NULL, NULL, 'JQuery', 2, NULL, NULL, NULL, 'fdhfdhdrswh', NULL, NULL, NULL, NULL, NULL, b'1', '789', 'Preview_1615116420.pdf', '2021-03-07 16:57:00', 88, '2021-03-07 17:02:08', NULL, b'1'),
(214, 88, 9, NULL, NULL, NULL, 'PHP', 2, NULL, NULL, NULL, 'gfdgdfgf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:55:55', 88, '2021-03-07 17:03:27', NULL, b'1'),
(215, 88, 9, NULL, NULL, NULL, 'CMS', 1, NULL, NULL, NULL, 'sdfsdfdsfserts', NULL, NULL, NULL, NULL, NULL, b'1', '45', 'Preview_1615116379.pdf', '2021-03-07 16:56:19', 88, '2021-03-07 17:03:25', NULL, b'1'),
(216, 88, 9, NULL, NULL, NULL, 'Javascript', 1, NULL, NULL, NULL, 'sdfsdtfegag', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-07 16:56:36', 88, '2021-03-07 17:03:22', NULL, b'1'),
(217, 88, 9, NULL, NULL, NULL, 'CSS3', 2, NULL, NULL, NULL, 'fdhfdhdrswh', NULL, NULL, NULL, NULL, NULL, b'1', '789', 'Preview_1615116420.pdf', '2021-03-07 16:57:00', 88, '2021-03-07 17:03:19', NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_attachements`
--

CREATE TABLE `seller_notes_attachements` (
  `AttachmentID` int(11) NOT NULL,
  `NoteID` int(11) NOT NULL,
  `FileName` varchar(100) NOT NULL,
  `FilePath` mediumtext NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_notes_attachements`
--

INSERT INTO `seller_notes_attachements` (`AttachmentID`, `NoteID`, `FileName`, `FilePath`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(113, 195, '113_1615116355.pdf', '113_1615116355.pdf', '2021-03-07 16:55:55', 88, NULL, NULL, b'1'),
(114, 196, '114_1615116379.pdf', '114_1615116379.pdf', '2021-03-07 16:56:19', 88, NULL, NULL, b'1'),
(115, 197, '115_1615116396.pdf', '115_1615116396.pdf', '2021-03-07 16:56:36', 88, NULL, NULL, b'1'),
(116, 198, '116_1615116420.pdf', '116_1615116420.pdf', '2021-03-07 16:57:00', 88, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_reported_issues`
--

CREATE TABLE `seller_notes_reported_issues` (
  `ReportID` int(11) NOT NULL,
  `NoteID` int(11) NOT NULL,
  `ReportedBy` int(11) NOT NULL,
  `AgainstDownloadID` int(11) NOT NULL,
  `Remarks` mediumtext NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_reviews`
--

CREATE TABLE `seller_notes_reviews` (
  `ReviewID` int(11) NOT NULL,
  `NoteID` int(11) NOT NULL,
  `ReviewedBy` int(11) NOT NULL,
  `AgainstDownloadID` int(11) NOT NULL,
  `Ratings` decimal(10,0) NOT NULL,
  `Comments` mediumtext NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_configuration`
--

CREATE TABLE `system_configuration` (
  `SysConfigID` int(11) NOT NULL,
  `Key` varchar(100) NOT NULL,
  `Value` mediumtext NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL DEFAULT 3,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `Password` varchar(24) NOT NULL,
  `IsEmailVerified` bit(1) NOT NULL DEFAULT b'0',
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `RoleID`, `FirstName`, `LastName`, `EmailID`, `Password`, `IsEmailVerified`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(13, 1, 'Himanshu', 'Bhalala', 'abc@gmail.com', '123', b'1', '2021-02-19 18:01:10', NULL, '2021-02-23 20:01:46', NULL, b'1'),
(88, 3, 'Demoseller', 'Demo', 'a@gmail.com', '123', b'1', '2021-02-25 22:05:58', NULL, '2021-03-03 14:06:01', NULL, b'1'),
(89, 3, 'himanshu', 'Demo', 'b@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-04 21:23:23', NULL, b'1'),
(90, 3, 'asdasd', 'sdasd', 'c@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:05:57', NULL, b'1'),
(91, 3, 'Demo', 'Demo', '91@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:36:05', NULL, b'1'),
(92, 3, 'asdasd', 'sdasd', '92@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:36:11', NULL, b'1'),
(93, 3, 'Demo', 'Demo', '1@gmail.com', '123', b'1', '2021-02-25 22:05:58', NULL, '2021-02-27 20:30:26', NULL, b'1'),
(94, 3, 'Demo', 'Demo', '2@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:05:51', NULL, b'1'),
(95, 3, 'asdasd', 'sdasd', '3@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:05:57', NULL, b'1'),
(96, 3, 'Demo', 'Demo', '4@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:36:05', NULL, b'1'),
(97, 3, 'asdasd', 'sdasd', '5@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:36:11', NULL, b'1'),
(98, 3, 'Demo', 'Demo', '6@gmail.com', '123', b'1', '2021-02-25 22:05:58', NULL, '2021-02-27 20:30:26', NULL, b'1'),
(99, 3, 'Demo', 'Demo', '7@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:05:51', NULL, b'1'),
(100, 3, 'asdasd', 'sdasd', '8@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:05:57', NULL, b'1'),
(101, 3, 'Demo', 'Demo', '9@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:36:05', NULL, b'1'),
(102, 3, 'asdasd', 'sdasd', '10@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:36:11', NULL, b'1'),
(103, 3, 'Demo', 'Demo', '25@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:36:05', NULL, b'1'),
(104, 3, 'asdasd', 'sdasd', '26@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:36:11', NULL, b'1'),
(105, 3, 'Demo', 'Demo', '27@gmail.com', '123', b'1', '2021-02-25 22:05:58', NULL, '2021-02-27 20:30:26', NULL, b'1'),
(106, 3, 'Demo', 'Demo', '28@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:05:51', NULL, b'1'),
(107, 3, 'asdasd', 'sdasd', '29@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:05:57', NULL, b'1'),
(108, 3, 'Demo', 'Demo', '30@gmail.com', '123', b'1', '2021-02-25 22:08:24', NULL, '2021-03-01 10:36:05', NULL, b'1'),
(109, 3, 'asdasd', 'sdasd', '31@gmail.com', '123', b'1', '2021-02-27 15:09:14', NULL, '2021-03-01 10:36:11', NULL, b'1'),
(110, 3, 'John', 'Watson', 'john@gmail.com', '123', b'1', '2021-03-04 14:32:57', NULL, '2021-03-04 14:37:18', NULL, b'1'),
(111, 3, 'John', 'Watson', 'asf@gmail.com', 'WVitSBnM', b'1', '2021-03-04 14:33:44', NULL, '2021-03-05 19:39:13', NULL, b'1'),
(112, 3, 'John', 'Watt', 'asfafasf4@gmail.comfsdfsdfsdfsdf', 'aaaaaA1!', b'1', '2021-03-05 17:35:34', NULL, '2021-03-05 19:39:27', NULL, b'1'),
(113, 3, 'John', 'Watt', 'asf4@gmail.com', 'aaaaaA!1', b'1', '2021-03-05 19:32:52', NULL, '2021-03-05 19:39:20', NULL, b'1'),
(114, 3, 'ds', 'sdf', 'hpatel8164@gmail.com', 'aaaaa1!A', b'1', '2021-03-05 19:40:06', NULL, '2021-03-05 19:40:31', NULL, b'1'),
(115, 3, 'fdgsd', 'dsgsd', 'z@gmail.com', '123', b'1', '2021-03-05 20:18:21', NULL, '2021-03-05 20:19:07', NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `ProfileID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DOB` datetime DEFAULT NULL,
  `Gender` int(11) DEFAULT NULL,
  `SecondaryEmail` varchar(100) NOT NULL,
  `CountryCode` varchar(5) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `ProfilePicture` varchar(500) DEFAULT NULL,
  `AddressLine1` varchar(100) NOT NULL,
  `AddressLine2` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `ZipCode` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `University` varchar(100) DEFAULT NULL,
  `College` varchar(100) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`ProfileID`, `UserID`, `DOB`, `Gender`, `SecondaryEmail`, `CountryCode`, `PhoneNumber`, `ProfilePicture`, `AddressLine1`, `AddressLine2`, `City`, `State`, `ZipCode`, `Country`, `University`, `College`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`) VALUES
(1, 13, '1999-11-28 00:00:00', 1, '', '91', '9995687425', 'pngkey.com-feedback-icon-png-5179352.png', 'Demo Address Line 1', 'Demo Address Line 1', 'Demo City', 'Demo State', '365601', 'India', 'Demo University', 'Demo College', '2021-02-19 18:03:00', 13, NULL, NULL),
(2, 75, '1987-12-02 02:12:12', 2, '', '91', '7854692543', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-02-24 14:39:46', 75),
(3, 76, '0000-00-00 00:00:00', 1, '', '67', '9658931247', 'book-icon-149 (1).png', '12312', '123123', '31231', '23123123', '12312312', 'Polland', '123123', '1231231231', '2021-02-25 12:02:17', 76, '2021-03-07 16:34:49', NULL),
(4, 88, '1987-12-02 02:12:12', 2, '', '91', '7896542356', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:35:00', 75),
(5, 89, '1987-12-02 02:12:12', 2, '', '91', '7854569325', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:35:15', 75),
(6, 90, '1987-12-02 02:12:12', 2, '', '91', '8956234578', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:37:01', 75),
(7, 91, '1987-12-02 02:12:12', 2, '', '91', '9878455623', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:37:09', 75),
(8, 92, '1987-12-02 02:12:12', 2, '', '91', '8978894556', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:37:22', 75),
(9, 93, '1987-12-02 02:12:12', 2, '', '91', '9764582136', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:38:00', 75),
(10, 94, '1987-12-02 02:12:12', 2, '', '91', '8569562345', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:37:35', 75),
(11, 95, '1987-12-02 02:12:12', 2, '', '91', '8856974586', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:37:40', 75),
(12, 96, '1987-12-02 02:12:12', 2, '', '91', '9856784598', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:37:45', 75),
(13, 97, '1987-12-02 02:12:12', 2, '', '91', '8978945636', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:37:55', 75),
(14, 98, '1987-12-02 02:12:12', 2, '', '91', '7845124556', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:55', 75),
(15, 99, '1987-12-02 02:12:12', 2, '', '91', '9898987586', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:47', 75),
(16, 13, '1987-12-02 02:12:12', 2, '', '91', '7895647855', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:41', 75),
(17, 100, '1987-12-02 02:12:12', 2, '', '91', '9666587499', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:35', 75),
(18, 101, '1987-12-02 02:12:12', 2, '', '91', '9996668745', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:29', 75),
(19, 103, '1987-12-02 02:12:12', 2, '', '91', '8885556964', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:24', 75),
(20, 104, '1987-12-02 02:12:12', 2, '', '91', '7979465683', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:19', 75),
(21, 105, '1987-12-02 02:12:12', 2, '', '91', '8754611346', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:14', 75),
(22, 106, '1987-12-02 02:12:12', 2, '', '91', '8975463256', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:05', 75),
(23, 107, '1987-12-02 02:12:12', 2, '', '91', '9856475612', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:36:00', 75),
(24, 108, '1987-12-02 02:12:12', 2, '', '91', '7854999658', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:35:54', 75),
(25, 109, '1987-12-02 02:12:12', 2, '', '91', '9865321456', 'Iconsmind-Outline-Books.ico', 'demoadd1', 'demoadd2', 'democity', 'demostate', '365601', 'America', 'demounivv', 'democollege', '2021-02-24 14:35:45', 75, '2021-03-07 16:35:48', 75);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `RoleID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` int(11) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `ModifiedBy` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`RoleID`, `Name`, `Description`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'Super Admin', NULL, '2021-02-10 14:25:30', NULL, NULL, NULL, b'1'),
(2, 'Admin', NULL, '2021-02-10 14:25:38', NULL, NULL, NULL, b'1'),
(3, 'Member', NULL, '2021-02-10 14:25:48', NULL, NULL, NULL, b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`CountryID`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`DownloadID`),
  ADD KEY `FK2` (`Seller`),
  ADD KEY `FK1` (`NoteID`) USING BTREE,
  ADD KEY `FK3` (`Downloader`);

--
-- Indexes for table `note_categories`
--
ALTER TABLE `note_categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `note_types`
--
ALTER TABLE `note_types`
  ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `reference_data`
--
ALTER TABLE `reference_data`
  ADD PRIMARY KEY (`RefID`);

--
-- Indexes for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD PRIMARY KEY (`NoteID`),
  ADD KEY `FK_SellerID` (`SellerID`),
  ADD KEY `FK_Status` (`Status`),
  ADD KEY `FK_ActionedBy` (`ActionedBy`),
  ADD KEY `FK_Category` (`Category`),
  ADD KEY `FK_NoteType` (`NoteType`),
  ADD KEY `FK_Country` (`Country`);

--
-- Indexes for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  ADD PRIMARY KEY (`AttachmentID`),
  ADD KEY `FK_NoteID` (`NoteID`);

--
-- Indexes for table `seller_notes_reported_issues`
--
ALTER TABLE `seller_notes_reported_issues`
  ADD PRIMARY KEY (`ReportID`),
  ADD KEY `FK_NoteID1` (`NoteID`),
  ADD KEY `FK_ReportedBy` (`ReportedBy`),
  ADD KEY `FK_AgainstDownloadID1` (`AgainstDownloadID`);

--
-- Indexes for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `NoteID_FK` (`NoteID`),
  ADD KEY `FK_ReviewedBy` (`ReviewedBy`),
  ADD KEY `FK_AgainstDownloadID` (`AgainstDownloadID`);

--
-- Indexes for table `system_configuration`
--
ALTER TABLE `system_configuration`
  ADD PRIMARY KEY (`SysConfigID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `FOREIGN KEY` (`RoleID`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`ProfileID`),
  ADD KEY `FK_UserID` (`UserID`),
  ADD KEY `FK_Gender` (`Gender`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`RoleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `DownloadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `note_categories`
--
ALTER TABLE `note_categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `note_types`
--
ALTER TABLE `note_types`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reference_data`
--
ALTER TABLE `reference_data`
  MODIFY `RefID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seller_notes`
--
ALTER TABLE `seller_notes`
  MODIFY `NoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  MODIFY `AttachmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `seller_notes_reported_issues`
--
ALTER TABLE `seller_notes_reported_issues`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_configuration`
--
ALTER TABLE `system_configuration`
  MODIFY `SysConfigID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `ProfileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`Seller`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `FK3` FOREIGN KEY (`Downloader`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD CONSTRAINT `FK_ActionedBy` FOREIGN KEY (`ActionedBy`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `FK_Category` FOREIGN KEY (`Category`) REFERENCES `note_categories` (`CategoryID`),
  ADD CONSTRAINT `FK_Country` FOREIGN KEY (`Country`) REFERENCES `countries` (`CountryID`),
  ADD CONSTRAINT `FK_NoteType` FOREIGN KEY (`NoteType`) REFERENCES `note_types` (`TypeID`),
  ADD CONSTRAINT `FK_SellerID` FOREIGN KEY (`SellerID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `FK_Status` FOREIGN KEY (`Status`) REFERENCES `reference_data` (`RefID`);

--
-- Constraints for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  ADD CONSTRAINT `FK_NoteID` FOREIGN KEY (`NoteID`) REFERENCES `seller_notes` (`NoteID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller_notes_reported_issues`
--
ALTER TABLE `seller_notes_reported_issues`
  ADD CONSTRAINT `FK_AgainstDownloadID1` FOREIGN KEY (`AgainstDownloadID`) REFERENCES `downloads` (`DownloadID`),
  ADD CONSTRAINT `FK_NoteID1` FOREIGN KEY (`NoteID`) REFERENCES `seller_notes` (`NoteID`),
  ADD CONSTRAINT `FK_ReportedBy` FOREIGN KEY (`ReportedBy`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  ADD CONSTRAINT `FK_AgainstDownloadID` FOREIGN KEY (`AgainstDownloadID`) REFERENCES `downloads` (`DownloadID`),
  ADD CONSTRAINT `FK_ReviewedBy` FOREIGN KEY (`ReviewedBy`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `NoteID_FK` FOREIGN KEY (`NoteID`) REFERENCES `seller_notes` (`NoteID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`RoleID`) REFERENCES `user_roles` (`RoleID`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `FK_Gender` FOREIGN KEY (`Gender`) REFERENCES `reference_data` (`RefID`),
  ADD CONSTRAINT `FK_UserID` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
