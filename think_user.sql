/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-02 00:09:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `think_user`
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('3', 'kanyun', 'kancloud@qq.com', '226339200', '1', '0', '0');
INSERT INTO `think_user` VALUES ('4', 'yunzhi', 'yunzhi@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('5', 'callme119', 'callme119@qq.com', '226339200', '1', '0', '0');
INSERT INTO `think_user` VALUES ('6', 'zhangsan', 'zhangsan@qq.com', '569174400', '0', '0', '0');
INSERT INTO `think_user` VALUES ('7', 'lisi', 'lisi@qq.com', '653673600', '1', '0', '0');
INSERT INTO `think_user` VALUES ('33', '王五', 'wangwu@qq.com', '529862400', '2', '1464795288', '1464795288');
INSERT INTO `think_user` VALUES ('34', '王五', 'wangwu@qq.com', '529862400', '2', '1464795350', '1464795350');
INSERT INTO `think_user` VALUES ('26', '流年1', 'thinkphp@qq.com', '226339200', '1', '1464770977', '1464770977');
INSERT INTO `think_user` VALUES ('27', '流年2', 'thinkphp@qq.com', '226339200', '1', '1464771188', '1464771188');
INSERT INTO `think_user` VALUES ('28', '张三', 'zhangsan@qq.com', '569174400', '2', '1464771418', '1464771418');
INSERT INTO `think_user` VALUES ('29', '李四', 'lisi@qq.com', '653673600', '2', '1464771418', '1464771418');
INSERT INTO `think_user` VALUES ('30', '张三', 'zhangsan@qq.com', '569174400', '2', '1464771583', '1464771583');
INSERT INTO `think_user` VALUES ('31', '李四', 'lisi@qq.com', '653673600', '2', '1464771583', '1464771583');
INSERT INTO `think_user` VALUES ('32', '流年3', 'thinkphp@qq.com', '226339200', '1', '1464792538', '1464792538');
