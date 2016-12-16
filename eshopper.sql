-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 07:49 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dolce & Gabbana', '2016-10-12 05:28:18', '2016-12-05 09:24:52', NULL),
(2, 'Nike', '2016-10-12 05:29:05', '2016-10-28 10:37:08', NULL),
(3, 'Adidas', '2016-10-12 05:29:11', '2016-10-28 10:37:17', NULL),
(4, 'Puma', '2016-10-12 05:29:16', '2016-10-28 10:37:20', NULL),
(5, 'Asics', '2016-10-12 05:29:27', '2016-10-28 10:37:12', NULL),
(6, 'Armani', '2016-10-12 05:29:42', '2016-10-28 10:37:13', NULL),
(7, 'Doir', '2016-10-12 05:29:46', '2016-10-12 05:29:46', NULL),
(8, 'Gucci', '2016-10-12 05:29:54', '2016-10-12 05:29:54', NULL),
(9, 'Prada', '2016-10-12 05:29:58', '2016-10-12 05:29:58', NULL),
(10, 'Versace', '2016-10-12 05:30:07', '2016-12-08 12:46:47', NULL),
(11, 'Chanel', '2016-10-12 05:30:15', '2016-10-12 05:30:15', NULL),
(12, 'Frendi', '2016-10-12 05:30:24', '2016-10-12 05:30:24', NULL),
(13, 'Guess', '2016-10-12 05:30:30', '2016-10-12 05:30:30', NULL),
(14, 'Valentino', '2016-10-12 05:30:45', '2016-10-12 05:30:45', NULL),
(15, 'Acne', '2016-10-12 05:59:13', '2016-10-12 05:59:13', NULL),
(16, 'Grune Erde', '2016-10-12 05:59:23', '2016-10-28 10:37:26', NULL),
(17, 'Albiro', '2016-10-12 05:59:32', '2016-10-12 05:59:32', NULL),
(18, 'RonHill', '2016-10-12 05:59:39', '2016-10-12 05:59:39', NULL),
(19, 'OddMolly', '2016-10-12 05:59:49', '2016-10-12 05:59:49', NULL),
(20, 'Boudestijn', '2016-10-12 05:59:59', '2016-10-12 05:59:59', NULL),
(21, 'Rösch creative culture', '2016-10-12 06:00:13', '2016-10-12 06:00:13', NULL),
(22, 'Anne Klein', '2016-10-12 06:01:47', '2016-10-31 10:51:49', NULL),
(23, 'Zotwarm', '2016-12-08 12:32:31', '2016-12-08 12:32:31', NULL),
(24, 'Zoom-Tech', '2016-12-08 12:32:37', '2016-12-08 12:32:37', NULL),
(25, 'Med Namstring', '2016-12-08 12:32:44', '2016-12-08 12:32:44', NULL),
(26, 'Airhold', '2016-12-08 12:32:56', '2016-12-08 12:32:56', NULL),
(27, 'Don Damfind', '2016-12-08 12:33:04', '2016-12-08 12:33:04', NULL),
(28, 'Via Redhold', '2016-12-08 12:33:09', '2016-12-08 12:33:09', NULL),
(29, 'Ranstattech', '2016-12-08 12:33:16', '2016-12-08 12:33:16', NULL),
(30, 'Konk Stock', '2016-12-08 12:33:21', '2016-12-08 12:33:21', NULL),
(31, 'Tamkix', '2016-12-08 12:33:25', '2016-12-08 12:33:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Male', '2016-10-12 05:55:23', '2016-12-05 09:25:30', NULL),
(2, 'Female', '2016-10-12 05:55:29', '2016-10-28 04:26:34', NULL),
(3, 'Mens', '2016-10-12 05:55:38', '2016-10-21 09:46:24', NULL),
(4, 'Womens', '2016-10-12 05:55:45', '2016-10-12 05:55:45', NULL),
(5, 'Children', '2016-10-12 05:55:51', '2016-10-28 10:37:45', NULL),
(6, 'Fashion', '2016-10-12 05:56:00', '2016-10-21 09:14:41', NULL),
(7, 'HouseHold', '2016-10-12 05:56:06', '2016-10-12 05:56:06', NULL),
(8, 'Interiors', '2016-10-12 05:56:14', '2016-10-28 10:37:51', NULL),
(9, 'Clothing', '2016-10-12 05:56:25', '2016-10-12 05:56:25', NULL),
(10, 'Bags', '2016-10-12 05:56:32', '2016-10-12 05:56:32', NULL),
(11, 'Shoes', '2016-10-12 05:56:37', '2016-10-28 10:37:58', NULL),
(12, 'Test Category', '2016-12-13 10:52:56', '2016-12-13 10:52:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `reply_to` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mandip Tharu', 'mandip810@gmail.com', '9840070036', 'No subject', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, '2016-11-21 11:53:29', '2016-11-21 11:53:29'),
(2, 'Mandip Tharu', 'mandip810@gmail.com', '898989898989', 'Test subject', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, '2016-12-04 12:35:17', '2016-12-04 12:35:17'),
(3, 'Mahesh Tharu', 'maheshps2@gmail.com', '89898989898', 'Test subject 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, '2016-12-04 12:35:46', '2016-12-04 12:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iso_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iso_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dialing_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso_2`, `iso_3`, `dialing_code`, `nationality`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', '', 'Afghan', 1, NULL, NULL),
(2, 'Aland Islands', 'AX', 'ALA', '', '', 0, NULL, NULL),
(3, 'Albania', 'AL', 'ALB', '', 'Albanian', 1, NULL, NULL),
(4, 'Algeria', 'DZ', 'DZA', '', 'Algerian', 0, NULL, NULL),
(5, 'American Samoa', 'AS', 'ASM', '', 'American Samoan', 0, NULL, NULL),
(6, 'Andorra', 'AD', 'AND', '', 'Andorran', 0, NULL, NULL),
(7, 'Angola', 'AO', 'AGO', '', 'Angolan', 0, NULL, NULL),
(8, 'Anguilla', 'AI', 'AIA', '', 'Anguillan', 0, NULL, NULL),
(9, 'Antarctica', 'AQ', 'ATA', '', '', 0, NULL, NULL),
(10, 'Antigua and Barbuda', 'AG', 'ATG', '', 'Antiguan/Barbudan', 0, NULL, NULL),
(11, 'Argentina', 'AR', 'ARG', '', 'Argentinean', 0, NULL, NULL),
(12, 'Armenia', 'AM', 'ARM', '', 'Armenian', 0, NULL, NULL),
(13, 'Aruba', 'AW', 'ABW', '', 'Aruban', 0, NULL, NULL),
(14, 'Australia', 'AU', 'AUS', '', 'Australian', 0, NULL, NULL),
(15, 'Austria', 'AT', 'AUT', '', 'Austrian', 0, NULL, NULL),
(16, 'Azerbaijan', 'AZ', 'AZE', '', 'Azerbaijani', 0, NULL, NULL),
(17, 'Bahamas', 'BS', 'BHS', '', 'Bahamian', 0, NULL, NULL),
(18, 'Bahrain', 'BH', 'BHR', '', 'Bahraini', 0, NULL, NULL),
(19, 'Bangladesh', 'BD', 'BGD', '', 'Bangladeshi', 0, NULL, NULL),
(20, 'Barbados', 'BB', 'BRB', '', 'Barbadian', 0, NULL, NULL),
(21, 'Belarus', 'BY', 'BLR', '', 'Belarusian', 0, NULL, NULL),
(22, 'Belgium', 'BE', 'BEL', '', 'Belgian', 0, NULL, NULL),
(23, 'Belize', 'BZ', 'BLZ', '', 'Belizean', 0, NULL, NULL),
(24, 'Benin', 'BJ', 'BEN', '', 'Beninese', 0, NULL, NULL),
(25, 'Bermuda', 'BM', 'BMU', '', 'Bermudian', 0, NULL, NULL),
(26, 'Bhutan', 'BT', 'BTN', '', 'Bhutanese', 0, NULL, NULL),
(27, 'Bolivia, Plurinational State of', 'BO', 'BOL', '', '', 0, NULL, NULL),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', '', '', 0, NULL, NULL),
(29, 'Bosnia and Herzegovina', 'BA', 'BIH', '', 'Bosnian/Herzegovinian', 0, NULL, NULL),
(30, 'Botswana', 'BW', 'BWA', '', 'Motswana', 0, NULL, NULL),
(31, 'Bouvet Island', 'BV', 'BVT', '', '', 0, NULL, NULL),
(32, 'Brazil', 'BR', 'BRA', '', 'Brazilian', 0, NULL, NULL),
(33, 'British Indian Ocean Territory', 'IO', 'IOT', '', '', 0, NULL, NULL),
(34, 'Brunei Darussalam', 'BN', 'BRN', '', '', 0, NULL, NULL),
(35, 'Bulgaria', 'BG', 'BGR', '', 'Bulgarian', 0, NULL, NULL),
(36, 'Burkina Faso', 'BF', 'BFA', '', '', 0, NULL, NULL),
(37, 'Burundi', 'BI', 'BDI', '', 'Burundian', 0, NULL, NULL),
(38, 'Cambodia', 'KH', 'KHM', '', 'Cambodian', 0, NULL, NULL),
(39, 'Cameroon', 'CM', 'CMR', '', 'Cameroonian', 0, NULL, NULL),
(40, 'Canada', 'CA', 'CAN', '', 'Canadian', 0, NULL, NULL),
(41, 'Cape Verde', 'CV', 'CPV', '', 'Cape Verdean', 0, NULL, NULL),
(42, 'Cayman Islands', 'KY', 'CYM', '', 'Caymanian', 0, NULL, NULL),
(43, 'Central African Republic', 'CF', 'CAF', '', 'Central African', 0, NULL, NULL),
(44, 'Chad', 'TD', 'TCD', '', 'Chadian', 0, NULL, NULL),
(45, 'Chile', 'CL', 'CHL', '', 'Chilean', 0, NULL, NULL),
(46, 'China', 'CN', 'CHN', '', 'CHINESE', 0, NULL, NULL),
(47, 'Christmas Island', 'CX', 'CXR', '', 'Christmas Island', 0, NULL, NULL),
(48, 'Cocos (Keeling) Islands', 'CC', 'CCK', '', 'Cocos Island', 0, NULL, NULL),
(49, 'Colombia', 'CO', 'COL', '', 'Colombian', 0, NULL, NULL),
(50, 'Comoros', 'KM', 'COM', '', 'Comorian', 0, NULL, NULL),
(51, 'Congo', 'CG', 'COG', '', '', 0, NULL, NULL),
(52, 'Congo, The Democratic Republic of the', 'CD', 'COD', '', '', 0, NULL, NULL),
(53, 'Cook Islands', 'CK', 'COK', '', 'Cook Island', 0, NULL, NULL),
(54, 'Costa Rica', 'CR', 'CRI', '', 'Costa Rican', 0, NULL, NULL),
(55, 'Cote d''Ivoire', 'CI', 'CIV', '', '', 0, NULL, NULL),
(56, 'Croatia', 'HR', 'HRV', '', 'Croatian', 0, NULL, NULL),
(57, 'Cuba', 'CU', 'CUB', '', 'Cuban', 0, NULL, NULL),
(58, 'Curacao', 'CW', 'CUW', '', '', 0, NULL, NULL),
(59, 'Cyprus', 'CY', 'CYP', '', 'Cypriot', 0, NULL, NULL),
(60, 'Czech Republic', 'CZ', 'CZE', '', 'Czech', 0, NULL, NULL),
(61, 'Denmark', 'DK', 'DNK', '', 'Danish', 0, NULL, NULL),
(62, 'Djibouti', 'DJ', 'DJI', '', 'Djiboutian', 0, NULL, NULL),
(63, 'Dominica', 'DM', 'DMA', '', 'Dominicand', 0, NULL, NULL),
(64, 'Dominican Republic', 'DO', 'DOM', '', 'Dominicane', 0, NULL, NULL),
(65, 'Ecuador', 'EC', 'ECU', '', 'Ecuadorian', 0, NULL, NULL),
(66, 'Egypt', 'EG', 'EGY', '', 'Egyptian', 0, NULL, NULL),
(67, 'El Salvador', 'SV', 'SLV', '', 'Salvadoran', 0, NULL, NULL),
(68, 'Equatorial Guinea', 'GQ', 'GNQ', '', 'Equatorial Guinean', 0, NULL, NULL),
(69, 'Eritrea', 'ER', 'ERI', '', 'Eritrean', 0, NULL, NULL),
(70, 'Estonia', 'EE', 'EST', '', 'Estonian', 0, NULL, NULL),
(71, 'Ethiopia', 'ET', 'ETH', '', 'Ethiopian', 0, NULL, NULL),
(72, 'Falkland Islands (Malvinas)', 'FK', 'FLK', '', '', 0, NULL, NULL),
(73, 'Faroe Islands', 'FO', 'FRO', '', 'Faroese', 0, NULL, NULL),
(74, 'Fiji', 'FJ', 'FJI', '', 'Fijian', 0, NULL, NULL),
(75, 'Finland', 'FI', 'FIN', '', 'Finnish', 0, NULL, NULL),
(76, 'France', 'FR', 'FRA', '', 'French', 0, NULL, NULL),
(77, 'French Guiana', 'GF', 'GUF', '', 'French Guianese', 0, NULL, NULL),
(78, 'French Polynesia', 'PF', 'PYF', '', 'French Polynesian', 0, NULL, NULL),
(79, 'French Southern Territories', 'TF', 'ATF', '', '', 0, NULL, NULL),
(80, 'Gabon', 'GA', 'GAB', '', 'Gabonese', 0, NULL, NULL),
(81, 'Gambia', 'GM', 'GMB', '', 'Gambian', 0, NULL, NULL),
(82, 'Georgia', 'GE', 'GEO', '', 'Georgian', 0, NULL, NULL),
(83, 'Germany', 'DE', 'DEU', '', 'German', 0, NULL, NULL),
(84, 'Ghana', 'GH', 'GHA', '', 'Ghanaian', 0, NULL, NULL),
(85, 'Gibraltar', 'GI', 'GIB', '', 'Gibraltar', 0, NULL, NULL),
(86, 'Greece', 'GR', 'GRC', '', 'Greek', 0, NULL, NULL),
(87, 'Greenland', 'GL', 'GRL', '', 'Greenlandic', 0, NULL, NULL),
(88, 'Grenada', 'GD', 'GRD', '', 'Grenadian', 0, NULL, NULL),
(89, 'Guadeloupe', 'GP', 'GLP', '', 'Guadeloupe', 0, NULL, NULL),
(90, 'Guam', 'GU', 'GUM', '', 'Guamanian', 0, NULL, NULL),
(91, 'Guatemala', 'GT', 'GTM', '', 'Guatemalan', 0, NULL, NULL),
(92, 'Guernsey', 'GG', 'GGY', '', '', 0, NULL, NULL),
(93, 'Guinea', 'GN', 'GIN', '', 'Guinean', 0, NULL, NULL),
(94, 'Guinea-Bissau', 'GW', 'GNB', '', 'Guinean', 0, NULL, NULL),
(95, 'Guyana', 'GY', 'GUY', '', 'Guyanese', 0, NULL, NULL),
(96, 'Haiti', 'HT', 'HTI', '', 'Haitian', 0, NULL, NULL),
(97, 'Heard Island and McDonald Islands', 'HM', 'HMD', '', '', 0, NULL, NULL),
(98, 'Holy See (Vatican City State)', 'VA', 'VAT', '', '', 0, NULL, NULL),
(99, 'Honduras', 'HN', 'HND', '', 'Honduran', 0, NULL, NULL),
(100, 'Hong Kong', 'HK', 'HKG', '', 'Hongkongese', 0, NULL, NULL),
(101, 'Hungary', 'HU', 'HUN', '', 'Hungarian', 0, NULL, NULL),
(102, 'Iceland', 'IS', 'ISL', '', 'Icelandic', 0, NULL, NULL),
(103, 'India', 'IN', 'IND', '91', 'Indian', 0, NULL, NULL),
(104, 'Indonesia', 'ID', 'IDN', '', 'Indonesian', 0, NULL, NULL),
(105, 'Iran, Islamic Republic of', 'IR', 'IRN', '', '', 0, NULL, NULL),
(106, 'Iraq', 'IQ', 'IRQ', '', 'Iraqi', 0, NULL, NULL),
(107, 'Ireland', 'IE', 'IRL', '', 'Irish', 0, NULL, NULL),
(108, 'Isle of Man', 'IM', 'IMN', '', 'Manx', 0, NULL, NULL),
(109, 'Israel', 'IL', 'ISR', '', 'Israeli', 0, NULL, NULL),
(110, 'Italy', 'IT', 'ITA', '', 'Italian', 0, NULL, NULL),
(111, 'Jamaica', 'JM', 'JAM', '', 'Jamaican', 0, NULL, NULL),
(112, 'Japan', 'JP', 'JPN', '', 'Japanese', 0, NULL, NULL),
(113, 'Jersey', 'JE', 'JEY', '', '', 0, NULL, NULL),
(114, 'Jordan', 'JO', 'JOR', '', 'Jordanian', 0, NULL, NULL),
(115, 'Kazakhstan', 'KZ', 'KAZ', '', 'Kazakh', 0, NULL, NULL),
(116, 'Kenya', 'KE', 'KEN', '', 'Kenyan', 0, NULL, NULL),
(117, 'Kiribati', 'KI', 'KIR', '', 'I-Kiribati', 0, NULL, NULL),
(118, 'Korea, Democratic People''s Republic of', 'KP', 'PRK', '', '', 0, NULL, NULL),
(119, 'Korea, Republic of', 'KR', 'KOR', '', '', 0, NULL, NULL),
(120, 'Kuwait', 'KW', 'KWT', '', 'Kuwaiti', 0, NULL, NULL),
(121, 'Kyrgyzstan', 'KG', 'KGZ', '', 'Kyrgyzstani', 0, NULL, NULL),
(122, 'Lao People''s Democratic Republic', 'LA', 'LAO', '', '', 0, NULL, NULL),
(123, 'Latvia', 'LV', 'LVA', '', 'Latvian', 0, NULL, NULL),
(124, 'Lebanon', 'LB', 'LBN', '', 'Lebanese', 0, NULL, NULL),
(125, 'Lesotho', 'LS', 'LSO', '', 'Basotho', 0, NULL, NULL),
(126, 'Liberia', 'LR', 'LBR', '', 'Liberian', 0, NULL, NULL),
(127, 'Libyan Arab Jamahiriya', 'LY', 'LBY', '', '', 0, NULL, NULL),
(128, 'Liechtenstein', 'LI', 'LIE', '', 'Liechtenstein', 0, NULL, NULL),
(129, 'Lithuania', 'LT', 'LTU', '', 'Lithuanian', 0, NULL, NULL),
(130, 'Luxembourg', 'LU', 'LUX', '', 'Luxembourgish', 0, NULL, NULL),
(131, 'Macao', 'MO', 'MAC', '', '', 0, NULL, NULL),
(132, 'Macedonia, The former Yugoslav Republic of', 'MK', 'MKD', '', '', 0, NULL, NULL),
(133, 'Madagascar', 'MG', 'MDG', '', 'Malagasy', 0, NULL, NULL),
(134, 'Malawi', 'MW', 'MWI', '', 'Malawian', 0, NULL, NULL),
(135, 'Malaysia', 'MY', 'MYS', '', 'Malaysian', 0, NULL, NULL),
(136, 'Maldives', 'MV', 'MDV', '', 'Maldivian', 0, NULL, NULL),
(137, 'Mali', 'ML', 'MLI', '', 'Malian', 0, NULL, NULL),
(138, 'Malta', 'MT', 'MLT', '', 'Maltese', 0, NULL, NULL),
(139, 'Marshall Islands', 'MH', 'MHL', '', 'Marshallese', 0, NULL, NULL),
(140, 'Martinique', 'MQ', 'MTQ', '', 'Martiniquais', 0, NULL, NULL),
(141, 'Mauritania', 'MR', 'MRT', '', 'Mauritanian', 0, NULL, NULL),
(142, 'Mauritius', 'MU', 'MUS', '', 'Mauritian', 0, NULL, NULL),
(143, 'Mayotte', 'YT', 'MYT', '', 'Mahoran', 0, NULL, NULL),
(144, 'Mexico', 'MX', 'MEX', '', 'Mexican', 0, NULL, NULL),
(145, 'Micronesia, Federated States of', 'FM', 'FSM', '', 'Micronesian', 0, NULL, NULL),
(146, 'Moldova, Republic of', 'MD', 'MDA', '', '', 0, NULL, NULL),
(147, 'Monaco', 'MC', 'MCO', '', 'MonÃ©gasque, Monacan', 0, NULL, NULL),
(148, 'Mongolia', 'MN', 'MNG', '', 'Mongolian', 0, NULL, NULL),
(149, 'Montenegro', 'ME', 'MNE', '', 'Montenegrin', 0, NULL, NULL),
(150, 'Montserrat', 'MS', 'MSR', '', 'Montserratian', 0, NULL, NULL),
(151, 'Morocco', 'MA', 'MAR', '', 'Moroccan', 0, NULL, NULL),
(152, 'Mozambique', 'MZ', 'MOZ', '', 'Mozambican', 0, NULL, NULL),
(153, 'Myanmar', 'MM', 'MMR', '', '', 0, NULL, NULL),
(154, 'Namibia', 'NA', 'NAM', '', 'Namibian', 0, NULL, NULL),
(155, 'Nauru', 'NR', 'NRU', '', 'Nauruan', 0, NULL, NULL),
(156, 'Nepal', 'NP', 'NPL', '977', 'Nepali', 0, NULL, NULL),
(157, 'Netherlands', 'NL', 'NLD', '', 'Dutch', 0, NULL, NULL),
(158, 'New Caledonia', 'NC', 'NCL', '', 'New Caledonian', 0, NULL, NULL),
(159, 'New Zealand', 'NZ', 'NZL', '', 'New Zealand', 0, NULL, NULL),
(160, 'Nicaragua', 'NI', 'NIC', '', 'Nicaraguan', 0, NULL, NULL),
(161, 'Niger', 'NE', 'NER', '', 'Nigerien', 0, NULL, NULL),
(162, 'Nigeria', 'NG', 'NGA', '', 'Nigerian', 0, NULL, NULL),
(163, 'Niue', 'NU', 'NIU', '', 'Niuean', 0, NULL, NULL),
(164, 'Norfolk Island', 'NF', 'NFK', '', '', 0, NULL, NULL),
(165, 'Northern Mariana Islands', 'MP', 'MNP', '', '', 0, NULL, NULL),
(166, 'Norway', 'NO', 'NOR', '', 'Norwegian', 0, NULL, NULL),
(167, 'Oman', 'OM', 'OMN', '', 'Omani', 0, NULL, NULL),
(168, 'Pakistan', 'PK', 'PAK', '', 'Pakistani', 0, NULL, NULL),
(169, 'Palau', 'PW', 'PLW', '', 'Palauan', 0, NULL, NULL),
(170, 'Palestinian Territory, Occupied', 'PS', 'PSE', '', '', 0, NULL, NULL),
(171, 'Panama', 'PA', 'PAN', '', 'Panamanian', 0, NULL, NULL),
(172, 'Papua New Guinea', 'PG', 'PNG', '', 'Papua New Guinean', 0, NULL, NULL),
(173, 'Paraguay', 'PY', 'PRY', '', 'Paraguayan', 0, NULL, NULL),
(174, 'Peru', 'PE', 'PER', '', 'Peruvian', 0, NULL, NULL),
(175, 'Philippines', 'PH', 'PHL', '', 'Filipino', 0, NULL, NULL),
(176, 'Pitcairn', 'PN', 'PCN', '', '', 0, NULL, NULL),
(177, 'Poland', 'PL', 'POL', '', 'Polish', 0, NULL, NULL),
(178, 'Portugal', 'PT', 'PRT', '', 'Portuguese', 0, NULL, NULL),
(179, 'Puerto Rico', 'PR', 'PRI', '', 'Puerto Rican', 0, NULL, NULL),
(180, 'Qatar', 'QA', 'QAT', '', 'Qatari', 0, NULL, NULL),
(181, 'Reunion', 'RE', 'REU', '', '', 0, NULL, NULL),
(182, 'Romania', 'RO', 'ROU', '', 'Romanian', 0, NULL, NULL),
(183, 'Russian Federation', 'RU', 'RUS', '', '', 0, NULL, NULL),
(184, 'Rwanda', 'RW', 'RWA', '', 'Rwandan', 0, NULL, NULL),
(185, 'Saint Barthelemy', 'BL', 'BLM', '', '', 0, NULL, NULL),
(186, 'Saint Helena, Ascension and Tristan Da Cunha', 'SH', 'SHN', '', '', 0, NULL, NULL),
(187, 'Saint Kitts and Nevis', 'KN', 'KNA', '', '', 0, NULL, NULL),
(188, 'Saint Lucia', 'LC', 'LCA', '', '', 0, NULL, NULL),
(189, 'Saint Martin (French Part)', 'MF', 'MAF', '', '', 0, NULL, NULL),
(190, 'Saint Pierre and Miquelon', 'PM', 'SPM', '', '', 0, NULL, NULL),
(191, 'Saint Vincent and The Grenadines', 'VC', 'VCT', '', '', 0, NULL, NULL),
(192, 'Samoa', 'WS', 'WSM', '', 'Samoan', 0, NULL, NULL),
(193, 'San Marino', 'SM', 'SMR', '', 'Sammarinese', 0, NULL, NULL),
(194, 'Sao Tome and Principe', 'ST', 'STP', '', '', 0, NULL, NULL),
(195, 'Saudi Arabia', 'SA', 'SAU', '', 'Saudi Arabian', 0, NULL, NULL),
(196, 'Senegal', 'SN', 'SEN', '', 'Senegalese', 0, NULL, NULL),
(197, 'Serbia', 'RS', 'SRB', '', 'Serbian', 0, NULL, NULL),
(198, 'Seychelles', 'SC', 'SYC', '', 'Seychellois', 0, NULL, NULL),
(199, 'Sierra Leone', 'SL', 'SLE', '', 'Sierra Leonean', 0, NULL, NULL),
(200, 'Singapore', 'SG', 'SGP', '', 'Singapore', 0, NULL, NULL),
(201, 'Sint Maarten (Dutch Part)', 'SX', 'SXM', '', '', 0, NULL, NULL),
(202, 'Slovakia', 'SK', 'SVK', '', 'Slovak', 0, NULL, NULL),
(203, 'Slovenia', 'SI', 'SVN', '', 'Slovenian', 0, NULL, NULL),
(204, 'Solomon Islands', 'SB', 'SLB', '', 'Solomon Island', 0, NULL, NULL),
(205, 'Somalia', 'SO', 'SOM', '', 'Somalian', 0, NULL, NULL),
(206, 'South Africa', 'ZA', 'ZAF', '', 'South African', 0, NULL, NULL),
(207, 'South Georgia and The South Sandwich Islands', 'GS', 'SGS', '', '', 0, NULL, NULL),
(208, 'South Sudan', 'SS', 'SSD', '', 'South Sudanese', 0, NULL, NULL),
(209, 'Spain', 'ES', 'ESP', '', 'Spanish', 0, NULL, NULL),
(210, 'Sri Lanka', 'LK', 'LKA', '', 'Sri Lankan', 0, NULL, NULL),
(211, 'Sudan', 'SD', 'SDN', '', 'Sudanese', 0, NULL, NULL),
(212, 'Suriname', 'SR', 'SUR', '', '', 0, NULL, NULL),
(213, 'Svalbard and Jan Mayen', 'SJ', 'SJM', '', '', 0, NULL, NULL),
(214, 'Swaziland', 'SZ', 'SWZ', '', 'Swazi', 0, NULL, NULL),
(215, 'Sweden', 'SE', 'SWE', '', 'Swedish', 0, NULL, NULL),
(216, 'Switzerland', 'CH', 'CHE', '', 'Swiss', 0, NULL, NULL),
(217, 'Syrian Arab Republic', 'SY', 'SYR', '', '', 0, NULL, NULL),
(218, 'Taiwan, Province of China', 'TW', 'TWN', '', '', 0, NULL, NULL),
(219, 'Tajikistan', 'TJ', 'TJK', '', 'Tajikistani', 0, NULL, NULL),
(220, 'Tanzania, United Republic of', 'TZ', 'TZA', '', '', 0, NULL, NULL),
(221, 'Thailand', 'TH', 'THA', '', 'Thai', 0, NULL, NULL),
(222, 'Timor-Leste', 'TL', 'TLS', '', '', 0, NULL, NULL),
(223, 'Togo', 'TG', 'TGO', '', 'Togolese', 0, NULL, NULL),
(224, 'Tokelau', 'TK', 'TKL', '', '', 0, NULL, NULL),
(225, 'Tonga', 'TO', 'TON', '', 'Tongan', 0, NULL, NULL),
(226, 'Trinidad and Tobago', 'TT', 'TTO', '', 'Trinidadian', 0, NULL, NULL),
(227, 'Tunisia', 'TN', 'TUN', '', 'Tunisian', 0, NULL, NULL),
(228, 'Turkey', 'TR', 'TUR', '', 'Turkish', 0, NULL, NULL),
(229, 'Turkmenistan', 'TM', 'TKM', '', 'Turkmen', 0, NULL, NULL),
(230, 'Turks and Caicos Islands', 'TC', 'TCA', '', 'none', 0, NULL, NULL),
(231, 'Tuvalu', 'TV', 'TUV', '', 'Tuvaluan', 0, NULL, NULL),
(232, 'Uganda', 'UG', 'UGA', '', 'Ugandan', 0, NULL, NULL),
(233, 'Ukraine', 'UA', 'UKR', '', 'Ukrainian', 0, NULL, NULL),
(234, 'United Arab Emirates', 'AE', 'ARE', '', 'Emirati', 0, NULL, NULL),
(235, 'United Kingdom', 'GB', 'GBR', '', 'British', 0, NULL, NULL),
(236, 'United States', 'US', 'USA', '', 'American', 0, NULL, NULL),
(237, 'United States Minor Outlying Islands', 'UM', 'UMI', '', '', 0, NULL, NULL),
(238, 'Uruguay', 'UY', 'URY', '', 'Uruguayan', 0, NULL, NULL),
(239, 'Uzbekistan', 'UZ', 'UZB', '', 'Uzbekistani', 0, NULL, NULL),
(240, 'Vanuatu', 'VU', 'VUT', '', 'Ni-Vanuatu', 0, NULL, NULL),
(241, 'Venezuela, Bolivarian Republic of', 'VE', 'VEN', '', '', 0, NULL, NULL),
(242, 'Viet Nam', 'VN', 'VNM', '', '', 0, NULL, NULL),
(243, 'Virgin Islands, British', 'VG', 'VGB', '', '', 0, NULL, NULL),
(244, 'Virgin Islands, U.S.', 'VI', 'VIR', '', '', 0, NULL, NULL),
(245, 'Wallis and Futuna', 'WF', 'WLF', '', 'Wallisian/Futunan', 0, NULL, NULL),
(246, 'Western Sahara', 'EH', 'ESH', '', 'Sahrawian', 0, NULL, NULL),
(247, 'Yemen', 'YE', 'YEM', '', 'Yemeni', 0, NULL, NULL),
(248, 'Zambia', 'ZM', 'ZMB', '', 'Zambian', 0, NULL, NULL),
(249, 'Zimbabwe', 'ZW', 'ZWE', '', 'Zimbabwean', 0, NULL, NULL),
(251, 'Adsf', 'AD', 'ASDF', 'adsf', 'ASDF', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `credit_card_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `username`, `password`, `country_id`, `group_id`, `address`, `credit_card_no`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Mandip Tharu', 'mandip810@gmail.com', 'mandip', 'a6e51557110656bd7c6111aee55f11633da7228d', 156, 20, 'koteshwor, kathmandu', NULL, NULL, '2016-12-13 10:45:16', '2016-12-13 10:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `group_permissions`
--

CREATE TABLE `group_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_09_12_060129_create_user_groups_table', 1),
('2016_09_12_060147_create_countries_table', 1),
('2016_09_13_112014_create_users_table', 2),
('2016_09_15_055012_create_brands_table', 2),
('2016_09_15_055427_create_categories_table', 2),
('2016_09_15_055608_create_products_table', 2),
('2016_09_15_083108_create_blogs_table', 3),
('2016_09_15_084914_create_comments_table', 3),
('2016_09_15_090435_create_productComments_table', 3),
('2016_09_17_062119_create_sessions_table', 3),
('2016_09_15_065246_create_transactions_table', 4),
('2016_09_15_070306_create_orders_table', 4),
('2014_10_12_100000_create_password_resets_table', 5),
('2016_10_28_093500_create_sessions_table', 6),
('2016_11_08_092535_create_shoppingcart_table', 7),
('2016_11_21_165350_create_contacts_table', 8),
('2016_11_27_141609_create_customers_table', 9),
('2016_12_13_170155_create_permissions_table', 10),
('2016_12_13_170439_create_group_permissions_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Test Permission', 'This is just the test permission.', '2016-12-13 12:17:24', '2016-12-13 12:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `short_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping` tinyint(1) NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `short_desc`, `long_desc`, `status`, `shipping`, `brand_id`, `category_id`, `gender`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lam Flex1', 1000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0', 0, 1, 6, 'male', '1477649902samragee8.jpg', '2016-10-21 05:13:17', '2016-12-05 09:48:03', NULL),
(2, 'Gravedax', 2000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 8, 4, 'other', '1477649872samragee3.jpg', '2016-10-21 12:09:36', '2016-10-28 04:32:52', NULL),
(3, 'New Product', 2000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 22, 10, 'other', '1477649838samragee1.jpg', '2016-10-22 13:05:54', '2016-10-28 04:32:18', NULL),
(4, 'Awesome Product', 12000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 8, 9, 'other', '1477675454prizma sis.jpg', '2016-10-22 13:18:21', '2016-10-28 11:39:14', NULL),
(5, 'Asan', 2122212, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 18, 8, 'female', '1477674954product6.jpg', '2016-10-22 13:35:22', '2016-10-28 12:01:46', NULL),
(6, 'Easy Polo Black Edition', 5000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 17, 11, 'female', '1477673772product3.jpg', '2016-10-28 11:11:12', '2016-11-16 10:36:21', NULL),
(7, 'Product 1', 12121, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 6, 9, 'male', '14793140041621798_696055317092836_722815076_n.jpg', '2016-11-16 10:38:51', '2016-11-16 10:48:24', NULL),
(8, 'Product 2', 2122212, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 12, 6, 'female', '1479313483samragee5.jpg', '2016-11-16 10:39:43', '2016-11-16 10:39:43', NULL),
(9, 'Product 3', 5454, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 6, 9, 'female', '147931367010353241_856820987666509_287526960341815622_o.jpg', '2016-11-16 10:42:50', '2016-11-16 10:42:50', NULL),
(10, 'Product 4', 12121, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 9, 9, 'male', '14793199201794571_10152233308305681_2041218563_n.jpg', '2016-11-16 12:27:00', '2016-11-16 12:27:00', NULL),
(11, 'Product 5', 5555, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 15, 9, 'female', '1481118061by elves hats sleeping awesome wallpaper.jpg', '2016-11-16 12:28:19', '2016-12-07 07:56:01', NULL),
(12, 'Product 6', 21321, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 0, 8, 4, 'male', '14795698051560651_786245951390680_8731705_n.jpg', '2016-11-19 09:51:45', '2016-11-19 09:51:45', NULL),
(13, 'Product 7', 2131, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 7, 4, 'female', '14795698671947550_10152267437315681_523694753_n.jpg', '2016-11-19 09:52:47', '2016-11-19 09:52:47', NULL),
(14, 'Product 8', 5353, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 4, 4, 'female', '14795699231524964_779298105418798_1133175753_n.jpg', '2016-11-19 09:53:43', '2016-11-19 09:53:43', NULL),
(15, 'Product 9', 4343, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 5, 6, 'male', '147957003510155137_851213958227212_3190429070832359191_n.jpg', '2016-11-19 09:55:35', '2016-11-19 09:55:35', NULL),
(16, 'Product 9', 4353, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 6, 6, 'male', '147957006810371920_849330275082247_211967524795385434_n.jpg', '2016-11-19 09:56:08', '2016-11-19 09:56:08', NULL),
(17, 'Product 10', 6444, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 7, 6, 'male', '1479570114t-shirts19.jpg', '2016-11-19 09:56:54', '2016-11-19 09:56:54', NULL),
(18, 'Product 11', 6464, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 10, 8, 'female', '1479570172t-shirts26.jpg', '2016-11-19 09:57:52', '2016-11-19 09:57:52', NULL),
(19, 'Product 12', 7574, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 11, 8, 'female', '1479570317Selena Gomez.jpg', '2016-11-19 10:00:17', '2016-11-19 10:00:17', NULL),
(20, 'Product 13', 8989, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 11, 8, 'male', '1479570374baby sleeping.jpg', '2016-11-19 10:01:14', '2016-11-19 10:01:14', NULL),
(21, 'Product 14', 8989, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 1, 11, 6, 'female', '1480501526japanese.jpg', '2016-11-30 04:40:27', '2016-11-30 04:40:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `reply_to` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9fpK6M2T32PUduugCy1ixpzTX0cPGKMG9hQ3apx3', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUE1SHBINVNnQWFkVUJUUnU1U1ZJZGVCMFI2T2dEZVUzaTIxUDBhTSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0ODEwODY4MjM7czoxOiJjIjtpOjE0ODEwODY4MjM7czoxOiJsIjtzOjE6IjAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1481086823),
('B52aRwnQB2ymVhl7B3nbFPkhpVLKKaC1CUbVOOOG', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN0lMTmVRUmhpOHVIN3BRa3hNT1Yxb1pBcHpWMDU0UTd5S0tyWGpJYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvZXNob3BwZXIvcHVibGljL2NhcnQvY29udGVudHMiO31zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ4MTM1ODc5NjtzOjE6ImMiO2k6MTQ4MTM1ODc5NjtzOjE6ImwiO3M6MToiMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1481358796),
('BBU93NmqGHZA79aSGKb9xZgOh14WD4dv9DakD7V6', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWVVnYkt0ajZTRkYyTmhCbkZrUWRzdThWdGd0eFZyVWlFVngyU1R3NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvZXNob3BwZXIvcHVibGljL2NhcnQvY29udGVudHMiO31zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ4MTY5NzU0OTtzOjE6ImMiO2k6MTQ4MTY5NzU0OTtzOjE6ImwiO3M6MToiMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1481697549),
('c5PQGwgMEr9roVyNm8y5L88x9o9iLPJ370aJKCJz', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicFNreFlCd3ZvbmExOUxLVkFEbmdEYnk4MlpRZjY2YUxHeGU2NVZmSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvZXNob3BwZXIvcHVibGljL2NhcnQvY29udGVudHMiO31zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ3OTg3Mjk4MDtzOjE6ImMiO2k6MTQ3OTg3Mjk4MDtzOjE6ImwiO3M6MToiMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1479872980),
('k83wqGkyre0XMiZ8oZvPV5y5B4QZZgWqeDvo5uv4', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVVN2T1JZNzN0aHZ4anVVYmpPSWRLNXlxY2hRRnBpR3Jwa0ZlN2pnSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3QvZXNob3BwZXIvcHVibGljL3Byb2R1Y3QvaW1hZ2UvOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDc5NzUyMTgwO3M6MToiYyI7aToxNDc5NzUwNjY2O3M6MToibCI7czoxOiIwIjt9fQ==', 1479752180),
('r7JzUxo3kKrNzLCra6RkYKWuvIFuiEVAIYnyytzK', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjRSck9qSjhrUEhIamF0clFZY2cyYUVNSFRyUEdZMUpxclFKR2FkRSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0ODA3NjMxOTM7czoxOiJjIjtpOjE0ODA3NjMxOTM7czoxOiJsIjtzOjE6IjAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1480763193),
('xAVznZvoiYYq7mOzrTR0jZ51HuIouH37AyBwPlLx', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnQ0bG03eWJnd3AwWHU3dVJPN3dLUEtzdUNFTE14NFRDNThETGlLRyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0ODA2ODM4ODY7czoxOiJjIjtpOjE0ODA2ODM4ODY7czoxOiJsIjtzOjE6IjAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1480683886);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_amount` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `total_amount`, `payment_method`, `customer_id`, `created_at`, `updated_at`) VALUES
(14, '31,007.00', 'Online Transaction', 6, '2016-12-13 10:48:29', '2016-12-13 10:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `country_id`, `group_id`, `address1`, `address2`, `company_name`, `job_title`, `phone_number`, `mobile_number`, `fax`, `api_key`, `access_token`, `remember_token`, `verification_token`, `email_verified`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Mandip', 'Tharu', 'memandip', 'mandip810@gmail.com', '$2y$10$OF3RXcVIyx7IC60IT1brnOfrlZBjWOm5Hs3u/sV2SFlYiLcaYJBje', 156, 6, 'Rajapur, Bardiya', 'Koteshwor, Kathmandu', 'No', 'No', '0', '0', '0', '', 'MySuperSecretAccessToken', '6n2mHsBWK3WDvH5sPDolqmmbL23ycbz7OegX0V4cbg6v1yQBUzC28M6jj4mr', '', 0, 1, NULL, '2016-09-19 08:38:29', '2016-12-05 23:56:18'),
(4, 'Mandip', 'Tharu', 'mandipthr', 'memandip@gmail.com', '$2y$10$pIN1g/5wbnNhvvafUmMuo.agx.MAb3AmwjLb0ew22urDs8mx52I8a', 156, 8, 'Koteshwor, katmandu', 'Rajapur, Bardiya', 'No company yet', 'No job', '1234567890', '1234567890', '1234567890', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2016-10-02 12:38:58', '2016-12-11 13:54:54'),
(5, 'Mandip', 'Tharu', 'mandip', 'memandip1@gmail.com', '$2y$10$Mzgc8C5dfNrL6AY4vqHXYerDNtPRmiGv6TVmqkjE.wzzpPsuKowfq', 156, 8, 'Koteshwor, katmandu', 'Rajapur, Bardiya', 'No company yet', 'No job', '1234567890', '1234567890', '1234567890', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2016-10-02 12:40:18', '2016-12-05 09:23:42'),
(6, 'Mandip', 'Tharu', 'memandip10', 'a@a.com', '$2y$10$PX3IyCJMOVwZvfUtYMuS0O15BVP51EfY8NljL3g6ENj5zu7BOsmpG', 156, 8, 'Rajapur, Bardiya', 'Koteshwor, Kathmandu', 'No company yet', 'No job', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2016-10-05 14:58:44', '2016-11-09 12:05:50'),
(9, 'Mahesh', 'Tharu', 'mahesh', 'mahesh@gmail.com', '$2y$10$ceY2FK3gZUfjo1OxszQXEOud8oaMJ0p5JY1tqOgGAxJ7cNiHR2kjW', 156, 7, 'Rajapur, Bardiya', 'Rajapur, Bardiya', 'No company yet', 'No job', '90909090909', '90909090909', '', NULL, NULL, '28N8tZkdkEd9dYLbAYjKxNkLpKBcFD0YI5ZfvrCdTJGLIV5XyjUnD5QMzJVh', NULL, NULL, 1, NULL, '2016-10-06 00:36:30', '2016-12-12 11:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, 'superadmin', 'Master of all admins of the eshopper.', 1, '2016-09-17 16:28:59', '2016-12-03 14:58:31'),
(7, 'admin', 'Admin of the eshopper', 1, '2016-09-17 16:29:11', '2016-09-17 16:29:11'),
(8, 'managers', 'Managers of the eshopper', 1, '2016-09-17 16:29:25', '2016-09-17 16:29:25'),
(9, 'user', 'Normal Users of of the eshopper', 1, '2016-09-17 16:29:35', '2016-09-17 16:29:35'),
(20, 'customers', 'Customers of eshopper.', 1, '2016-11-27 10:03:37', '2016-11-27 10:03:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`),
  ADD KEY `comments_reply_to_foreign` (`reply_to`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_country_id_foreign` (`country_id`),
  ADD KEY `customers_group_id_foreign` (`group_id`);

--
-- Indexes for table `group_permissions`
--
ALTER TABLE `group_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_permissions_group_id_foreign` (`group_id`),
  ADD KEY `group_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_comments_user_id_foreign` (`user_id`),
  ADD KEY `product_comments_product_id_foreign` (`product_id`),
  ADD KEY `product_comments_reply_to_foreign` (`reply_to`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_country_id_foreign` (`country_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `group_permissions`
--
ALTER TABLE `group_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_reply_to_foreign` FOREIGN KEY (`reply_to`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customers_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `user_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `group_permissions`
--
ALTER TABLE `group_permissions`
  ADD CONSTRAINT `group_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `user_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `product_comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_comments_reply_to_foreign` FOREIGN KEY (`reply_to`) REFERENCES `product_comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `user_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
