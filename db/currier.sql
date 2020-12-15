-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2020 at 07:52 PM
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
(1, 9, 'CON-000001', 'Enim eos aute culpa', 'Jeanette Cunningham', 'Modi praesentium ver', '148', 'Hilary Abbott', 773, '2 kg', 2090, 'Corporis inventore q', 1, 9, '1', 1, '1', 48, 821, NULL, '2020-12-08 09:34:35', '2020-12-08 09:34:35'),
(2, 9, 'CON-000002', 'Et et adipisicing at', 'Portia Cline', 'Non vitae dolore qui', '994', 'Maxwell Cunningham', 666, '1 kg', 9009, 'Ut minus minima sed', 1, 9, '1', 2, NULL, 3, 669, NULL, '2020-12-08 09:37:57', '2020-12-08 09:37:57'),
(3, 9, 'CON-000003', 'Voluptas est qui tem', 'Brynn Chang', 'Dolor quisquam vel s', '544', 'Whitney Hurst', 400, '500 gm', 90, 'Obcaecati ab omnis d', 1, 9, NULL, NULL, NULL, 78, 478, NULL, '2020-12-09 06:35:53', '2020-12-09 06:35:53'),
(4, 9, 'CON-000004', 'Reiciendis non ut vi', 'Deborah Gordon', 'Nesciunt consectetu', '99', 'Miranda Harvey', 433, '2 kg', 678, 'Sit eligendi possimu', 2, 9, '1', 1, NULL, 73, 506, NULL, '2020-12-09 06:36:37', '2020-12-09 06:36:37'),
(5, 9, 'CON-000005', 'Ullamco velit ad si', 'Gage Stokes', 'Est laborum Dolore', '546', 'Rafael Wyatt', 445, 'Choose...', 878, 'Non distinctio Quo', 1, 9, '1', NULL, NULL, 56, 4, NULL, '2020-12-09 06:38:13', '2020-12-09 06:38:13'),
(6, 9, 'CON-000006', 'Laboriosam est lab', 'Rhoda Hancock', 'Dolor saepe aut quia', '84', 'Jane Stevenson', 915, '1.5 kg', 24, 'Repellendus Invento', 3, 9, '1', 2, NULL, 10, NULL, NULL, '2020-12-09 06:39:39', '2020-12-09 06:39:39'),
(7, 9, 'CON-000007', 'Eos sequi dicta earu', 'Hermione Sparks', 'Omnis aliquam dolore', '506', 'Montana Simpson', 687, '2 kg', 5678, 'Quo est possimus d', 3, 5, '1', 10, NULL, 36, NULL, NULL, '2020-12-09 06:40:13', '2020-12-09 06:40:13'),
(8, 9, 'CON-000008', 'Dolores nisi officii', 'Aurelia Foley', 'Mollitia exercitatio', '450', 'Nasim Hodge', 139, '1.5 kg', 233, 'Voluptas libero quis', 1, NULL, NULL, NULL, NULL, 94, NULL, NULL, '2020-12-09 06:40:38', '2020-12-09 06:40:38'),
(9, 9, 'CON-000009', 'Voluptate itaque ut', 'Ivan Wagner', 'Dolor aute ipsum et', '707', 'Kennan Welch', 213, '2 kg', 2444, 'Enim perferendis har', 3, 9, NULL, 2, NULL, 31, NULL, NULL, '2020-12-09 06:41:11', '2020-12-09 06:41:11'),
(10, 9, 'CON-000010', 'consignment 1', 'Caleb Sheppard', 'Qui tempora vero pos', '714', 'Rana Snider', 675, '1 kg', 714, 'Nihil officia conseq', 1, 9, '1', 1, '1', 39, NULL, NULL, '2020-12-13 08:05:39', '2020-12-13 08:05:39'),
(11, 9, 'CON-000011', 'Qui quibusdam aperia', 'Levi Bass', 'Sunt nihil recusand', '174', 'Rhoda Mercer', 922, '1 kg', 1021, 'Magnam in voluptas o', 2, 5, NULL, NULL, NULL, 99, NULL, NULL, '2020-12-15 03:17:13', '2020-12-15 03:17:13'),
(12, 9, 'CON-000012', 'Eiusmod in ipsa min', 'Violet Wyatt', 'Veritatis aut non ma', '661', 'Ian Good', 55, '500 gm', 111, 'Rerum ab ipsum nece', 1, NULL, NULL, NULL, NULL, 56, NULL, NULL, '2020-12-15 03:24:22', '2020-12-15 03:24:22'),
(13, 10, 'CON-000013', 'Libero iste eligendi', 'Macey Hogan', 'Suscipit molestias s', '687', 'Bo Hewitt', 79, '2 kg', 171, 'Ipsum in sed pariatu', 2, NULL, NULL, NULL, NULL, 92, NULL, NULL, '2020-12-15 03:25:44', '2020-12-15 03:25:44'),
(14, 10, 'CON-000014', 'Voluptate adipisicin', 'Nomlanga Bartlett', 'Do sit aliqua Nihi', '78', 'Elmo Mcleod', 561, '1 kg', 629, 'Ratione aspernatur a', 2, NULL, NULL, NULL, NULL, 68, NULL, NULL, '2020-12-15 03:26:28', '2020-12-15 03:26:28'),
(15, 11, 'CON-000015', 'invao', 'rahul', 'ranchi', '8989990900', 'prd', 90, '1 kg', 124, 'remark', 2, NULL, NULL, NULL, NULL, 34, NULL, NULL, '2020-12-15 17:40:13', '2020-12-15 17:40:13'),
(16, 11, 'CON-000016', 'invao', 'rahul', 'ranchi', '8989990900', 'prd', 90, '1 kg', 124, 'remark', 2, NULL, NULL, NULL, NULL, 34, NULL, NULL, '2020-12-15 17:40:14', '2020-12-15 17:40:14'),
(17, 11, 'CON-000017', 'invao', 'Birendra Yadav 5 6', 'At- Buchai , Post-office - Kapka , Ps- Barkatha', '09909090', '9090', 9090, '1 kg', 9099, 'fasd', 1, NULL, NULL, NULL, NULL, 9, NULL, NULL, '2020-12-15 17:41:10', '2020-12-15 17:41:10');

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
  `employeeCode` varchar(255) DEFAULT NULL,
  `fName` varchar(255) DEFAULT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `mName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `maritalStatus` varchar(255) DEFAULT NULL,
  `dateOfBirth` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(255) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `district` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `pickupPoint` varchar(255) DEFAULT NULL,
  `dateOfJoining` varchar(255) DEFAULT NULL,
  `employeeType` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pickupPointManagerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for Employees, i.e pickup point manager and delivery boy';

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeeCode`, `fName`, `lName`, `mName`, `gender`, `religion`, `maritalStatus`, `dateOfBirth`, `email`, `password`, `phoneNo`, `address1`, `address2`, `district`, `zone`, `pickupPoint`, `dateOfJoining`, `employeeType`, `created_at`, `updated_at`, `pickupPointManagerId`) VALUES
(1, 'EMP-000001', 'Ajeet', 'Kr', 'Yadav', 'Male', 'Odio aspernatur enim', 'Divorced', '2003-11-15', 'wudad@mailinator.com', 'Pa$$w0rd!', '+1 (789) 294-6171', '600 Fabien Court', 'Excepteur voluptate', '1', '3', '2', '2006-08-19', 'ROLE_DELIVERY_BOY', '2020-12-09 04:36:24', '2020-12-09 04:36:24', NULL),
(2, 'EMP-000002', 'Noelani', 'Maldonado', 'Xenos Hendricks', 'Not to say', 'Est obcaecati non di', 'Married', '1998-06-07', 'wytivu@mailinator.com', 'Pa$$w0rd!', '+1 (788) 681-7153', '66 North Clarendon Street', 'Sequi aut dolore eni', '2', '3', '1', '1984-04-29', 'ROLE_DELIVERY_BOY', '2020-12-09 04:36:49', '2020-12-09 04:36:49', NULL),
(3, 'EMP-000003', 'Wing', 'Estes', 'Shay Joseph', 'Others', 'Similique sint qui a', 'Married', '1979-02-06', 'nifuq@mailinator.com', 'Pa$$w0rd!', '+1 (112) 627-3537', '164 North Nobel Street', 'In sunt consectetur', '2', '2', '1', '1997-10-31', 'ROLE_PICKUP_POINT_MANAGER', '2020-12-09 04:37:05', '2020-12-09 04:37:05', NULL),
(4, 'EMP-000004', 'Craig', 'Oneal', 'Reagan Rivers', 'Male', 'At nostrud qui ut ea', 'Single', '1975-06-14', 'nyjisyj@mailinator.com', 'Pa$$w0rd!', '+1 (969) 621-7725', '35 East White Cowley Boulevard', 'Consequatur enim ne', '1', '1', '2', '1988-02-29', 'ROLE_DELIVERY_BOY', '2020-12-09 04:37:12', '2020-12-09 04:37:12', NULL),
(5, 'EMP-000005', 'Mari', 'Harmon', 'Callum Aguirre', 'Not to say', 'Eum dolor amet sint', 'Divorced', '2003-03-11', 'pp@gmail.com', 'hubtr00t@', '+1 (845) 837-9175', '907 Milton Street', 'Consequatur laborios', '1', '1', '2', '2006-08-09', 'ROLE_PICKUP_POINT_MANAGER', '2020-12-09 04:37:21', '2020-12-09 04:37:21', NULL),
(6, 'EMP-000006', 'Htb a sf', 'M mamtbea', 'Imeaa bga o', 'Female', 'LamyvDin mygho', 'Divorced', '1998-10-25', 'abc@gmail.com', 'abc@1234#', '2273427912', 'Rreh v a', '\'eabkkn', '1', '2', '2', '1999-02-09', 'ROLE_DELIVERY_BOY', '2020-12-10 09:35:44', '2020-12-10 09:35:44', NULL),
(7, 'EMP-000007', 'Martin', 'Mejia', 'Clementine Burt', 'Not to say', 'Provident aut dolor', 'Single', '2002-11-16', 'silujebol@mailinator.com', 'Pa$$w0rd!', '+1 (825) 399-8449', '89 South Rocky Hague Road', 'Voluptatem Amet ea', '1', '2', '2', '1971-05-06', 'ROLE_DELIVERY_BOY', '2020-12-13 03:58:29', '2020-12-13 03:58:29', NULL),
(8, 'EMP-000008', 'Ignacia', 'Pearson', 'Bruce Duran', 'Not to say', 'Ipsa soluta commodi', 'Divorced', '1982-08-02', 'tycibucat@mailinator.com', 'Pa$$w0rd!', '+1 (837) 965-3319', '63 South Green Fabien Road', 'Sint tempor quia co', '1', '3', '1', '1972-04-01', 'ROLE_DELIVERY_BOY', '2020-12-13 03:59:25', '2020-12-13 03:59:25', NULL),
(9, 'EMP-000009', 'Athena', 'Juarez', 'Herrod Cardenas', 'Others', 'Sunt consequuntur i', 'Divorced', '2012-03-06', 'diwor@mailinator.com', 'Pa$$w0rd!', '+1 (802) 181-8754', '845 West First Lane', 'Quia architecto culp', '1', '1', '1', '1987-11-16', 'ROLE_DELIVERY_BOY', '2020-12-14 21:24:44', '2020-12-14 21:24:44', 6),
(10, 'EMP-000010', 'Jemima', 'Donovan', 'Lenore Charles', 'Female', 'Veritatis corrupti', 'Divorced', '2005-03-04', 'deliveryboy@gmail.com', 'hubr00t@', '+1 (136) 634-2896', '178 Nobel Street', 'Iure nulla ratione t', '2', '3', '2', '2007-01-21', 'ROLE_DELIVERY_BOY', '2020-12-14 21:25:05', '2020-12-14 21:25:05', 5),
(11, 'EMP-000011', 'Finn', 'Thompson', 'Ariel Figueroa', 'Male', 'Molestiae voluptas s', 'Widowed', '2001-07-31', 'copovycoru@mailinator.com', 'Pa$$w0rd!', '+1 (341) 835-5877', '94 East Rocky Fabien Drive', 'Saepe qui facilis di', '2', '1', '2', '2011-02-10', 'ROLE_DELIVERY_BOY', '2020-12-14 21:25:49', '2020-12-14 21:25:49', 5);

-- --------------------------------------------------------

--
-- Table structure for table `merchant_registers`
--

CREATE TABLE `merchant_registers` (
  `id` int(10) NOT NULL,
  `b_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `M_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_confirmation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for merchant registrations';

--
-- Dumping data for table `merchant_registers`
--

INSERT INTO `merchant_registers` (`id`, `b_name`, `f_name`, `M_name`, `l_name`, `address`, `zone`, `pincode`, `phone`, `email`, `password`, `password_confirmation`, `created_at`, `updated_at`) VALUES
(9, 'stk It Solutions ltd', 'Sovik', 'kr', 'Mondal', 'West Bengol', 'Alipur', '787878', '9089089080', 'souvik@gmail.com', '123456', '123456', NULL, NULL),
(10, 'Technical Ajeet', 'Ajeet', 'kr', 'Yadav', 'Ranchi', 'Ranchi', '834001', '9089089080', 'technicalajeet@gmail.com', '123456', '123456', NULL, NULL),
(11, 'Jameson Fuentes', 'Erasmus Cunningham', 'Judith Sullivan', 'Hyacinth Hayes', 'Vero est nostrum fa', 'Select Zone', 'Veritatis soluta con', '+1 (628) 359-8833', 'ab@gmail.com', 'hubr00t@', 'hubr00t@', '2020-12-13 04:17:27', '2020-12-13 04:17:27');

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

--
-- Dumping data for table `super_admin_logins`
--

INSERT INTO `super_admin_logins` (`id`, `name`, `email`, `password`) VALUES
(1, 'SuperAdmin', 'superadmin@gmail.com', '123456');

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
(1, 'Fritz', 'sywesabu@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY'),
(2, 'Keith', 'wudad@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY'),
(3, 'Noelani', 'wytivu@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY'),
(4, 'Wing', 'nifuq@mailinator.com', 'Pa$$w0rd!', 'ROLE_PICKUP_POINT_MANAGER'),
(5, 'Craig', 'nyjisyj@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY'),
(6, 'Mari', 'pp@gmail.com', 'hubr00t@', 'ROLE_PICKUP_POINT_MANAGER'),
(7, 'Htb a sf', 'abc@gmail.com', 'abc@1234#', 'ROLE_DELIVERY_BOY'),
(8, 'Martin', 'silujebol@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY'),
(9, 'Ignacia', 'tycibucat@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY'),
(10, 'Erasmus Cunningham', 'ab@gmail.com', 'hubr00t@', 'ROLE_MERCHANT'),
(11, 'Athena', 'diwor@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY'),
(12, 'Jemima', 'deliveryboy@gmail.com', 'hubr00t@', 'ROLE_DELIVERY_BOY'),
(13, 'Finn', 'copovycoru@mailinator.com', 'Pa$$w0rd!', 'ROLE_DELIVERY_BOY');

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
  ADD PRIMARY KEY (`Id`),
  ADD KEY `merchantId` (`merchantId`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key for this table', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `merchant_registers`
--
ALTER TABLE `merchant_registers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consignments`
--
ALTER TABLE `consignments`
  ADD CONSTRAINT `consignments_ibfk_1` FOREIGN KEY (`merchantId`) REFERENCES `merchant_registers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
