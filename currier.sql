-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2020 at 08:51 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `currier`
--

-- --------------------------------------------------------

--
-- Table structure for table `consignments`
--

CREATE TABLE `consignments` (
  `Id` int(11) NOT NULL,
  `merchantId` int(11) NOT NULL COMMENT 'foregin key for the merchant_registers column id',
  `trackingId` varchar(255) DEFAULT NULL,
  `invoiceNo` varchar(255) DEFAULT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `customerAddress` text,
  `customerPhoneNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productPrice` double DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `totalConsignmentAmount` double DEFAULT NULL,
  `remark` text,
  `zoneId` int(11) DEFAULT NULL,
  `pickupPointManagerId` int(11) DEFAULT NULL,
  `managerStatus` varchar(255) DEFAULT NULL,
  `deliveryBoyId` int(11) DEFAULT NULL,
  `DeliveryBoyStatus` varchar(255) DEFAULT NULL,
  `deliveryCharge` double DEFAULT NULL,
  `totalAmount` double DEFAULT NULL,
  `paymentStatus` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignments`
--

INSERT INTO `consignments` (`Id`, `merchantId`, `trackingId`, `invoiceNo`, `customerName`, `customerAddress`, `customerPhoneNumber`, `productName`, `productPrice`, `weight`, `totalConsignmentAmount`, `remark`, `zoneId`, `pickupPointManagerId`, `managerStatus`, `deliveryBoyId`, `DeliveryBoyStatus`, `deliveryCharge`, `totalAmount`, `paymentStatus`, `created_at`, `updated_at`) VALUES
(1, 9, 'CON-000001', 'Atque similique haru', 'Sheila Maddox', NULL, '989', 'Justin Bennett', 54, '1 kg', 88, 'Mollitia ipsum labor', 3, NULL, NULL, NULL, NULL, 60, 89, NULL, '2020-11-30 01:32:05', '2020-11-30 01:32:05'),
(2, 9, 'CON-000002', 'Eius voluptas autem', 'Ariel Clarke', NULL, '881', 'Stephen Frost', 700, '2 kg', 75, 'Vel dolore numquam e', 2, NULL, NULL, NULL, NULL, 13, 899, NULL, '2020-11-30 01:33:02', '2020-11-30 01:33:02'),
(3, 9, 'CON-000003', 'Dicta incidunt dolo', 'Noelle Wallace', 'Molestiae dolorum id', '457', 'Nasim Byers', 810, '500 gm', 12, 'Dolorum doloremque u', 3, NULL, NULL, NULL, NULL, 76, 98, NULL, '2020-11-30 01:34:41', '2020-11-30 01:34:41'),
(4, 9, 'CON-000004', 'Et ullam deleniti in', 'Cain Boone', 'Excepturi esse conse', '908', 'Geoffrey Ramsey', 54, '1.5 kg', NULL, 'In cum et soluta ull', 3, NULL, NULL, NULL, NULL, 86, 92, NULL, '2020-11-30 01:35:39', '2020-11-30 01:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `District` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `Country`, `state`, `District`, `created_at`, `updated_at`) VALUES
(1, 'India', 'Jharkhand', 'Ranchi', '2020-11-21 09:55:53', '2020-11-21 09:55:53'),
(2, 'India', 'Kolkatta', 'Alipur', '2020-11-21 09:58:09', '2020-11-21 09:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL COMMENT 'primary key for this table',
  `employeeCode` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `maritalStatus` varchar(255) NOT NULL,
  `dateOfBirth` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `district` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `pickupPoint` varchar(255) NOT NULL,
  `dateOfJoining` varchar(255) NOT NULL,
  `employeeType` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for Employees, i.e pickup point manager and delivery boy';

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeeCode`, `fName`, `lName`, `mName`, `gender`, `religion`, `maritalStatus`, `dateOfBirth`, `email`, `password`, `phoneNo`, `address1`, `address2`, `district`, `zone`, `pickupPoint`, `dateOfJoining`, `employeeType`, `created_at`, `updated_at`) VALUES
(1, 'EMP-000001', 'Hmaags Cgaa', 'O  yeaaasg g', 'Ehanbayat', 'Female', 'Peanam', 'Widowed', '1960-11-29', 'mit@fo.gov', '0Pa$$4uM^t3', '7633474741', 'Kgoiegva', 'Gyea vaughlu', 'Karnataka', 'Dhanbad', 'Sec 5', 'HaapilKmsahuha', 'ROLE_DELIVERY_BOY', '2020-11-28 23:50:23', '2020-11-28 23:50:23'),
(3, 'EMP-000002', 'Er n tan', 'T', 'Gmh smnwntuikhn', 'Male', 'Khy oyt', 'Widowed', '1987-03-19', 'ho@jilumo.co.uk', '0Pa$$4uM^t3', '4386722794', 'Bh aahayb', 'MoateagmaUa R', 'Bihar', 'Bokaro', 'Sail city', 'Chgan i aaK\'', 'ROLE_PICKUP_POINT_MANAGER', '2020-11-29 03:33:55', '2020-11-29 03:33:55'),
(4, 'EMP-000003', 'Uho', 'Tgutnua    b', 'R llroauuah umb', 'Not to say', 'BOpatay', 'Married', '1999-03-08', 'vufoze@itadiv.mo', '0Pa$$4uM^t3', '5113588064', 'Rt ukytk nt', 'HgahaaoU', 'Jharkhand', 'Jamshedpur', 'Sec 5', 'AObnbfg  n bO', 'ROLE_DELIVERY_BOY', '2020-11-29 03:40:05', '2020-11-29 03:40:05'),
(5, 'EMP-000004', 'Fritz', 'Bowen', 'Sydnee Carroll', 'Female', 'Natus mollit sapient', 'Divorced', '1993-02-20', 'sywesabu@mailinator.com', 'Pa$$w0rd!', '+1 (535) 296-2622', '722 South New Drive', 'Sit accusamus excep', '2', '1', '1', '2013-05-23', 'ROLE_DELIVERY_BOY', '2020-12-02 22:35:06', '2020-12-02 22:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_registers`
--

CREATE TABLE `merchant_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_confirmation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=latin1;

--
-- Dumping data for table `merchant_registers`
--

INSERT INTO `merchant_registers` (`id`, `b_name`, `f_name`, `M_name`, `l_name`, `address`, `zone`, `pincode`, `phone`, `email`, `password`, `password_confirmation`, `created_at`, `updated_at`) VALUES
(9, 'stk It Solutions ltd', 'Sovik', 'kr', 'Mondal', 'West Bengol', 'Alipur', '787878', '9089089080', 'souvik@gmail.com', '123456', '123456', NULL, NULL),
(10, 'Technical Ajeet', 'Ajeet', 'kr', 'Yadav', 'Ranchi', 'Ranchi', '834001', '9089089080', 'technicalajeet@gmail.com', '123456', '123456', NULL, NULL);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_10_29_152757_create_pickup_points_table', 1),
(3, '2020_11_20_132156_create_merchant_registers_table', 1),
(4, '2020_11_20_170301_create_merchant_logins_table', 1),
(5, '2020_11_21_074553_create_users_table', 1),
(6, '2020_11_21_091802_create_districts_table', 2);

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
-- Table structure for table `pickup_points`
--

CREATE TABLE `pickup_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PickupPointName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Policestation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ZoneId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_point_areas`
--

CREATE TABLE `pickup_point_areas` (
  `id` int(11) NOT NULL,
  `pickupPointName` varchar(255) NOT NULL,
  `policeStation` varchar(255) NOT NULL,
  `ZoneId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_point_areas`
--

INSERT INTO `pickup_point_areas` (`id`, `pickupPointName`, `policeStation`, `ZoneId`) VALUES
(1, 'Near Jhanda chowck', 'sadar', 1),
(2, 'Near District More', 'sadar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin_logins`
--

CREATE TABLE `super_admin_logins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Fritz', 'sywesabu@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `zoneName` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zoneName`, `pincode`, `districtId`) VALUES
(1, 'Sector 1', 828989, 1),
(2, 'Sector2', 897879, 1),
(3, 'sector 3', 786890, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consignments`
--
ALTER TABLE `consignments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `employeeCode` (`employeeCode`);

--
-- Indexes for table `merchant_registers`
--
ALTER TABLE `merchant_registers`
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
-- Indexes for table `pickup_points`
--
ALTER TABLE `pickup_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_point_areas`
--
ALTER TABLE `pickup_point_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin_logins`
--
ALTER TABLE `super_admin_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consignments`
--
ALTER TABLE `consignments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key for this table', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `merchant_registers`
--
ALTER TABLE `merchant_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pickup_points`
--
ALTER TABLE `pickup_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickup_point_areas`
--
ALTER TABLE `pickup_point_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `super_admin_logins`
--
ALTER TABLE `super_admin_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
