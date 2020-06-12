/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80012
 Source Host           : localhost:3306
 Source Schema         : black_company_list

 Target Server Type    : MySQL
 Target Server Version : 80012
 File Encoding         : 65001

 Date: 12/06/2020 14:21:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bcl_black_msg
-- ----------------------------
DROP TABLE IF EXISTS `bcl_black_msg`;
CREATE TABLE `bcl_black_msg`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `real_nums` int(10) NULL DEFAULT 0,
  `fake_nums` int(10) NULL DEFAULT 0,
  `created_at` int(10) NULL DEFAULT NULL,
  `updated_at` int(10) NULL DEFAULT NULL,
  `deleted_at` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci COMMENT = '黑料' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bcl_company
-- ----------------------------
DROP TABLE IF EXISTS `bcl_company`;
CREATE TABLE `bcl_company`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(10) NULL DEFAULT NULL COMMENT '省份id',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '公司名称',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '公司地址',
  `legal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '法定代表人',
  `black_nums` int(10) NULL DEFAULT 0 COMMENT '黑料条数',
  `created_at` int(10) NULL DEFAULT NULL,
  `updated_at` int(10) NULL DEFAULT NULL,
  `deleted_at` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci COMMENT = '公司' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bcl_provinces
-- ----------------------------
DROP TABLE IF EXISTS `bcl_provinces`;
CREATE TABLE `bcl_provinces`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(10) NOT NULL,
  `province_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` int(10) NULL DEFAULT NULL,
  `updated_at` int(10) NULL DEFAULT NULL,
  `deleted_at` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci COMMENT = '省份信息表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bcl_provinces
-- ----------------------------
INSERT INTO `bcl_provinces` VALUES (1, 110000, '北京市', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (2, 120000, '天津市', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (3, 130000, '河北省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (4, 140000, '山西省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (5, 150000, '内蒙古自治区', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (6, 210000, '辽宁省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (7, 220000, '吉林省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (8, 230000, '黑龙江省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (9, 310000, '上海市', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (10, 320000, '江苏省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (11, 330000, '浙江省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (12, 340000, '安徽省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (13, 350000, '福建省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (14, 360000, '江西省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (15, 370000, '山东省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (16, 410000, '河南省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (17, 420000, '湖北省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (18, 430000, '湖南省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (19, 440000, '广东省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (20, 450000, '广西壮族自治区', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (21, 460000, '海南省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (22, 500000, '重庆市', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (23, 510000, '四川省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (24, 520000, '贵州省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (25, 530000, '云南省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (26, 540000, '西藏自治区', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (27, 610000, '陕西省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (28, 620000, '甘肃省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (29, 630000, '青海省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (30, 640000, '宁夏回族自治区', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (31, 650000, '新疆维吾尔自治区', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (32, 710000, '台湾省', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (33, 810000, '香港特别行政区', NULL, NULL, NULL);
INSERT INTO `bcl_provinces` VALUES (34, 820000, '澳门特别行政区', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
