-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 12:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `job_id`, `resume_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 4, 'hello world', '2020-11-14 07:41:56', '2020-11-14 07:41:56'),
(3, 2, 4, 4, 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page. Quick start Looking to quickly add Bootstrap to your project? Use BootstrapCDN, pGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page. Quick start Looking to quickly add Bootstrap to your project? Use BootstrapCDN, p', '2020-11-14 10:26:03', '2020-11-14 10:26:03'),
(4, 3, 1, 5, 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page. Quick start Looking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', '2020-11-14 10:31:38', '2020-11-14 10:31:38'),
(5, 6, 4, 6, 'protected function redirectTo()\r\n    {\r\n        $particulars = new Particular();\r\n        $particulars->user_id = Auth::user()->id;\r\n        $particulars->save();\r\n        return back();\r\n    }protected function redirectTo()\r\n    {\r\n        $particulars = new Particular();\r\n        $particulars->user_id = Auth::user()->id;\r\n        $particulars->save();\r\n        return back();\r\n    }', '2020-11-14 13:24:41', '2020-11-14 13:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Health Department', '2020-11-13 14:15:42', '2020-11-13 14:15:42'),
(3, 'Support Staff', '2020-11-13 14:15:59', '2020-11-13 14:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `category_job`
--

CREATE TABLE `category_job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_job`
--

INSERT INTO `category_job` (`id`, `category_id`, `job_id`, `created_at`, `updated_at`) VALUES
(4, 2, 4, '2020-11-13 15:54:34', '2020-11-13 15:54:34'),
(5, 3, 4, '2020-11-13 15:54:34', '2020-11-13 15:54:34'),
(7, 2, 5, '2020-11-13 16:07:10', '2020-11-13 16:07:10'),
(12, 2, 7, '2020-11-13 16:34:36', '2020-11-13 16:34:36'),
(13, 2, 8, '2020-11-13 16:41:00', '2020-11-13 16:41:00'),
(14, 3, 8, '2020-11-13 16:41:00', '2020-11-13 16:41:00'),
(16, 2, 9, '2020-11-13 16:41:34', '2020-11-13 16:41:34'),
(17, 3, 9, '2020-11-13 16:41:34', '2020-11-13 16:41:34'),
(19, 2, 2, '2020-11-13 16:44:09', '2020-11-13 16:44:09'),
(21, 2, 1, '2020-11-14 14:18:27', '2020-11-14 14:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attained` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `resume_id`, `level`, `school`, `from`, `to`, `attained`, `description`, `created_at`, `updated_at`) VALUES
(4, 2, 4, 'Primary', 'Busaana R/c primary school', '2020-12-10', '2020-12-12', 'Primary Leaving Exams', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus', '2020-11-13 12:24:32', '2020-11-13 12:24:32'),
(5, 7, 7, 'Primary', 'Busaana R/c primary school', '2020-11-26', '2020-12-09', 'Primary Leaving Exams', 'This is my primary school and I\'m very happy for it. This is my primary school and I\'m very happy for it.This is my primary school and I\'m very happy for it.', '2020-11-14 14:02:34', '2020-11-14 14:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `resume_id`, `company`, `title`, `from`, `to`, `description`, `created_at`, `updated_at`) VALUES
(3, 2, 4, 'Microsoft', 'Senior Database Designer', '2020-12-10', '2020-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibusLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus', '2020-11-13 12:25:03', '2020-11-13 12:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `salary_range`, `location`, `job_type`, `vacancies`, `deadline`, `qualification`, `experience`, `status`, `document`, `created_at`, `updated_at`) VALUES
(1, 'Assistant Lecturer', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', 'More than 3000000', 'Kayunga', 'Part Time', '3', '2021-12-12', 'Certificate', '> 3', '1', '2020-11-13-5faed5ae31537.pdf', '2020-11-13 15:51:26', '2020-11-13 16:48:02'),
(2, 'Assistant Lecturer', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', 'More than 3000000', 'Kayunga', 'Part Time', '4', '2020-12-12', 'Certificate', '> 3', '1', '2020-11-13-5faed5c675c28.pdf', '2020-11-13 15:51:50', '2020-11-13 15:51:50'),
(4, 'Gate Keeper', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', '200,000 - 400,000', 'Jinja', 'Parmanent', NULL, '2020-12-12', 'Diploma', '> 3', '1', '2020-11-13-5faed66a61b1a.pdf', '2020-11-13 15:54:34', '2020-11-13 15:54:34'),
(5, 'Senior Database Designer', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', 'More than 5,000,000', 'Kampala', 'Contract', NULL, '2020-11-28', 'Degree', '> 3', '0', '2020-11-13-5faed95ec1c9f.pdf', '2020-11-13 16:07:10', '2020-11-13 16:07:10'),
(7, 'Assistant Lecturer', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', 'More than 3000000', 'Kayunga', 'Part Time', NULL, '2020-12-12', 'Certificate', '> 3', '1', '2020-11-13-5faedfcc6d956.pdf', '2020-11-13 16:34:36', '2020-11-13 16:34:36'),
(8, 'Assistant Lecturer', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', 'More than 3000000', 'Kayunga', 'Part Time', NULL, '2020-12-12', 'Certificate', '> 3', '1', 'default.pdf', '2020-11-13 16:41:00', '2020-11-13 16:41:00'),
(9, 'Gate Keeper', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\n\r\nQuick start\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.', '200,000 - 400,000', 'Jinja', 'Parmanent', NULL, '2020-16-12', 'Diploma', '> 3', '1', '2020-11-13-5faee16e8994d.pdf', '2020-11-13 16:41:34', '2020-11-13 16:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `job_views`
--

CREATE TABLE `job_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_views`
--

INSERT INTO `job_views` (`id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2020-11-14 07:30:21', '2020-11-14 07:30:21'),
(2, 4, '2020-11-14 07:30:49', '2020-11-14 07:30:49'),
(3, 2, '2020-11-14 07:30:54', '2020-11-14 07:30:54'),
(4, 2, '2020-11-14 07:30:57', '2020-11-14 07:30:57'),
(5, 2, '2020-11-14 07:32:32', '2020-11-14 07:32:32'),
(6, 2, '2020-11-14 07:34:33', '2020-11-14 07:34:33'),
(7, 1, '2020-11-14 08:27:02', '2020-11-14 08:27:02'),
(8, 1, '2020-11-14 08:28:18', '2020-11-14 08:28:18'),
(9, 2, '2020-11-14 09:25:39', '2020-11-14 09:25:39'),
(10, 1, '2020-11-14 09:27:29', '2020-11-14 09:27:29'),
(11, 1, '2020-11-14 09:30:12', '2020-11-14 09:30:12'),
(12, 1, '2020-11-14 09:30:51', '2020-11-14 09:30:51'),
(13, 1, '2020-11-14 09:31:39', '2020-11-14 09:31:39'),
(14, 1, '2020-11-14 09:32:11', '2020-11-14 09:32:11'),
(15, 1, '2020-11-14 10:07:43', '2020-11-14 10:07:43'),
(16, 1, '2020-11-14 10:12:12', '2020-11-14 10:12:12'),
(17, 1, '2020-11-14 10:12:29', '2020-11-14 10:12:29'),
(18, 4, '2020-11-14 10:21:41', '2020-11-14 10:21:41'),
(19, 4, '2020-11-14 10:25:52', '2020-11-14 10:25:52'),
(20, 1, '2020-11-14 10:31:26', '2020-11-14 10:31:26'),
(21, 4, '2020-11-14 13:23:29', '2020-11-14 13:23:29'),
(22, 1, '2020-11-16 20:27:26', '2020-11-16 20:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_11_12_141731_create_resumes_table', 1),
(17, '2020_11_12_141752_create_education_table', 1),
(18, '2020_11_12_141808_create_experiences_table', 1),
(19, '2020_11_12_141816_create_skills_table', 1),
(20, '2020_11_12_141826_create_hobbies_table', 1),
(21, '2020_11_12_141917_create_categories_table', 1),
(22, '2020_11_12_142111_create_jobs_table', 1),
(23, '2020_11_12_142126_create_category__jobs_table', 1),
(24, '2020_11_12_142201_create_applicants_table', 1),
(25, '2020_11_12_184143_create_particulars_table', 2),
(26, '2020_11_14_003040_create_job_views_table', 3),
(27, '2020_11_14_100420_create_applications_table', 3),
(28, '2020_11_14_102835_create_job_views_table', 4),
(29, '2020_11_14_193314_create_subscriptions_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `particulars`
--

CREATE TABLE `particulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `particulars`
--

INSERT INTO `particulars` (`id`, `user_id`, `date_of_birth`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, '2020-12-10', '0773034311', 'Muni University', '2020-11-24 15:48:04', '2020-11-13 13:19:12'),
(2, 3, '23-12-12', '0773034311', 'Arua', '2020-11-14 11:42:20', '2020-11-14 11:42:20'),
(3, 6, NULL, NULL, NULL, '2020-11-14 13:22:25', '2020-11-14 13:22:25'),
(4, 7, '2020-11-25', '093992934923', 'Manibe', '2020-11-14 13:30:15', '2020-11-14 13:55:36'),
(5, 8, NULL, NULL, NULL, '2020-11-14 14:39:42', '2020-11-14 14:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(4, 2, 'Second Resume', '2020-11-13 11:40:10', '2020-11-13 11:40:10'),
(5, 3, 'Gracius resume', '2020-11-14 10:31:14', '2020-11-14 10:31:14'),
(6, 6, 'Hello', '2020-11-14 13:24:29', '2020-11-14 13:24:29'),
(7, 7, 'My Resume', '2020-11-14 14:01:36', '2020-11-14 14:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `resume_id`, `skill`, `level`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'Python', '56', 'This is my best loved language and the best in the world hahahahahha', '2020-11-13 12:17:39', '2020-11-13 12:17:39'),
(2, 2, 4, 'Laravel', '70', 'Laravel, the besy php framework ever made by Otwell the best one', '2020-11-13 12:18:16', '2020-11-13 12:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'markbrightbaraka@gmail.com', '0', '2020-11-14 16:42:38', '2020-11-14 16:42:38'),
(2, 'markbrightbaraka@gmail.com', '0', '2020-11-14 16:44:33', '2020-11-14 16:44:33'),
(3, 'markbrightbaraka@gmail.com', '0', '2020-11-14 16:46:13', '2020-11-14 16:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mark', 'Bright', 'mark@gmail.com', NULL, '$2y$10$VNm4GqbeNEgfIoryx/4hSu8WPBHtqJUfuRJTJSEDoKEFrBD8mosgO', '1', 'CJ3CMH1sG1JDSGNxaEEu5xMdZf3sQ9eSL6W2B6oytGIrLW3lpQ6e6toygGsm', '2020-11-12 13:15:41', '2020-11-12 13:15:41'),
(2, 'Shedrack', 'Mesach', 'shedrack@gmail.com', NULL, '$2y$10$8lzAglrfaHvVY/v8gh/4reRfYGJTdF1zdLnD7NSAzLQCL7DGWnH/G', '0', NULL, '2020-11-12 15:01:49', '2020-11-13 13:19:24'),
(3, 'Gracius', 'Atim', 'gracious@gmail.com', NULL, '$2y$10$AWJcAVD8uOLSF57M6TVUlOgyYHZNI.8637dSLETsGj6IFDaeMgriy', '0', NULL, '2020-11-14 06:39:37', '2020-11-14 06:39:37'),
(4, NULL, NULL, 'hello@gmail.com', NULL, '$2y$10$s1JknWVXBZpeoM5v8Q8XHOK6bgstbvtaqRdPOMdsjpm.1/uSSkxBC', '0', NULL, '2020-11-14 11:40:37', '2020-11-14 11:40:37'),
(5, NULL, NULL, 'stella@gmail.com', NULL, '$2y$10$pb5svMkQ376RzGn92Samwer0sS3Rjtcdma6q8hZWe0gTJmPU7cgLS', '0', NULL, '2020-11-14 13:20:00', '2020-11-14 13:20:00'),
(6, NULL, NULL, 'jesca@gmail.com', NULL, '$2y$10$74yqFS.ou1cImvWHTkscS.cmFS8TxPGYJBKpizTThTIFuDTVs4GxO', '0', NULL, '2020-11-14 13:22:25', '2020-11-14 13:22:25'),
(7, 'Sophie', 'Aunt', 'sophie@gmail.com', NULL, '$2y$10$oO5sW5AD1I9QQG6xinZYCOR9nGQTV9YViVk7svucRC1s5pRHH3r1y', '0', NULL, '2020-11-14 13:30:15', '2020-11-14 13:55:35'),
(8, NULL, NULL, 'markbrightbaraka@muni.ac.ug', NULL, '$2y$10$fEEQaux3rns07F5wmDVjGOyqMqgTFnNy8hzEDxi0nxDDITRLeSXH2', '0', NULL, '2020-11-14 14:39:42', '2020-11-14 14:39:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_user_id_foreign` (`user_id`),
  ADD KEY `applications_job_id_foreign` (`job_id`),
  ADD KEY `applications_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_job`
--
ALTER TABLE `category_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category__jobs_category_id_foreign` (`category_id`),
  ADD KEY `category__jobs_job_id_foreign` (`job_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_user_id_foreign` (`user_id`),
  ADD KEY `education_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`),
  ADD KEY `experiences_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hobbies_user_id_foreign` (`user_id`),
  ADD KEY `hobbies_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_views`
--
ALTER TABLE `job_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_views_job_id_foreign` (`job_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `particulars`
--
ALTER TABLE `particulars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `particulars_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumes_user_id_foreign` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`),
  ADD KEY `skills_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_job`
--
ALTER TABLE `category_job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_views`
--
ALTER TABLE `job_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `particulars`
--
ALTER TABLE `particulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applications_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_job`
--
ALTER TABLE `category_job`
  ADD CONSTRAINT `category__jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category__jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `hobbies_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hobbies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_views`
--
ALTER TABLE `job_views`
  ADD CONSTRAINT `job_views_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `particulars`
--
ALTER TABLE `particulars`
  ADD CONSTRAINT `particulars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
