-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2011 at 10:41 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` char(36) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privacy` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `privacy`, `status`, `last_login`, `created`, `modified`) VALUES
('1', 'admin', '202cb962ac59075b964b07152d234b70', NULL, 1, '2011-01-16 09:23:30', NULL, '2010-12-14 01:54:14'),
('4d0666a7-e74c-4393-8f5f-089839e9a00e', 'sys', '202cb962ac59075b964b07152d234b70', NULL, 1, '2010-12-14 02:03:04', '2010-12-14 01:32:07', '2010-12-14 01:50:01'),
('4d07119b-0b34-4c5e-9bc7-06d039e9a00e', 'kimhue', '71a6b6f094346a8832df801c8428ea06', NULL, 1, '2010-12-14 18:46:36', '2010-12-14 13:41:31', '2010-12-14 13:41:31'),
('4d075046-7ca0-46e5-b4fd-067c39e9a00e', 'nhocvp', 'ff79c6734ea8c466208ee82da98fb8c9', NULL, 1, '2010-12-15 14:30:13', '2010-12-14 18:08:54', '2010-12-14 18:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` char(36) NOT NULL,
  `category_type_id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `key` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_type_id`, `name`, `key`, `created`, `modified`) VALUES
('4cb3443d-5', '4cb34425-d658-4619-a2c0-055c39e9a00e', 'Tiáº¿ng Anh', '', '2010-10-12 00:07:09', '2010-12-12 23:31:42'),
('4cb34558-6', '4cb34425-d658-4619-a2c0-055c39e9a00e', 'Tiáº¿ng PhÃ¡p', '', '2010-10-12 00:11:52', '2010-12-12 23:31:52'),
('4d04f903-4d8c-4da6-aa90-018039e9a00e', '4cb34425-d658-4619-a2c0-055c39e9a00e', 'Tiáº¿ng Viá»‡t', '', '2010-12-12 23:32:03', '2010-12-12 23:32:03'),
('4cb73608-17e4-419a-b717-06f039e9a00e', '4cb735df-32b0-4108-9a08-06f039e9a00e', 'NgÆ°á»i Viá»‡t Nam', '', '2010-10-14 23:55:36', '2010-10-14 23:55:36'),
('4cb73625-060c-4c76-a0da-06f039e9a00e', '4cb735df-32b0-4108-9a08-06f039e9a00e', 'Viá»‡t kiá»u', '', '2010-10-14 23:56:05', '2010-10-14 23:56:05'),
('4cb73633-bf18-4fe1-aa82-06f039e9a00e', '4cb735df-32b0-4108-9a08-06f039e9a00e', 'NgÆ°á»i nÆ°á»›c ngoÃ i', '', '2010-10-14 23:56:19', '2010-10-15 01:11:37'),
('4cba8ce2-e488-4fd3-9ef9-062c39e9a00e', '4cba8cd1-2ad4-4e54-bf24-062c39e9a00e', 'Cá»¥ thá»ƒ ', 'Specified', '2010-10-17 12:42:58', '2010-10-17 12:42:58'),
('4cba8ceb-36c4-4e63-96c7-062c39e9a00e', '4cba8cd1-2ad4-4e54-bf24-062c39e9a00e', 'Cáº¡nh tranh', 'Competitive', '2010-10-17 12:43:07', '2010-10-17 12:43:07'),
('4cba8cf5-6fe8-4966-a712-062c39e9a00e', '4cba8cd1-2ad4-4e54-bf24-062c39e9a00e', 'Thá»a thuáº­n', 'Negotiable', '2010-10-17 12:43:17', '2010-10-17 12:43:17'),
('4cbf31e7-d7fc-4b30-b917-024439e9a00e', '4cbf317c-b5c0-439e-b0c2-024439e9a00e', 'Ãt hÆ¡n 10', '10', '2010-10-21 01:16:07', '2010-10-21 01:16:07'),
('4cbf31f6-2298-4b1e-8d9e-024439e9a00e', '4cbf317c-b5c0-439e-b0c2-024439e9a00e', '10 - 24', '10-24', '2010-10-21 01:16:22', '2010-12-20 14:53:40'),
('4cbf3213-2744-4bed-b488-024439e9a00e', '4cbf317c-b5c0-439e-b0c2-024439e9a00e', '25 - 99', '25-99', '2010-10-21 01:16:51', '2010-12-20 14:54:05'),
('4cc08759-aac4-4e86-8745-0f1439e9a00e', '4cc086ef-2fa0-44e4-993d-0f1439e9a00e', 'SÆ¡ cáº¥p', 'Beginner', '2010-10-22 01:32:57', '2010-10-22 01:32:57'),
('4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', '4cc086ef-2fa0-44e4-993d-0f1439e9a00e', 'Trung cáº¥p', 'Intermediate', '2010-10-22 01:33:17', '2010-10-22 01:33:17'),
('4cc08785-c004-4657-a8ff-0f1439e9a00e', '4cc086ef-2fa0-44e4-993d-0f1439e9a00e', 'Cao cáº¥p', 'Advanced', '2010-10-22 01:33:41', '2010-10-22 01:33:41'),
('4d0f0b79-f5ac-452e-857c-063439e9a00e', '4cbf317c-b5c0-439e-b0c2-024439e9a00e', '100 - 499', '', '2010-12-20 14:53:29', '2010-12-20 14:53:29'),
('4d0f0bb7-3ce0-4489-a5bf-063439e9a00e', '4cbf317c-b5c0-439e-b0c2-024439e9a00e', 'HÆ¡n 500', '', '2010-12-20 14:54:31', '2010-12-20 14:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE IF NOT EXISTS `category_types` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`id`, `name`, `description`, `created`, `modified`) VALUES
('4cb34425-d658-4619-a2c0-055c39e9a00e', 'Language', 'NgÃ´n ngá»¯', '2010-10-12 00:06:45', '2010-12-12 22:48:19'),
('4cb735df-32b0-4108-9a08-06f039e9a00e', 'Nationality', 'Quá»‘c tá»‹ch', '2010-10-14 23:54:55', '2010-12-12 22:49:56'),
('4cba8cd1-2ad4-4e54-bf24-062c39e9a00e', 'SalaryRange', 'Má»©c lÆ°Æ¡ng', '2010-10-17 12:42:41', '2010-12-12 22:53:11'),
('4cbf317c-b5c0-439e-b0c2-024439e9a00e', 'CompanySize', 'Quy mÃ´ cÃ´ng ty', '2010-10-21 01:14:20', '2010-12-12 22:53:19'),
('4cc086ef-2fa0-44e4-993d-0f1439e9a00e', 'Proficiency', 'TrÃ¬nh Ä‘á»™', '2010-10-22 01:31:11', '2010-12-12 22:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` char(36) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created`, `modified`) VALUES
('4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Viá»‡t Nam', '2010-10-07 00:15:53', '2010-12-12 00:38:17'),
('4d0f0729-8238-408d-b54d-063439e9a00e', 'NÆ°á»›c ngoÃ i', '2010-12-20 14:35:05', '2010-12-20 14:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `degree_levels`
--

CREATE TABLE IF NOT EXISTS `degree_levels` (
  `id` char(36) NOT NULL,
  `level_name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree_levels`
--

INSERT INTO `degree_levels` (`id`, `level_name`, `created`, `modified`) VALUES
('4cbf1bee-9d70-4c10-84e4-024439e9a00e', 'Trung há»c', '2010-10-20 23:42:22', '2010-10-20 23:42:22'),
('4cbf1bf4-f454-4fbd-8367-024439e9a00e', 'Trung cáº¥p', '2010-10-20 23:42:28', '2010-10-20 23:42:28'),
('4cbf1bfb-aca8-464d-b054-024439e9a00e', 'Cao Ä‘áº³ng', '2010-10-20 23:42:35', '2010-10-20 23:42:35'),
('4cbf1c08-01c4-4977-a26d-024439e9a00e', 'Cá»­ nhÃ¢n', '2010-10-20 23:42:48', '2010-10-20 23:42:48'),
('4cbf1c0d-3100-4db9-85c1-024439e9a00e', 'Ká»¹ sÆ°', '2010-10-20 23:42:53', '2010-10-20 23:42:53'),
('4cbf1c13-f44c-4e06-a45c-024439e9a00e', 'Sau Ä‘áº¡i há»c', '2010-10-20 23:42:59', '2010-10-20 23:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE IF NOT EXISTS `employers` (
  `id` char(36) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_size` char(36) NOT NULL,
  `company_profile` text,
  `company_logo` blob,
  `address` varchar(100) NOT NULL,
  `country_id` char(36) NOT NULL,
  `province_id` char(36) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_position` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `actived` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `email`, `password`, `company_name`, `company_size`, `company_profile`, `company_logo`, `address`, `country_id`, `province_id`, `website`, `contact_name`, `contact_position`, `telephone`, `mobile`, `fax`, `created`, `modified`, `last_login`, `actived`) VALUES
('4c9c60ec-8a98-44dd-b25f-08a839e9a00e', 'example@gmail.com', '202cb962ac59075b964b07152d234b70', 'Kim Thuáº­n Phong', '4cbf3213-2744-4bed-b488-024439e9a00e', '', '', '222 ÄÆ°á»ng 1A', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'www.ktpfan.com', 'PhÃ¹ng ChÃ­ NguyÃªn', '', '37528873', '', '', NULL, '2010-12-20 23:37:17', '2011-01-16 08:18:42', 1),
('4cc7a072-7b00-464a-b27d-0fac39e9a00e', 'chinguyen262004@yahoo.com', '202cb962ac59075b964b07152d234b70', 'ABC', '4cbf31e7-d7fc-4b30-b917-024439e9a00e', '123', '', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', '123', 'Nguyá»…n VÄƒn A', 'GiÃ¡m Ä‘á»‘c', '122222', '1221111', '123444', '2010-10-27 10:45:54', '2010-10-27 10:45:54', '2010-11-26 01:17:27', 1),
('4cd2696a-dfb4-4948-b9cc-0a1439e9a00e', 'nhocvp@yahoo.com', '202cb962ac59075b964b07152d234b70', 'NVP', '4cbf3213-2744-4bed-b488-024439e9a00e', 'CÃ´ng ty má»›i thÃ nh láº­p Ä‘Æ°á»£c 5 phÃºt', '', 'á»ž Ä‘Ã¢u Ä‘Ã³', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', 'www.nhocvp.com', 'Nhoc vp', 'Tá»•ng giÃ¡m Ä‘á»‘c', '00000001', '', '', '2010-11-04 15:06:02', '2010-12-14 01:58:01', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` char(36) NOT NULL,
  `employer_id` char(36) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_size` char(36) NOT NULL,
  `company_profile` text,
  `company_website` varchar(50) DEFAULT NULL,
  `company_address` varchar(50) NOT NULL,
  `country_id` char(36) NOT NULL,
  `province_id` char(36) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_position` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_code` varchar(50) DEFAULT NULL,
  `job_level_id` char(36) NOT NULL,
  `job_type_id` char(36) NOT NULL,
  `degree_level_id` char(36) NOT NULL,
  `job_categories` varchar(200) NOT NULL,
  `job_locations` varchar(200) NOT NULL,
  `year_experience` smallint(6) DEFAULT NULL,
  `salary_range` char(36) NOT NULL,
  `minimun_salary` decimal(10,0) DEFAULT NULL,
  `maximun_salary` decimal(10,0) DEFAULT NULL,
  `job_description` text NOT NULL,
  `job_requirement` text,
  `application_language` char(36) NOT NULL,
  `priority` tinyint(4) DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `approved` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `company_name`, `company_size`, `company_profile`, `company_website`, `company_address`, `country_id`, `province_id`, `contact_name`, `contact_position`, `telephone`, `mobile`, `fax`, `email`, `job_title`, `job_code`, `job_level_id`, `job_type_id`, `degree_level_id`, `job_categories`, `job_locations`, `year_experience`, `salary_range`, `minimun_salary`, `maximun_salary`, `job_description`, `job_requirement`, `application_language`, `priority`, `expired`, `created`, `modified`, `approved`, `status`) VALUES
('4cffa9e8-4544-456d-86a2-0d2839e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', 'Du lá»‹ch Viá»‡t', '4cbf31f6-2298-4b1e-8d9e-024439e9a00e', '', '', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', 'Tráº§n Anh Äá»©c', 'Quáº£n lÃ½ tuyá»ƒn dá»¥ng', '37628811', '', '', 'ductran@yahoo.com', 'NhÃ¢n viÃªn tiáº¿p thá»‹', '', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', '4cbe9cc7-c5f8-4fca-989d-098839e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', NULL, '4cba8ceb-36c4-4e63-96c7-062c39e9a00e', NULL, NULL, '', '', '4d04f903-4d8c-4da6-aa90-018039e9a00e', NULL, '2010-12-26', '2010-12-08 22:53:12', '2010-12-19 12:39:52', '2010-12-19 12:39:52', 1),
('4cee1937-2f70-4568-a629-077439e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', 'Kim Thuáº­n Phong', '4cbf31f6-2298-4b1e-8d9e-024439e9a00e', 'CÃ´ng ty chuyÃªn sáº£n xuáº¥t quáº¡t tráº§n', NULL, '222 ÄÆ°á»ng sá»‘ 1A phÆ°á»ng BÃ¬nh Trá»‹ ÄÃ´ng', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'Tráº§n Thá»‹ Kim HuÃª', 'ThÆ° kÃ½', '1231231233', '', '', 'flowerly_kh@yahoo.com', 'Developer', '', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4cbf2664-5a30-4eba-a038-024439e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e|4ce60232-9eb4-4154-af95-06c039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e|4ccc5af9-436c-441f-9c1f-06c439e9a00e', 1, '4cba8ceb-36c4-4e63-96c7-062c39e9a00e', NULL, NULL, '123', '123', '4cb3443d-5', NULL, '2011-01-17', '2010-11-25 15:07:19', '2010-12-07 15:58:53', '2010-11-28 23:08:51', 1),
('4cee8751-40e8-4e0c-9104-0f5839e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', 'Gameloft', '4cbf31e7-d7fc-4b30-b917-024439e9a00e', '', 'www.gameloft.com', 'ITower Cá»™ng HÃ²a', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'Tráº§n Anh VÅ©', '', '385637121', '', '', 'vutran@yahoo.com', 'Game tester', '', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4ce603ff-3198-4a65-aa46-06c039e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e|4cb7413b-d178-450d-8b35-06f039e9a00e', 1, '4cba8cf5-6fe8-4966-a712-062c39e9a00e', NULL, NULL, 'Test game mobile', '', '4cb3443d-5', NULL, '2011-01-25', '2010-11-25 22:57:05', '2011-01-15 21:51:36', '2011-01-13 21:51:36', 1),
('4d01e32f-b8a4-486a-b194-01f439e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', 'Kim Thuáº­n Phong', '4cbf31e7-d7fc-4b30-b917-024439e9a00e', '123', '123', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', 'Nguyá»…n Kim Long', 'TrÆ°á»ng phÃ²ng nhÃ¢n sá»±', '66666666666', '', '', 'nguyenklong@gmail.com', 'Quáº£n lÃ½ cÃ´ng trÃ¬nh', '', '4cb7fb1d-6dc0-49dc-b5b9-06e839e9a00e', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbf1c0d-3100-4db9-85c1-024439e9a00e', '4ce60239-ae44-4f85-b2ac-06c039e9a00e', '4cb74131-2ff4-4013-a6a1-06f039e9a00e', 1, '4cba8ceb-36c4-4e63-96c7-062c39e9a00e', NULL, NULL, 'Quáº£n lÃ½ giÃ¡m sÃ¡t cÃ´ng trÃ¬nh thi cÃ´ng', 'Kinh nghiá»‡m giÃ¡m sÃ¡t, quáº£n lÃ½ cÃ´ng trÃ¬nh.\r\nÄá»c hiá»ƒu báº£n váº½ thiáº¿t káº¿ xÃ¢y dá»±ng.', '4cb3443d-5', NULL, '2011-01-27', '2010-12-10 15:22:07', '2011-01-15 21:52:13', '2011-01-15 21:52:13', 1),
('4d01e197-c798-4009-a21b-01f439e9a00e', '', '123', '4cbf31f6-2298-4b1e-8d9e-024439e9a00e', '123', '', '13', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', 'abv', '1234', '123213111111', '', '', 'chinguyen@yahoo.com', 'Quality Control', '', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbf1c08-01c4-4977-a26d-024439e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 1, '4cba8ce2-e488-4fd3-9ef9-062c39e9a00e', NULL, NULL, 'Kiá»ƒm tra cháº¥t lÆ°á»£ng pháº§n má»m', 'Ká»¹ nÄƒng testing\r\nKá»¹ nÄƒng quáº£n lÃ½ cháº¥t lÆ°á»£ng pháº§n má»m', '4cb3443d-5', NULL, '2010-12-31', '2010-12-10 15:15:19', '2011-01-15 21:52:03', '2011-01-12 21:52:03', 2),
('4d0f0d0e-dcd8-4bf1-9c29-063439e9a00e', '', 'VÃ ng báº¡c Ä‘Ã¡ quÃ½ SÃ i GÃ²n - SJC ', '4d0f0bb7-3ce0-4489-a5bf-063439e9a00e', 'ÄÆ°á»£c thÃ nh láº­p nÄƒm 1988, CÃ´ng ty TNHH Má»™t thÃ nh viÃªn VÃ ng báº¡c Ä‘Ã¡ quÃ½ SÃ i GÃ²n - SJC lÃ  doanh nghiá»‡p nhÃ  nÆ°á»›c Ä‘ang hoáº¡t Ä‘á»™ng theo mÃ´ hÃ¬nh cÃ´ng ty máº¹ - cÃ´ng ty con, bao gá»“m 6 cÃ´ng ty con, 15 cÃ´ng ty liÃªn káº¿t, 2 chi nhÃ¡nh cÃ¡c tá»‰nh, 3 xÆ°á»Ÿng sáº£n xuáº¥t vÃ ng, 2 xÆ°á»Ÿng sáº£n xuáº¥t trang sá»©c, máº¡ng lÆ°á»›i kinh doanh phÃ¢n phá»‘i gá»“m há»‡ thá»‘ng cá»­a hÃ ng bÃ¡n láº», há»‡ thá»‘ng Ä‘áº¡i lÃ½ chÃ­nh thá»©c trÃªn toÃ n quá»‘c, Ä‘Ã¡ng ká»ƒ lÃ  há»‡ thá»‘ng cÃ¡c ngÃ¢n hÃ ng thÆ°Æ¡ng máº¡i cá»• pháº§n trÃªn cáº£ nÆ°á»›c Ä‘ang giao dá»‹ch vÃ  kinh doanh sáº£n pháº©m cá»§a SJC.', 'www.sjc.com.vn', '115 Nguyá»…n CÃ´ng Trá»©, P. Nguyá»…n ThÃ¡i BÃ¬nh ', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'Tráº§n Anh Thiá»‡n', '', '08.39144056', '', '08.39144057', 'tranathien@sjc.com.vn', 'TrÆ°á»Ÿng phÃ²ng kinh doanh', '', '4cb7fb2e-8118-4e19-919f-06e839e9a00e', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbf1c08-01c4-4977-a26d-024439e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e|4d0f0791-1540-4eed-87f1-063439e9a00e', NULL, '4cba8cf5-6fe8-4966-a712-062c39e9a00e', NULL, NULL, '', '', '4d04f903-4d8c-4da6-aa90-018039e9a00e', NULL, '2011-01-31', '2010-12-20 15:00:14', '2011-01-15 21:52:21', '2011-01-15 21:52:21', 1),
('4d0f1078-2cc8-4173-a72c-063439e9a00e', '', 'NgÃ¢n hÃ ng TMCP XÄƒng dáº§u Petrolimex (PGBank)', '4d0f0b79-f5ac-452e-857c-063439e9a00e', 'CÃ´ng ty TÃ i chÃ­nh Cá»• pháº§n HoÃ¡ cháº¥t Viá»‡t Nam (VCFC) hoáº¡t Ä‘á»™ng, theo Giáº¥y phÃ©p sá»‘ 340/GP-NHNN do NgÃ¢n hÃ ng NhÃ  nÆ°á»›c cáº¥p ngÃ y 29/12/2008, trong lÄ©nh vá»±c tÃ i chÃ­nh, ngÃ¢n hÃ ng vá»›i cÃ¡c sáº£n pháº©m, dá»‹ch vá»¥ nhÆ° huy Ä‘á»™ng vá»‘n, cho vay, báº£o lÃ£nh, thu xáº¿p vá»‘n, uá»· thÃ¡c Ä‘áº§u tÆ°, uá»· thÃ¡c quáº£n lÃ½ vá»‘nâ€¦Vá»›i nhu cáº§u hÃ¬nh thÃ nh Ä‘á»™i ngÅ© nhÃ¢n sá»± nÃ²ng cá»‘t cho sá»± phÃ¡t triá»ƒn trong tÆ°Æ¡ng lai cá»§a CÃ´ng ty', 'www.vcfc.com.vn', 'Sá»‘ 4 Pháº¡m NgÅ© LÃ£o, HoÃ n Kiáº¿m', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', 'Nguyá»…n Kim Huá»‡', '', '383711811', '', '', 'khue@yahoo.com', 'ChuyÃªn ViÃªn TÃ­n Dá»¥ng', '', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', '4ce60242-52b8-43f5-b0b6-06c039e9a00e|4ce6024f-1dd0-42f6-bfb1-06c039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', 1, '4cba8ce2-e488-4fd3-9ef9-062c39e9a00e', NULL, NULL, 'TrÃ¡ch nhiá»‡m chÃ­nh: TÃ¬m kiáº¿m khÃ¡ch hÃ ng, tÆ° váº¥n cÃ¡c sáº£n pháº©m cáº¥p tÃ­n dá»¥ng, Cá»§ng cá»‘ vÃ  phÃ¡t triá»ƒn má»‘i quan há»‡ khÃ¡ch hÃ ng nháº±m khai thÃ¡c tá»‘i Ä‘a nhu cáº§u sáº£n pháº©m dá»‹ch vá»¥ cá»§a CÃ´ng ty.\r\n', 'Tá»‘t nghiá»‡p Ä‘áº¡i há»c chuyÃªn ngÃ nh Kinh táº¿, TÃ i chÃ­nh, Ngoáº¡i thÆ°Æ¡ng, NgÃ¢n hÃ ng;\r\nâ€¢ Sá»­ dá»¥ng Ä‘Æ°á»£c cÃ¡c pháº§n má»m vÄƒn phÃ²ng á»©ng dá»¥ng vÃ  cÃ³ trÃ¬nh Ä‘á»™ tiáº¿ng Anh khÃ¡;\r\nâ€¢ NÄƒng Ä‘á»™ng, cÃ³ kháº£ nÄƒng thÃ­ch nghi Ä‘Æ°á»£c vá»›i Ã¡p lá»±c cÃ´ng viá»‡c lá»›n vÃ  Ä‘i cÃ´ng tÃ¡c xa;\r\nâ€¢ CÃ³ Ã­t nháº¥t 1 nÄƒm kinh nghiá»‡m lÃ m viá»‡c trong lÄ©nh vá»±c ngÃ¢n hÃ ng. Äá»‘i vá»›i ngÆ°á»i dá»± tuyá»ƒn tá»‘t nghiá»‡p loáº¡i giá»i khÃ´ng cáº§n Ä‘iá»u kiá»‡n vá» sá»‘ nÄƒm kinh nghiá»‡m;\r\nâ€¢ DÆ°á»›i 30 tuá»•i.', '4cb3443d-5', NULL, '2011-01-31', '2010-12-20 15:14:48', '2011-01-15 21:51:45', '2011-01-15 21:51:45', 1),
('4d0f1681-6b84-4bbf-9e19-063439e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', 'CÃ”NG TY TNHH SX - TM A.S.T.A', '4cbf3213-2744-4bed-b488-024439e9a00e', '', 'www.asta.com', '203/2/27 ÄÆ°á»ng Trá»¥c, P 13, Q. BÃ¬nh Tháº¡nh', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'HoÃ ng VÅ©', 'TrÆ°á»Ÿng phÃ²ng hÃ nh chÃ­nh', '08.35534.524 ', '', '', 'hoangvu@yahoo.com', 'NhÃ¢n viÃªn hÃ nh chÃ­nh - nhÃ¢n sá»±', '', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4ce603d8-97e0-4e53-b45a-06c039e9a00e', '4cbf1bf4-f454-4fbd-8367-024439e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 2, '4cba8ceb-36c4-4e63-96c7-062c39e9a00e', NULL, NULL, 'TrÆ°Ì£c Ä‘iÃªÌ£n thoaÌ£i.\r\n- QuaÌ‰n lyÌ cÃ´ng vÄƒn Ä‘ÃªÌn vaÌ€ Ä‘i.\r\n- ÄoÌn tiÃªÌp khaÌch khi tÆ¡Ìi liÃªn hÃªÌ£ cÃ´ng taÌc.\r\n- QuaÌ‰n lyÌ vÄƒn phoÌ€ng phÃ¢Ì‰m.\r\n- TuyÃªÌ‰n duÌ£ng\r\n- ChÃ¢Ìm cÃ´ng.\r\n- Theo doÌƒi pheÌp nÄƒm vaÌ€ viÃªÌ£c riÃªng.\r\n- BaÌ caÌo baÌ‰o hiÃªÌ‰m.\r\n- GiaÌ‰i quyÃªÌt caÌc chÃªÌ Ä‘Ã´Ì£ theo luÃ¢Ì£t.\r\n- NhÆ°Ìƒng cÃ´ng viÃªÌ£c khaÌc do TP.HC-NS yÃªu cÃ¢Ì€u. ', 'TÃ´Ìt nghiÃªÌ£p trung cÃ¢Ìp trÆ¡Ì‰ lÃªn caÌc chuyÃªn ngaÌ€nh: QuaÌ‰n triÌ£ nhÃ¢n sÆ°Ì£, Lao Ä‘Ã´Ì£ng tiÃªÌ€n lÆ°Æ¡ng, LuÃ¢Ì£t lao Ä‘Ã´Ì£ng, LÆ°u trÆ°Ìƒ vÄƒn thÆ°, QuaÌ‰n triÌ£ haÌ€nh chiÌnh.', '4d04f903-4d8c-4da6-aa90-018039e9a00e', NULL, '2011-02-20', '2010-12-20 15:40:33', '2010-12-20 15:43:25', '2010-12-20 15:43:25', 1),
('4d0f1843-ea9c-42a4-a142-063439e9a00e', '', 'CÃ´ng Ty UNICO Handels GmbH', '4cbf3213-2744-4bed-b488-024439e9a00e', 'CÃ´ng ty UNICO Ä‘Æ°á»£c thÃ nh láº­p tá»« nÄƒm 1991, cÃ³ trá»¥ sá»Ÿ chÃ­nh táº¡i CHLB Äá»©c vÃ  VPÄD táº¡i TP.HCM vÃ  HÃ  ná»™i, vá»›i 2 lÄ©nh vá»±c hoáº¡t Ä‘á»™ng chÃ­nh lÃ  cung cáº¥p thiáº¿t bá»‹ xáº¿p dá»¡ container cho cÃ¡c cáº£ng biá»ƒn vÃ  thiáº¿t bá»‹ dÃ¢y chuyá»n sáº£n xuáº¥t bia, nÆ°á»›c giáº£i khÃ¡t. Pháº¡m vi hoáº¡t Ä‘á»™ng cá»§a UNICO bao gá»“m cung cáº¥p thiáº¿t bá»‹, phá»¥ tÃ¹ng, Ä‘áº£m nháº­n dá»‹ch vá»¥ báº£o trÃ¬ báº£o hÃ nh vá»›i Ä‘á»™i ngÅ© ká»¹ sÆ° chuyÃªn viÃªn nhiá»u kinh nghiá»‡m Ä‘Æ°á»£c Ä‘Ã o táº¡o trong vÃ  ngoÃ i nÆ°á»›c. Trong lÄ©nh vá»±c thiáº¿t bá»‹ xáº¿p dá»¡, CÃ´ng ty UNICO Ä‘Ã£ cung cáº¥p háº§u háº¿t cÃ¡c thiáº¿t bá»‹ háº¡ng náº·ng cho cÃ¡c cáº£ng á»Ÿ Viá»‡t Nam. Hiá»‡n nay, UNICO lÃ  Ä‘áº¡i diá»‡n Ä‘á»™c quyá»n táº¡i Viá»‡t Nam cá»§a cÃ¡c nhÃ£n hiá»‡u/nhÃ  sáº£n xuáº¥t hÃ ng Ä‘áº§u tháº¿ giá»›i nhÆ° Mijack (Má»¹), Gottwald (Äá»©c), Kalmar (Thá»¥y Äiá»ƒn),â€¦.', '', 'TÃ²a nhÃ  Cityview, PhÃ²ng 201, 12 Máº¡c ÄÄ©nh Ch', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'Nguyá»…n Kim Long', '', '08.35534.524 ', '', '', 'nguyenklong@gmail.com', 'ThÆ° kÃ½ vÄƒn phÃ²ng', '', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e|4ce60242-52b8-43f5-b0b6-06c039e9a00e|4cbe9cc7-c5f8-4fca-989d-098839e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e|4d0f0779-67c0-4dfd-87df-063439e9a00e', 1, '4cba8ceb-36c4-4e63-96c7-062c39e9a00e', NULL, NULL, '* Kiá»ƒm tra cÃ¡c vÄƒn báº£n, chá»©ng tá»« cÃ¡c bá»™ pháº­n chuyá»ƒn Ä‘áº¿n trÆ°á»›c khi trÃ¬nh Ban giÃ¡m Ä‘á»‘c phÃª duyá»‡t.\r\n* Truyá»n Ä‘áº¡t thÃ´ng tin cá»§a BGÄ tá»›i cÃ¡c phÃ²ng ban liÃªn quan vÃ  nháº­n thÃ´ng tin pháº£n há»“i tá»« cÃ¡c phÃ²ng ban trinh BGÄ.\r\n* Tráº£ lá»i vÃ  chuyá»ƒn mÃ¡y cÃ¡c cuá»™c gá»i Ä‘áº¿n trong vÃ  ngoÃ i nÆ°á»›c.\r\n* Tiáº¿p Ä‘Ã³n khÃ¡ch, sáº¯p xáº¿p phÃ²ng há»p.\r\n* Äáº·t vÃ© mÃ¡y bay, khÃ¡ch sáº¡n vÃ  quáº£n lÃ½ vÄƒn phÃ²ng pháº©m.\r\n* Nháº­n vÃ  chuyá»ƒn thÆ°, hÃ ng hÃ³a, phá»‘i há»£p vá»›i nhÃ¢n viÃªn chuyá»ƒn phÃ¡t Ä‘á»ƒ Ä‘áº£m báº£o má»i thÆ° tá»«, cÃ´ng vÄƒn, hÃ ng hÃ³a Ä‘á»u Ä‘Æ°á»£c gá»­i Ä‘áº¿n nÆ¡i ngÆ°á»i nháº­n.', '* LÆ°Æ¡ng, thÆ°á»Ÿng phÃ¹ há»£p vá»›i nÄƒng lá»±c\r\n* ÄÆ°á»£c hÆ°á»Ÿng cÃ¡c quyá»n lá»£i theo quy Ä‘á»‹nh cá»§a luáº­t lao Ä‘á»™ng (BHYT, BHXH, BHTN) vÃ  cÃ¡c cháº¿ Ä‘á»™ khÃ¡c: nghá»‰ phÃ©p nÄƒm, nghá»‰ lá»… theo quy Ä‘á»‹nh cÃ´ng ty vÃ  luáº­t lao Ä‘á»™ng hiá»‡n hÃ nh.\r\n* ÄÆ°á»£c lÃ m viá»‡c trong mÃ´i trÆ°á»ng lÃ m viá»‡c chuyÃªn nghiá»‡p, nÄƒng Ä‘á»™ng, thÃ¢n thiá»‡n, Ä‘á» cao giÃ¡ trá»‹ vÄƒn hÃ³a doanh nghiá»‡p.', '4d04f903-4d8c-4da6-aa90-018039e9a00e', NULL, '2011-01-22', '2010-12-20 15:48:03', '2011-01-15 21:51:26', '2011-01-13 21:51:26', 1),
('4d0f1add-6fd4-4d98-90ea-063439e9a00e', '', 'Trung tÃ¢m anh ngá»¯ Elite', '4d0f0b79-f5ac-452e-857c-063439e9a00e', '', 'www.elite.com', '211 ÄÆ°á»ng 3/2 Q.10', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'Michael John', '', '73633115', '', '', 'john@live.com', 'Giáº£ng viÃªn anh ngá»¯', '', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbf2664-5a30-4eba-a038-024439e9a00e', '4cbf1c08-01c4-4977-a26d-024439e9a00e', '4d0f04cb-0bfc-44ec-ae44-063439e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 1, '4cba8ce2-e488-4fd3-9ef9-062c39e9a00e', NULL, NULL, 'Kháº£ nÄƒng giáº£ng dáº¡y tá»‘t, cá»¥ thá»ƒ:\r\n-NÃ³i tiáº¿ng Anh lÆ°u loÃ¡t, phÃ¡t Ã¢m chuáº©n, tá»« ngá»¯ dÃ¹ng chÃ­nh xÃ¡c\r\n-CÃ¡ch diá»…n Ä‘áº¡t rÃµ rÃ ng, hiá»‡u quáº£, cÃ³ sá»©c thuyáº¿t phá»¥c', '', '4cb3443d-5', NULL, '2011-01-27', '2010-12-20 15:59:09', '2011-01-15 21:51:08', '2011-01-15 21:51:08', 1),
('4d31bb22-67b0-46c4-a20b-0cdc39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', 'IBM Viá»‡t Nam', '4d0f0b79-f5ac-452e-857c-063439e9a00e', 'IBM is the worldâ€™s largest information technology (IT) company, with more than 90 years of professional experience. We operate in more than 160 countries with more than 380,000 employees all over the world.', '', '37 Ton Duc Thang, Floor 3B, Dist.1', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 'HR Department', 'HR', '893819101', '', '', 'hr_department@ibm.com', 'Business Analyst', '', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbf1c08-01c4-4977-a26d-024439e9a00e', '4d0f0443-0850-422c-b320-063439e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', 2, '4cba8ceb-36c4-4e63-96c7-062c39e9a00e', NULL, NULL, 'To write documents like Functional Specifications\r\nTo give functional support to local development team during the implementation', 'Master/ Bachelors degree or equivalent in an IT discipline.\r\nHave Business Analysis experience is a plus.\r\nHave experience in Java/J2EE or Cobol/Mainframe', '4cb3443d-5', NULL, '2011-02-20', '2011-01-15 22:20:02', '2011-01-15 22:27:28', '2011-01-15 22:27:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE IF NOT EXISTS `jobseekers` (
  `id` char(36) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `country_id` char(36) NOT NULL,
  `province_id` char(36) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `actived` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`id`, `email`, `password`, `first_name`, `last_name`, `birthday`, `gender`, `country_id`, `province_id`, `created`, `modified`, `last_login`, `actived`) VALUES
('4cb34bf2-16f0-4768-85da-055c39e9a00e', 'example@yahoo.com', '202cb962ac59075b964b07152d234b70', 'NguyÃªn', 'PhÃ¹ng', '1988-06-07', 0, '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '2010-10-12 00:40:02', '2010-12-20 20:05:58', '2011-01-15 21:53:51', 1),
('4cd13468-d890-44e6-ad7e-091439e9a00e', 'nhocvp@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Nguyen', 'Nghia', '1984-03-25', 0, '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', '2010-11-03 17:07:36', '2010-11-03 17:07:36', '2010-11-03 17:07:47', 1),
('4d2e7c56-0be4-4705-8ae7-0b7c39e9a00e', 'dao.nq003l@sinhvien.hoasen.edu.vn', 'ce142971254647457d9553b13a734631', 'Dao', 'Nguyen Quang', '1987-11-02', 0, '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '2011-01-13 11:15:18', '2011-01-13 11:15:18', '2011-01-13 11:15:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_applies`
--

CREATE TABLE IF NOT EXISTS `job_applies` (
  `id` char(36) NOT NULL,
  `jobseeker_id` char(36) NOT NULL,
  `job_id` char(36) NOT NULL,
  `resume_id` char(36) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `cover_letter` mediumtext,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applies`
--

INSERT INTO `job_applies` (`id`, `jobseeker_id`, `job_id`, `resume_id`, `subject`, `cover_letter`, `created`) VALUES
('4d0a6040-d7c4-44c7-8726-0b9439e9a00e', '4cb34bf2-16f0-4768-85da-055c39e9a00e', '4cee1937-2f70-4568-a629-077439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', 'Láº­p trÃ¬nh viÃªn', 'ChuyÃªn láº­p trÃ¬nh web/ winform', '2010-12-17 01:53:52'),
('4d31b583-2930-42ee-ae59-0cdc39e9a00e', '4cb34bf2-16f0-4768-85da-055c39e9a00e', '4d0f1681-6b84-4bbf-9e19-063439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', 'NhÃ¢n viÃªn nhÃ¢n sá»±', 'NhÃ¢n viÃªn quáº£n lÃ½ nhÃ¢n sá»±', '2011-01-15 21:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE IF NOT EXISTS `job_categories` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `name`, `created`, `modified`) VALUES
('4cda4747-d5f4-463d-8710-03ac39e9a00e', 'CÃ´ng nghá»‡ thÃ´ng tin', '2010-11-10 14:18:31', '2010-11-19 00:57:21'),
('4cbe9ccf-ff08-4a04-ae04-098839e9a00e', 'Kinh doanh', '2010-10-20 14:39:59', '2010-11-10 14:24:21'),
('4ce60232-9eb4-4154-af95-06c039e9a00e', 'CÆ¡ khÃ­', '2010-11-19 11:50:58', '2010-11-19 11:50:58'),
('4ce60239-ae44-4f85-b2ac-06c039e9a00e', 'XÃ¢y dá»±ng', '2010-11-19 11:51:05', '2010-11-19 11:51:05'),
('4ce60242-52b8-43f5-b0b6-06c039e9a00e', 'Káº¿ toÃ¡n/Kiá»ƒm toÃ¡n', '2010-11-19 11:51:14', '2010-11-19 11:51:14'),
('4cbe9cc7-c5f8-4fca-989d-098839e9a00e', 'Du lá»‹ch vÃ  khÃ¡ch sáº¡n', '2010-11-10 14:36:26', '2010-11-10 14:36:26'),
('4ce6024f-1dd0-42f6-bfb1-06c039e9a00e', 'NgÃ¢n hÃ ng', '2010-11-19 11:51:27', '2010-11-19 11:51:27'),
('4ce60252-8430-4419-ba57-06c039e9a00e', 'Báº£o hiá»ƒm', '2010-11-19 11:51:30', '2010-11-19 11:51:30'),
('4ce60277-6ee8-4875-9cf2-06c039e9a00e', 'Thá»i trang', '2010-11-19 11:52:07', '2010-11-19 11:52:07'),
('4ce60284-1198-46ae-bb03-06c039e9a00e', 'Báº¥t Ä‘á»™ng sáº£n', '2010-11-19 11:52:20', '2010-11-19 11:52:20'),
('4d0f03b3-6b0c-4a3e-a90b-063439e9a00e', 'Viá»…n thÃ´ng', '2010-12-20 14:20:19', '2010-12-20 14:20:19'),
('4d0f03bf-0108-4628-bf14-063439e9a00e', 'Truyá»n thÃ´ng/Truyá»n hÃ¬nh', '2010-12-20 14:20:31', '2010-12-20 14:20:31'),
('4d0f03d8-3d20-4847-8ba0-063439e9a00e', 'Chá»©ng khoÃ¡n', '2010-12-20 14:20:56', '2010-12-20 14:20:56'),
('4d0f0424-ac24-4302-bf27-063439e9a00e', 'Thá»±c pháº©m', '2010-12-20 14:22:12', '2010-12-20 14:22:12'),
('4d0f0434-2f38-4baa-aa48-063439e9a00e', 'Äiá»‡n/Äiá»‡n tá»­', '2010-12-20 14:22:28', '2010-12-20 14:22:28'),
('4d0f0443-0850-422c-b320-063439e9a00e', 'CÃ´ng nghá»‡ cao', '2010-12-20 14:22:43', '2010-12-20 14:22:43'),
('4d0f0474-33fc-40f2-93e2-063439e9a00e', 'Dáº§u khÃ­', '2010-12-20 14:23:32', '2010-12-20 14:23:32'),
('4d0f04c2-5030-4e1b-aa8e-063439e9a00e', 'Dá»‹ch vá»¥ tÆ° váº¥n', '2010-12-20 14:24:50', '2010-12-20 14:24:50'),
('4d0f04cb-0bfc-44ec-ae44-063439e9a00e', 'GiÃ¡o dá»¥c/ÄÃ o táº¡o', '2010-12-20 14:24:59', '2010-12-20 14:24:59'),
('4d0f04dd-de28-4373-96dc-063439e9a00e', 'Y táº¿/Cháº¯m sÃ³c sá»©c khá»e', '2010-12-20 14:25:17', '2010-12-20 14:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `job_levels`
--

CREATE TABLE IF NOT EXISTS `job_levels` (
  `id` char(36) NOT NULL,
  `level` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_levels`
--

INSERT INTO `job_levels` (`id`, `level`, `created`, `modified`) VALUES
('4cb7fb04-2970-4ac2-abf6-06e839e9a00e', 'Má»›i tá»‘t nghiá»‡p/Thá»±c táº­p sinh', '2010-10-15 13:56:04', '2010-10-15 13:56:04'),
('4cb7fb0b-4544-4dfd-b268-06e839e9a00e', 'NhÃ¢n viÃªn', '2010-10-15 13:56:11', '2010-10-15 13:56:11'),
('4cb7fb1d-6dc0-49dc-b5b9-06e839e9a00e', 'TrÆ°á»Ÿng nhÃ³m/GiÃ¡m sÃ¡t', '2010-10-15 13:56:29', '2010-10-15 13:56:29'),
('4cb7fb2e-8118-4e19-919f-06e839e9a00e', 'TrÆ°á»Ÿng phÃ²ng', '2010-10-15 13:56:46', '2010-10-15 13:56:46'),
('4cb7fb35-dc58-44ec-8d7b-06e839e9a00e', 'GiÃ¡m Ä‘á»‘c', '2010-10-15 13:56:53', '2010-10-15 13:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `job_saveds`
--

CREATE TABLE IF NOT EXISTS `job_saveds` (
  `id` char(36) NOT NULL,
  `jobseeker_id` char(36) NOT NULL,
  `job_id` char(36) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `applied` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_saveds`
--

INSERT INTO `job_saveds` (`id`, `jobseeker_id`, `job_id`, `status`, `created`, `applied`) VALUES
('4d0a5df2-8490-42a0-ac67-0b9439e9a00e', '4cb34bf2-16f0-4768-85da-055c39e9a00e', '4cee1937-2f70-4568-a629-077439e9a00e', 1, '2010-12-17 01:44:02', '2010-12-17 01:53:52'),
('4d31b583-d5e4-4f20-bad6-0cdc39e9a00e', '4cb34bf2-16f0-4768-85da-055c39e9a00e', '4d0f1681-6b84-4bbf-9e19-063439e9a00e', 1, '2011-01-15 21:56:03', '2011-01-15 21:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `job_skills`
--

CREATE TABLE IF NOT EXISTS `job_skills` (
  `id` char(36) NOT NULL,
  `job_id` char(36) NOT NULL,
  `skill_id` char(36) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `proficiency` char(36) NOT NULL,
  `year_use` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_skills`
--

INSERT INTO `job_skills` (`id`, `job_id`, `skill_id`, `description`, `proficiency`, `year_use`, `created`, `modified`) VALUES
('4cf5ccfd-f518-400f-a538-009c39e9a00e', '4cf5cced-403c-4f67-8df9-009c39e9a00e', '4cad98c3-f80c-4a96-ae93-059439e9a00e', NULL, '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-01 11:20:13', '2010-12-01 11:20:13'),
('4d0f107f-e724-44b3-8db7-063439e9a00e', '4d0f1078-2cc8-4173-a72c-063439e9a00e', '4d0d954b-d26c-45c0-9e05-076439e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-20 15:14:55', '2010-12-20 15:14:55'),
('4d0d9577-8694-4d5d-b496-076439e9a00e', '4d01e197-c798-4009-a21b-01f439e9a00e', '4d0d956b-a75c-478b-a8b2-076439e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-19 12:17:43', '2010-12-19 12:17:43'),
('4d0d9884-6b00-4323-947e-076439e9a00e', '4d01e197-c798-4009-a21b-01f439e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-19 12:30:44', '2010-12-19 12:30:44'),
('4cfe182d-1e24-497c-a539-065c39e9a00e', '4cee8751-40e8-4e0c-9104-0f5839e9a00e', '4cad98c3-f80c-4a96-ae93-059439e9a00e', '111', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', 11, '2010-12-07 18:19:09', '2010-12-07 18:19:20'),
('4d0d907b-4a04-4835-b729-076439e9a00e', '4cffa9e8-4544-456d-86a2-0d2839e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-19 11:56:27', '2010-12-19 11:56:27'),
('4d0f0d66-de34-449d-bf4e-063439e9a00e', '4d0f0d0e-dcd8-4bf1-9c29-063439e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc08785-c004-4657-a8ff-0f1439e9a00e', NULL, '2010-12-20 15:01:42', '2010-12-20 15:01:42'),
('4d01e338-294c-422f-889d-01f439e9a00e', '4d01e32f-b8a4-486a-b194-01f439e9a00e', '4d01a87f-0db8-4b98-979d-079839e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-10 15:22:16', '2010-12-10 15:22:16'),
('4d01e340-b8c0-4c26-aef3-01f439e9a00e', '4d01e32f-b8a4-486a-b194-01f439e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-10 15:22:24', '2010-12-10 15:22:24'),
('4d0f108a-1bd0-4393-9558-063439e9a00e', '4d0f1078-2cc8-4173-a72c-063439e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc08785-c004-4657-a8ff-0f1439e9a00e', NULL, '2010-12-20 15:15:06', '2010-12-20 15:15:06'),
('4d0f1702-85f8-4060-9a86-063439e9a00e', '4d0f1681-6b84-4bbf-9e19-063439e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-20 15:42:42', '2010-12-20 15:42:42'),
('4d0f184c-5568-4380-9511-063439e9a00e', '4d0f1843-ea9c-42a4-a142-063439e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-12-20 15:48:12', '2010-12-20 15:48:12'),
('4d313b70-29f0-41b9-a45f-065839e9a00e', '4cee8751-40e8-4e0c-9104-0f5839e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc08759-aac4-4e86-8745-0f1439e9a00e', NULL, '2011-01-15 13:15:12', '2011-01-15 13:15:12'),
('4d313bca-4b00-48be-8cf9-065839e9a00e', '4d0f1681-6b84-4bbf-9e19-063439e9a00e', '4cad98c3-f80c-4a96-ae93-059439e9a00e', '', '4cc08759-aac4-4e86-8745-0f1439e9a00e', NULL, '2011-01-15 13:16:42', '2011-01-15 13:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE IF NOT EXISTS `job_types` (
  `id` char(36) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `type`, `created`, `modified`) VALUES
('4cbf265e-3e80-4f35-80b3-024439e9a00e', 'BÃ¡n thá»i gian cá»‘ Ä‘á»‹nh', '2010-10-21 00:26:54', '2010-12-12 23:48:42'),
('4cbf2664-5a30-4eba-a038-024439e9a00e', 'BÃ¡n thá»i gian táº¡m thá»i', '2010-10-21 00:27:00', '2010-11-19 12:00:09'),
('4ce603c7-5954-4c9e-838c-06c039e9a00e', 'ToÃ n thá»i gian cá»‘ Ä‘á»‹nh', '2010-11-19 11:57:43', '2010-11-19 12:00:21'),
('4ce603d8-97e0-4e53-b45a-06c039e9a00e', 'ToÃ n thá»i gian táº¡m thá»i', '2010-11-19 11:58:00', '2010-11-19 12:00:29'),
('4ce603ff-3198-4a65-aa46-06c039e9a00e', 'Theo há»£p Ä‘á»“ng/tÆ° váº¥n', '2010-11-19 11:58:39', '2010-11-19 11:58:39'),
('4ce60403-98d4-4996-bf42-06c039e9a00e', 'Thá»±c táº­p', '2010-11-19 11:58:43', '2010-11-19 11:58:43'),
('4ce60406-06dc-426d-b100-06c039e9a00e', 'KhÃ¡c', '2010-11-19 11:58:46', '2010-11-19 11:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `job_view_logs`
--

CREATE TABLE IF NOT EXISTS `job_view_logs` (
  `id` char(36) NOT NULL,
  `job_id` char(36) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_view_logs`
--

INSERT INTO `job_view_logs` (`id`, `job_id`, `views`, `created`, `modified`) VALUES
('4cfe6880-7ac8-483f-fha8-0a4839e9a88d', '4cfe68c0-190c-4958-9156-0a4839e9a00e', 0, '2010-12-08 00:02:56', '2010-12-08 00:02:56'),
('4cfe6880-7ac8-483f-fha8-0a4839e9a99f', '4cee1937-2f70-4568-a629-077439e9a00e', 47, '2010-12-08 00:23:15', '2010-12-08 00:23:18'),
('5ctt8751-40e8-4e0c-9004-0f5129e9a00e', '4cee8751-40e8-4e0c-9104-0f5839e9a00e', 7, '2010-12-08 00:10:15', '2010-12-08 00:10:20'),
('4c7790ee-bd4c-4fd5-a7fe-0f5839e9a00f', '4cee90ee-bd0c-4fd4-a7fe-0f5839e9a00e', 0, '2010-12-08 00:11:18', '2010-12-09 00:11:21'),
('4d01e197-0904-4685-ac36-01f439e9a00e', '4d01e197-c798-4009-a21b-01f439e9a00e', 18, '2010-12-10 15:15:19', '2010-12-10 15:15:19'),
('4cffa9e8-95d0-4179-b214-0d2839e9a00e', '4cffa9e8-4544-456d-86a2-0d2839e9a00e', 17, '2010-12-08 22:53:12', '2010-12-08 22:53:12'),
('4cffaa63-0520-427a-9e88-0d2839e9a00e', '4cffa9e8-4544-456d-86a2-0d2839e9a00e', 0, '2010-12-08 22:55:15', '2010-12-08 22:55:15'),
('4d01e32f-0b88-4fe2-ad46-01f439e9a00e', '4d01e32f-b8a4-486a-b194-01f439e9a00e', 23, '2010-12-10 15:22:07', '2010-12-10 15:22:07'),
('4d0f0d0e-2b04-4371-bd51-063439e9a00e', '4d0f0d0e-dcd8-4bf1-9c29-063439e9a00e', 3, '2010-12-20 15:00:14', '2010-12-20 15:00:14'),
('4d0f1078-5edc-47df-8d03-063439e9a00e', '4d0f1078-2cc8-4173-a72c-063439e9a00e', 0, '2010-12-20 15:14:48', '2010-12-20 15:14:48'),
('4d0f1681-371c-4f70-8012-063439e9a00e', '4d0f1681-6b84-4bbf-9e19-063439e9a00e', 4, '2010-12-20 15:40:33', '2010-12-20 15:40:33'),
('4d0f1843-4fdc-4009-bb33-063439e9a00e', '4d0f1843-ea9c-42a4-a142-063439e9a00e', 1, '2010-12-20 15:48:03', '2010-12-20 15:48:03'),
('4d0f1add-9e64-4a1e-8172-063439e9a00e', '4d0f1add-6fd4-4d98-90ea-063439e9a00e', 0, '2010-12-20 15:59:09', '2010-12-20 15:59:09'),
('4d31bb22-f6bc-446e-a02c-0cdc39e9a00e', '4d31bb22-67b0-46c4-a20b-0cdc39e9a00e', 1, '2011-01-15 22:20:02', '2011-01-15 22:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` char(36) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country_id` char(36) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `country_id`, `name`, `created`, `modified`) VALUES
('4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Há»“ ChÃ­ Minh', '2010-12-03 14:26:43', '2010-12-12 00:38:34'),
('4cb74131-2ff4-4013-a6a1-06f039e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'BiÃªn HÃ²a', '2010-10-15 00:43:13', '2010-12-11 23:21:24'),
('4cb7413b-d178-450d-8b35-06f039e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'HÃ  Ná»™i', '2010-10-15 00:43:23', '2010-11-18 23:40:21'),
('4cbfb857-3db0-4868-a6e6-017c39e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Huáº¿', '2010-10-21 10:49:43', '2010-10-21 10:49:43'),
('4ccc5af9-436c-441f-9c1f-06c439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'ÄÃ  Náºµng', '2010-10-31 00:50:49', '2010-10-31 00:50:49'),
('4d03a4bd-bd88-471f-81c0-0a5439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Cáº§n ThÆ¡', '2010-12-11 23:20:13', '2010-12-11 23:20:13'),
('4d0f0731-5868-45e0-b99e-063439e9a00e', '4d0f0729-8238-408d-b54d-063439e9a00e', 'Quá»‘c táº¿', '2010-12-20 14:35:13', '2010-12-20 14:35:13'),
('4d0f0779-67c0-4dfd-87df-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Long An', '2010-12-20 14:36:25', '2010-12-20 14:36:25'),
('4d0f0760-fafc-47e5-8177-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'An Giang', '2010-12-20 14:36:00', '2010-12-20 14:36:00'),
('4d0f0759-b550-481d-bb4d-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'KiÃªn Giang', '2010-12-20 14:35:53', '2010-12-20 14:35:53'),
('4d0f076c-da0c-44d3-9c86-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Tiá»n Giang', '2010-12-20 14:36:12', '2010-12-20 14:36:12'),
('4d0f0780-1d14-4766-a428-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Äá»“ng Nai', '2010-12-20 14:36:32', '2010-12-20 14:36:32'),
('4d0f078b-aa54-4b49-830c-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'VÅ©ng TÃ u', '2010-12-20 14:36:43', '2010-12-20 14:36:43'),
('4d0f0791-1540-4eed-87f1-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'BÃ¬nh DÆ°Æ¡ng', '2010-12-20 14:36:49', '2010-12-20 14:36:49'),
('4d0f0798-7700-4e19-809f-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Äá»“ng ThÃ¡p', '2010-12-20 14:36:56', '2010-12-20 14:36:56'),
('4d0f07a9-0adc-4051-ba9c-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'ÄÃ  Láº¡t', '2010-12-20 14:37:13', '2010-12-20 14:37:13'),
('4d0f07af-8f38-4b3c-a7ca-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'LÃ¢m Äá»“ng', '2010-12-20 14:37:19', '2010-12-20 14:37:19'),
('4d0f07b5-db00-476c-8b22-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'BÃ¬nh Thuáº­n', '2010-12-20 14:37:25', '2010-12-20 14:37:25'),
('4d0f07c0-2824-4f90-bd18-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Ninh Thuáº­n', '2010-12-20 14:37:36', '2010-12-20 14:37:36'),
('4d0f07c9-150c-4ae2-899d-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'CÃ  Mau', '2010-12-20 14:37:45', '2010-12-20 14:37:45'),
('4d0f07ce-a4d0-47b7-8f8c-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Báº¡c LiÃªu', '2010-12-20 14:37:50', '2010-12-20 14:37:50'),
('4d0f080c-39a0-4010-9176-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'BÃ¬nh Äá»‹nh', '2010-12-20 14:38:52', '2010-12-20 14:38:52'),
('4d0f0812-8808-4b4e-b21c-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Quáº£ng NgÃ£i', '2010-12-20 14:38:58', '2010-12-20 14:38:58'),
('4d0f0818-ca60-4be5-9ba8-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Háº£i PhÃ²ng', '2010-12-20 14:39:04', '2010-12-20 14:39:04'),
('4d0f0840-803c-4b3d-937a-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'KhÃ¡nh HÃ²a ', '2010-12-20 14:39:44', '2010-12-20 14:39:44'),
('4d0f085b-4860-401a-bf21-063439e9a00e', '4cacaec9-df40-4dda-9a01-05e039e9a00e', 'Báº¯c Ninh', '2010-12-20 14:40:11', '2010-12-20 14:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE IF NOT EXISTS `resumes` (
  `id` char(36) NOT NULL,
  `jobseeker_id` char(36) NOT NULL,
  `resume_title` varchar(100) NOT NULL,
  `martial_status` tinyint(4) NOT NULL,
  `nationality` char(36) NOT NULL,
  `picture` blob,
  `address` varchar(100) NOT NULL,
  `country_id` char(36) NOT NULL,
  `province_id` char(36) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `years_exp` smallint(6) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `approved` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `privacy_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk` (`jobseeker_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `jobseeker_id`, `resume_title`, `martial_status`, `nationality`, `picture`, `address`, `country_id`, `province_id`, `telephone`, `mobile`, `email`, `years_exp`, `created`, `modified`, `approved`, `status`, `privacy_status`) VALUES
('4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4cb34bf2-16f0-4768-85da-055c39e9a00e', 'NhÃ¢n viÃªn hÃ nh chÃ­nh', 1, '4cb73608-17e4-419a-b717-06f039e9a00e', '', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', '21322222', '123222222', 'example@yahoo.com', 1, '2010-12-01 14:10:26', '2011-01-16 01:03:03', '2011-01-16 01:02:19', 3, 1),
('4cf6018c-b250-4800-b573-009c39e9a00e', '4cd13468-d890-44e6-ad7e-091439e9a00e', 'DBA', 0, '4cb73608-17e4-419a-b717-06f039e9a00e', '', '1212', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '', '', 'chinguyen0072003@yahoo.com', 0, '2010-12-01 15:04:28', '2010-12-17 15:31:23', '2010-12-17 15:31:23', 1, 1),
('4d2e7cfc-b738-42fb-838f-0b7c39e9a00e', '4d2e7c56-0be4-4705-8ae7-0b7c39e9a00e', 'Há»“ SÆ¡ A', 0, '4cb73608-17e4-419a-b717-06f039e9a00e', '', 'abc', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '', '', 'dao.nq003l@sinhvien.hoasen.edu.vn', 3, '2011-01-13 11:18:04', '2011-01-16 00:46:26', '2011-01-16 00:46:26', 1, 1),
('4d31dbe5-ef44-4b90-87fd-0cdc39e9a00e', '4cb34bf2-16f0-4768-85da-055c39e9a00e', 'Láº­p trÃ¬nh viÃªn .Net/PHP', 0, '4cb73608-17e4-419a-b717-06f039e9a00e', '', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '', '', 'pcnguyen@yahoo.com', 0, '2011-01-16 00:39:49', '2011-01-16 00:46:19', '2011-01-16 00:46:19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resume_educations`
--

CREATE TABLE IF NOT EXISTS `resume_educations` (
  `id` char(36) NOT NULL,
  `resume_id` char(36) NOT NULL,
  `degree_level_id` char(36) NOT NULL,
  `program` varchar(50) NOT NULL,
  `major` varchar(50) DEFAULT NULL,
  `country_id` char(36) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `related_information` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_educations`
--

INSERT INTO `resume_educations` (`id`, `resume_id`, `degree_level_id`, `program`, `major`, `country_id`, `start_date`, `end_date`, `related_information`, `created`, `modified`) VALUES
('4cbf1ca0-fd98-4ec8-bc81-024439e9a00e', '4cbf1186-27d8-4f22-9758-024439e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', 'Äáº¡i há»c Hoa Sen', 'CÃ´ng nghá»‡ thÃ´ng tin', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2010-03-02', '2010-01-01', '123', '2010-10-20 23:45:20', '2010-10-20 23:45:20'),
('4cbfb81d-2748-4208-86df-017c39e9a00e', '4cbfb66a-0960-4483-83bb-017c39e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '123', '444', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2009-02-02', NULL, '', '2010-10-21 10:48:45', '2010-10-21 11:12:13'),
('4cbfdd69-8fac-4c00-8250-07a439e9a00e', '4cbfdd42-5c4c-4114-8a33-07a439e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '123', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2008-01-02', NULL, '', '2010-10-21 13:27:53', '2010-10-21 13:27:53'),
('4cc070b1-9274-409b-91ca-0f1439e9a00e', '4cc07094-6668-4026-81f2-0f1439e9a00e', '4cbf1bf4-f454-4fbd-8367-024439e9a00e', '123', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2005-03-02', NULL, '', '2010-10-21 23:56:17', '2010-10-21 23:56:17'),
('4cc07812-a024-49b4-a5c5-0f1439e9a00e', '', '', '', NULL, '', '0000-00-00', NULL, '', '2010-10-22 00:27:46', '2010-10-22 00:27:46'),
('4cc07888-4c84-40e3-9579-0f1439e9a00e', '', '', '', NULL, '', '0000-00-00', NULL, '', '2010-10-22 00:29:44', '2010-10-22 00:29:44'),
('4cc13267-f608-4800-a6cc-0ffc39e9a00e', '4cc1309e-f418-4459-91d3-0ffc39e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '78', '87', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2009-03-01', NULL, '', '2010-10-22 13:42:47', '2010-10-22 13:42:47'),
('4cf60a4d-4e88-4e4d-8cd7-009c39e9a00e', '4cf60a41-7f44-4f32-9315-009c39e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '112222', '11', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '1994-01-16', NULL, '', '2010-12-01 15:41:49', '2010-12-01 15:41:58'),
('4d2e7d7e-bf64-4cb8-91db-0b7c39e9a00e', '4d2e7cfc-b738-42fb-838f-0b7c39e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', 'h', 'm', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2006-04-03', '2009-02-18', 'jj', '2011-01-13 11:20:14', '2011-01-13 11:20:14'),
('4cf5faec-c124-4b90-a991-009c39e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '4cbf1c08-01c4-4977-a26d-024439e9a00e', 'Äáº¡i há»c Hoa Sen', 'IT', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2007-02-02', NULL, '', '2010-12-01 14:36:12', '2010-12-01 14:36:12'),
('4cf60199-9370-4755-8ea8-009c39e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '11', '11', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2010-01-01', NULL, '', '2010-12-01 15:04:41', '2010-12-01 15:04:41'),
('4ced64b7-ae28-42a5-9973-08a439e9a00e', '4ced64ab-f0e0-4c7f-bfeb-08a439e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '123', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2008-02-01', NULL, '', '2010-11-25 02:17:11', '2010-11-25 02:17:11'),
('4ced6979-0f10-4bcf-88d4-08a439e9a00e', '4ced696c-2320-4734-8777-08a439e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '123', '213', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2006-03-01', NULL, '123', '2010-11-25 02:37:29', '2010-11-25 02:37:29'),
('4cf5f50b-4f1c-48d4-ac8a-009c39e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4cbf1bee-9d70-4c10-84e4-024439e9a00e', '123', '213', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2009-02-01', NULL, '', '2010-12-01 14:11:07', '2010-12-01 14:11:07'),
('4d31dbff-6670-4365-802d-0cdc39e9a00e', '4d31dbe5-ef44-4b90-87fd-0cdc39e9a00e', '4cbf1bfb-aca8-464d-b054-024439e9a00e', 'Äáº¡i há»c Hoa Sen', 'IT', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '2006-02-12', NULL, '', '2011-01-16 00:40:15', '2011-01-16 00:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `resume_job_exps`
--

CREATE TABLE IF NOT EXISTS `resume_job_exps` (
  `id` char(36) NOT NULL,
  `resume_id` char(36) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_level_id` char(36) NOT NULL,
  `job_category_id` char(36) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `country_id` char(36) NOT NULL,
  `province_id` char(36) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `responsibilities_achievements` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_job_exps`
--

INSERT INTO `resume_job_exps` (`id`, `resume_id`, `job_title`, `job_level_id`, `job_category_id`, `company_name`, `country_id`, `province_id`, `start_date`, `end_date`, `responsibilities_achievements`, `created`, `modified`) VALUES
('4cf690b8-49ec-4261-81e2-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2010-03-02', '123', '2010-12-02 01:15:20', '2010-12-02 01:48:36'),
('4cf690bc-73a0-4b0d-b850-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:15:24', '2010-12-02 01:15:24'),
('4cf69106-2708-40e2-9ff8-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:16:38', '2010-12-02 01:16:38'),
('4cf691ca-7ee0-4edd-a618-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:19:54', '2010-12-02 01:19:54'),
('4cf691e2-7184-46fb-9384-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:20:18', '2010-12-02 01:20:18'),
('4cf69208-70ec-4302-b78e-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:20:56', '2010-12-02 01:20:56'),
('4cf692da-f7e0-4080-aa7a-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:24:26', '2010-12-02 01:24:26'),
('4cf692e2-36fc-4324-81bb-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:24:34', '2010-12-02 01:24:34'),
('4d0e2c68-c234-4cf8-b9f6-076439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', 'Game tester', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e', 'Gameloft', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '2009-07-06', '2010-06-10', 'Kiá»ƒm tra pháº§n má»m, game mobile', '2010-12-19 23:01:44', '2010-12-19 23:01:44'),
('4d2e7d37-d978-4283-b922-0b7c39e9a00e', '4d2e7cfc-b738-42fb-838f-0b7c39e9a00e', 'b', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e', 'c', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '2011-01-02', '2011-01-12', 'a b c', '2011-01-13 11:19:03', '2011-01-13 11:19:03'),
('4ce4e445-0854-427e-9e22-07a839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', 'Tester', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', '2007-03-03', NULL, '123213', '2010-11-18 15:31:01', '2010-12-01 23:56:30'),
('4ce4d57a-02a4-4bd2-8172-07a839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', 'Tester', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e', 'ABC', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', '2009-03-06', '2010-02-04', 'Kiá»ƒm tra pháº§n má»m, web', '2010-11-18 14:27:54', '2010-11-18 14:27:54'),
('4ce4cb67-32a0-420c-b87b-07a839e9a00e', '4ce4ca1f-1e20-4b34-80d4-07a839e9a00e', 'Quáº£n lÃ½ ', '4cb7fb1d-6dc0-49dc-b5b9-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', 'Kim Thuáº­n Phong', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', '2008-02-03', '2010-10-10', 'Quáº£n lÃ½ nhÃ¢n viÃªn', '2010-11-18 13:44:55', '2010-11-18 13:46:37'),
('4cf67e60-fbd8-40ac-837b-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '12312', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e', '2009-02-01', NULL, '123', '2010-12-01 23:57:04', '2010-12-01 23:57:04'),
('4cf53479-1b2c-40f5-a22b-009c39e9a00e', '4cf53335-152c-45e3-9a2a-009c39e9a00e', 'Láº­p trÃ¬nh viÃªn', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e', 'Buffalo', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2008-03-03', NULL, 'láº­p trÃ¬nh á»©ng dá»¥ng windows form', '2010-12-01 00:29:29', '2010-12-01 00:29:29'),
('4cf6908b-f7bc-4bcb-b0e0-06f839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '1111', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '123', '4cacaec9-df40-4dda-9a01-05e039e9a00e', '4ccc5af9-436c-441f-9c1f-06c439e9a00e', '2010-02-03', '2009-01-01', '123', '2010-12-02 01:14:35', '2010-12-02 01:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `resume_skills`
--

CREATE TABLE IF NOT EXISTS `resume_skills` (
  `id` char(36) NOT NULL,
  `resume_id` char(36) NOT NULL,
  `skill_id` char(36) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `proficiency` char(36) NOT NULL,
  `year_use` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_skills`
--

INSERT INTO `resume_skills` (`id`, `resume_id`, `skill_id`, `description`, `proficiency`, `year_use`, `created`, `modified`) VALUES
('4d31dc6c-3650-4fde-931c-0cdc39e9a00e', '4d31dbe5-ef44-4b90-87fd-0cdc39e9a00e', '4d0f0330-49a0-4fc7-9f76-063439e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2011-01-16 00:42:04', '2011-01-16 00:42:04'),
('4cc0881f-6a6c-40d1-80cd-0f1439e9a00e', '4cc07094-6668-402a00e', '4cad98c3-f80c-4a96-ae93-059439e9a00e', NULL, '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2010-10-22 01:36:15', '2010-10-22 01:36:15'),
('4d307995-e6ec-4488-9d84-051439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4d0d954b-d26c-45c0-9e05-076439e9a00e', '', '4cc08759-aac4-4e86-8745-0f1439e9a00e', NULL, '2011-01-14 23:28:05', '2011-01-14 23:28:05'),
('4d31dc61-afdc-47c2-a781-0cdc39e9a00e', '4d31dbe5-ef44-4b90-87fd-0cdc39e9a00e', '4d01a87f-0db8-4b98-979d-079839e9a00e', '', '4cc08785-c004-4657-a8ff-0f1439e9a00e', NULL, '2011-01-16 00:41:53', '2011-01-16 00:41:53'),
('4d313adf-2cd0-450d-b463-065839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4d0d954b-d26c-45c0-9e05-076439e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2011-01-15 13:12:47', '2011-01-15 13:12:47'),
('4d31dc59-a3c4-4abb-9644-0cdc39e9a00e', '4d31dbe5-ef44-4b90-87fd-0cdc39e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', '', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', NULL, '2011-01-16 00:41:45', '2011-01-16 00:41:45'),
('4d2e7db9-c06c-429e-9fec-0b7c39e9a00e', '4d2e7cfc-b738-42fb-838f-0b7c39e9a00e', '4d01a829-62dc-4d15-b39d-079839e9a00e', 'kk', '4cc0876d-5c40-4f81-b7c3-0f1439e9a00e', 2, '2011-01-13 11:21:13', '2011-01-13 11:21:13'),
('4ce4e4ae-1668-4fb3-a3b1-07a839e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', '4cad98c3-f80c-4a96-ae93-059439e9a00e', '123', '4cc08785-c004-4657-a8ff-0f1439e9a00e', 1, '2010-11-18 15:32:46', '2010-12-02 00:22:21'),
('4cee9aae-ea50-4388-9872-0f5839e9a00e', '', '', NULL, '', NULL, '2010-11-26 00:19:42', '2010-11-26 00:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `resume_target_jobs`
--

CREATE TABLE IF NOT EXISTS `resume_target_jobs` (
  `id` char(36) NOT NULL,
  `resume_id` char(36) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_level_id` char(36) NOT NULL,
  `career_objective` text NOT NULL,
  `current_salary` decimal(10,0) DEFAULT NULL,
  `desired_salary` decimal(10,0) DEFAULT NULL,
  `job_types` varchar(200) NOT NULL,
  `job_locations` varchar(200) NOT NULL,
  `job_categories` varchar(200) NOT NULL,
  `company_size` char(36) DEFAULT NULL,
  `can_relocate` tinyint(4) DEFAULT NULL,
  `can_travel` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_target_jobs`
--

INSERT INTO `resume_target_jobs` (`id`, `resume_id`, `job_title`, `job_level_id`, `career_objective`, `current_salary`, `desired_salary`, `job_types`, `job_locations`, `job_categories`, `company_size`, `can_relocate`, `can_travel`, `created`, `modified`) VALUES
('4cea8f78-fcfc-4ebc-ae58-0b7439e9a00e', '4cc65b81-2a80-454f-b873-078439e9a00e', 'Tester', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', 'ChÆ°a rÃµ', NULL, NULL, '4cbf265e-3e80-4f35-80b3-024439e9a00e|4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e|4cbe9ccf-ff08-4a04-ae04-098839e9a00e', '4cbf31f6-2298-4b1e-8d9e-024439e9a00e', 1, 1, '2010-11-22 22:42:48', '2010-11-25 02:14:33'),
('4ced69de-70fc-4ff7-ac3c-08a439e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '123', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', '123', '123', '123', '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cb7413b-d178-450d-8b35-06f039e9a00e|4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '4ce60232-9eb4-4154-af95-06c039e9a00e', '4cbf31e7-d7fc-4b30-b917-024439e9a00e', 1, 1, '2010-11-25 02:39:10', '2010-11-25 02:39:27'),
('4cf5f764-9ca0-45cf-a87a-009c39e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '123', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', '123', NULL, NULL, '4ce603c7-5954-4c9e-838c-06c039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e', '4cbf31f6-2298-4b1e-8d9e-024439e9a00e', 1, 1, '2010-12-01 14:21:08', '2010-12-01 14:21:08'),
('4d2e7da4-9fa0-47cb-8ead-0b7c39e9a00e', '4d2e7cfc-b738-42fb-838f-0b7c39e9a00e', 'j', '4cb7fb04-2970-4ac2-abf6-06e839e9a00e', 'jj', '800', '900', '4cbf265e-3e80-4f35-80b3-024439e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e', '4ce60242-52b8-43f5-b0b6-06c039e9a00e', '4cbf3213-2744-4bed-b488-024439e9a00e', 1, 1, '2011-01-13 11:20:52', '2011-01-13 11:20:52'),
('4d31dc4b-5b80-4471-b04d-0cdc39e9a00e', '4d31dbe5-ef44-4b90-87fd-0cdc39e9a00e', 'Láº­p trÃ¬nh viÃªn', '4cb7fb0b-4544-4dfd-b268-06e839e9a00e', 'Láº­p trÃ¬nh, phÃ¡t triá»ƒn á»©ng dá»¥ng', NULL, NULL, '4ce603c7-5954-4c9e-838c-06c039e9a00e|4ce603d8-97e0-4e53-b45a-06c039e9a00e', '4cbbb451-2ff4-4013-a6a2-07f539e9a00e|4cb74131-2ff4-4013-a6a1-06f039e9a00e', '4cda4747-d5f4-463d-8710-03ac39e9a00e|4ce6024f-1dd0-42f6-bfb1-06c039e9a00e|4d0f04cb-0bfc-44ec-ae44-063439e9a00e', '4cbf3213-2744-4bed-b488-024439e9a00e', 1, 1, '2011-01-16 00:41:31', '2011-01-16 00:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `resume_view_logs`
--

CREATE TABLE IF NOT EXISTS `resume_view_logs` (
  `id` char(36) NOT NULL,
  `resume_id` char(36) NOT NULL,
  `employer_id` char(36) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_view_logs`
--

INSERT INTO `resume_view_logs` (`id`, `resume_id`, `employer_id`, `created`) VALUES
('4d0b1aaa-ef3c-46b8-a01c-0a4839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-17 15:09:14'),
('4d0b203c-9680-4f29-a7e8-0a4839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-17 15:33:00'),
('4d0a6809-a148-47a0-a0b8-0b9439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-17 02:27:05'),
('4d0b205a-8b6c-4145-b455-0a4839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-17 15:33:30'),
('4d0b20b8-ccb4-45f9-98ac-0a4839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-17 15:35:04'),
('4d0b9c8a-f504-4075-be68-086c39e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 00:23:22'),
('4d0b9c90-85fc-487b-a548-086c39e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 00:23:28'),
('4d0c6a06-6adc-4f14-a1a1-028839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 15:00:06'),
('4d0c70a4-08a0-46a3-8478-028839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 15:28:20'),
('4d0c70e2-dde4-4b45-aea8-028839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 15:29:22'),
('4d0c7165-8c98-4374-b781-028839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 15:31:33'),
('4d0c72a3-77d8-41fc-997c-028839e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 15:36:51'),
('4d0c72b9-0304-4374-869d-028839e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 15:37:13'),
('4d0c72d6-c05c-4a4d-bf66-028839e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-18 15:37:42'),
('4d0ce8cd-94b8-4ba5-8345-057039e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-19 00:01:01'),
('4d0ce8d2-a518-4da1-9793-057039e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-19 00:01:06'),
('4d0f11f8-9540-4f1b-8c73-063439e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-20 15:21:12'),
('4d0f11fb-5d8c-4f56-9a1a-063439e9a00e', '4cf6018c-b250-4800-b573-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-20 15:21:15'),
('4d0f8706-d94c-4122-a241-076439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-20 23:40:38'),
('4d0f8739-60fc-41ae-ab90-076439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-20 23:41:29'),
('4d0f90e7-65d0-425e-93a4-076439e9a00e', '4cf5f4e2-2178-44cf-8a54-009c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2010-12-21 00:22:47'),
('4d31dd92-6c64-4fb7-baab-0cdc39e9a00e', '4d2e7cfc-b738-42fb-838f-0b7c39e9a00e', '4c9c60ec-8a98-44dd-b25f-08a839e9a00e', '2011-01-16 00:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `skill_group_id` char(36) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills` (`skill_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `skill_group_id`, `created`, `modified`) VALUES
('4d0d956b-a75c-478b-a8b2-076439e9a00e', 'Ká»¹ nÄƒng testing', '4d0d955e-d5a0-47a4-a3e3-076439e9a00e', '2010-12-19 12:17:31', '2010-12-19 12:17:31'),
('4cad98c3-f80c-4a96-ae93-059439e9a00e', 'MySQL', '4cad9d4a-cc28-4114-8000-059439e9a00e', '2010-10-07 16:54:11', '2010-10-08 11:21:30'),
('4d0d954b-d26c-45c0-9e05-076439e9a00e', 'ká»¹ nÄƒng tiáº¿p thá»‹', '4cad871e-7254-4a94-b278-059439e9a00e', '2010-12-19 12:16:59', '2010-12-19 12:16:59'),
('4d01a87f-0db8-4b98-979d-079839e9a00e', 'SQL Server', '4cad9d4a-cc28-4114-8000-059439e9a00e', '2010-12-10 11:11:43', '2010-12-11 14:48:01'),
('4d01a829-62dc-4d15-b39d-079839e9a00e', 'Tin há»c vÄƒn phÃ²ng', '4dad876c-8680-41ef-b2ef-059439e9a00e', '2010-12-10 11:10:17', '2010-12-11 14:47:48'),
('4d0f0330-49a0-4fc7-9f76-063439e9a00e', 'NgÃ´n ngá»¯ C#', '4d0f031f-5618-410e-9475-063439e9a00e', '2010-12-20 14:18:08', '2010-12-20 14:18:08'),
('4d0f033d-e600-4de9-9a9a-063439e9a00e', 'NgÃ´n ngá»¯ VB.net', '4d0f031f-5618-410e-9475-063439e9a00e', '2010-12-20 14:18:21', '2010-12-20 14:18:21'),
('4d0f037e-2008-4395-a34e-063439e9a00e', 'PHP', '4d0f031f-5618-410e-9475-063439e9a00e', '2010-12-20 14:19:26', '2010-12-20 14:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `skill_groups`
--

CREATE TABLE IF NOT EXISTS `skill_groups` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_groups`
--

INSERT INTO `skill_groups` (`id`, `name`, `created`, `modified`) VALUES
('4cad871e-7254-4a94-b278-059439e9a00e', 'Ká»¹ nÄƒng truyá»n thÃ´ng', '2010-10-07 15:38:54', '2010-12-20 14:17:21'),
('4dad876c-8680-41ef-b2ef-059439e9a00e', 'Ká»¹ nÄƒng tin há»c', '2010-10-07 15:40:12', '2010-12-20 14:17:26'),
('4cad9d4a-cc28-4114-8000-059439e9a00e', 'Database', '2010-10-07 17:13:30', '2010-10-07 17:13:30'),
('4d0d955e-d5a0-47a4-a3e3-076439e9a00e', 'IT', '2010-12-19 12:17:18', '2010-12-19 12:17:18'),
('4d0f031f-5618-410e-9475-063439e9a00e', 'Ká»¹ nÄƒng láº­p trÃ¬nh', '2010-12-20 14:17:51', '2010-12-20 14:17:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
