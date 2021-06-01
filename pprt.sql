-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2021 at 09:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pprt`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfor`
--

CREATE TABLE `addfor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addfor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addfor`
--

INSERT INTO `addfor` (`id`, `addfor`, `created_at`, `updated_at`) VALUES
(3, 'Sale', NULL, NULL),
(4, 'Rent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addinterior`
--

CREATE TABLE `addinterior` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addinterior` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addinterior`
--

INSERT INTO `addinterior` (`id`, `addinterior`, `created_at`, `updated_at`) VALUES
(3, 'A/C Interior', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agentcontact`
--

CREATE TABLE `agentcontact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentcontact`
--

INSERT INTO `agentcontact` (`id`, `fullname`, `phoneNumber`, `email`, `msg`, `type`) VALUES
(1, 'SKy', '889988889', 'sky@gmail.com', 'weerdfjvhwedsfkjvnedfv', 'new'),
(2, 'Shashi', '987654334567', 'shashi@gmail.com', 'kjdfh', 'old'),
(3, 'Gappu', '456789', 'gappu@mail.com', 'wekldgfhjdkl', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amenitiesName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenitiesIcon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenitiesName`, `amenitiesIcon`, `created_at`, `updated_at`) VALUES
(2, 'Children\'s_play_area', 'fa fa-home', NULL, NULL),
(3, 'Multipurpose_Room', 'fa fa-room', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cityname`
--

CREATE TABLE `cityname` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cityName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cityname`
--

INSERT INTO `cityname` (`id`, `type`, `cityName`, `created_at`, `updated_at`) VALUES
(3, 'city', 'Hyderabad', NULL, NULL),
(4, 'city', 'Chennai', NULL, NULL),
(9, 'garage', '2 Spaces', NULL, NULL),
(10, 'interior', 'A/C Unit', NULL, NULL),
(11, 'interior', 'Dishwasher', NULL, NULL),
(12, 'interior', 'Dryer', NULL, NULL);

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
-- Table structure for table `footerdetail`
--

CREATE TABLE `footerdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footerAboutUs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footerVisitUs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `websiteEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `websiteContact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `websiteLogo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `websiteDetail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `websiteEmail`, `websiteContact`, `websiteLogo`, `websiteDetail`, `created_at`, `updated_at`) VALUES
(1, 'lokal@gmail.com', '900099', 'http://localhost:8000/employeeUploads/color-logo.png', NULL, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `possessionStartDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalArea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalLaunchApartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `launchDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availbility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstBhkFile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstBhkCarpetArea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstBhkAgreementPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondBhkFile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondBhkCarpetArea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondBhkAgreementPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propertyImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propertyDetail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postStatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addAmenities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manualAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bedrooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullbathrooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halfbathrooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othersrooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prptFor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qq` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `constructionType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foundation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `houseStyle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lavelOrStories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exteriorFeature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zoning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `families` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propertySubtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenitiesDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `type`, `title`, `postBy`, `possessionStartDate`, `status`, `totalArea`, `totalLaunchApartment`, `launchDate`, `availbility`, `firstBhkFile`, `firstBhkCarpetArea`, `firstBhkAgreementPrice`, `secondBhkFile`, `secondBhkCarpetArea`, `secondBhkAgreementPrice`, `category`, `propertyImage`, `propertyDetail`, `postStatus`, `addAmenities`, `latitude`, `longitude`, `manualAddress`, `created_at`, `updated_at`, `bedrooms`, `fullbathrooms`, `halfbathrooms`, `othersrooms`, `basement`, `prptFor`, `price`, `qq`, `parking`, `construction`, `constructionType`, `floor`, `foundation`, `roof`, `houseStyle`, `lavelOrStories`, `exteriorFeature`, `yard`, `state`, `city`, `region`, `area`, `zoning`, `families`, `propertySubtype`, `amenitiesDetails`) VALUES
(1, 'webdetail', 'Ziko', NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8000/employeeUploads/Rajeev-Creative-2-1024x570.jpg', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '3', '0', '1', '0', NULL, 'Sale', '200000', 'taroni', 'lo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'webdetail', 'Ziko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8000/employeeUploads/Rajeev-Creative-2-1024x570.jpg', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0', '0', '...', NULL, 'Rent', '-1', 'zumupe', 'N/A', 'Brick', 'Brick', 'Brick', 'Brick', '...', 'Brick', 'Brick', 'Brick', NULL, NULL, 'Hyderabad', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `propertyamenities`
--

CREATE TABLE `propertyamenities` (
  `id` int(11) NOT NULL,
  `amenitiesValue` varchar(255) DEFAULT NULL,
  `qq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertyamenities`
--

INSERT INTO `propertyamenities` (`id`, `amenitiesValue`, `qq`) VALUES
(4, 'Children\'s_play_area', '11'),
(6, 'Children\'s_play_area', 'zovelo'),
(7, 'Multipurpose_Room', 'zovelo'),
(8, 'A/C Unit', 'zovelo'),
(9, 'Dishwasher', 'zovelo'),
(10, 'Dryer', 'zovelo'),
(11, 'Children\'s_play_area', 'kehako'),
(12, 'Multipurpose_Room', 'kehako'),
(13, 'Children\'s_play_area', 'taroni'),
(14, 'Multipurpose_Room', 'taroni'),
(15, 'Children\'s_play_area', 'zumupe'),
(16, 'Multipurpose_Room', 'zumupe');

-- --------------------------------------------------------

--
-- Table structure for table `prptinterior`
--

CREATE TABLE `prptinterior` (
  `id` int(11) NOT NULL,
  `addInterior` varchar(255) DEFAULT NULL,
  `qq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prptinterior`
--

INSERT INTO `prptinterior` (`id`, `addInterior`, `qq`) VALUES
(1, 'A/C Unit', 'kehako'),
(2, 'Dishwasher', 'kehako'),
(3, 'Dryer', 'kehako'),
(4, 'A/C Unit', 'taroni'),
(5, 'Dishwasher', 'taroni'),
(6, 'Dryer', 'taroni'),
(7, 'A/C Unit', 'zumupe'),
(8, 'Dishwasher', 'zumupe'),
(9, 'Dryer', 'zumupe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2b$10$zxbRcwu8ss3cX7TJf/QKueV8YV66hgidgHbvO1vEjG9FfFRL8iCpm', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfor`
--
ALTER TABLE `addfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addinterior`
--
ALTER TABLE `addinterior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agentcontact`
--
ALTER TABLE `agentcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cityname`
--
ALTER TABLE `cityname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footerdetail`
--
ALTER TABLE `footerdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyamenities`
--
ALTER TABLE `propertyamenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prptinterior`
--
ALTER TABLE `prptinterior`
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
-- AUTO_INCREMENT for table `addfor`
--
ALTER TABLE `addfor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addinterior`
--
ALTER TABLE `addinterior`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agentcontact`
--
ALTER TABLE `agentcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cityname`
--
ALTER TABLE `cityname`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footerdetail`
--
ALTER TABLE `footerdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `propertyamenities`
--
ALTER TABLE `propertyamenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prptinterior`
--
ALTER TABLE `prptinterior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
