-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 01:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itmedicus`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companie_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companie_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companie_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companie_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `companie_name`, `companie_slug`, `companie_email`, `companie_logo`, `companie_website`, `created_at`, `updated_at`) VALUES
(1, 'Schmidt, Baumbach and Kuvalis', 'modi-non-doloribus-facere-consequuntur-vel-error', 'jondricka@example.org', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:07', '2023-03-18 05:14:07'),
(2, 'Rippin Ltd', 'ducimus-et-voluptates-aut-a-dolores-consequatur-ut', 'flakin@example.org', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:07', '2023-03-18 05:14:07'),
(3, 'Jast Group', 'rerum-sit-sit-quia-impedit-qui-cumque-accusantium-qui', 'schmidt.jacinto@example.net', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(4, 'Smitham-Fay', 'consequatur-aut-aut-qui-dolores', 'frances35@example.org', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(5, 'Mills-O\'Hara', 'sed-soluta-qui-amet-voluptas-voluptate-iusto', 'jermey.mante@example.com', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(6, 'Haley Inc', 'sunt-aliquam-eum-ea-asperiores-rerum-assumenda-rerum', 'kessler.juanita@example.com', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(7, 'Schamberger LLC', 'quod-libero-et-et-voluptatem-aspernatur-consequatur-perferendis', 'wwisoky@example.net', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(8, 'Ferry-Skiles', 'porro-voluptatem-sit-officiis-vel-repellendus-omnis', 'justice.stamm@example.org', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(9, 'Runolfsdottir-Heidenreich', 'suscipit-est-sint-et-itaque', 'lenora88@example.org', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(10, 'Aufderhar and Sons', 'dolor-aut-est-doloribus-expedita-quia', 'bernard34@example.com', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(11, 'Stark-Murazik', 'vero-porro-sit-autem-sed-ratione', 'areichel@example.org', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(12, 'Homenick Inc', 'qui-nam-a-voluptatem-suscipit-officia-consequatur-nihil', 'arely22@example.org', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(13, 'Turcotte, Ebert and Schaefer', 'illo-sit-aliquam-amet-minus-aliquam-laborum', 'jenkins.nelle@example.net', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(14, 'Metz, Shanahan and Koelpin', 'possimus-temporibus-officiis-aut-voluptas-eos-magni-rem', 'raheem90@example.net', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(15, 'Batz-Raynor', 'ratione-consequatur-sint-cumque-quas-quo-nemo', 'jlittel@example.net', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(16, 'Von, Nader and Eichmann', 'enim-nesciunt-itaque-corporis-animi-sint-iste-vel-distinctio', 'stacy92@example.net', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(17, 'Miller Inc', 'illo-quis-omnis-aliquam-quam', 'colin.mcdermott@example.com', 'logo.png', 'https://www.google.com/', '2023-03-18 05:14:08', '2023-03-18 05:14:08'),
(18, 'logic soft', 'logic-soft', 'logicsoft@gmail.com', '1036002872.jpg', 'http://logicsoft.com', '2023-03-18 05:16:17', '2023-03-18 05:16:17'),
(19, 'ITmedicous', 'itmedicous', 'itmedicus@gmail.com', '1402480175.png', 'http://itmedicus.com', '2023-03-18 05:17:06', '2023-03-18 05:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `employee_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `company_id`, `employee_email`, `employee_phone`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Tamara Carter', 12, 'bcarroll@example.com', '+1 (682) 504-0077', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(2, 'Prof. Raleigh Kozey', 14, 'louie99@example.net', '+1-925-604-3842', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(3, 'Nelson Ryan', 7, 'ebert.lorine@example.net', '+1-520-861-6425', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(4, 'Candida Price', 3, 'uquitzon@example.net', '+1-930-909-8912', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(5, 'Brando Bergnaum', 17, 'ipowlowski@example.org', '1-703-728-6289', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(6, 'Monte Wisoky', 7, 'boyle.shaina@example.com', '+1 (509) 261-2337', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(7, 'Simeon Friesen', 14, 'enrique.oreilly@example.org', '+1 (470) 467-1979', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(8, 'Ernie Hayes', 3, 'nmcdermott@example.net', '+18208735466', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(9, 'Dr. Delfina Wiza V', 8, 'jamie64@example.org', '551.397.5539', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(10, 'Chesley Murray', 17, 'wschuppe@example.org', '928.274.9605', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(11, 'Eleanora Little IV', 16, 'dicki.isabel@example.org', '+1-669-965-1143', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(12, 'Carmen Carter', 17, 'caden26@example.org', '+1.352.801.0502', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(13, 'Ms. Onie Littel DVM', 3, 'marlene30@example.com', '1-406-604-0587', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(14, 'Owen Reichert', 9, 'simonis.ivy@example.net', '+14634545628', '2023-03-18 05:14:09', '2023-03-18 05:14:09'),
(15, 'Madeline Kub', 1, 'qschumm@example.com', '+1-463-215-1696', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(16, 'Mr. Oswaldo Bauch', 12, 'lschneider@example.org', '949.722.5139', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(17, 'Dr. Kamren Hayes III', 15, 'davis.remington@example.com', '+1 (478) 354-1042', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(18, 'Johan Streich', 1, 'zhamill@example.com', '(360) 368-3877', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(19, 'Monroe Nicolas', 13, 'bergstrom.colin@example.com', '701.430.4337', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(20, 'Darion Kertzmann', 16, 'evangeline88@example.org', '661-720-8424', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(21, 'Clyde Mitchell', 13, 'kdickens@example.org', '+16507739885', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(22, 'Julia Sauer', 16, 'lmaggio@example.org', '1-410-485-9472', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(23, 'Kim Lueilwitz', 12, 'ustiedemann@example.org', '936-408-5188', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(24, 'Prof. Adela Windler', 6, 'zieme.mckenzie@example.net', '+1-970-342-5302', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(25, 'Jody Hayes', 16, 'awillms@example.com', '606-282-0150', '2023-03-18 05:14:10', '2023-03-18 05:14:10'),
(26, 'Md.Shomick Hasan', 19, 'shomick@gmail.com', '01734197067', '2023-03-18 05:17:47', '2023-03-18 05:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_17_055414_create_companies_table', 1),
(6, '2023_03_17_125053_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$3t8eUrSaAXNt8F/0ter6ZevnU6i4GmiZ5OIR9ihsRDpBlBfBUXRve', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
