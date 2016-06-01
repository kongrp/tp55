/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-06-01 17:40:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `birthday` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '生日',
  `status` varchar(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('22', '流年', 'thinkphp@qq.com', '1977', '0', '0', '0');
INSERT INTO `think_user` VALUES ('15', '流年', 'thinkphp@qq.com', '0', '0', '0', '0');
INSERT INTO `think_user` VALUES ('3', 'kanyun', 'kancloud@qq.com', '226339200', '1', '0', '0');
INSERT INTO `think_user` VALUES ('4', 'yunzhi', 'yunzhi@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('5', 'callme119', 'callme119@qq.com', '226339200', '1', '0', '0');
INSERT INTO `think_user` VALUES ('6', 'zhangsan', 'zhangsan@qq.com', '569174400', '0', '0', '0');
INSERT INTO `think_user` VALUES ('7', 'lisi', 'lisi@qq.com', '653673600', '1', '0', '0');
INSERT INTO `think_user` VALUES ('16', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('17', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('18', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('19', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('20', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('21', '流年', 'thinkphp@qq.com', '1977', '0', '0', '0');
INSERT INTO `think_user` VALUES ('23', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('24', '流年', 'thinkphp@qq.com', '226339200', '0', '1464770580', '1464770580');
INSERT INTO `think_user` VALUES ('25', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('26', '流年', 'thinkphp@qq.com', '226339200', '1', '1464770977', '1464770977');
INSERT INTO `think_user` VALUES ('27', '流年', 'thinkphp@qq.com', '226339200', '1', '1464771188', '1464771188');
INSERT INTO `think_user` VALUES ('28', '张三', 'zhangsan@qq.com', '569174400', '2', '1464771418', '1464771418');
INSERT INTO `think_user` VALUES ('29', '李四', 'lisi@qq.com', '653673600', '2', '1464771418', '1464771418');
INSERT INTO `think_user` VALUES ('30', '张三', 'zhangsan@qq.com', '569174400', '2', '1464771583', '1464771583');
INSERT INTO `think_user` VALUES ('31', '李四', 'lisi@qq.com', '653673600', '2', '1464771583', '1464771583');
