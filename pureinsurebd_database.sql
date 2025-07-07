-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2025 at 05:17 AM
-- Server version: 8.0.42
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pureinsurebd_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int NOT NULL,
  `division_id` int NOT NULL,
  `district_name` varchar(40) NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dohar', 1, '2025-05-13 04:45:18', '2025-05-13 04:45:18'),
(2, 1, 'Savar', 1, '2025-05-13 04:45:38', '2025-05-13 04:45:38'),
(3, 1, 'Dhamrai', 1, '2025-05-13 04:45:59', '2025-05-13 04:45:59'),
(4, 2, 'Naogaon', 1, '2025-05-13 04:49:09', '2025-05-13 04:49:09'),
(5, 2, 'Joypurhat', 1, '2025-05-13 04:49:21', '2025-05-13 04:49:21'),
(6, 2, 'Nawabganj', 1, '2025-05-13 04:49:30', '2025-05-13 04:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2025-05-13 04:12:20', '2025-05-13 04:12:20'),
(2, 'Rajshahi', 1, '2025-05-13 04:13:26', '2025-05-13 04:13:26'),
(3, 'Khulna', 1, '2025-05-13 04:13:26', '2025-05-13 04:13:26'),
(4, 'Chittagong', 1, '2025-05-13 04:14:05', '2025-05-13 04:14:05'),
(5, 'Barisal', 1, '2025-05-13 04:14:19', '2025-05-13 04:14:19'),
(6, 'Rangpur', 1, '2025-05-13 04:14:39', '2025-05-13 04:14:39'),
(7, 'Sylhet', 1, '2025-05-13 04:14:55', '2025-05-13 04:14:55'),
(8, 'Mymensingh', 1, '2025-05-13 04:15:08', '2025-05-13 04:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_users`
--

CREATE TABLE `front_users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `products_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_image_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_image_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_01_174336_create_categories_table', 1),
(6, '2024_08_16_165120_create_subcategories_table', 1),
(7, '2024_08_28_045825_create_products_table', 1),
(8, '2024_09_10_064825_create_images_table', 1),
(9, '2025_02_05_081048_create_front_users_table', 1),
(10, '2024_08_01_174336_create_services_table', 2),
(11, '2024_08_16_165120_create_subscriptions_table', 3),
(12, '2024_08_28_045825_create_packages_table', 3),
(13, '2025_03_16_090242_create_package_details_table', 3),
(14, '2025_03_17_064638_create_package_detail_lists_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` int NOT NULL,
  `subscription_id` int DEFAULT NULL,
  `person` int DEFAULT NULL,
  `package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `service_id`, `subscription_id`, `person`, `package_name`, `image`, `details`, `duration`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'Shurokkha', '1744524963.jpg', '<ul>\r\n	<li>Doctor Consultation followed by e-Prescription</li>\r\n	<li>Cash Coverage of up to Taka 113,000</li>\r\n	<li>Up to 40% discount on diagnostic test bills</li>\r\n	<li>Duration: 1 year (with subscription auto-renewal facility)</li>\r\n	<li>Price: Taka 7.12/day</li>\r\n</ul>', 'Daily', 'Taka 7.12 for 1 person', 1, '2025-03-15 01:52:13', '2025-05-08 10:48:12'),
(2, 2, 1, 1, 'ShasthoBondhu', '1744525086_new.jpg', '<ul>\r\n	<li>Doctor Consultation followed by e-Prescription</li>\r\n	<li>Cash Coverage of up to Taka 179,000</li>\r\n	<li>Up to 40% discount on diagnostic test bills</li>\r\n	<li>Duration: 1 year (with subscription auto-renewal facility)</li>\r\n	<li>Price: Taka 130.12/month</li>\r\n</ul>', 'Daily', 'Taka 130.12 for 1 person', 1, '2025-03-15 23:57:49', '2025-05-08 10:47:23'),
(3, 2, 2, 2, 'Nirbhor', '1744525020.jpg', '<ul>\r\n	<li>Doctor Consultation followed by e-Prescription</li>\r\n	<li>Cash Coverage of up to Taka 295,000</li>\r\n	<li>Up to 40% discount on diagnostic test bills</li>\r\n	<li>Duration: 1 year&nbsp;</li>\r\n	<li>Price: Taka 216.12/month</li>\r\n</ul>', 'Weekly', '216', 1, '2025-04-13 00:18:06', '2025-05-08 10:50:13'),
(4, 5, 5, 1, 'Agrani', '1744799098.jpg', '<ul>\r\n	<li>Student Consultation &amp; Counselling</li>\r\n	<li>Education Discount Cash</li>\r\n	<li>Coverage up to Taka 35,000 (including Covid-19)</li>\r\n	<li>Duration: 6 months</li>\r\n	<li>Price: Taka 199</li>\r\n</ul>', '6 Months', 'Taka 199 for 1 person', 1, '2025-04-16 14:24:59', '2025-04-16 14:24:59'),
(5, 5, 3, 1, 'Agami', '1744799929.jpg', '<ul>\r\n	<li>Student Consultation &amp; Counselling</li>\r\n	<li>Education Discount Cash</li>\r\n	<li>Coverage up to Taka 35,000 (including Covid-19)</li>\r\n	<li>Duration: 6 months</li>\r\n	<li>Price: Taka 199</li>\r\n</ul>', '6 Months', 'Taka 365 for 1 person', 1, '2025-04-16 14:38:49', '2025-04-16 14:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` bigint UNSIGNED NOT NULL,
  `package_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `package_id`, `package_details`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '<table class=\"table table-bordered\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Hospital Cash Coverage</p>\r\n			</td>\r\n			<td >\r\n			<p>Taka 20,000</p>\r\n\r\n			<p>&nbsp;Taka 1,000 per day of hospitalization</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Covid-19 Home Isolation Cash Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Taka 3,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Permanent Total Disability Cash Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Taka 20,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Permanent Partial Disability Cash Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Up to Taka 20,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Complimentary Life Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Taka 50,000</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, '2025-04-13 02:41:17', '2025-04-13 02:41:17'),
(2, '2', '<table class=\"table table-bordered\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Covid-19 Home Isolation Cash Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Taka 4,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Permanent Total Disability Cash Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Taka 25,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Permanent Partial Disability Cash Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Up to Taka 25,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Complimentary Life Coverage</p>\r\n			</td>\r\n			<td>\r\n			<p>Taka 100,000</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Diagnostic Sample Collection from Home</p>\r\n			</td>\r\n			<td>\r\n			<p>Up to 40% discount on bills</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Doorstep Medicine Delivery</p>\r\n			</td>\r\n			<td>\r\n			<p>Up to 10% discount on local medicine purchases</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Health Tips &nbsp;</p>\r\n\r\n			<p>In-app text-based generic consultation with doctor &nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>Unlimited</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>1 person covered</li>\r\n	<li>Aged between 5 to 65 years</li>\r\n	<li>Valid for 1 year from the date of registration (with subscription auto-renewal facility)</li>\r\n	<li>Doctor Consultation, Diagnostic Sample Collection from Home, Doorstep Medicine Delivery and Health Tips services can be availed via Pure Insure mobile application</li>\r\n	<li>Risks of all Cash Coverages will be underwritten by Protective Islami Life Insurance Limited&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<h3>&nbsp; &nbsp; &nbsp;<strong>&nbsp;Terms and Conditions:</strong></h3>\r\n\r\n<ul>\r\n	<li>All services except Cash Coverages can be availed immediately after activation of the plan</li>\r\n	<li>15 days waiting period after registration will be applied for availing Cash Coverages &nbsp;&nbsp;</li>\r\n	<li>&nbsp;Minimum 24 hours of hospitalization is needed for Hospital Cash Coverage eligibility &nbsp;&nbsp;</li>\r\n	<li>Maximum 5 nights of hospitalization at a stretch is covered under Hospital Cash Coverage &nbsp;&nbsp;&nbsp;</li>\r\n	<li>A BMDC registered doctor must prescribe for the hospitalization &nbsp;&nbsp;&nbsp;</li>\r\n	<li>Government authorized Covid-19 positive report accompanying with doctor&rsquo;s prescription is needed for Covid-19 Home Isolation Coverage eligibility &nbsp;</li>\r\n	<li>Permanent Total Disability refers to a condition in which an individual is no longer able to work due to injuries</li>\r\n</ul>', 1, '2025-04-16 13:35:57', '2025-04-16 13:35:57'),
(3, '3', '', 1, '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(5, '4', '<ul>\r\n	<li>1 person covered</li>\r\n	<li>Aged between 12 to 29 years &nbsp;</li>\r\n	<li>Valid for 6 months from the date of registration &nbsp;</li>\r\n	<li>Schedules and other details of mental health consultation and career counselling sessions will be shared on our social channels &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Discounts on admission &amp; tuition fees and books &amp; educational items can be availed at Pure Insure TM partner institutes and outlets only &nbsp;</li>\r\n	<li>Risks of Hospital Cash Coverage, Accidental Coverage, Covid-19 Coverage and Life Coverage will be underwritten by Chartered Life Insurance Company Ltd &nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Terms and Conditions:</strong></p>\r\n\r\n<ul>\r\n	<li>7 days waiting period after registration will be applied for Hospital Cash Coverage, Accidental Coverage and Covid-19 Coverage</li>\r\n	<li>7 days waiting period after registration will be applied for Life Coverage &nbsp;&nbsp;</li>\r\n	<li>Minimum 24 hours of hospitalization is needed for Hospital Cash Coverage eligibility &nbsp;</li>\r\n	<li>Maximum 5 nights of hospitalization at a stretch is covered under Hospital Cash Coverage</li>\r\n	<li>Taka 1,000 can be claimed for each night of hospitalization under Hospital Cash Coverage &nbsp;&nbsp;&nbsp;</li>\r\n	<li>A Covid-19 positive report followed by recommendation of isolation by a physician are prerequisites for claiming Covid-19 coverage</li>\r\n	<li>The Covid-19 Coverage is inclusive of the sum value of Hospital Cash Coverage</li>\r\n	<li>All medical prescriptions must be prescribed by BMDC registered doctors</li>\r\n	<li>The scheduled benefits covered under Accidental Coverage are as follows: &nbsp;</li>\r\n</ul>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1100px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>SL.</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Types of Accidental Hospitalization</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Description of Disabilities due to Accident</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Amount of Coverage (BDT)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>Head Injuries</p>\r\n			</td>\r\n			<td>\r\n			<p>Severe collision impacts can cause a closed head injury. In that situation, the fluid and tissue inside the skull are damaged because of the sudden movement or impact of the head. Less severe closed head injuries often result in concussions, while the most severe impacts can cause brain damage.</p>\r\n			</td>\r\n			<td>\r\n			<p>100% of Sum-assured</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>2nd &amp; 3rd Degree Burn</p>\r\n			</td>\r\n			<td>\r\n			<p>Second-degree (partial thickness) burns. Second-degree burns involve the epidermis and part of the lower layer of skin, the dermis. The burn site looks red, blistered, and may be swollen and painful.</p>\r\n\r\n			<p>Third-degree (full thickness) burns. Third-degree burns destroy the epidermis and dermis. They may go into the innermost layer of skin, the subcutaneous tissue. The burn site may look white or blackened and charred.</p>\r\n			</td>\r\n			<td>\r\n			<p>75% of Sum-assured</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>Chest Injuries</p>\r\n			</td>\r\n			<td>\r\n			<p>These injuries can be more severe such as broken ribs or internal injuries. Drivers often experience chest injuries because of their position which allows very little freedom of movement</p>\r\n			</td>\r\n			<td>\r\n			<p>50% of Sum-assured</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>Fractures, Dislocation, Scrapes and Cuts</p>\r\n			</td>\r\n			<td>\r\n			<p>Depending on the nature of the collision, injuries might be mere bruises or scrapes, but even breaks can occur.</p>\r\n			</td>\r\n			<td>\r\n			<p>25% of Sum-assured</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, '2025-04-17 10:15:01', '2025-04-17 10:15:01'),
(6, '5', '<ul>\r\n	<li>1 person covered</li>\r\n	<li>Aged between 12 to 29 years &nbsp;</li>\r\n	<li>Valid for 6 months from the date of registration &nbsp;</li>\r\n	<li>Schedules and other details of mental health consultation and career counselling sessions will be shared on our social channels &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Discounts on admission &amp; tuition fees and books &amp; educational items can be availed at Pure Insure TM partner institutes and outlets only &nbsp;</li>\r\n	<li>Risks of Hospital Cash Coverage, Accidental Coverage, Covid-19 Coverage and Life Coverage will be underwritten by Chartered Life Insurance Company Ltd &nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>Terms and Conditions:</strong></p>\r\n\r\n<ul>\r\n	<li>7 days waiting period after registration will be applied for Hospital Cash Coverage, Accidental Coverage and Covid-19 Coverage</li>\r\n	<li>7 days waiting period after registration will be applied for Life Coverage &nbsp;&nbsp;</li>\r\n	<li>Minimum 24 hours of hospitalization is needed for Hospital Cash Coverage eligibility &nbsp;</li>\r\n	<li>Maximum 5 nights of hospitalization at a stretch is covered under Hospital Cash Coverage</li>\r\n	<li>Taka 1,000 can be claimed for each night of hospitalization under Hospital Cash Coverage &nbsp;&nbsp;&nbsp;</li>\r\n	<li>A Covid-19 positive report followed by recommendation of isolation by a physician are prerequisites for claiming Covid-19 coverage</li>\r\n	<li>The Covid-19 Coverage is inclusive of the sum value of Hospital Cash Coverage</li>\r\n	<li>All medical prescriptions must be prescribed by BMDC registered doctors</li>\r\n	<li>The scheduled benefits covered under Accidental Coverage are as follows: &nbsp;</li>\r\n</ul>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1100px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>SL.</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Types of Accidental Hospitalization</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Description of Disabilities due to Accident</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Amount of Coverage (BDT)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>Head Injuries</p>\r\n			</td>\r\n			<td>\r\n			<p>Severe collision impacts can cause a closed head injury. In that situation, the fluid and tissue inside the skull are damaged because of the sudden movement or impact of the head. Less severe closed head injuries often result in concussions, while the most severe impacts can cause brain damage.</p>\r\n			</td>\r\n			<td>\r\n			<p>100% of Sum-assured</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, '2025-04-17 10:23:41', '2025-04-17 10:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `package_detail_lists`
--

CREATE TABLE `package_detail_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `package_detail_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_detail_lists`
--

INSERT INTO `package_detail_lists` (`id`, `package_detail_id`, `package_id`, `title`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Hospital Cashback', 'Taka 20,000 BDT 1,000 per day', '2025-04-13 02:41:17', '2025-04-13 02:41:17'),
(2, '1', '1', 'Permanent Total Disability Benefit', 'Taka 20,000 One time only', '2025-04-13 02:41:17', '2025-04-13 02:41:17'),
(3, '2', '2', 'Doctor Consultation (video call)', 'Yes', '2025-04-16 13:35:57', '2025-04-16 13:35:57'),
(4, '2', '2', 'Covid-19 Home Isolation Benefit', 'Taka 4,000', '2025-04-16 13:35:57', '2025-04-16 13:35:57'),
(5, '2', '2', 'Complimentary Life Coverage', 'Taka 100,000', '2025-04-16 13:35:57', '2025-04-16 13:35:57'),
(6, '2', '2', 'Hospital Cashback', 'Taka 25,000', '2025-04-16 13:35:57', '2025-04-16 13:35:57'),
(7, '3', '3', 'Health Tips', 'Yes', '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(8, '3', '3', 'Complimentary Life Coverage', 'Taka 200,000', '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(9, '3', '3', 'Covid-19 Home Isolation Benefit', 'Taka 5,000', '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(10, '3', '3', 'Hospital Cashback', 'Taka 30,000 BDT  2,000 per day', '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(11, '3', '3', 'Permanent Partial Disability Benefit', 'Taka 30,000', '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(12, '3', '3', 'Permanent Total Disability Benefit', 'Taka 30,000', '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(13, '3', '3', 'Diagnostic Sample Collection', 'Yes', '2025-04-16 13:50:29', '2025-04-16 13:50:29'),
(24, '5', '4', 'Hospital Cashback', 'Taka 10,000', '2025-04-17 10:15:01', '2025-04-17 10:15:01'),
(23, '5', '4', 'Discount on Books & Educational Items', 'Yes', '2025-04-17 10:15:01', '2025-04-17 10:15:01'),
(22, '5', '4', 'Discount on Admission & Tuition Fees', 'Yes', '2025-04-17 10:15:01', '2025-04-17 10:15:01'),
(21, '5', '4', 'Career Counselling', 'Yes', '2025-04-17 10:15:01', '2025-04-17 10:15:01'),
(20, '5', '4', 'Mental Health Consultation', 'Yes', '2025-04-17 10:15:01', '2025-04-17 10:15:01'),
(25, '5', '4', 'Accidental Benefit', 'Taka 10,000', '2025-04-17 10:15:01', '2025-04-17 10:15:01'),
(26, '6', '5', 'Mental Health Consultation', 'Yes', '2025-04-17 10:23:41', '2025-04-17 10:23:41'),
(27, '6', '5', 'Career Counselling', 'Yes', '2025-04-17 10:23:42', '2025-04-17 10:23:42'),
(28, '6', '5', 'Discount on Admission & Tuition Fees', 'Yes', '2025-04-17 10:23:42', '2025-04-17 10:23:42'),
(29, '6', '5', 'Discount on Books & Educational Items', 'Yes', '2025-04-17 10:23:42', '2025-04-17 10:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Life Insurance', '1743846352.jpg', 1, '2025-03-15 00:31:27', '2025-05-07 05:18:10'),
(2, 'Health Insurance', '1743846379.jpg', 1, '2025-03-12 00:36:44', '2025-04-05 03:46:19'),
(5, 'Education Insurance', '1743846402.jpg', 0, '2025-03-12 23:43:58', '2025-05-08 09:08:04'),
(7, 'Travel Insurance', '1743846428.jpg', 0, '2025-03-15 00:33:56', '2025-05-08 04:06:33'),
(8, 'Bike Insurance', '1743846452.jpg', 0, '2025-03-15 00:35:57', '2025-05-08 04:06:42'),
(9, 'Agriculture Insurance', '1743846479.jpg', 0, '2025-03-15 00:37:54', '2025-05-08 04:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `cycle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `cycle_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Daily', 1, '2025-03-13 00:02:35', '2025-03-13 00:28:21'),
(2, 'Weekly', 1, '2025-03-13 00:04:00', '2025-03-13 00:04:00'),
(3, 'Monthly', 1, '2025-03-13 01:02:16', '2025-03-15 00:27:23'),
(4, 'Yearly', 1, '2025-03-15 00:27:36', '2025-03-15 00:27:36'),
(5, 'One Time', 1, '2025-03-15 00:27:44', '2025-03-15 00:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nazmul Hasan', 'nazmul@gmail.com', NULL, '$2y$10$x67E3su3A2289KvTMhmkAemfOv2JToPcrtGKBwqW46/V6FCe/RI72', NULL, '2025-03-11 03:39:01', '2025-03-11 03:39:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_users`
--
ALTER TABLE `front_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_detail_lists`
--
ALTER TABLE `package_detail_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_users`
--
ALTER TABLE `front_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package_detail_lists`
--
ALTER TABLE `package_detail_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
