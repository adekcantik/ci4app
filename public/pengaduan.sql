/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100413
 Source Host           : localhost:3360
 Source Schema         : pengaduan

 Target Server Type    : MariaDB
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 16/12/2020 12:19:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (2, '2020-12-12-033415', 'App\\Database\\Migrations\\Datapns', 'default', 'App', 1607744953, 1);

-- ----------------------------
-- Table structure for pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE `pengaduan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengaduan
-- ----------------------------
INSERT INTO `pengaduan` VALUES (1, '123', '123', '123', '123', 'Dinas Pariwisata', 'TEST', NULL, NULL);
INSERT INTO `pengaduan` VALUES (2, '456', '456', '456', '123', 'Dinas Pariwisata', 'TEST', NULL, NULL);
INSERT INTO `pengaduan` VALUES (3, '123', 'asdad', 'asdasd@asdasd.com', '123', 'Dinas Pariwisata', 'TEST', '2020-12-11 09:56:12', '2020-12-11 09:56:12');
INSERT INTO `pengaduan` VALUES (4, '123', '123123', 'add@gmail.com', '123', 'Kominfo', 'TEST', '2020-12-11 10:00:21', '2020-12-11 10:00:21');
INSERT INTO `pengaduan` VALUES (5, 'adasdsa', 'asdasd', 'asdsad@gmail.com', '123', 'Kominfo', 'TEST', '2020-12-11 10:02:31', '2020-12-11 10:02:31');
INSERT INTO `pengaduan` VALUES (6, '12313123', '123123', '123123@gmail.com', '123', 'Pemerintahan Tebing Tinggi', 'TEST', '2020-12-11 10:04:41', '2020-12-11 10:04:41');
INSERT INTO `pengaduan` VALUES (7, 'asdasdsd', 'asdasd', 'asdsad@asdsad.com', '123', 'Kantor Perpajakan', 'TEST', '2020-12-11 21:11:50', '2020-12-11 21:11:50');
INSERT INTO `pengaduan` VALUES (8, '123123', '123123', 'a@a.com', '1231323', 'Pemerintahan Tebing Tinggi', 'adadasd', '2020-12-15 23:15:05', '2020-12-15 23:15:05');
INSERT INTO `pengaduan` VALUES (9, '123123', '123123@adsa.com', 'asdasd@asdsd.com', '123123123', 'Dinas Pariwisata', 'adasd', '2020-12-15 23:16:28', '2020-12-15 23:16:28');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `passwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isadmin` tinyint(1) NULL DEFAULT 0,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '123', '123', 'Dinas Pariwisata', 0, NULL, NULL);
INSERT INTO `users` VALUES (2, '111', '111', 'Dinas Perhubungan', 0, NULL, NULL);
INSERT INTO `users` VALUES (3, '222', '222', 'Kominfo', 0, NULL, NULL);
INSERT INTO `users` VALUES (4, '333', '333', 'Pemerintahan Tebing Tinggi', 0, NULL, NULL);
INSERT INTO `users` VALUES (5, '444', '444', 'Kantor Perpajakan', 0, NULL, NULL);
INSERT INTO `users` VALUES (6, 'vero', 'vero', NULL, 1, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
