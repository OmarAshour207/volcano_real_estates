-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 01:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'عننا', 'About Us', 'الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه الوصف عننا بالعربيه', 'About Us Desc in english About Us Desc in english About Us Desc in english About Us Desc in english About Us Desc in english About Us Desc in english About Us Desc in english About Us Desc in english About Us Desc in english', 'p3GWDh99SD4HLcMvpr3ILWAby3JHt0c5J86RODGj.png', '2020-09-21 12:05:31', '2020-11-02 08:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `ar_author`, `en_author`, `ar_title`, `en_title`, `ar_content`, `en_content`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'أسم المؤلف بالعربيه', 'name in eblgish', 'اللقب بالعربيه', 'title in english for blog', '<p>المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;</p>', '<p>content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;</p>', 'Exercitationem persp', 'Aut dolorem nulla et', 'stJHzG48JLulTVjrEgopwjKftbwOKHh7KaNrv11I.jpeg', '2020-11-02 08:29:01', '2020-11-02 08:29:01'),
(2, 'أسم المؤلف بالعربيه', 'name in eblgish', 'اللقب بالعربيه', 'title in english for blog', '<p>المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;</p>', '<p>content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;</p>', 'Exercitationem persp', 'Aut dolorem nulla et', 'stJHzG48JLulTVjrEgopwjKftbwOKHh7KaNrv11I.jpeg', '2020-11-02 08:29:01', '2020-11-02 08:29:01'),
(3, 'أسم المؤلف بالعربيه', 'name in eblgish', 'اللقب بالعربيه', 'title in english for blog', '<p>المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;</p>', '<p>content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;</p>', 'Exercitationem persp', 'Aut dolorem nulla et', 'stJHzG48JLulTVjrEgopwjKftbwOKHh7KaNrv11I.jpeg', '2020-11-02 08:29:01', '2020-11-02 08:29:01'),
(4, 'أسم المؤلف بالعربيه', 'name in eblgish', 'اللقب بالعربيه', 'title in english for blog', '<p>المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;المحتوي بالعربيه&nbsp;</p>', '<p>content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;content in english&nbsp;</p>', 'Exercitationem persp', 'Aut dolorem nulla et', 'stJHzG48JLulTVjrEgopwjKftbwOKHh7KaNrv11I.jpeg', '2020-11-02 08:29:01', '2020-11-02 08:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Omar Abdalaziz', '01117641613', 'omar@gmail.com', 'asdddddddddddddddddddddddddd', '2020-09-21 15:08:57', '2020-09-21 15:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `ar_description`, `en_description`, `created_at`, `updated_at`) VALUES
(1, '<h2>أتصل بنا بالعربيه ..</h2>', '<h2>Quis non magni non d.</h2>', '2020-09-21 12:51:26', '2020-11-02 08:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `contact_notifications`
--

CREATE TABLE `contact_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_notifications`
--

INSERT INTO `contact_notifications` (`id`, `name`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Omar Abdalaziz', ' تم أرسال رساله', 0, '2020-09-21 15:08:58', '2020-09-21 15:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_07_27_122405_create_sliders_table', 1),
(3, '2020_07_27_150345_create_services_table', 1),
(4, '2020_07_28_111253_create_abouts_table', 1),
(5, '2020_07_28_111604_create_testimonials_table', 1),
(6, '2020_07_28_112621_create_contacts_table', 1),
(7, '2020_07_28_151051_create_blogs_table', 1),
(8, '2020_07_28_175733_create_team_members_table', 1),
(9, '2020_07_29_140143_create_projects_table', 1),
(10, '2020_08_04_091617_create_website_settings_table', 1),
(11, '2020_08_04_114528_create_logos_table', 1),
(12, '2020_08_10_124838_create_visitors_table', 1),
(13, '2020_08_12_113818_create_themes_table', 1),
(14, '2020_08_12_172309_create_contactuses_table', 1),
(15, '2020_09_07_002025_create_contact_notifications_table', 1),
(16, '2020_09_07_002025_create_states_table', 1),
(17, '2020_09_15_000544_create_properties_table', 1),
(18, '2020_09_15_002050_create_property_images_table', 1),
(19, '2020_09_20_132912_create_other_data_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_data`
--

CREATE TABLE `other_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `data_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'اللقب بالعربيه للمشروع', 'Maia Hubbard', 'الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه الوصف بالعربيه', 'english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'U1KXDxn1pHVJm7QJ4ZXNc6PX8x8ELI8dMztLvnU9.png', '2020-11-02 07:44:37', '2020-11-02 07:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `price` decimal(5,2) NOT NULL DEFAULT 0.00,
  `ar_meta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_meta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `ar_name`, `en_name`, `ar_description`, `en_description`, `type`, `area`, `status`, `price`, `ar_meta`, `en_meta`, `ar_address`, `en_address`, `latitude`, `longitude`, `state_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nora Lindsey', 'Clinton Donovan', 'Ad aperiam similique', 'Quidem sed eos incid', 1, '120', 1, '535.00', NULL, NULL, 'Non aspernatur tempo', 'Labore voluptas sequ', NULL, NULL, 1, 'z8BhffvQ3LBx7oVxsERPK4KNvsxznloHGNtw8L12.jpeg', '2020-09-21 12:05:34', '2020-09-21 12:13:12'),
(2, 'Nora Lindsey', 'Clinton Donovan', 'Ad aperiam similique', 'Quidem sed eos incid', 1, '120', 1, '535.00', NULL, NULL, 'Non aspernatur tempo', 'Labore voluptas sequ', NULL, NULL, 1, 'AAbybDyvJ4qjwuCBPYQsk22EdQoj0eHpfJhHMzOY.jpeg', '2020-09-21 12:05:34', '2020-09-21 12:13:12'),
(3, 'Nora Lindsey', 'Clinton Donovan', 'Ad aperiam similique', 'Quidem sed eos incid', 2, '120', 1, '535.00', NULL, NULL, 'Non aspernatur tempo', 'Labore voluptas sequ', NULL, NULL, 1, 'AAbybDyvJ4qjwuCBPYQsk22EdQoj0eHpfJhHMzOY.jpeg', '2020-09-21 12:05:34', '2020-09-21 12:13:12'),
(4, 'Nora Lindsey', 'Clinton Donovan', 'Ad aperiam similique', 'Quidem sed eos incid', 2, '120', 1, '535.00', NULL, NULL, 'Non aspernatur tempo', 'Labore voluptas sequ', NULL, NULL, 1, 'AAbybDyvJ4qjwuCBPYQsk22EdQoj0eHpfJhHMzOY.jpeg', '2020-09-21 12:05:34', '2020-09-21 12:13:12'),
(5, 'Nora Lindsey', 'Clinton Donovan', 'Ad aperiam similique', 'Quidem sed eos incid', 3, '120', 1, '535.00', NULL, NULL, 'Non aspernatur tempo', 'Labore voluptas sequ', NULL, NULL, 1, 'AAbybDyvJ4qjwuCBPYQsk22EdQoj0eHpfJhHMzOY.jpeg', '2020-09-21 12:05:34', '2020-09-21 12:13:12'),
(6, 'Nora Lindsey', 'Clinton Donovan', 'Ad aperiam similique', 'Quidem sed eos incid', 3, '120', 1, '535.00', NULL, NULL, 'Non aspernatur tempo', 'Labore voluptas sequ', NULL, NULL, 1, 'AAbybDyvJ4qjwuCBPYQsk22EdQoj0eHpfJhHMzOY.jpeg', '2020-09-21 12:05:34', '2020-11-02 08:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `original_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `original_name`, `new_name`, `size`, `path`, `full_file`, `property_id`, `created_at`, `updated_at`) VALUES
(1, '256_jeremy-banks-798787-unsplash.jpg', '9tuAj8E8URmxRPRN86Ey4DRfhge66dDE7eA5OUPr.jpeg', '18454', 'properties/1', 'properties/1/9tuAj8E8URmxRPRN86Ey4DRfhge66dDE7eA5OUPr.jpeg', 1, '2020-09-21 12:06:31', '2020-09-21 12:06:31'),
(2, '256_joao-silas-636453-unsplash.jpg', 'wry5g2hmqw6p1eQcmnDdAU0JXRpZ1tX9bbolZmcs.jpeg', '21040', 'properties/1', 'properties/1/wry5g2hmqw6p1eQcmnDdAU0JXRpZ1tX9bbolZmcs.jpeg', 1, '2020-09-21 12:06:35', '2020-09-21 12:06:35'),
(3, '256_joao-silas-636453-unsplash.jpg', 'dIFSPykpTyYitU8BLnzeszwoZ9qJ3TlISMZkxt6b.jpeg', '21040', 'properties/1', 'properties/1/dIFSPykpTyYitU8BLnzeszwoZ9qJ3TlISMZkxt6b.jpeg', 1, '2020-09-21 12:06:39', '2020-09-21 12:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'لقب الخدمه بالعربيه', 'english title', 'وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه', 'english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'U6i9bXxgLaLaHEvIkDS7Ve2HW69jmZlfttjqapX0.png', '2020-11-02 07:25:27', '2020-11-02 07:25:27'),
(2, 'لقب الخدمه بالعربيه', 'english title', 'وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه', 'english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'U6i9bXxgLaLaHEvIkDS7Ve2HW69jmZlfttjqapX0.png', '2020-11-02 07:25:27', '2020-11-02 07:25:27'),
(3, 'لقب الخدمه بالعربيه', 'english title', 'وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه', 'english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'U6i9bXxgLaLaHEvIkDS7Ve2HW69jmZlfttjqapX0.png', '2020-11-02 07:25:27', '2020-11-02 07:25:27'),
(4, 'لقب الخدمه بالعربيه', 'english title', 'وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه وصف الخدمه بالعربيه', 'english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'U6i9bXxgLaLaHEvIkDS7Ve2HW69jmZlfttjqapX0.png', '2020-11-02 07:25:27', '2020-11-02 07:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'لقب السلايدر بالعربيه', 'Cum animi placeat', 'وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه', 'Irure dolores atque', 'w9pxef2w3m5aOHctP6HLBXWXcrQ3nKnEbrYx2KuC.jpeg', '2020-09-21 15:12:17', '2020-11-02 07:20:38'),
(2, 'لقب السلايدر بالعربيه', 'Duis sequi et quisqu', 'وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه وصف السلايدر بالعربيه', 'Ut modi et ex conseq', 'MBT37V3JLgXEtVLYKxcahFRAqywzTDKo2qrtaJj0.jpeg', '2020-09-21 15:12:29', '2020-09-21 15:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 'القاهره الجديده', 'New Cairo', '2020-09-21 12:07:43', '2020-09-21 12:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `ar_name`, `en_name`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه', 'title in english for team member', 'وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل', 'english description english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'gl947amS1t7BRnmiUvrjyNNkp8D2Fbazl1f6ejjm.jpeg', '2020-11-02 08:25:18', '2020-11-02 08:25:18'),
(2, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه', 'title in english for team member', 'وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل', 'english description english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'gl947amS1t7BRnmiUvrjyNNkp8D2Fbazl1f6ejjm.jpeg', '2020-11-02 08:25:18', '2020-11-02 08:25:18'),
(3, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه', 'title in english for team member', 'وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل', 'english description english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'gl947amS1t7BRnmiUvrjyNNkp8D2Fbazl1f6ejjm.jpeg', '2020-11-02 08:25:18', '2020-11-02 08:25:18'),
(4, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه', 'title in english for team member', 'وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل وصف بالعربيه لفريق العمل', 'english description english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'gl947amS1t7BRnmiUvrjyNNkp8D2Fbazl1f6ejjm.jpeg', '2020-11-02 08:25:18', '2020-11-02 08:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `ar_name`, `en_name`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه للمراجعه', 'title in english for testimonials', 'الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه', 'english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'ADHuNydeXiXWAlqwjuaAal6xcDvJCOFVHDuTISrt.jpeg', '2020-11-02 08:22:31', '2020-11-02 08:22:31'),
(2, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه للمراجعه', 'title in english for testimonials', 'الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه', 'english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'ADHuNydeXiXWAlqwjuaAal6xcDvJCOFVHDuTISrt.jpeg', '2020-11-02 08:22:31', '2020-11-02 08:22:31'),
(3, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه للمراجعه', 'title in english for testimonials', 'الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه', 'english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'ADHuNydeXiXWAlqwjuaAal6xcDvJCOFVHDuTISrt.jpeg', '2020-11-02 08:22:31', '2020-11-02 08:22:31'),
(4, 'ألاسم بالعربيه', 'name in english', 'اللقب بالعربيه للمراجعه', 'title in english for testimonials', 'الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه الوصف بالعربيه للمراجعه', 'english description english description english description english description english description english description english description english description english description english description english description english description english description', 'Lorem quia non Nam q', 'Laboris esse amet', 'ADHuNydeXiXWAlqwjuaAal6xcDvJCOFVHDuTISrt.jpeg', '2020-11-02 08:22:31', '2020-11-02 08:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `ar_title`, `en_title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'الأول', 'first', 1, '2020-09-21 12:05:31', '2020-09-21 12:05:31'),
(2, 'الثاني', 'second', 0, '2020-09-21 12:05:31', '2020-09-21 12:05:31'),
(3, 'الثالث', 'third', 0, '2020-09-21 12:05:31', '2020-09-21 12:05:31'),
(4, 'الرابع', 'fourth', 0, '2020-09-21 12:05:31', '2020-09-21 12:05:31'),
(5, 'الخامس', 'fifth', 0, '2020-09-21 12:05:31', '2020-09-21 12:05:31'),
(6, 'السادس', 'sixth', 0, '2020-09-21 12:05:31', '2020-09-21 12:05:31'),
(7, 'السابع', 'seventh', 0, '2020-09-21 12:05:31', '2020-09-21 12:05:31'),
(8, 'الثامن', 'eighth', 0, '2020-09-21 12:05:31', '2020-09-21 12:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', NULL, '$2y$10$ZPuna4P5bEMQt2Ifq0XOJOAmzU0PS0GNxDwVQNBVU0zi.iUz4BI7a', NULL, NULL, '2020-09-21 12:05:30', '2020-09-21 12:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `page`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'home', '2020-09-21 12:50:37', '2020-09-21 12:50:37'),
(2, '127.0.0.1', 'home', '2020-09-27 10:51:19', '2020-09-27 10:51:19'),
(3, '127.0.0.1', 'home', '2020-11-01 14:36:18', '2020-11-01 14:36:18'),
(4, '127.0.0.1', 'home', '2020-11-02 07:19:07', '2020-11-02 07:19:07'),
(5, '127.0.0.1', 'services', '2020-11-02 08:44:03', '2020-11-02 08:44:03'),
(6, '127.0.0.1', 'blogs', '2020-11-02 09:01:05', '2020-11-02 09:01:05'),
(7, '127.0.0.1', 'about', '2020-11-02 09:01:10', '2020-11-02 09:01:10'),
(8, '127.0.0.1', 'contact-us', '2020-11-02 09:01:53', '2020-11-02 09:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_filter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `page_filter`, `color`, `created_at`, `updated_at`) VALUES
(1, '\"a:8:{i:0;s:5:\\\"about\\\";i:1;s:12:\\\"our_projects\\\";i:2;s:8:\\\"contacts\\\";i:3;s:12:\\\"our_services\\\";i:4;s:4:\\\"stat\\\";i:5;s:12:\\\"team_members\\\";i:6;s:12:\\\"testimonials\\\";i:7;s:11:\\\"latest_blog\\\";}\"', 1, '2020-09-21 12:05:31', '2020-09-21 12:05:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_notifications`
--
ALTER TABLE `contact_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_data`
--
ALTER TABLE `other_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `other_data_property_id_foreign` (`property_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_state_id_foreign` (`state_id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_images_property_id_foreign` (`property_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_notifications`
--
ALTER TABLE `contact_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `other_data`
--
ALTER TABLE `other_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `other_data`
--
ALTER TABLE `other_data`
  ADD CONSTRAINT `other_data_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
