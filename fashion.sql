-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 09:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Accessories', '1737701915.jpg', NULL, '2025-01-24 01:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Clothing Collections 2030', '0ZG8h1735891273.jpg', 1, '2025-01-03 02:31:13', '2025-01-03 02:31:13'),
(2, 'Accessories', 'QtKPC1735891283.jpg', 1, '2025-01-03 02:31:23', '2025-01-11 00:47:32'),
(3, 'Shoes Spring 2030', 'ATIVX1735891291.jpg', 1, '2025-01-03 02:31:31', '2025-01-11 02:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `banner_clothing`
--

CREATE TABLE `banner_clothing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_clothing`
--

INSERT INTO `banner_clothing` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Clothing Collections 2030', '1737538249.jpg', NULL, '2025-01-22 04:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Our Blog', '1737700039.jpg', NULL, '2025-01-24 00:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `descr` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `title`, `name`, `facebook`, `twitter`, `youtube`, `linkedin`, `desc`, `descr`, `created_at`, `updated_at`) VALUES
(1, '“When designing an advertisement for a particular product many things should be researched like where it should be displayed.”', '_ John Smith _', 'https://www.facebook.com/login/', 'https://x.com/?lang=en&mx=2', 'https://www.youtube.com/', 'https://www.linkedin.com/login/in', '<p>Hydroderm is the highly desired anti-aging cream on the block. This serum restricts the occurrence of early aging sings on the skin and keeps the skin younger, tighter and healthier. It reduces the wrinkles and loosening of skin. This cream nourishes the skin and brings back the glow that had lost in the run of hectic years.</p><p>&nbsp;The most essential ingredient that makes hydroderm so effective is Vyo-Serum, which is a product of natural selected proteins. This concentrate works actively in bringing about the natural youthful glow of the skin. It tightens the skin along with its moisturizing effect on the skin. The other important ingredient, making hydroderm so effective is “marine collagen” which along with Vyo-Serum helps revitalize the skin.</p>', '<p>Vyo-Serum along with tightening the skin also reduces the fine lines indicating aging of skin. Problems like dark circles, puffiness, and crow’s feet can be control from the strong effects of this serum.</p><p>&nbsp;Hydroderm is a multi-functional product that helps in reducing the cellulite and giving the body a toned shape, also helps in cleansing the skin from the root and not letting the pores clog, nevertheless also let’s sweeps out the wrinkles and all signs of aging from the sensitive near the eyes.</p>', NULL, '2025-02-11 01:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `brandings`
--

CREATE TABLE `brandings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brandings`
--

INSERT INTO `brandings` (`id`, `brand`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Louis Vuitton', 1, '2025-02-01 00:27:42', '2025-02-01 00:27:42'),
(2, 'Chanel', 1, '2025-02-01 00:27:48', '2025-02-01 00:27:48'),
(3, 'Hermes', 1, '2025-02-01 00:27:53', '2025-02-01 00:27:53'),
(4, 'Gucci', 1, '2025-02-01 00:27:57', '2025-02-01 00:27:57'),
(5, 'Nike', 0, '2025-02-01 02:09:00', '2025-02-10 01:38:32'),
(6, 'Scarters', 0, '2025-02-01 02:33:20', '2025-02-10 01:38:36'),
(7, 'Calvin Klein', 0, '2025-02-01 02:50:08', '2025-02-10 01:38:43'),
(8, 'Baxxy', 0, '2025-02-01 03:13:25', '2025-02-10 01:38:39'),
(9, 'Pashtush', 0, '2025-02-01 04:16:14', '2025-02-10 01:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('emp123@gmail.com|127.0.0.1', 'i:1;', 1732513038),
('emp123@gmail.com|127.0.0.1:timer', 'i:1732513038;', 1732513038),
('test123@gmail.com|127.0.0.1', 'i:1;', 1732177673),
('test123@gmail.com|127.0.0.1:timer', 'i:1732177673;', 1732177673),
('user123@gmail.com|127.0.0.1', 'i:1;', 1732177536),
('user123@gmail.com|127.0.0.1:timer', 'i:1732177536;', 1732177536);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 4, '2025-01-22 03:28:53', '2025-01-22 03:30:58'),
(3, 2, 1, 2, '2025-01-22 03:30:42', '2025-01-31 03:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Perfume', 0, '2025-01-29 00:56:50', '2025-02-10 03:05:54'),
(2, 'Shoes', 1, '2025-01-29 00:57:01', '2025-01-29 00:57:01'),
(3, 'Lether Backpack', 1, '2025-01-29 00:57:31', '2025-01-29 00:57:31'),
(4, 'Diagonal Textured Cap', 1, '2025-01-29 00:57:55', '2025-01-29 00:57:55'),
(5, 'Ankle Boots', 1, '2025-01-29 00:58:07', '2025-01-29 00:58:07'),
(6, 'T-shirt Contrast Pocket', 1, '2025-01-29 00:58:26', '2025-01-29 00:58:26'),
(7, 'Basic Flowing Scarf', 1, '2025-01-29 00:58:39', '2025-01-29 00:58:39'),
(8, 'Multi-pocket Chest Bag', 1, '2025-01-29 00:59:02', '2025-01-29 00:59:02'),
(9, 'Piqué Biker Jacket', 1, '2025-01-29 00:59:09', '2025-01-29 00:59:09'),
(10, 'Watch', 1, '2025-02-10 02:41:24', '2025-02-10 02:41:24'),
(11, 'Perfume', 1, '2025-02-10 03:05:46', '2025-02-10 03:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `chests`
--

CREATE TABLE `chests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chests`
--

INSERT INTO `chests` (`id`, `name`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Deal Of The Week', 'Multi-pocket Chest Bag Black', '1737009305.png', NULL, '2025-01-16 01:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `number`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Deal Of The Week', 'test123@gmaail.com', 1234567890, 'dcgvsdfzgdfgh', '2025-02-13 00:31:36', '2025-02-13 00:31:36'),
(2, 'Pooja', 'pooja000@gmail.com', 1234567890, 'Wow, that ring is absolutely stunning! It\'s so elegant and perfectly suits you', '2025-02-13 00:37:44', '2025-02-13 00:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `map` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `nameA` varchar(255) NOT NULL,
  `america` longtext NOT NULL,
  `nameF` varchar(255) NOT NULL,
  `france` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `map`, `title`, `name`, `desc`, `nameA`, `america`, `nameF`, `france`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1597926938024!5m2!1sen!2sbd', 'Information', 'Contact Us', '<p>As you might expect of a company that began as a high-end interiors contractor, we pay strict attention.</p>', 'America', '<p>195 E Parker Square Dr, Parker, CO 801</p><p>&nbsp;+43 982-314-0958</p>', 'France', '<p>109 Avenue Léon, 63 Clermont-Ferrand</p><p>&nbsp;+12 345-423-9893</p>', NULL, '2025-01-24 03:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `custom_logins`
--

CREATE TABLE `custom_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_logins`
--

INSERT INTO `custom_logins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jalpa', 'jalpa123@gmail.com', '$2y$12$UO3aL/3TFbmJLhwD8yo98uF8NSOIhU2uxHQObd0hwR1tXVwA0RQYy', '2025-01-10 01:11:17', '2025-01-10 01:11:17'),
(2, 'Radhe', 'radhe123@gmail.com', '$2y$12$HLRuIEcVt.ENB.gZckJYg.Mgx/WITuwIPYM1Pfv3BHbkHI4r1r.ni', '2025-01-10 02:08:40', '2025-01-10 02:08:40'),
(3, 'Pooja', 'pooja000@gmail.com', '$2y$12$wPqneBgprlfQZvxma42ek.EZru0h.qR3gnTeMuGUoyt2RodFkZD/i', '2025-02-10 03:33:13', '2025-02-10 03:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext NOT NULL,
  `add` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `desc`, `add`, `created_at`, `updated_at`) VALUES
(1, 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.', '<p><strong>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.</strong></p><p><strong>Products Infomation</strong></p><p>A Pocket PC is a handheld computer, which features many of the same capabilities as a modern PC. These handy little devices allow individuals to retrieve and store e-mail messages, create a contact file, coordinate appointments, surf the internet, exchange text messages and more. Every product that is labeled as a Pocket PC must be accompanied with specific software to operate the unit and must feature a touchscreen and touchpad.</p><p>As is the case with any new technology product, the cost of a Pocket PC was substantial during it’s early release. For approximately $700.00, consumers could purchase one of top-of-the-line Pocket PCs in 2003. These days, customers are finding that prices have become much more reasonable now that the newness is wearing off. For approximately $350.00, a new Pocket PC can now be purchased.</p><p><strong>Material used</strong></p><p>Polyester is deemed lower quality due to its none natural quality’s. Made from synthetic materials, not natural like wool. Polyester suits become creased easily and are known for not being breathable. Polyester suits tend to have a shine to them compared to wool and cotton suits, this can make the suit look cheap. The texture of velvet is luxurious and breathable. Velvet is a great choice for dinner party jacket and can be worn all year round.</p>', NULL, '2025-02-01 00:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fashions`
--

CREATE TABLE `fashions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fashions`
--

INSERT INTO `fashions` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Latest News', 'Fashion New Trends', NULL, '2025-01-04 03:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `happies`
--

CREATE TABLE `happies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `happies`
--

INSERT INTO `happies` (`id`, `number`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '102', 'Our Clients', 1, '2025-01-25 00:42:29', '2025-01-25 00:42:29'),
(2, '30', 'Total Categories', 1, '2025-01-25 00:42:43', '2025-01-25 00:42:43'),
(3, '102', 'In Country', 1, '2025-01-25 00:43:06', '2025-01-25 00:43:06'),
(4, '98%', 'Happy Customer', 1, '2025-01-25 00:43:24', '2025-01-25 00:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fhKri1735977071.jpg', 1, '2025-01-04 02:21:11', '2025-01-04 02:21:11'),
(2, 'mm22O1735977534.jpg', 1, '2025-01-04 02:28:54', '2025-01-04 02:28:54'),
(3, 'XrSTX1735977558.jpg', 1, '2025-01-04 02:29:18', '2025-01-04 02:29:18'),
(4, 'lFWfl1735977571.jpg', 1, '2025-01-04 02:29:31', '2025-01-04 02:29:31'),
(5, 'qDTbE1735977583.jpg', 1, '2025-01-04 02:29:43', '2025-01-04 02:29:43'),
(6, 'Yu52h1735977595.jpg', 1, '2025-01-04 02:29:55', '2025-01-04 02:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `instagrams`
--

CREATE TABLE `instagrams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instagrams`
--

INSERT INTO `instagrams` (`id`, `name`, `desc`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Instagram', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '#Male_Fashion', NULL, '2025-01-04 03:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `ins_images`
--

CREATE TABLE `ins_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ins_images`
--

INSERT INTO `ins_images` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A9Z6Z1735971598.jpg', 1, '2025-01-04 00:49:58', '2025-01-04 00:49:58'),
(2, '8sMM91735972004.jpg', 1, '2025-01-04 00:56:44', '2025-01-04 00:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meets`
--

CREATE TABLE `meets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstImg` varchar(255) NOT NULL,
  `midlleImg` varchar(255) NOT NULL,
  `lastImg` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `schultz` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `our` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meets`
--

INSERT INTO `meets` (`id`, `firstImg`, `midlleImg`, `lastImg`, `desc`, `schultz`, `design`, `our`, `team`, `partner`, `client`, `created_at`, `updated_at`) VALUES
(1, '1737788019.jpg', '1737788020.jpg', '1737788020.jpg', '“Going out after work? Take your butane curling iron with you to the office, heat it up, style your hair before you leave the office and you won’t have to make a trip back home.”', 'Augusta Schultz', 'Fashion Design', 'Our Team', 'Meet Our Team', 'Partner', 'Happy Clients', NULL, '2025-01-25 01:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2024_11_19_051915_create_sliders_table', 2),
(9, '2025_01_03_062005_create_banners_table', 4),
(10, '2025_01_03_081327_create_trends_table', 5),
(13, '2025_01_04_063216_create_images_table', 6),
(16, '2025_01_04_081520_create_instagrams_table', 7),
(17, '2025_01_04_091908_create_fashions_table', 8),
(23, '2025_01_07_060642_create_categories_table', 12),
(24, '2025_01_07_060651_create_tags_table', 12),
(28, '2025_01_08_053152_create_products_table', 13),
(29, '2025_01_10_062150_create_custom_logins_table', 13),
(30, '2025_01_10_090559_create_carts_table', 14),
(31, '2025_01_06_052958_create_chests_table', 15),
(32, '2025_01_22_091417_create_banner_clothing_table', 16),
(33, '2025_01_23_081252_create_accessories_table', 17),
(34, '2025_01_23_081350_create_shoes_table', 17),
(35, '2025_01_24_061549_create_blogs_table', 18),
(37, '2025_01_24_070539_create_contacts_table', 19),
(38, '2025_01_24_084551_create_teams_table', 20),
(39, '2025_01_24_091914_create_partners_table', 21),
(41, '2025_01_25_053636_create_happies_table', 22),
(42, '2025_01_25_061922_create_meets_table', 23),
(43, '2025_01_25_070455_create_ques_table', 24),
(44, '2025_01_27_084240_create_sizes_table', 25),
(45, '2025_01_06_054257_create_settings_table', 26),
(46, '2025_02_01_053527_create_brandings_table', 27),
(47, '2025_02_01_060535_add_brand', 28),
(48, '2025_02_01_061245_create_details_table', 29),
(49, '2025_02_01_063207_dropcolumn', 30),
(50, '2025_02_01_071136_add_brand', 31),
(51, '2025_02_01_073139_add_brand', 32),
(52, '2025_02_01_090354_dropcolumn', 33),
(53, '2025_02_11_063135_create_blog_details_table', 34),
(54, '2025_02_13_052635_create_comments_table', 35);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'cgQ5t1737782960.png', 1, '2025-01-24 23:59:20', '2025-01-24 23:59:20'),
(2, 'rjpEh1737782969.png', 1, '2025-01-24 23:59:29', '2025-01-25 00:04:46'),
(3, 'WEMeh1737782978.png', 1, '2025-01-24 23:59:38', '2025-01-24 23:59:38'),
(4, '4sQHf1737782986.png', 1, '2025-01-24 23:59:46', '2025-01-24 23:59:46'),
(5, '7pQde1737782994.png', 1, '2025-01-24 23:59:54', '2025-01-24 23:59:54'),
(6, '4URY41737783002.png', 1, '2025-01-25 00:00:02', '2025-01-25 00:00:02'),
(7, '9fEhp1737783007.png', 1, '2025-01-25 00:00:07', '2025-01-25 00:00:07'),
(8, '95yFH1737783011.png', 1, '2025-01-25 00:00:11', '2025-01-25 00:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `brand` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `thumbnail`, `images`, `title`, `price`, `size`, `brand`, `color`, `category`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(1, '1737957228.webp', '[\"t0Gtt1737957228.webp\",\"rFj1N1737957228.webp\",\"lEjEO1737957228.webp\",\"Q5gZK1737957228.jpg\",\"uE3vR1737957228.webp\",\"IGNFW1737957228.webp\"]', 'BounceMax Sports Shoes', '1719', '[\"1\",\"2\",\"3\"]', 5, 'White/Grey/Green', 2, '[\"3\",\"6\"]', 1, '2025-01-17 01:31:30', '2025-02-01 02:55:38'),
(2, '1737961390.png', '[\"W6Kv41737961390.png\",\"9GgPn1737961390.jpg\",\"h2imd1737961390.jpg\",\"fhuWl1737961390.jpg\",\"XTeuZ1737961390.jpg\",\"S5NMg1737961390.jpg\",\"MuLdg1737961390.jpg\",\"tGguy1737961390.jpg\"]', 'Lether Backpack', '4999', '[\"1\",\"3\"]', 6, 'Navy Blue', 3, '[\"2\",\"5\"]', 1, '2025-01-17 01:38:39', '2025-02-01 02:49:04'),
(3, '1737965889.webp', '[\"prbk91737965889.webp\",\"ROb4C1737965889.webp\",\"QNqyg1737965889.webp\",\"7RklA1737965889.webp\",\"XwdJf1737965889.webp\",\"8Bx1O1737965889.webp\"]', 'Calvin Klein Jeans Contrast Pocket T Shirt Black', '2100', '[\"1\",\"2\",\"3\"]', 7, 'Black', 6, '[\"1\",\"3\"]', 1, '2025-01-17 01:41:46', '2025-02-01 02:50:51'),
(4, '1737957365.webp', '[\"ciQvp1737957365.webp\",\"6WAwM1737957365.webp\",\"5bZNz1737957365.webp\",\"avoiX1737957365.webp\",\"54WrZ1737957365.webp\",\"S2jZT1737957365.webp\"]', 'Formal Office Wear Shoes', '1499', '[\"2\",\"3\",\"4\"]', 8, 'Tan', 2, '[\"3\",\"6\"]', 1, '2025-01-17 01:43:47', '2025-02-01 03:14:04'),
(5, '1737959703.webp', '[\"KXmoO1737959703.webp\",\"rxzJZ1737959703.webp\",\"aqCAT1737959703.webp\",\"iMdz21737959703.webp\",\"oEfXH1737959703.webp\",\"cW6pk1737959703.webp\"]', 'Basic Flowing Scarf', '1299', '[\"1\",\"2\",\"3\"]', 9, 'Beige', 7, '[\"1\",\"3\",\"7\"]', 1, '2025-01-17 01:45:33', '2025-02-01 04:17:41'),
(6, '1738309976.jpg', '[\"nzpJz1738309976.jpg\",\"kGnl71738309976.jpg\",\"66NFd1738309976.jpg\",\"zZKci1738309976.jpg\"]', 'Men\'s Faux Leather Biker Jacket with Studded Accents', '1130', '[\"2\",\"3\"]', 1, 'Black', 9, '[\"1\",\"3\"]', 1, '2025-01-17 01:48:46', '2025-01-31 02:22:56'),
(7, '1737965406.webp', '[\"ZVXt21737965406.webp\",\"IU2vb1737965406.webp\",\"zhltt1737965406.webp\",\"1BBIF1737965406.webp\",\"qWZRb1737965406.webp\",\"C5BVt1737965406.webp\"]', 'Diagonal Textured Cap', '799', '[\"1\",\"2\",\"3\"]', 1, 'Black & White', 4, '[\"2\",\"3\"]', 1, '2025-01-17 01:50:37', '2025-01-29 01:12:16'),
(9, '1738133839.webp', '[\"IlL1U1738133839.webp\",\"kGfo71738133839.webp\",\"mBELd1738133839.webp\",\"mnfKf1738133839.webp\",\"YGzyu1738133839.webp\",\"Qt9CR1738133839.webp\",\"j5MtS1738133839.webp\",\"xZyrn1738133839.webp\"]', 'Multi-pocket Chest Bag', '3100', '[\"2\",\"3\"]', 1, 'Black', 8, '[\"5\",\"7\"]', 1, '2025-01-17 02:27:54', '2025-01-29 01:27:19'),
(10, 'MvsBJ1737958406.avif', '[\"5BEuX1737958407.avif\",\"sb7WN1737958407.avif\",\"uQREl1737958407.avif\",\"J9dlx1737958407.avif\",\"ZgbhN1737958407.avif\",\"75Kfi1737958407.avif\"]', 'Hawaiian Ocean-Puma Black', '4999', '[\"2\",\"3\"]', 1, 'Hawaiian Ocean-Puma Black', 2, '[\"3\",\"6\"]', 1, '2025-01-27 00:43:27', '2025-01-29 01:06:33'),
(11, '1737960217.jpg', '[\"aOeQk1737960217.jpg\",\"JljpI1737960217.jpg\",\"W4kEF1737960217.jpg\",\"yCwua1737960217.jpg\",\"IHNsy1737960217.jpg\"]', 'Pashtush Mens Extra Fine Wool Stole', '1399', '[\"1\",\"2\",\"3\"]', 1, 'Blue', 7, '[\"1\",\"4\"]', 1, '2025-01-27 01:09:03', '2025-01-29 01:15:56'),
(12, 'lCkP41737960562.jpg', '[\"QXv3K1737960562.jpg\",\"n4gKA1737960562.jpg\",\"hyowv1737960562.jpg\",\"EDHQJ1737960562.jpg\",\"GF6n31737960562.jpg\"]', 'Basci Flowing Scarf', '1499', '[\"1\",\"2\",\"3\",\"4\"]', 1, 'Black', 7, '[\"1\",\"3\",\"7\"]', 1, '2025-01-27 01:19:22', '2025-01-29 01:07:28'),
(13, 'yD84v1737960871.jpg', '[\"oFSlv1737960871.jpg\",\"KmkGN1737960871.jpg\",\"meo3t1737960871.jpg\",\"Ikwwb1737960871.jpg\",\"bXdK21737960871.jpg\",\"TsxHC1737960871.jpg\"]', 'Basic Flowing Scarf', '1799', '[\"2\",\"3\",\"4\"]', 1, 'Brown/Black', 7, '[\"1\",\"3\"]', 1, '2025-01-27 01:24:31', '2025-01-29 01:16:33'),
(14, 'q3Jfl1737961896.webp', '[\"DuaNG1737961896.webp\",\"ZHzKD1737961896.webp\",\"WvQXk1737961896.webp\",\"9YUBS1737961896.webp\",\"gYqoX1737961896.webp\",\"OYUcR1737961896.webp\"]', 'Alpha Large Backpack', '7999', '[\"2\",\"3\",\"5\"]', 1, 'Chestnut Brown', 3, '[\"1\",\"5\"]', 1, '2025-01-27 01:41:36', '2025-01-29 01:07:59'),
(15, '1737962185.webp', '[\"RiQ6J1737962162.webp\",\"Y5qa81737962162.webp\",\"Vef1i1737962162.webp\",\"tKK3x1737962162.webp\",\"uq60Z1737962162.webp\",\"gt4ZI1737962162.webp\",\"3qd001737962162.webp\"]', 'Venture Workpack', '4195', '[\"1\",\"2\",\"3\"]', 1, 'Olive', 3, '[\"1\",\"4\"]', 1, '2025-01-27 01:46:02', '2025-01-29 01:17:26'),
(16, 'cYIqt1737962425.jpg', '[\"eaYiH1737962426.jpg\",\"lunoh1737962426.webp\",\"M398U1737962426.webp\",\"Ezkuo1737962426.webp\",\"KLpCs1737962426.webp\",\"iI3m71737962426.jpg\"]', 'Alton Backpack 2.0', '5199', '[\"2\",\"3\"]', 1, 'Forest Green', 3, '[\"3\",\"5\"]', 1, '2025-01-27 01:50:26', '2025-01-29 01:09:40'),
(20, 'LaFgi1737964053.jpg', '[\"OcMqi1737964053.jpg\",\"Tms591737964053.jpg\",\"GugGq1737964053.jpg\",\"QMRw91737964053.jpg\"]', 'Heega Head Caps', '322', '[\"1\",\"2\"]', 1, 'Black', 4, '[\"1\",\"2\",\"3\"]', 1, '2025-01-27 02:17:33', '2025-01-29 01:18:35'),
(21, '1737964399.jpg', '[\"HS1Hz1737964399.jpg\",\"xLdiP1737964399.jpg\",\"8QJZC1737964399.jpg\",\"hMPx41737964399.jpg\"]', 'Men Textured Cap', '499', '[\"1\",\"2\",\"3\"]', 1, 'Black', 4, '[\"3\",\"9\"]', 1, '2025-01-27 02:20:18', '2025-01-29 01:10:18'),
(22, 'QkZjh1737965109.webp', '[\"h2gVF1737965109.webp\",\"bnLgK1737965109.webp\",\"WwetY1737965109.webp\"]', 'Cashmere jersey baseball cap', '790', '[\"1\",\"2\"]', 1, 'Beige', 4, '[\"1\",\"2\"]', 1, '2025-01-27 02:35:09', '2025-01-29 01:19:13'),
(23, 'EebCH1737966076.webp', '[\"h1l3t1737966076.webp\",\"KLqfs1737966076.webp\",\"S2IWy1737966076.webp\",\"y92wI1737966076.webp\",\"Y1hkR1737966076.webp\",\"GwQ371737966076.webp\"]', 'White Contrast Pocket Oversized T-shirt', '999', '[\"1\",\"2\",\"3\",\"4\"]', 1, 'White', 6, '[\"1\",\"2\",\"7\"]', 1, '2025-01-27 02:51:16', '2025-01-29 01:10:46'),
(24, 'PNnIX1737966291.webp', '[\"R4so81737966291.webp\",\"8B0wk1737966291.webp\",\"HmhOm1737966291.webp\",\"5kKIt1737966291.webp\",\"Rfz3g1737966291.webp\",\"lEsjB1737966291.webp\"]', 'Black Cross Stitched Elbow Patch Waffle Zipper T-Shirt', '899', '[\"2\",\"3\",\"4\"]', 1, 'Black', 6, '[\"1\",\"3\",\"7\"]', 1, '2025-01-27 02:54:51', '2025-01-29 01:19:58'),
(25, '1737970019.webp', '[\"9X1is1737966516.webp\",\"q8obE1737966516.webp\",\"TwGdc1737966516.webp\",\"BikXU1737966516.webp\"]', 'Contrasting-collar patch-pocket T-shirt', '259', '[\"2\",\"3\",\"4\"]', 1, 'Light Blue', 6, '[\"1\",\"2\",\"7\"]', 1, '2025-01-27 02:58:36', '2025-01-29 01:11:16'),
(26, 'yeAEJ1737966748.webp', '[\"OhUnZ1737966748.webp\",\"6rCDd1737966748.webp\",\"BWUc51737966748.webp\",\"c0lPN1737966748.webp\",\"pTpdM1737966748.webp\"]', 'Sunglasses T-shirt', '250', '[\"2\",\"3\",\"4\"]', 1, 'Light Blue', 6, '[\"1\",\"2\",\"7\"]', 1, '2025-01-27 03:02:28', '2025-01-29 01:20:38'),
(27, 'oBk391738133733.jpeg', '[\"ePxiC1738133733.jpeg\",\"tXamN1738133733.jpeg\",\"RfLoL1738133733.jpeg\",\"e7kKH1738133733.jpeg\",\"lL6bF1738133733.jpeg\",\"T6dLE1738133733.jpeg\"]', 'Moccasins Leather Shoes', '3100', '[\"2\",\"3\"]', 1, 'Green', 2, '[\"6\",\"7\"]', 1, '2025-01-29 01:25:33', '2025-01-30 03:15:06'),
(28, 'Tl0eG1738134865.webp', '[\"KUBMd1738134865.webp\",\"PK5Ej1738134865.webp\",\"FoNSI1738134865.webp\",\"dHjwF1738134865.webp\",\"SF9Jx1738134865.webp\"]', 'Unisex Textured Crossbody Chest Bag', '1409', '[\"2\",\"3\"]', 4, 'Black', 8, '[\"3\",\"5\"]', 1, '2025-01-29 01:44:25', '2025-01-29 01:44:25'),
(29, 'lNWTj1738135062.webp', '[\"rtQr51738135062.webp\",\"ebv8a1738135062.webp\",\"whvjd1738135062.webp\",\"qP4Fz1738135062.webp\"]', 'GUSTAVE Crossbody Bags', '1398', '[\"1\",\"2\"]', 1, 'Brown', 8, '[\"3\",\"5\"]', 1, '2025-01-29 01:47:42', '2025-01-29 01:47:42'),
(30, 'kHHwV1738135215.webp', '[\"PTs8n1738135215.webp\",\"EK9KT1738135215.webp\",\"ypEC41738135215.webp\",\"JOuU61738135215.webp\",\"QusQp1738135215.webp\",\"phZrC1738135215.webp\",\"PZ7mj1738135215.webp\"]', 'Stylish Multi-Pocket Sling Travel Cross Body Office Messenger One Side Shoulder Handbag', '499', '[\"1\",\"2\"]', 1, 'Brown', 8, '[\"3\",\"5\"]', 1, '2025-01-29 01:50:15', '2025-01-29 01:50:15'),
(31, 'PeJ681738135615.webp', '[\"GIU7v1738135615.webp\",\"lA4dn1738135615.webp\",\"dxoKd1738135615.webp\",\"ftPbL1738135615.webp\",\"xY1oT1738135615.webp\",\"IyKkU1738135615.webp\",\"1Mgj91738135615.webp\",\"xp7JT1738135615.webp\"]', 'Gear Elevate Anti-Theft Backpack', '1995', '[\"2\",\"3\"]', 1, 'Green', 8, '[\"5\"]', 1, '2025-01-29 01:56:55', '2025-01-29 01:56:55'),
(32, 'jO85k1738309828.webp', '[\"O8Lar1738309829.webp\",\"hhJdz1738309829.webp\",\"Txwpr1738309829.webp\",\"ZuQms1738309829.webp\",\"7Ltj81738309829.webp\",\"w6NuF1738309829.webp\",\"yAxzc1738309829.webp\"]', 'Zara Leather-Effect Biker Jacket', '6950', '[\"1\",\"2\",\"3\",\"4\"]', 1, 'Black', 9, '[\"1\",\"3\"]', 1, '2025-01-31 02:20:29', '2025-01-31 02:20:29'),
(33, '4paaC1738310162.webp', '[\"GXkSN1738310162.webp\",\"p8pq41738310162.webp\",\"MubGn1738310162.webp\",\"JIW141738310162.webp\",\"CWl3o1738310162.webp\"]', 'The Piqué Jacket', '1500', '[\"3\",\"4\"]', 1, 'Green', 9, '[\"1\",\"2\"]', 1, '2025-01-31 02:26:02', '2025-01-31 02:26:02'),
(34, 'IOe1D1738310388.webp', '[\"kcW6M1738310388.webp\",\"PiFhv1738310388.webp\",\"RCMuc1738310388.webp\",\"JJvq71738310388.webp\",\"3Dppx1738310388.webp\"]', 'ECKO UNLTD Men Logo Embroidered Slim Fit Biker Jacket For Men', '2100', '[\"2\",\"3\",\"4\"]', 1, 'White/Black', 9, '[\"1\",\"2\"]', 1, '2025-01-31 02:29:48', '2025-01-31 02:29:48'),
(35, 'Wuz2J1738310633.webp', '[\"FMQv71738310633.webp\",\"lkqHm1738310633.webp\",\"kZyFk1738310633.webp\",\"WPvCI1738310633.webp\",\"kOPBi1738310633.webp\"]', 'Men\'s Solid Leather Biker Jacket', '2558', '[\"1\",\"2\",\"3\"]', 1, 'Brown', 9, '[\"1\",\"2\"]', 1, '2025-01-31 02:33:53', '2025-01-31 02:33:53'),
(36, 'bY4oX1738311048.webp', '[\"EyuQ11738311048.webp\",\"p2xxM1738311048.webp\",\"zFYlP1738311048.webp\",\"UeYbf1738311048.webp\",\"DJDV01738311048.webp\"]', 'Allen Cooper Men\'s Luxury Memory Foam High-Top Ankle Boots', '1699', '[\"2\",\"3\",\"4\"]', 1, 'Brown', 5, '[\"6\"]', 1, '2025-01-31 02:40:48', '2025-01-31 02:40:48'),
(37, 'Tlrtj1738311177.webp', '[\"KHcXR1738311177.webp\",\"7ARCZ1738311177.webp\",\"rMZSA1738311177.webp\",\"U4rrN1738311177.webp\",\"zBGmG1738311177.webp\",\"IBaQi1738311177.webp\"]', 'The Roadster Lifestyle Co Men\'s Slim-Heeled Chelsea Boots', '1079', '[\"3\",\"4\",\"5\"]', 2, 'Black', 5, '[\"6\"]', 1, '2025-01-31 02:42:57', '2025-01-31 02:42:57'),
(38, 'hLALT1738311245.jpeg', '[\"VRbab1738311245.jpeg\",\"6FCdg1738311245.jpeg\",\"3KSPL1738311245.jpeg\",\"n8O5W1738311245.jpeg\",\"fEgBG1738311245.jpeg\",\"No3Pk1738311245.jpeg\",\"TXROp1738311245.jpeg\"]', 'Ankle Boots', '3100', '[\"3\",\"4\",\"5\"]', 1, 'Brown', 5, '[\"6\"]', 1, '2025-01-31 02:44:05', '2025-01-31 02:44:05'),
(39, 'igFDS1738311389.webp', '[\"Citpl1738311390.webp\",\"LsTj01738311390.webp\",\"MXoTi1738311390.webp\",\"buI7W1738311390.webp\",\"w7AuQ1738311390.webp\",\"1pvAE1738311390.webp\",\"XMKOj1738311390.webp\",\"4agxW1738311390.webp\",\"bBQCn1738311390.webp\"]', 'Men\'s Casual Chelsea and Ankle Boots', '1399', '[\"3\",\"4\",\"5\"]', 1, 'White', 5, '[\"7\"]', 1, '2025-01-31 02:46:30', '2025-01-31 02:46:30'),
(40, '1739174732.webp', '[\"c7JQb1739174732.webp\",\"peqDe1739174732.webp\",\"yCAW11739174732.webp\",\"foGuD1739174732.webp\",\"sobLk1739174732.webp\",\"v59qF1739174732.webp\"]', 'Hermes Terre D\'Hermes Eau De Hermes', '7469', '[\"2\"]', 3, 'Grey', 11, '[\"2\"]', 1, '2025-02-10 02:31:08', '2025-02-10 03:07:39'),
(41, '1739174574.webp', '[\"AebIc1739174574.webp\",\"TegwJ1739174574.webp\",\"n5dX71739174574.webp\",\"81jbP1739174575.webp\",\"FqiMU1739174575.webp\",\"kWJV01739174575.webp\",\"yzX7E1739174575.webp\"]', 'Hermes H24 Herbes Vives Eau de Parfum', '8650', '[\"2\"]', 3, 'Green', 11, '[\"2\"]', 1, '2025-02-10 02:31:26', '2025-02-10 03:07:22'),
(42, '0EQVs1739175272.webp', '[\"mRPi71739175272.webp\",\"0YHWP1739175272.webp\",\"zrOnK1739175272.webp\",\"N1PJI1739175272.webp\",\"4gQDO1739175272.webp\"]', 'Hermès H08 watch', '1500', '[\"3\"]', 3, 'Orange', 10, '[\"3\"]', 1, '2025-02-10 02:44:32', '2025-02-10 02:44:32'),
(43, 'kCWHW1739175726.webp', '[\"Ix4aW1739175726.webp\",\"IHTZy1739175726.webp\",\"twcJR1739175726.webp\",\"29wY71739175726.webp\",\"OUWQY1739175726.webp\",\"I9k7Q1739175726.webp\"]', 'Bouncing Low Top Sneakers Vert Toundra Noir', '1,050', '[\"3\"]', 3, 'Green', 2, '[\"4\"]', 1, '2025-02-10 02:52:06', '2025-02-10 02:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `title`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Who We Are ?', 'Contextual advertising programs sometimes have strict policies that need to be adhered too.  Let’s take Google as an example.', 1, '2025-01-25 02:12:57', '2025-01-25 02:12:57'),
(2, 'Who We Do ?', 'In this digital generation where information can be easily obtained within seconds, business    cards still have retained their importance.', 1, '2025-01-25 02:13:24', '2025-01-25 02:13:24'),
(3, 'Why Choose Us', 'A two or three storey house is the ideal way to maximise the piece of earth on which our home   sits, but for older or infirm people.', 1, '2025-01-25 02:13:47', '2025-01-25 02:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7EZDWl3cuHyhxYXX0g83gL4ACWbPqEmrzGpQftCr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQm9WR002NEhHRVNpa0h3U1U4RWFXSGRjRXRZRFVZUjhsM0NGRXI2YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1739423510),
('NxT2b95NO04V8j6rSSjUkKLAroJK9VFVd2r89BBr', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVjh2Vk9STndHM3loWkliNHJQMnRXRmpITFZqUVN6amR2SFJySkNqYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nLWRldGFpbHMvMSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1739426874);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `desc` longtext NOT NULL,
  `sName` varchar(255) NOT NULL,
  `shopping` text NOT NULL,
  `shop` text NOT NULL,
  `hedingImg` varchar(255) NOT NULL,
  `footerImg` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `title`, `email`, `contact`, `desc`, `sName`, `shopping`, `shop`, `hedingImg`, `footerImg`, `created_at`, `updated_at`) VALUES
(1, 'NewLetter', 'Be the first to know about new arrivals, look books, sales & promos!', 'test123@gmaail.com', 1111111111, 'The customer is at the heart of our unique business model, which includes design.', 'Shopping', '<ul><li><a href=\"http://127.0.0.1:8000/Clothing%20Store\">Clothing Store</a></li><li><a href=\"http://127.0.0.1:8000/Trending%20Shoes\">Trending Shoes</a></li><li><a href=\"http://127.0.0.1:8000/Accessories\">Accessories</a></li><li><a href=\"http://127.0.0.1:8000/Sale\">Sale</a></li></ul>', '<ul><li><a href=\"http://127.0.0.1:8000/#\">Contact Us</a></li><li><a href=\"http://127.0.0.1:8000/#\">Payment Methods</a></li><li><a href=\"http://127.0.0.1:8000/#\">Delivary</a></li><li><a href=\"http://127.0.0.1:8000/#\">Return &amp; Exchanges</a></li></ul>', '1738130538.png', '1738130506.png', NULL, '2025-01-29 00:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shoes Spring 2030', '1737699265.jpg', NULL, '2025-01-24 00:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 'S', 1, '2025-01-27 03:26:43', '2025-01-27 03:28:48'),
(2, 'M', 1, '2025-01-27 03:26:49', '2025-01-27 03:29:04'),
(3, 'L', 1, '2025-01-27 03:26:55', '2025-01-27 03:29:13'),
(4, 'XL', 1, '2025-01-27 03:27:00', '2025-01-27 03:27:00'),
(5, 'XXL', 1, '2025-01-27 03:27:51', '2025-01-27 03:29:31'),
(6, '3XL', 1, '2025-01-27 03:27:56', '2025-01-27 03:29:43'),
(7, '4XL', 1, '2025-01-27 03:28:03', '2025-01-27 03:29:57'),
(8, '5XL', 1, '2025-01-27 03:28:39', '2025-01-27 03:30:12'),
(9, '6XL', 1, '2025-01-27 03:30:21', '2025-01-27 03:30:21'),
(10, '7XL', 1, '2025-01-27 03:30:30', '2025-01-27 03:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `title`, `desc`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Summer Collection', 'Fall - Winter Collections 2030', 'A specialist label creating luxury essentials. Ethically crafted with an unwavering   commitment to exceptional quality.', '1737096168.jpg', 1, '2024-11-19 03:32:25', '2025-01-17 01:12:48'),
(2, 'Summer Collection', 'Fall - Winter Collections 2030', 'A specialist label creating luxury essentials. Ethically crafted with an unwavering   commitment to exceptional quality.', 'JaCsS1732007099.jpg', 1, '2024-11-19 03:34:59', '2024-11-19 03:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Clothes', 1, '2025-01-08 03:40:56', '2025-01-08 03:40:56'),
(2, 'Skin', 1, '2025-01-08 03:41:16', '2025-01-08 03:41:16'),
(3, 'Body', 1, '2025-01-08 03:41:28', '2025-01-08 03:41:28'),
(4, 'Product', 1, '2025-01-28 03:02:35', '2025-01-28 03:02:35'),
(5, 'Bags', 1, '2025-01-28 03:02:43', '2025-01-28 03:02:43'),
(6, 'Shoes', 1, '2025-01-28 03:02:51', '2025-01-28 03:02:51'),
(7, 'Fashio', 1, '2025-01-28 03:02:59', '2025-01-28 03:02:59'),
(8, 'Clothing', 1, '2025-01-28 03:03:09', '2025-01-28 03:03:09'),
(9, 'Hats', 1, '2025-01-28 03:03:16', '2025-01-28 03:03:16'),
(10, 'Accessories', 1, '2025-01-28 03:03:26', '2025-01-28 03:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Smith', 'Fashion Design', 'A7Scv1737710006.jpg', 1, '2025-01-24 03:43:26', '2025-01-24 03:43:26'),
(2, 'Christine Wise', 'C.E.O', 'joKMT1737710028.jpg', 1, '2025-01-24 03:43:48', '2025-01-24 03:43:48'),
(3, 'Sean Robbins', 'Manager', 'f5Je41737710045.jpg', 1, '2025-01-24 03:44:05', '2025-01-24 03:44:05'),
(4, 'Lucy Myers', 'Delivery', 'mx96L1737710066.jpg', 1, '2025-01-24 03:44:26', '2025-01-24 03:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`id`, `name`, `image`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gucci Coffee', '1739265015.png', '2020-02-16', 1, '2025-01-03 03:34:50', '2025-02-11 03:40:15'),
(2, 'Men Checkered Polo Neck', 'VMNut1735895203.jpg', '2020-02-21', 1, '2025-01-03 03:36:43', '2025-02-11 02:58:56'),
(3, 'Chi\'s Tea', '1739265207.jpg', '2020-02-02', 1, '2025-01-03 03:37:07', '2025-02-11 03:43:27'),
(4, 'Put Your Brand First with Printful Inside and Outside Labels', '1739265410.jpg', '2020-02-16', 1, '2025-01-17 03:47:10', '2025-02-11 03:46:50'),
(5, 'Wedding Rings A Gift For A Lifetime', '1739263672.jpg', '2020-02-21', 1, '2025-01-17 03:47:57', '2025-02-11 03:17:53'),
(6, 'The Different Methods Of Hair Removal', 'VM3ys1737105515.jpg', '2020-02-28', 1, '2025-01-17 03:48:35', '2025-01-17 03:48:35'),
(7, 'Hoop Earrings A Style From History', 'zBdQE1737105537.jpg', '2020-02-16', 1, '2025-01-17 03:48:57', '2025-01-17 03:48:57'),
(8, 'Style Icon of Fashion with Quality and Innovation', '1739265705.jpg', '2020-02-21', 1, '2025-01-17 03:49:20', '2025-02-11 03:51:45'),
(9, 'Our Range of Towels', '1739265861.jpg', '2020-02-02', 1, '2025-01-17 03:49:52', '2025-02-11 03:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jalpa', 'jalpa123@gmail.com', NULL, '$2y$12$UvLKwGfhLD6wzSznq51y6u.xaeWOZLHEXe7faXJtVjAVsA.SXv43O', NULL, '2024-12-05 03:29:04', '2024-12-05 03:29:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_clothing`
--
ALTER TABLE `banner_clothing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandings`
--
ALTER TABLE `brandings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chests`
--
ALTER TABLE `chests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_logins`
--
ALTER TABLE `custom_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custom_logins_email_unique` (`email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fashions`
--
ALTER TABLE `fashions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happies`
--
ALTER TABLE `happies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagrams`
--
ALTER TABLE `instagrams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ins_images`
--
ALTER TABLE `ins_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meets`
--
ALTER TABLE `meets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_foreign` (`category`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
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
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner_clothing`
--
ALTER TABLE `banner_clothing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brandings`
--
ALTER TABLE `brandings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chests`
--
ALTER TABLE `chests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom_logins`
--
ALTER TABLE `custom_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fashions`
--
ALTER TABLE `fashions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `happies`
--
ALTER TABLE `happies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instagrams`
--
ALTER TABLE `instagrams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ins_images`
--
ALTER TABLE `ins_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meets`
--
ALTER TABLE `meets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trends`
--
ALTER TABLE `trends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `custom_logins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
