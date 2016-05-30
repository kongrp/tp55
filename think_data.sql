/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-05-30 17:35:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_data
-- ----------------------------
DROP TABLE IF EXISTS `think_data`;
CREATE TABLE `think_data` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_data
-- ----------------------------
INSERT INTO `think_data` VALUES ('1', 'thinkphp', 'thinkphp');
INSERT INTO `think_data` VALUES ('2', 'php', 'wethinkphp');
INSERT INTO `think_data` VALUES ('3', 'framework', 'yunzhithink');
INSERT INTO `think_data` VALUES ('4', 'yunzhi', '');
INSERT INTO `think_data` VALUES ('5', 'callme119', '');
INSERT INTO `think_data` VALUES ('6', 'yunzhi.club', 'think');
INSERT INTO `think_data` VALUES ('7', 'mengyunzhi.com', '');
INSERT INTO `think_data` VALUES ('8', 'yunzhiclub.com', '');
INSERT INTO `think_data` VALUES ('9', 'yunzhiclub', '');
INSERT INTO `think_data` VALUES ('11', 'mengxiang', null);
