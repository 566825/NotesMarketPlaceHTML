-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 11:57 AM
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
(1, 'India', '91', '2020-12-14 13:48:35', 124, '2021-04-03 12:27:53', NULL, b'1'),
(2, 'America', '1-684', '2021-01-22 13:48:35', 125, '2021-04-03 12:27:56', NULL, b'1'),
(3, 'Canada', '1', '2021-02-01 13:50:59', 124, '2021-04-03 12:27:58', NULL, b'1'),
(4, 'China', '86', '2020-11-17 13:50:59', 125, '2021-04-03 12:28:01', NULL, b'1'),
(5, 'Australia', '61', '2021-04-23 13:52:13', 124, '2021-04-03 15:51:36', 125, b'1'),
(6, 'Brazil', '55', '2021-03-02 13:52:13', 125, '2021-04-03 12:28:08', NULL, b'1'),
(7, 'Iran', '98', '2021-03-23 13:52:13', 124, '2021-04-03 12:28:12', NULL, b'1');

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
(519, 505, 122, 121, b'1', NULL, b'1', '2020-10-12 20:31:07', b'0', '0', 'Bootstrap', 'IT', '2021-03-27 20:31:07', 121, '2021-04-01 12:22:23', NULL),
(520, 506, 122, 121, b'1', NULL, b'0', '2021-03-31 20:46:20', b'1', '165', 'Indian History', 'History', '2021-03-27 20:31:14', 121, '2021-03-31 20:46:20', NULL),
(521, 507, 122, 121, b'1', NULL, b'1', '2020-12-14 20:31:44', b'0', '0', 'Banking', 'Account', '2021-03-27 20:31:44', 121, '2021-04-01 12:22:26', NULL),
(522, 508, 122, 121, b'1', NULL, b'0', '2020-12-07 20:34:49', b'1', '45', 'Computer Science', 'Computer Science', '2021-03-27 20:34:49', 121, '2021-03-29 15:47:44', NULL),
(523, 509, 121, 122, b'1', NULL, b'0', '2020-09-07 20:51:51', b'1', '47', 'Computer Hardwere', 'Computer Science', '2021-03-27 20:51:51', 122, '2021-03-29 15:47:32', NULL),
(524, 511, 121, 122, b'1', NULL, b'1', '2021-02-02 20:52:05', b'0', '0', 'CMS', 'IT', '2021-03-27 20:52:05', 122, '2021-04-01 12:22:28', NULL),
(525, 512, 121, 122, b'1', NULL, b'1', '2021-03-26 15:48:40', b'0', '0', 'Bootstrap3', 'IT', '2021-03-27 20:52:14', 122, '2021-04-01 12:22:29', NULL),
(526, 513, 121, 122, b'0', NULL, b'0', '2021-03-28 20:52:25', b'1', '75', 'History of Science', 'Science', '2021-03-27 20:52:25', 122, '2021-03-29 15:48:32', NULL),
(527, 514, 121, 122, b'1', NULL, b'0', '2021-01-04 20:54:56', b'1', '49', 'demo note 2', 'Science', '2021-03-27 20:54:56', 122, '2021-03-29 15:47:15', NULL),
(528, 505, 122, 123, b'1', NULL, b'1', '2021-03-20 21:00:54', b'0', '0', 'Bootstrap', 'IT', '2021-03-27 21:00:54', 123, '2021-04-01 12:22:31', NULL),
(529, 507, 122, 123, b'1', NULL, b'1', '2021-03-21 21:01:10', b'0', '0', 'Banking', 'Account', '2021-03-27 21:01:10', 123, '2021-04-01 12:22:32', NULL),
(530, 506, 122, 123, b'0', NULL, b'0', '2021-03-22 21:01:18', b'1', '165', 'Indian History', 'History', '2021-03-27 21:01:18', 123, '2021-03-29 15:47:01', NULL),
(531, 509, 121, 123, b'0', NULL, b'0', '2021-03-23 21:01:31', b'1', '47', 'Computer Hardwere', 'Computer Science', '2021-03-27 21:01:31', 123, '2021-03-29 15:46:58', NULL),
(534, 512, 121, 123, b'1', NULL, b'1', '2021-03-26 21:02:01', b'0', '0', 'Bootstrap3', 'IT', '2021-03-27 21:02:01', 123, '2021-04-01 12:22:35', NULL),
(535, 513, 121, 123, b'1', NULL, b'0', '2021-03-28 21:02:08', b'1', '75', 'History of Science', 'Science', '2021-03-27 21:02:08', 123, '2021-03-29 15:46:40', NULL),
(536, 514, 121, 123, b'1', NULL, b'0', '2021-03-29 15:43:42', b'1', '49', 'demo note 2', 'Science', '2021-03-27 21:02:27', 123, '2021-03-29 15:43:42', NULL),
(542, 502, 122, 121, b'1', '../../Members/122/502/Attachments/497_1616856583.pdf', b'1', '2021-04-03 16:54:48', b'0', '0', 'qwerty', 'IT', '2021-04-03 16:54:48', 121, '2021-04-08 11:56:41', NULL),
(546, 531, 121, 122, b'1', '../../Members/121/531/Attachments/530_1617449260.pdf;../../Members/121/531/Attachments/531_1617449260.pdf;../../Members/121/531/Attachments/532_1617449260.pdf;', b'0', '2021-04-03 17:04:46', b'1', '79', 'Human Body', 'Science', '2021-04-03 17:04:46', 122, '2021-04-03 17:18:08', NULL);

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
(1, 'IT', 'Information Technology', '2021-02-25 13:16:22', 124, '2021-04-02 22:00:14', NULL, b'1'),
(2, 'Computer Science', 'Computer Science', '2021-02-25 13:17:19', 125, '2021-04-02 22:00:16', NULL, b'1'),
(3, 'Science', 'Science', '2021-02-25 13:17:19', 124, '2021-04-02 22:00:18', NULL, b'1'),
(4, 'History', 'History', '2021-02-25 13:18:33', 125, '2021-04-03 15:51:10', 125, b'1'),
(5, 'Account', 'Account', '2021-02-25 13:18:33', 124, '2021-04-02 22:00:22', NULL, b'1');

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
(1, 'Handwritten', 'Handwritten', '2020-12-08 13:34:05', 124, '2021-04-03 12:20:29', NULL, b'1'),
(2, 'University Notes', 'University Notes', '2021-04-07 13:34:05', 125, '2021-04-03 15:51:22', 125, b'1'),
(3, 'Novel', 'Novel', '2021-02-16 13:34:41', 124, '2021-04-03 12:20:33', NULL, b'1'),
(4, 'Story Book', 'Story Book', '2020-11-10 13:34:41', 125, '2021-04-03 12:20:36', NULL, b'1');

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
(496, 121, 10, 125, 'fhdhdhfd', '2021-03-31 16:05:53', 'title1', 1, '../../Members/121/496/DP_1616855524.png', NULL, NULL, 'sfdgsfdg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-04-01 20:02:04', 121, '2021-02-28 17:09:14', NULL, b'1'),
(497, 121, 10, 125, 'bnddg', '2021-03-31 17:02:35', 'title2', 2, '../../Members/121/497/DP_1616855724.png', NULL, NULL, 'sadasd', NULL, NULL, NULL, NULL, NULL, b'1', '45', '../../Members/121/497/Preview_1616855724.pdf', '2020-12-08 20:05:24', 121, '2020-12-03 17:08:48', NULL, b'1'),
(498, 121, 10, 124, 'dsdfdsfgag', '2021-03-10 20:06:32', 'title3', 3, NULL, NULL, NULL, 'sdfsf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:05:47', 121, '2020-11-17 14:44:18', NULL, b'1'),
(499, 121, 10, 125, 'agasgasg', '2021-03-06 20:06:36', 'title4', 1, NULL, NULL, NULL, 'sdfdsf', NULL, NULL, NULL, NULL, NULL, b'1', '47', '../../Members/121/499/Preview_1616855766.pdf', '2021-03-27 20:06:06', 121, '2021-04-26 14:44:19', NULL, b'1'),
(500, 121, 10, 124, 'vVSFDBFSb', '2021-04-01 15:07:35', 'title5', 4, '../../Members/121/500/DP_1616855879.png', NULL, NULL, 'sdasdas', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:07:59', 121, '2021-04-01 15:07:43', 124, b'1'),
(501, 121, 10, 124, 'dsgdsgzcx', '2021-03-03 20:10:40', 'title6', 5, NULL, NULL, NULL, 'sdgsdg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:10:21', 121, '2020-12-16 14:44:24', NULL, b'1'),
(502, 122, 9, 125, 'dfhdhdfhd', '2021-03-02 20:20:49', 'qwerty', 1, NULL, NULL, NULL, 'sadasd', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-02-24 20:19:43', 122, '2021-04-08 12:36:18', NULL, b'1'),
(503, 122, 10, 125, 'dfhfdhdhd', '2021-04-01 15:04:13', 'title2', 3, NULL, NULL, NULL, 'asdas', NULL, NULL, NULL, NULL, NULL, b'1', '69', '../../Members/122/503/Preview_1616856605.pdf', '2021-05-14 20:20:05', 122, '2021-04-08 12:36:59', 125, b'1'),
(504, 122, 10, 124, 'fdhfdh', '2021-04-30 16:05:46', 'title3', 3, NULL, NULL, NULL, 'sadsadsa', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:20:24', 122, '2021-04-08 12:37:04', NULL, b'1'),
(505, 122, 9, 124, NULL, '2021-04-27 20:24:59', 'Bootstrap', 1, NULL, 2, 456, 'Loaw adniw nosa iv aafnj  asifwa fi wfi afiwq cibcoas fnhasfw fiwbfc asfcnasio asfasbfwic b casbcadbwa fafibafafw asfawfzdfa wqiifb ajw faa qwj q iuqwc asfdbas', 'Oxford University', 2, 'bootstrap', 'ESDD5', 'Matt Blanc', b'0', '0', NULL, '2021-03-27 20:24:27', 122, '2021-04-01 21:25:27', 122, b'1'),
(506, 122, 9, 125, NULL, '2021-01-06 20:27:57', 'Indian History', 4, '../../Members/122/506/DP_1616857064.png', 1, 789, 'sadw jabiw is simply dummy text sadajwqb  ciqawbc ciqwbcv iawb sdgvge fqwf vsgvweqgv', 'Gyan University', 1, 'history', 'WNHDD5', 'Nsaw Tywe', b'1', '165', '../../Members/122/506/Preview_1616857064.pdf', '2021-03-27 20:27:44', 122, '2021-04-01 21:25:29', NULL, b'1'),
(507, 122, 9, 125, 'fghfdhdfhfdh', '2021-02-05 20:30:21', 'Banking', 5, NULL, 4, NULL, 'jsdheb sdaiho eafihofa feiofa nefhi sfaiho sfahiosfa fwa9puegnjlbdn maswdihoewquggds nasfuhafhvvsd ', 'Can University', 3, 'Course3', 'GDGW6Y', NULL, b'0', '0', NULL, '2021-03-27 20:30:11', 122, '2021-04-01 21:25:32', 125, b'1'),
(508, 122, 9, 125, NULL, '2021-04-15 16:58:35', 'Computer Science', 2, '../../Members/122/508/DP_1616857446.png', 2, NULL, 'dfghdh sddfg sg sseges g we ihowebfg agfipqewghsad ngaiogeaq bgaeqwibg weqagpoewq ewaqige gvaeiogea gkaeig awesgiwqae gvsadg', 'Oxford University', 2, 'computer science', 'WD32', NULL, b'1', '45', '../../Members/122/508/Preview_1616857446.pdf', '2021-03-27 20:34:06', 122, '2021-04-01 21:25:34', NULL, b'1'),
(509, 121, 9, 124, NULL, '2020-12-06 20:38:43', 'Computer Hardwere', 2, '../../Members/121/509/DP_1616857716.png', 4, 153, 'dseg fte stge ewajura safkiela faeiorw dfawkjqefrb aegklj esafb e qewur oqweur oiqwe qw qioweuroiqewu rqewiouroq wroiuqwoirwoiwqwqroqroiqogho sdfkudfahofsfsd', 'Abc University', 4, 'computer science', NULL, NULL, b'1', '47', '../../Members/121/509/Preview_1616857716.pdf', '2021-03-27 20:38:36', 121, '2021-04-03 15:36:51', NULL, b'1'),
(510, 121, 9, 125, NULL, '2021-01-31 20:42:46', 'JQuery', 1, '../../Members/121/510/DP_1616857961.jpg', NULL, NULL, 'dasgsdgsgse oifhsae rfqwhrfhwqeorfhoqwi oqh qwehrowqehroqewhr qewr qr hqowr qr hqwuor hwqrqw r wrh wq rwqhrowqru hhfdsfhsdhfksd', 'Can University', 3, NULL, NULL, NULL, b'1', '12', '../../Members/121/510/Preview_1616857961.pdf', '2021-03-27 20:42:41', 121, '2021-03-31 20:30:39', NULL, b'1'),
(511, 121, 9, 124, NULL, '2021-04-02 20:45:06', 'CMS', 1, '../../Members/121/511/DP_1616858094.jpg', NULL, NULL, 'CMS project with PHP', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:44:54', 121, '2021-04-01 11:07:01', NULL, b'1'),
(512, 121, 9, 125, NULL, '2021-01-05 20:48:32', 'Bootstrap3', 1, '../../Members/121/512/DP_1616858302.jpg', 2, 456, 'sdasw qewarfqwerqwrqwrfwqe wq wqe rfqe wrqeqwrqe rqer qe', 'Gyan University', 1, 'bootstrap', 'DA12W', NULL, b'0', '0', NULL, '2021-07-08 20:48:22', 121, '2021-04-01 17:33:43', NULL, b'1'),
(513, 121, 9, 124, NULL, '2021-04-29 20:50:56', 'History of Science', 3, NULL, 1, 700, 'dfhrd we twe ew tetewtewt ewttwe  tgewgsfdgsd gsrdg sdfgsd gsdgds gsfdgfwefgwegdfbhfdajhadtfbsfd sewd ', 'Kant University', 5, 'science', NULL, 'Jert Yer', b'1', '75', '../../Members/121/513/Preview_1616858448.pdf', '2021-05-19 20:50:48', 121, '2021-04-01 17:33:50', NULL, b'1'),
(514, 121, 9, 125, NULL, '2021-01-24 20:54:36', 'demo note 2', 3, '../../Members/121/514/DP_1616858661.png', NULL, NULL, 'sfdgsg', NULL, NULL, NULL, NULL, NULL, b'1', '49', '../../Members/121/514/Preview_1616858661.pdf', '2021-04-30 20:54:21', 121, '2021-04-01 17:33:54', NULL, b'1'),
(515, 123, 9, 124, NULL, '2021-04-13 16:05:49', 'title1', 1, NULL, 1, NULL, 'sdgsdgsdg g esgteswgt ewg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:21:33', 123, '2021-04-01 11:07:13', NULL, b'1'),
(516, 123, 9, 125, NULL, '2021-03-31 16:05:51', 'title2', 2, NULL, 3, NULL, 'sd gsdgs gg sg g', NULL, NULL, NULL, NULL, NULL, b'1', '78', '../../Members/123/516/Preview_1616860313.pdf', '2021-03-27 21:21:53', 123, '2021-03-31 20:30:23', NULL, b'1'),
(517, 123, 9, 124, NULL, '2021-04-10 16:57:55', 'title3', 3, '../../Members/123/517/DP_1616860365.jpg', 4, NULL, 'dfgsd setgew tgwegtw', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:22:45', 123, '2021-03-31 20:30:21', NULL, b'1'),
(518, 123, 9, 125, NULL, '2020-11-17 17:05:23', 'title4', 4, NULL, 1, NULL, ' erwetew twe', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:22:59', 123, '2021-04-03 15:36:45', NULL, b'1'),
(519, 123, 9, 124, NULL, '2021-03-01 15:35:41', 'title5', 5, NULL, 2, NULL, 'sfdgsdgsdfg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:23:11', 123, '2021-04-03 15:35:44', NULL, b'1'),
(520, 123, 9, 125, NULL, '2021-02-23 15:35:45', 'title6', 4, NULL, NULL, NULL, 'sfgser yter', NULL, NULL, NULL, NULL, NULL, b'1', '1', '../../Members/123/520/Preview_1616860407.pdf', '2021-03-27 21:23:27', 123, '2021-04-03 15:35:47', NULL, b'1'),
(521, 121, 9, 124, NULL, '2021-02-03 15:35:48', 'demo1', 4, '../../Members/121/521/DP_1616860539.jpg', 3, NULL, 'asdasdasd', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:25:39', 121, '2021-04-03 15:35:51', NULL, b'1'),
(522, 121, 9, 125, NULL, '2021-01-25 15:35:52', 'demo2', 2, '../../Members/121/522/DP_1616860578.png', 2, 455, 'fsdaferewqr wqe', 'Can University', 3, NULL, NULL, NULL, b'1', '45', '../../Members/121/522/Preview_1616860578.pdf', '2021-03-27 21:26:18', 121, '2021-04-03 15:35:54', NULL, b'1'),
(523, 121, 9, 124, NULL, '2021-12-08 21:28:18', 'demo3', 3, '../../Members/121/523/DP_1616860640.png', NULL, NULL, 'asdsa fdrawrf awrfwa fwqf wqfewq gfweg ew', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:27:20', 121, '2021-03-31 20:30:02', NULL, b'1'),
(524, 121, 9, 125, NULL, '2020-12-20 15:40:12', 'demo4', 1, '../../Members/121/524/DP_1616860684.png', 2, 124, 'sdfsdfsdfsfwerfwe we weftw gwegw gwe gwewet w', 'Gyan University', 1, 'science', NULL, NULL, b'0', '0', NULL, '2021-03-27 21:28:04', 121, '2021-04-03 15:40:15', NULL, b'1'),
(525, 123, 9, 124, NULL, '2020-11-18 17:05:18', 'abcd', 3, NULL, NULL, NULL, 'vdwergtfw tt wetwe tewr ytwreyrewyrewyh rewhygrewherwhrwehg erwherherh erher herh ', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-29 20:44:24', 123, '2021-04-03 15:36:39', NULL, b'1'),
(526, 121, 8, 126, NULL, NULL, 'demo note 1', 1, '../../Members/121/526/DP_1617190960.png', NULL, 745, 'rre yteryher yhqer hqeth teh qetrhqetr heqtrh qetrh etrhetr het hqert hqetrhe rthqetrh etherhqer gdfg sdfgh fdgn fgn sfgnbv bsfdg', NULL, NULL, NULL, NULL, NULL, b'1', '75', '../../Members/121/526/Preview_1617190960.pdf', '2021-03-31 17:12:40', 121, '2021-04-08 12:22:43', 126, b'1'),
(527, 121, 7, NULL, NULL, NULL, 'demo note 2', 2, NULL, 2, 456, 'dsgsdgs gerfgwrgnzxbmvfsdmn fsdnmfne fjsdbfkjbsdkjvgbd sfdgkhjskrdskjgsdbki vjsiu f s fhs fbs djkbvkjsdab vksadjkv bdjlbvhsbvsdahhdbghshjgfbwebhfg bsdbv', NULL, NULL, 'KJSDF', NULL, NULL, b'0', '0', NULL, '2021-03-31 17:13:24', 121, '2021-04-01 17:18:12', 121, b'1'),
(528, 122, 7, NULL, NULL, NULL, 'demo note 3', 3, '../../Members/122/528/DP_1617191084.png', NULL, NULL, 'derfgrg dfrhdf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-31 17:14:44', 122, '2021-04-01 21:25:39', 122, b'1'),
(529, 122, 8, NULL, NULL, NULL, 'demo note 4', 4, NULL, NULL, NULL, 'fgygergtrg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-31 17:16:10', 122, '2021-04-01 21:25:41', 122, b'1'),
(530, 123, 7, NULL, NULL, NULL, 'demo note 5', 5, NULL, NULL, NULL, 'dfghd hdr hdfh dfhd fhdfhfdghdfhdfhfdh', NULL, NULL, NULL, NULL, NULL, b'1', '44', '../../Members/123/530/Preview_1617191367.pdf', '2021-03-31 17:19:27', 123, '2021-04-01 17:18:19', 123, b'1'),
(531, 121, 9, 125, NULL, '2021-04-03 16:58:20', 'Human Body', 3, '../../Members/121/531/DP_1617449260.png', 1, 458, 'gadsg gafg aghadrf hsdfhgsfd nhsg hnsgfdh fgsh fsghsf ghsfg hfg hsfg', NULL, 6, 'Body Science', NULL, NULL, b'1', '79', '../../Members/121/531/Preview_1617449260.pdf', '2021-04-03 16:57:40', 121, '2021-04-03 17:04:42', 125, b'1');

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
(490, 496, '490_1616855524.pdf', '../../Members/121/496/Attachments/490_1616855524.pdf', '2021-03-27 20:02:04', 121, NULL, NULL, b'1'),
(491, 497, '491_1616855724.pdf', '../../Members/121/497/Attachments/491_1616855724.pdf', '2021-03-27 20:05:24', 121, NULL, NULL, b'1'),
(492, 498, '492_1616855747.pdf', '../../Members/121/498/Attachments/492_1616855747.pdf', '2021-03-27 20:05:47', 121, NULL, NULL, b'1'),
(493, 499, '493_1616855766.pdf', '../../Members/121/499/Attachments/493_1616855766.pdf', '2021-03-27 20:06:06', 121, NULL, NULL, b'1'),
(494, 500, '494_1616855879.pdf', '../../Members/121/500/Attachments/494_1616855879.pdf', '2021-03-27 20:07:59', 121, NULL, NULL, b'1'),
(495, 500, '495_1616855879.pdf', '../../Members/121/500/Attachments/495_1616855879.pdf', '2021-03-27 20:07:59', 121, NULL, NULL, b'1'),
(496, 501, '496_1616856021.pdf', '../../Members/121/501/Attachments/496_1616856021.pdf', '2021-03-27 20:10:21', 121, NULL, NULL, b'1'),
(497, 502, '497_1616856583.pdf', '../../Members/122/502/Attachments/497_1616856583.pdf', '2021-03-27 20:19:43', 122, NULL, NULL, b'1'),
(498, 503, '498_1616856605.pdf', '../../Members/122/503/Attachments/498_1616856605.pdf', '2021-03-27 20:20:05', 122, NULL, NULL, b'1'),
(499, 504, '499_1616856624.pdf', '../../Members/122/504/Attachments/499_1616856624.pdf', '2021-03-27 20:20:24', 122, NULL, NULL, b'1'),
(500, 505, '500_1616856867.pdf', '../../Members/122/505/Attachments/500_1616856867.pdf', '2021-03-27 20:24:27', 122, NULL, NULL, b'1'),
(501, 506, '501_1616857064.pdf', '../../Members/122/506/Attachments/501_1616857064.pdf', '2021-03-27 20:27:44', 122, NULL, NULL, b'1'),
(502, 506, '502_1616857064.pdf', '../../Members/122/506/Attachments/502_1616857064.pdf', '2021-03-27 20:27:44', 122, NULL, NULL, b'1'),
(503, 507, '503_1616857211.pdf', '../../Members/122/507/Attachments/503_1616857211.pdf', '2021-03-27 20:30:11', 122, NULL, NULL, b'1'),
(504, 508, '504_1616857446.pdf', '../../Members/122/508/Attachments/504_1616857446.pdf', '2021-03-27 20:34:06', 122, NULL, NULL, b'1'),
(505, 509, '505_1616857716.pdf', '../../Members/121/509/Attachments/505_1616857716.pdf', '2021-03-27 20:38:36', 121, NULL, NULL, b'1'),
(506, 510, '506_1616857961.pdf', '../../Members/121/510/Attachments/506_1616857961.pdf', '2021-03-27 20:42:41', 121, NULL, NULL, b'1'),
(507, 511, '507_1616858094.pdf', '../../Members/121/511/Attachments/507_1616858094.pdf', '2021-03-27 20:44:54', 121, NULL, NULL, b'1'),
(508, 512, '508_1616858302.pdf', '../../Members/121/512/Attachments/508_1616858302.pdf', '2021-03-27 20:48:22', 121, NULL, NULL, b'1'),
(509, 513, '509_1616858448.pdf', '../../Members/121/513/Attachments/509_1616858448.pdf', '2021-03-27 20:50:48', 121, NULL, NULL, b'1'),
(510, 514, '510_1616858661.pdf', '../../Members/121/514/Attachments/510_1616858661.pdf', '2021-03-27 20:54:21', 121, NULL, NULL, b'1'),
(511, 515, '511_1616860293.pdf', '../../Members/123/515/Attachments/511_1616860293.pdf', '2021-03-27 21:21:33', 123, NULL, NULL, b'1'),
(512, 516, '512_1616860313.pdf', '../../Members/123/516/Attachments/512_1616860313.pdf', '2021-03-27 21:21:53', 123, NULL, NULL, b'1'),
(513, 517, '513_1616860365.pdf', '../../Members/123/517/Attachments/513_1616860365.pdf', '2021-03-27 21:22:45', 123, NULL, NULL, b'1'),
(514, 518, '514_1616860379.pdf', '../../Members/123/518/Attachments/514_1616860379.pdf', '2021-03-27 21:22:59', 123, NULL, NULL, b'1'),
(515, 519, '515_1616860391.pdf', '../../Members/123/519/Attachments/515_1616860391.pdf', '2021-03-27 21:23:11', 123, NULL, NULL, b'1'),
(516, 520, '516_1616860407.pdf', '../../Members/123/520/Attachments/516_1616860407.pdf', '2021-03-27 21:23:27', 123, NULL, NULL, b'1'),
(517, 521, '517_1616860539.pdf', '../../Members/121/521/Attachments/517_1616860539.pdf', '2021-03-27 21:25:39', 121, NULL, NULL, b'1'),
(518, 522, '518_1616860578.pdf', '../../Members/121/522/Attachments/518_1616860578.pdf', '2021-03-27 21:26:18', 121, NULL, NULL, b'1'),
(519, 523, '519_1616860640.pdf', '../../Members/121/523/Attachments/519_1616860640.pdf', '2021-03-27 21:27:20', 121, NULL, NULL, b'1'),
(520, 524, '520_1616860684.pdf', '../../Members/121/524/Attachments/520_1616860684.pdf', '2021-03-27 21:28:04', 121, NULL, NULL, b'1'),
(521, 525, '521_1617030864.pdf', '../../Members/123/525/Attachments/521_1617030864.pdf', '2021-03-29 20:44:24', 123, NULL, NULL, b'1'),
(522, 525, '522_1617030864.pdf', '../../Members/123/525/Attachments/522_1617030864.pdf', '2021-03-29 20:44:24', 123, NULL, NULL, b'1'),
(523, 525, '523_1617030864.pdf', '../../Members/123/525/Attachments/523_1617030864.pdf', '2021-03-29 20:44:24', 123, NULL, NULL, b'1'),
(524, 526, '524_1617190960.pdf', '../../Members/121/526/Attachments/524_1617190960.pdf', '2021-03-31 17:12:40', 121, NULL, NULL, b'1'),
(525, 527, '525_1617191004.pdf', '../../Members/121/527/Attachments/525_1617191004.pdf', '2021-03-31 17:13:24', 121, NULL, NULL, b'1'),
(526, 527, '526_1617191004.pdf', '../../Members/121/527/Attachments/526_1617191004.pdf', '2021-03-31 17:13:24', 121, NULL, NULL, b'1'),
(527, 528, '527_1617191084.pdf', '../../Members/122/528/Attachments/527_1617191084.pdf', '2021-03-31 17:14:44', 122, NULL, NULL, b'1'),
(528, 529, '528_1617191170.pdf', '../../Members/122/529/Attachments/528_1617191170.pdf', '2021-03-31 17:16:10', 122, NULL, NULL, b'1'),
(529, 530, '529_1617191367.pdf', '../../Members/123/530/Attachments/529_1617191367.pdf', '2021-03-31 17:19:27', 123, NULL, NULL, b'1'),
(530, 531, '530_1617449260.pdf', '../../Members/121/531/Attachments/530_1617449260.pdf', '2021-04-03 16:57:40', 121, NULL, NULL, b'1'),
(531, 531, '531_1617449260.pdf', '../../Members/121/531/Attachments/531_1617449260.pdf', '2021-04-03 16:57:40', 121, NULL, NULL, b'1');

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

--
-- Dumping data for table `seller_notes_reported_issues`
--

INSERT INTO `seller_notes_reported_issues` (`ReportID`, `NoteID`, `ReportedBy`, `AgainstDownloadID`, `Remarks`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`) VALUES
(81, 513, 123, 535, 'aeswtr tesw gweh rhg', '2021-04-02 14:56:41', 123, '2021-04-02 14:56:42', 123),
(83, 505, 123, 528, 'dfghbdfg hdfh drfh drfh dh adfhafdh', '2021-04-02 14:58:24', 123, '2021-04-02 14:58:30', 123);

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

--
-- Dumping data for table `seller_notes_reviews`
--

INSERT INTO `seller_notes_reviews` (`ReviewID`, `NoteID`, `ReviewedBy`, `AgainstDownloadID`, `Ratings`, `Comments`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(88, 508, 121, 522, '3', 'fgnhgfnjg', '2021-03-29 11:46:40', 121, '2021-04-01 14:15:57', 121, b'1'),
(89, 507, 121, 521, '5', 'gfhdhdhd', '2021-03-31 11:42:55', 121, '2021-04-01 14:14:56', NULL, b'1'),
(90, 507, 123, 529, '4', 'cvbcbcb', '2021-03-31 11:43:35', 123, '2021-04-01 14:14:59', NULL, b'1'),
(91, 507, 121, 521, '3', 'gfhdhdhd', '2021-03-31 11:42:55', 121, '2021-04-01 14:15:02', NULL, b'1'),
(92, 507, 123, 529, '1', 'cvbcbcb', '2021-03-31 11:43:35', 123, '2021-04-01 14:15:05', NULL, b'1'),
(93, 517, 121, 521, '5', 'gfhdhdhd', '2021-03-31 11:42:55', 121, '2021-04-01 14:18:43', NULL, b'1'),
(95, 502, 121, 542, '4', 'fghdfgdfrgfdgd ', '2021-04-06 19:42:07', 121, NULL, NULL, b'1');

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

--
-- Dumping data for table `system_configuration`
--

INSERT INTO `system_configuration` (`SysConfigID`, `Key`, `Value`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES
(1, 'SupportEmailAddress', 'supprot@nmp.com', '2021-04-03 21:08:21', NULL, '2021-04-03 21:38:03', 126, b'1'),
(2, 'SupportContactNumber', '9856745896', '2021-04-03 21:08:21', NULL, '2021-04-03 21:38:04', 126, b'1'),
(3, 'EmailAddresssesForNotify', 's@fsaf.asf', '2021-04-03 21:08:21', NULL, '2021-04-03 21:38:04', 126, b'1'),
(4, 'FBICON', 'https://www.facebook.com/', '2021-04-03 21:08:21', NULL, '2021-04-06 14:44:11', 126, b'1'),
(5, 'TWITTERICON', 'https://twitter.com/', '2021-04-03 21:08:21', NULL, '2021-04-06 14:44:31', 126, b'1'),
(6, 'LNICON ', 'https://in.linkedin.com/', '2021-04-03 21:08:21', NULL, '2021-04-06 14:44:49', 126, b'1'),
(7, 'DefaultNoteDisplayPicture', '../images/Default-DP/DefaultNoteDP.png', '2021-04-03 21:47:49', NULL, '2021-04-04 13:30:32', 126, b'1'),
(8, 'DefaultMemberDisplayPicture', '../images/Default-DP/DefaultUserDP.png', '2021-04-03 21:47:49', NULL, '2021-04-04 13:40:57', 126, b'1');

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
(121, 3, 'John', 'Waty', 'a@gmail.com', 'sss', b'1', '2021-02-23 19:34:24', NULL, '2021-04-01 20:46:51', NULL, b'1'),
(122, 3, 'Tom', 'Hary', 'b@gmail.com', 'sss', b'1', '2021-04-09 19:35:28', NULL, '2021-04-01 21:24:54', NULL, b'1'),
(123, 3, 'Sherlock', 'Holmes', 'c@gmail.com', 'sss', b'1', '2020-11-17 21:00:06', NULL, '2021-04-01 20:45:50', NULL, b'1'),
(124, 2, 'Jay', 'Patel', 'z@gmail.com', 'sss', b'1', '2021-03-29 11:59:57', NULL, '2021-04-03 14:10:57', 126, b'1'),
(125, 2, 'Bruce', 'Wayne', 'j@gmail.com', 'sss', b'1', '2021-03-31 11:11:55', NULL, '2021-04-03 16:36:37', 125, b'1'),
(126, 1, 'Joy', 'Raty', 'q@gmail.com', 'sss', b'1', '2021-04-02 20:26:07', NULL, NULL, NULL, b'1'),
(138, 2, 'dfsfsd', 'sadfsaf', 'g@gmail.com', 'sss', b'1', '2021-04-06 15:21:49', 126, '2021-04-06 15:22:29', 138, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `ProfileID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` int(11) DEFAULT NULL,
  `SecondaryEmail` varchar(100) DEFAULT NULL,
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
(55, 122, NULL, NULL, '', '1', '7895645893', '../../Members/122/DP_1616854858.png', 'fdasf', 'waf', 'fawsfaw', 'afw', 'fafaw', 'Brazil', NULL, NULL, '2021-03-27 19:47:21', 122, '2021-03-27 19:50:58', 122),
(68, 124, NULL, NULL, 'gmail@gmail.com', '86', '4572777237', '../../Members/124/DP_1617120188.png', '', '', '', '', '', '', NULL, NULL, '2021-03-30 21:26:54', 124, '2021-04-03 14:10:52', 126),
(69, 125, NULL, NULL, NULL, '1', '4587963589', '../../Members/125/DP_1617169430.jpg', '', '', '', '', '', '', NULL, NULL, '2021-03-31 11:13:17', 125, '2021-04-03 16:36:37', 125),
(70, 121, '2021-04-28', 1, NULL, '91', '7895642569', '../../Members/121/DP_1617867402.jpg', 'C-31, Shdse street', 'Hscas way', 'Bawisa', 'Wreds', '786187', 'Brazil', 'University of Brazil', NULL, '2021-04-01 16:34:32', 121, '2021-04-08 13:06:42', 121),
(75, 133, NULL, NULL, NULL, '86', '7897897896', NULL, '', '', '', '', '', '', NULL, NULL, '2021-04-06 15:14:07', 126, NULL, NULL),
(76, 134, NULL, NULL, NULL, '1', '4747474747', NULL, '', '', '', '', '', '', NULL, NULL, '2021-04-06 15:16:41', 126, NULL, NULL),
(77, 135, NULL, NULL, NULL, '86', '4589899669', NULL, '', '', '', '', '', '', NULL, NULL, '2021-04-06 15:18:45', 126, NULL, NULL),
(78, 136, NULL, NULL, NULL, '61', '7898966358', NULL, '', '', '', '', '', '', NULL, NULL, '2021-04-06 15:19:27', 126, NULL, NULL),
(79, 137, NULL, NULL, NULL, '86', '4747474747', NULL, '', '', '', '', '', '', NULL, NULL, '2021-04-06 15:19:49', 126, NULL, NULL),
(80, 138, NULL, NULL, NULL, '55', '4589899669', '../../Members/138/DP_1617702749.png', '', '', '', '', '', '', NULL, NULL, '2021-04-06 15:21:49', 126, '2021-04-06 15:22:29', 138);

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
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `DownloadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- AUTO_INCREMENT for table `note_categories`
--
ALTER TABLE `note_categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `note_types`
--
ALTER TABLE `note_types`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reference_data`
--
ALTER TABLE `reference_data`
  MODIFY `RefID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seller_notes`
--
ALTER TABLE `seller_notes`
  MODIFY `NoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541;

--
-- AUTO_INCREMENT for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  MODIFY `AttachmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=542;

--
-- AUTO_INCREMENT for table `seller_notes_reported_issues`
--
ALTER TABLE `seller_notes_reported_issues`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `system_configuration`
--
ALTER TABLE `system_configuration`
  MODIFY `SysConfigID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `ProfileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

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
