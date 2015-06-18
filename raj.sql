-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 03:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raj`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '{"superuser":1}', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(2, 'HR', '{"view-users-list":1,"create-user":1}', '2015-05-07 19:45:33', '2015-05-07 22:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 1),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 1),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 1),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
('2013_07_16_172358_alter_user_table', 2),
('2013_09_02_072804_create_permission_table', 2),
('2013_09_08_191339_update_admin_group_permission', 2),
('2015_02_02_014955_products_table', 3),
('2015_02_10_033302_product_categories_table', 4),
('2015_02_11_012442_product_sub_categories_table', 5),
('2015_02_11_022304_product_suppliers_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_value_unique` (`value`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super User', 'superuser', 'All permissions', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(2, 'List Users', 'view-users-list', 'View the list of users', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(3, 'Create user', 'create-user', 'Create new user', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(4, 'Delete user', 'delete-user', 'Delete a user', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(5, 'Update user', 'update-user-info', 'Update a user profile', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(6, 'Update user group', 'user-group-management', 'Add/Remove a user in a group', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(7, 'Groups management', 'groups-management', 'Manage group (CRUD)', '2015-02-04 19:00:32', '2015-02-04 19:00:32'),
(8, 'Permissions management', 'permissions-management', 'Manage permissions (CRUD)', '2015-02-04 19:00:32', '2015-02-04 19:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE IF NOT EXISTS `productcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stocks` int(10) NOT NULL,
  `hits` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productsubcategories`
--

CREATE TABLE IF NOT EXISTS `productsubcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subcategoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productsuppliers`
--

CREATE TABLE IF NOT EXISTS `productsuppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supplierName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL),
(2, 2, NULL, 0, 0, 0, NULL, NULL, NULL),
(3, 3, NULL, 0, 0, 0, NULL, NULL, NULL),
(4, 4, NULL, 0, 0, 0, '2015-05-13 01:21:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'rhenzero_777@yahoo.com', 'rhenzero', '81b33fBvqYA14WQQ949ae266984b49b1554d9d69aa39f112023bcefd3817571b7834b8e9c7b459e687707ab2c605acc8e243569b52c3953ea5ba7c249c4e11cd4b3b7e2259bf4256', '', 1, NULL, '2015-02-04 19:09:36', '2015-05-19 18:18:03', 'CBoTZEKDbNsPTDRlb74acacc8eec22a6d76e6494a031ef638663c338e829522ff3819485f215b25c7c17d75e44aa9194553a8389e2600733b0845ad8d27d82ce45dc87046fa10645', NULL, 'Rhenz', 'Tubiera', '2015-02-04 19:09:36', '2015-05-19 18:18:03'),
(2, 'conrad@yahoo.com', 'conrad', 's9Pr9gncsTwXxYUfa0ffcab0ea4a33fa32ea2a493c87700ceed83a93bee1367ebc94c979c1dfa65d9ad5dc598add2ec8affb79a1ba8e55e7aa059d883e940027ebbac111b776af1f', '', 1, NULL, '2015-02-08 21:14:13', '2015-05-14 00:31:52', '5yDzTPDid4sFZ5xfe1e69974cdcff91830026946f0a392de084d0a602d9b07c50a6db460ec6299e2c7423189e10a241333d29506b4187e8b8035c39176e22de04e667c58db674eda', NULL, 'Manuel', 'Rillo', '2015-02-08 21:14:13', '2015-05-14 00:31:52'),
(3, 'kaye@yahoo.com', 'kaye', 'nihPDoAOOf5gaK6Vabee3d0ee24a208e1c63ac3a2b3737d104386c19cf75d8137fc5157d8abf4d7e0e56e1fe4ad95d09f92361055bdbfb0f3a277a6e22a5b09bc4cd11cb15aa77cd', '', 1, NULL, '2015-02-09 00:58:28', '2015-05-14 00:32:29', 'Xmq4KmHF1EI1cPb746c514626d2d466e2b90817c4506c6875f1f3055d5c843a69ce49bcb3f45a1ffa7cde009364acffaad4099ecd398d127eef0ce23864e8913438a2e847fe55163', NULL, 'Kristine', 'Patnaan', '2015-02-09 00:58:27', '2015-05-14 00:32:29'),
(4, 'feliz@yahoo.com', 'feliz', 'HGrFafrdN5haa32v89027a5aa4735e6fba2205500ca28e495fe6c62cd1a6c6205dcd329d9204c73cac553ddf892667ee7de9c94ef38ea14df983a50a0ef287f5b2f4a4b12d84ee24', '', 1, NULL, '2015-05-13 01:21:23', '2015-05-13 17:25:37', 'lbJKmOlbt1Aa19y409d2c4b2b38eefaf139f67b93874ac68c82d4bcadf74f7ef9588ee673a204a00a975ea61e5d0c27e7a0ec3684d45d11f3286052c785bbe45084535711f9f8f5d', NULL, 'Feliz', 'Ann', '2015-05-13 01:21:23', '2015-05-13 17:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 1),
(3, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
