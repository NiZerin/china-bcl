-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2020 at 02:12 PM
-- Server version: 5.6.48-log
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chinabcl_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcl_black_msg`
--

CREATE TABLE `bcl_black_msg` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `real_nums` int(10) DEFAULT '0',
  `fake_nums` int(10) DEFAULT '0',
  `from_ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '来自ip',
  `created_at` int(10) DEFAULT NULL,
  `updated_at` int(10) DEFAULT NULL,
  `deleted_at` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='黑料' ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bcl_black_msg`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcl_company`
--

CREATE TABLE `bcl_company` (
  `id` int(11) NOT NULL,
  `province_id` int(10) DEFAULT NULL COMMENT '省份id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公司名称',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公司地址',
  `legal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '法定代表人',
  `black_nums` int(10) DEFAULT '0' COMMENT '黑料条数',
  `from_ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '来自ip',
  `created_at` int(10) DEFAULT NULL,
  `updated_at` int(10) DEFAULT NULL,
  `deleted_at` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='公司' ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bcl_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcl_provinces`
--

CREATE TABLE `bcl_provinces` (
  `id` int(11) NOT NULL,
  `province_id` int(10) NOT NULL,
  `province_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` int(10) DEFAULT NULL,
  `updated_at` int(10) DEFAULT NULL,
  `deleted_at` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='省份信息表' ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bcl_provinces`
--

INSERT INTO `bcl_provinces` (`id`, `province_id`, `province_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 110000, '北京市', NULL, NULL, NULL),
(2, 120000, '天津市', NULL, NULL, NULL),
(3, 130000, '河北省', NULL, NULL, NULL),
(4, 140000, '山西省', NULL, NULL, NULL),
(5, 150000, '内蒙古自治区', NULL, NULL, NULL),
(6, 210000, '辽宁省', NULL, NULL, NULL),
(7, 220000, '吉林省', NULL, NULL, NULL),
(8, 230000, '黑龙江省', NULL, NULL, NULL),
(9, 310000, '上海市', NULL, NULL, NULL),
(10, 320000, '江苏省', NULL, NULL, NULL),
(11, 330000, '浙江省', NULL, NULL, NULL),
(12, 340000, '安徽省', NULL, NULL, NULL),
(13, 350000, '福建省', NULL, NULL, NULL),
(14, 360000, '江西省', NULL, NULL, NULL),
(15, 370000, '山东省', NULL, NULL, NULL),
(16, 410000, '河南省', NULL, NULL, NULL),
(17, 420000, '湖北省', NULL, NULL, NULL),
(18, 430000, '湖南省', NULL, NULL, NULL),
(19, 440000, '广东省', NULL, NULL, NULL),
(20, 450000, '广西壮族自治区', NULL, NULL, NULL),
(21, 460000, '海南省', NULL, NULL, NULL),
(22, 500000, '重庆市', NULL, NULL, NULL),
(23, 510000, '四川省', NULL, NULL, NULL),
(24, 520000, '贵州省', NULL, NULL, NULL),
(25, 530000, '云南省', NULL, NULL, NULL),
(26, 540000, '西藏自治区', NULL, NULL, NULL),
(27, 610000, '陕西省', NULL, NULL, NULL),
(28, 620000, '甘肃省', NULL, NULL, NULL),
(29, 630000, '青海省', NULL, NULL, NULL),
(30, 640000, '宁夏回族自治区', NULL, NULL, NULL),
(31, 650000, '新疆维吾尔自治区', NULL, NULL, NULL),
(32, 710000, '台湾省', NULL, NULL, NULL),
(33, 810000, '香港特别行政区', NULL, NULL, NULL),
(34, 820000, '澳门特别行政区', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bcl_black_msg`
--
ALTER TABLE `bcl_black_msg`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bcl_company`
--
ALTER TABLE `bcl_company`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bcl_provinces`
--
ALTER TABLE `bcl_provinces`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bcl_black_msg`
--
ALTER TABLE `bcl_black_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `bcl_company`
--
ALTER TABLE `bcl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `bcl_provinces`
--
ALTER TABLE `bcl_provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
