-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 05:10 PM
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
(519, 505, 122, 121, b'1', NULL, b'1', '2021-03-27 20:31:07', b'0', NULL, 'Bootstrap', 'IT', '2021-03-27 20:31:07', 121, NULL, NULL),
(520, 506, 122, 121, b'0', NULL, b'0', '2021-03-27 20:31:14', b'1', '165', 'Indian History', 'History', '2021-03-27 20:31:14', 121, NULL, NULL),
(521, 507, 122, 121, b'1', NULL, b'1', '2021-03-27 20:31:44', b'0', NULL, 'Banking', 'Account', '2021-03-27 20:31:44', 121, NULL, NULL),
(522, 508, 122, 121, b'1', NULL, b'0', '2021-03-27 20:34:49', b'1', '45', 'Computer Science', 'Computer Science', '2021-03-27 20:34:49', 121, '2021-03-27 20:35:37', NULL),
(523, 509, 121, 122, b'1', NULL, b'0', '2021-03-27 20:51:51', b'1', '47', 'Computer Hardwere', 'Computer Science', '2021-03-27 20:51:51', 122, '2021-03-27 20:53:04', NULL),
(524, 511, 121, 122, b'1', NULL, b'1', '2021-03-27 20:52:05', b'0', NULL, 'CMS', 'IT', '2021-03-27 20:52:05', 122, NULL, NULL),
(525, 512, 121, 122, b'1', NULL, b'1', '2021-03-27 20:52:14', b'0', NULL, 'Bootstrap3', 'IT', '2021-03-27 20:52:14', 122, NULL, NULL),
(526, 513, 121, 122, b'0', NULL, b'0', '2021-03-27 20:52:25', b'1', '75', 'History of Science', 'Science', '2021-03-27 20:52:25', 122, NULL, NULL),
(527, 514, 121, 122, b'1', NULL, b'0', '2021-03-27 20:54:56', b'1', '49', 'demo note 2', 'Science', '2021-03-27 20:54:56', 122, '2021-03-27 20:55:18', NULL),
(528, 505, 122, 123, b'1', NULL, b'1', '2021-03-27 21:00:54', b'0', NULL, 'Bootstrap', 'IT', '2021-03-27 21:00:54', 123, NULL, NULL),
(529, 507, 122, 123, b'1', NULL, b'1', '2021-03-27 21:01:10', b'0', NULL, 'Banking', 'Account', '2021-03-27 21:01:10', 123, NULL, NULL),
(530, 506, 122, 123, b'0', NULL, b'0', '2021-03-27 21:01:18', b'1', '165', 'Indian History', 'History', '2021-03-27 21:01:18', 123, '2021-03-27 21:04:07', NULL),
(531, 509, 121, 123, b'0', NULL, b'0', '2021-03-27 21:01:31', b'1', '47', 'Computer Hardwere', 'Computer Science', '2021-03-27 21:01:31', 123, NULL, NULL),
(532, 510, 121, 123, b'1', NULL, b'0', '2021-03-27 21:01:43', b'1', '12', 'JQuery', 'IT', '2021-03-27 21:01:43', 123, '2021-03-27 21:03:40', NULL),
(533, 511, 121, 123, b'1', NULL, b'1', '2021-03-27 21:01:54', b'0', NULL, 'CMS', 'IT', '2021-03-27 21:01:54', 123, NULL, NULL),
(534, 512, 121, 123, b'1', NULL, b'1', '2021-03-27 21:02:01', b'0', NULL, 'Bootstrap3', 'IT', '2021-03-27 21:02:01', 123, NULL, NULL),
(535, 513, 121, 123, b'1', NULL, b'0', '2021-03-27 21:02:08', b'1', '75', 'History of Science', 'Science', '2021-03-27 21:02:08', 123, '2021-03-27 21:03:43', NULL),
(536, 514, 121, 123, b'0', NULL, b'0', '2021-03-27 21:02:27', b'1', '49', 'demo note 2', 'Science', '2021-03-27 21:02:27', 123, NULL, NULL);

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
(496, 121, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-01 20:06:28', 'title1', 1, '../../Members/121/496/DP_1616855524.png', NULL, NULL, 'sfdgsfdg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:02:04', 121, '2021-03-27 20:06:55', NULL, b'1'),
(497, 121, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-02 20:06:30', 'title2', 2, '../../Members/121/497/DP_1616855724.png', NULL, NULL, 'sadasd', NULL, NULL, NULL, NULL, NULL, b'1', '45', '../../Members/121/497/Preview_1616855724.pdf', '2021-03-27 20:05:24', 121, '2021-03-27 20:11:27', NULL, b'1'),
(498, 121, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-10 20:06:32', 'title3', 3, NULL, NULL, NULL, 'sdfsf', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:05:47', 121, '2021-04-10 20:06:58', NULL, b'1'),
(499, 121, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-06 20:06:36', 'title4', 1, NULL, NULL, NULL, 'sdfdsf', NULL, NULL, NULL, NULL, NULL, b'1', '47', '../../Members/121/499/Preview_1616855766.pdf', '2021-03-27 20:06:06', 121, '2021-03-27 20:11:31', NULL, b'1'),
(500, 121, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-02 20:08:15', 'title5', 4, '../../Members/121/500/DP_1616855879.png', NULL, NULL, 'sdasdas', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:07:59', 121, '2021-03-27 20:11:34', NULL, b'1'),
(501, 121, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-03 20:10:40', 'title6', 5, NULL, NULL, NULL, 'sdgsdg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:10:21', 121, '2021-03-27 20:11:37', NULL, b'1'),
(502, 122, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-02 20:20:49', 'title1', 1, NULL, NULL, NULL, 'sadasd', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:19:43', 122, '2021-02-23 20:21:01', NULL, b'1'),
(503, 122, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-02 20:20:51', 'title2', 3, NULL, NULL, NULL, 'asdas', NULL, NULL, NULL, NULL, NULL, b'1', '69', '../../Members/122/503/Preview_1616856605.pdf', '2021-03-27 20:20:05', 122, '2021-04-06 20:21:04', NULL, b'1'),
(504, 122, 10, NULL, 'Lorem Ipsum is simply dummy text', '2021-03-01 20:20:53', 'title3', 3, NULL, NULL, NULL, 'sadsadsa', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:20:24', 122, '2020-10-04 20:21:08', NULL, b'1'),
(505, 122, 9, NULL, NULL, '2021-03-27 20:24:59', 'Bootstrap', 1, NULL, 2, 456, 'Loaw adniw nosa iv aafnj  asifwa fi wfi afiwq cibcoas fnhasfw fiwbfc asfcnasio asfasbfwic b casbcadbwa fafibafafw asfawfzdfa wqiifb ajw faa qwj q iuqwc asfdbas', 'Oxford University', 2, 'bootstrap', 'ESDD5', 'Matt Blanc', b'0', '0', NULL, '2021-03-27 20:24:27', 122, '2021-03-27 20:48:05', 122, b'1'),
(506, 122, 9, NULL, NULL, '2021-01-06 20:27:57', 'Indian History', 4, '../../Members/122/506/DP_1616857064.png', 1, 789, 'sadw jabiw is simply dummy text sadajwqb  ciqawbc ciqwbcv iawb sdgvge fqwf vsgvweqgv', 'Gyan University', 1, 'history', 'WNHDD5', 'Nsaw Tywe', b'1', '165', '../../Members/122/506/Preview_1616857064.pdf', '2021-03-27 20:27:44', 122, '2021-03-27 20:51:26', NULL, b'1'),
(507, 122, 9, NULL, NULL, '2021-02-05 20:30:21', 'Banking', 5, NULL, 4, NULL, 'jsdheb sdaiho eafihofa feiofa nefhi sfaiho sfahiosfa fwa9puegnjlbdn maswdihoewquggds nasfuhafhvvsd ', 'Can University', 3, 'Course3', 'GDGW6Y', NULL, b'0', '0', NULL, '2021-03-27 20:30:11', 122, '2021-03-27 20:30:24', NULL, b'1'),
(508, 122, 9, NULL, NULL, '2021-05-15 20:34:13', 'Computer Science', 2, '../../Members/122/508/DP_1616857446.png', 2, NULL, 'dfghdh sddfg sg sseges g we ihowebfg agfipqewghsad ngaiogeaq bgaeqwibg weqagpoewq ewaqige gvaeiogea gkaeig awesgiwqae gvsadg', 'Oxford University', 2, 'computer science', 'WD32', NULL, b'1', '45', '../../Members/122/508/Preview_1616857446.pdf', '2021-03-27 20:34:06', 122, '2021-03-27 20:40:06', NULL, b'1'),
(509, 121, 9, NULL, NULL, '2020-08-06 20:38:43', 'Computer Hardwere', 2, '../../Members/121/509/DP_1616857716.png', 4, 153, 'dseg fte stge ewajura safkiela faeiorw dfawkjqefrb aegklj esafb e qewur oqweur oiqwe qw qioweuroiqewu rqewiouroq wroiuqwoirwoiwqwqroqroiqogho sdfkudfahofsfsd', 'Abc University', 4, 'computer science', NULL, NULL, b'1', '47', '../../Members/121/509/Preview_1616857716.pdf', '2021-03-27 20:38:36', 121, '2021-03-27 20:40:13', NULL, b'1'),
(510, 121, 9, NULL, NULL, '2021-01-31 20:42:46', 'JQuery', 1, '../../Members/121/510/DP_1616857961.jpg', NULL, NULL, 'dasgsdgsgse oifhsae rfqwhrfhwqeorfhoqwi oqh qwehrowqehroqewhr qewr qr hqowr qr hqwuor hwqrqw r wrh wq rwqhrowqru hhfdsfhsdhfksd', 'Can University', 3, NULL, NULL, NULL, b'1', '12', '../../Members/121/510/Preview_1616857961.pdf', '2021-03-27 20:42:41', 121, '2021-03-27 20:42:53', NULL, b'1'),
(511, 121, 9, NULL, NULL, '2021-03-02 20:45:06', 'CMS', 1, '../../Members/121/511/DP_1616858094.jpg', NULL, NULL, 'CMS project with PHP', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 20:44:54', 121, '2021-03-27 20:45:08', NULL, b'1'),
(512, 121, 9, NULL, NULL, '2020-08-05 20:48:32', 'Bootstrap3', 1, '../../Members/121/512/DP_1616858302.jpg', 2, 456, 'sdasw qewarfqwerqwrqwrfwqe wq wqe rfqe wrqeqwrqe rqer qe', 'Gyan University', 1, 'bootstrap', 'DA12W', NULL, b'0', '0', NULL, '2021-03-27 20:48:22', 121, '2021-03-27 20:48:38', NULL, b'1'),
(513, 121, 9, NULL, NULL, '2020-10-29 20:50:56', 'History of Science', 3, NULL, 1, 700, 'dfhrd we twe ew tetewtewt ewttwe  tgewgsfdgsd gsrdg sdfgsd gsdgds gsfdgfwefgwegdfbhfdajhadtfbsfd sewd ', 'Kant University', 5, 'science', NULL, 'Jert Yer', b'1', '75', '../../Members/121/513/Preview_1616858448.pdf', '2021-03-27 20:50:48', 121, '2021-03-27 20:50:59', NULL, b'1'),
(514, 121, 9, NULL, NULL, '2020-09-24 20:54:36', 'demo note 2', 3, '../../Members/121/514/DP_1616858661.png', NULL, NULL, 'sfdgsg', NULL, NULL, NULL, NULL, NULL, b'1', '49', '../../Members/121/514/Preview_1616858661.pdf', '2021-03-27 20:54:21', 121, '2021-03-27 20:54:39', NULL, b'1'),
(515, 123, 9, NULL, NULL, '2021-03-09 21:24:13', 'title1', 1, NULL, 1, NULL, 'sdgsdgsdg g esgteswgt ewg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:21:33', 123, '2021-03-27 21:24:14', NULL, b'1'),
(516, 123, 9, NULL, NULL, '2021-06-11 21:24:30', 'title2', 2, NULL, 3, NULL, 'sd gsdgs gg sg g', NULL, NULL, NULL, NULL, NULL, b'1', '78', '../../Members/123/516/Preview_1616860313.pdf', '2021-03-27 21:21:53', 123, '2021-03-27 21:24:32', NULL, b'1'),
(517, 123, 9, NULL, NULL, '2020-06-10 21:24:27', 'title3', 3, '../../Members/123/517/DP_1616860365.jpg', 4, NULL, 'dfgsd setgew tgwegtw', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:22:45', 123, '2021-03-27 21:24:30', NULL, b'1'),
(518, 123, 9, NULL, NULL, '2020-11-17 21:24:24', 'title4', 4, NULL, 1, NULL, ' erwetew twe', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:22:59', 123, '2021-03-27 21:24:26', NULL, b'1'),
(519, 123, 9, NULL, NULL, '2021-03-01 21:24:21', 'title5', 5, NULL, 2, NULL, 'sfdgsdgsdfg', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:23:11', 123, '2021-03-27 21:24:23', NULL, b'1'),
(520, 123, 9, NULL, NULL, '2021-04-23 21:24:17', 'title6', 4, NULL, NULL, NULL, 'sfgser yter', NULL, NULL, NULL, NULL, NULL, b'1', '1', '../../Members/123/520/Preview_1616860407.pdf', '2021-03-27 21:23:27', 123, '2021-03-27 21:24:20', NULL, b'1'),
(521, 121, 9, NULL, NULL, '2021-04-03 21:26:34', 'demo1', 4, '../../Members/121/521/DP_1616860539.jpg', 3, NULL, 'asdasdasd', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:25:39', 121, '2021-03-27 21:26:37', NULL, b'1'),
(522, 121, 9, NULL, NULL, '2021-06-25 21:26:38', 'demo2', 2, '../../Members/121/522/DP_1616860578.png', 2, 455, 'fsdaferewqr wqe', 'Can University', 3, NULL, NULL, NULL, b'1', '45', '../../Members/121/522/Preview_1616860578.pdf', '2021-03-27 21:26:18', 121, '2021-03-27 21:26:40', NULL, b'1'),
(523, 121, 9, NULL, NULL, '2020-12-08 21:28:18', 'demo3', 3, '../../Members/121/523/DP_1616860640.png', NULL, NULL, 'asdsa fdrawrf awrfwa fwqf wqfewq gfweg ew', NULL, NULL, NULL, NULL, NULL, b'0', '0', NULL, '2021-03-27 21:27:20', 121, '2021-03-27 21:28:21', NULL, b'1'),
(524, 121, 9, NULL, NULL, NULL, 'demo4', 1, '../../Members/121/524/DP_1616860684.png', 2, 124, 'sdfsdfsdfsfwerfwe we weftw gwegw gwe gwewet w', 'Gyan University', 1, 'science', NULL, NULL, b'0', '0', NULL, '2021-03-27 21:28:04', 121, '2021-03-27 21:28:18', NULL, b'1');

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
(520, 524, '520_1616860684.pdf', '../../Members/121/524/Attachments/520_1616860684.pdf', '2021-03-27 21:28:04', 121, NULL, NULL, b'1');

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
(71, 512, 122, 525, 'sdgetrf wegtew twegtwetrgwr', '2021-03-27 20:57:18', 122, NULL, NULL),
(72, 508, 121, 522, 'fdg rsgr grgrew', '2021-03-27 20:57:59', 121, NULL, NULL),
(73, 511, 123, 533, 'wetew twetwe t we', '2021-03-27 21:04:30', 123, NULL, NULL),
(74, 512, 123, 534, 'fdbdf erfhy eryer yert', '2021-03-27 21:04:56', 123, NULL, NULL),
(75, 507, 123, 529, 'dreyer er ery ery ery er', '2021-03-27 21:06:01', 123, NULL, NULL);

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
(58, 509, 122, 523, '4', 'Very informative note', '2021-03-27 20:56:39', 122, NULL, NULL, b'1'),
(59, 511, 122, 524, '2', 'BDVs sdafiua dsvbsdad jbg gjgk bsg gh sdgfhgshgushg shguhgu siusgf asg', '2021-03-27 20:57:12', 122, NULL, NULL, b'1'),
(60, 514, 122, 527, '3', 'Average sdjk sfjaf dgikae ejeqitrfheah faewhfr eqarfu qaewfru qwrfu qwrfgqfq qwe q', '2021-03-27 20:57:42', 122, NULL, NULL, b'1'),
(61, 507, 121, 521, '5', 'wee ewtrewtyer y eryer yer y er yer yerty', '2021-03-27 20:58:13', 121, NULL, NULL, b'1'),
(62, 505, 121, 519, '1', 'dfryerd ger rewtwrtwr rwe', '2021-03-27 20:58:21', 121, NULL, NULL, b'1'),
(63, 513, 123, 535, '4', 'sdew wet ewt wet wet', '2021-03-27 21:04:19', 123, NULL, NULL, b'1'),
(64, 512, 123, 534, '5', 'te wetw t', '2021-03-27 21:04:24', 123, NULL, NULL, b'1'),
(65, 510, 123, 532, '5', 'sdg sdgsdegt rwet wetw ', '2021-03-27 21:05:08', 123, NULL, NULL, b'1'),
(66, 507, 123, 529, '2', ' sdfse eswtew wt gw ', '2021-03-27 21:05:14', 123, NULL, NULL, b'1'),
(67, 505, 123, 528, '5', 'w rwe trewt wetwe t', '2021-03-27 21:05:23', 123, NULL, NULL, b'1');

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
(121, 3, 'John', 'Waty', 'a@gmail.com', 'aaaaa1!A', b'1', '2021-03-27 19:34:24', NULL, '2021-03-27 21:40:13', NULL, b'1'),
(122, 3, 'Tom', 'Hary', 'b@gmail.com', 'aaaaa1!A', b'1', '2021-03-27 19:35:28', NULL, '2021-03-27 21:40:16', NULL, b'1'),
(123, 3, 'Sherlock', 'Holmes', 'c@gmail.com', 'aaaaa1!A', b'1', '2021-03-27 21:00:06', NULL, '2021-03-27 21:40:18', NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `ProfileID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DOB` date DEFAULT NULL,
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
(49, 88, NULL, NULL, '', '55', '7899654563', '../../Members/88/DP_1616605038.png', 'sdf', 'dsfsd', 'sfsdf', 'fsdf', 'sdfsd', 'Brazil', NULL, NULL, '2021-03-23 11:32:02', 88, '2021-03-24 22:27:18', 88),
(51, 89, NULL, NULL, '', '86', '4566897548', '../../Members/89/DP_1616479502.png', 'fgdfg', 'dgfg', 'dfgfgdg', 'gdfgdfg', 'dfgdf', 'India', NULL, NULL, '2021-03-23 11:34:49', 89, '2021-03-23 11:35:02', 89),
(52, 90, NULL, NULL, '', '1-684', '4578965262', '../../Members/90/DP_1616479563.jpg', 'dfgdfgdf', 'gdfgfd', 'dfgdfgfd', 'gdfg', 'gdfg', 'Australia', NULL, NULL, '2021-03-23 11:35:37', 90, '2021-03-23 11:36:03', 90),
(53, 118, NULL, NULL, '', '91', '4578965623', '../../Members/118/DP_1616479762.png', 'sdfsd', 'fsdf', 'fsdf', 'sdfsd', 'sdfs', 'Australia', NULL, NULL, '2021-03-23 11:39:01', 118, '2021-03-23 11:39:22', 118),
(54, 121, NULL, NULL, '', '91', '7895645896', '../../Members/121/DP_1616854893.png', 'asfasfafge', 'aagfasdgag', 'asga', 'ggasdgagag', 'agasdg', 'Brazil', NULL, NULL, '2021-03-27 19:46:34', 121, '2021-03-27 19:51:33', 121),
(55, 122, NULL, NULL, '', '1', '7895645893', '../../Members/122/DP_1616854858.png', 'fdasf', 'waf', 'fawsfaw', 'afw', 'fafaw', 'Brazil', NULL, NULL, '2021-03-27 19:47:21', 122, '2021-03-27 19:50:58', 122),
(56, 123, NULL, NULL, '', '1', '4444444444', NULL, 'sdfds', 'fsdfsd', 'sdfsdf', 'fsdf', 'sdfsdfs', 'Brazil', NULL, NULL, '2021-03-27 21:00:50', 123, NULL, NULL);

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
  MODIFY `DownloadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=537;

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
  MODIFY `NoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=525;

--
-- AUTO_INCREMENT for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  MODIFY `AttachmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=521;

--
-- AUTO_INCREMENT for table `seller_notes_reported_issues`
--
ALTER TABLE `seller_notes_reported_issues`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `system_configuration`
--
ALTER TABLE `system_configuration`
  MODIFY `SysConfigID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `ProfileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
