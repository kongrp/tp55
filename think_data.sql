/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-05-31 17:21:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_data
-- ----------------------------
DROP TABLE IF EXISTS `think_data`;
CREATE TABLE `think_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_data
-- ----------------------------
INSERT INTO `think_data` VALUES ('1', 'thinkphp', 'thinkphp', '0');
INSERT INTO `think_data` VALUES ('2', 'php', 'wethinkphp', '0');
INSERT INTO `think_data` VALUES ('3', 'framework', 'yunzhithink', '1');
INSERT INTO `think_data` VALUES ('4', 'yunzhi', null, '0');
INSERT INTO `think_data` VALUES ('5', 'callme119', null, '1');
INSERT INTO `think_data` VALUES ('6', 'yunzhi.club', null, '0');
INSERT INTO `think_data` VALUES ('7', 'mengyunzhi.com', null, '1');
INSERT INTO `think_data` VALUES ('8', 'yunzhiclub.com', null, '0');
INSERT INTO `think_data` VALUES ('9', 'yunzhiclub', null, '1');
INSERT INTO `think_data` VALUES ('10', 'thinktest', 'test', '0');
INSERT INTO `think_data` VALUES ('11', 'helloyunzhier', 'yunzhi', '1');
