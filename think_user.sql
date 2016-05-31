/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-05-31 17:21:53
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
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('1', 'liunian', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('2', 'xingyun', 'yunzhi@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('3', 'kanyun', 'kancloud@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('4', 'yunzhi', 'yunzhi@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('5', 'callme119', 'callme119@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('6', 'zhangsan', 'zhangsan@qq.com', '569174400', '0', '0', '0');
INSERT INTO `think_user` VALUES ('7', 'lisi', 'lisi@qq.com', '653673600', '0', '0', '0');
INSERT INTO `think_user` VALUES ('8', '流年', 'thinkphp@qq.com', '226339200', '0', '0', '0');
INSERT INTO `think_user` VALUES ('9', '张三', 'zhangsan@qq.com', '569174400', '0', '0', '0');
INSERT INTO `think_user` VALUES ('10', '李四', 'lisi@qq.com', '653673600', '0', '0', '0');
INSERT INTO `think_user` VALUES ('11', '张三', 'zhangsan@qq.com', '569174400', '0', '0', '0');
INSERT INTO `think_user` VALUES ('12', '李四', 'lisi@qq.com', '653673600', '0', '0', '0');
INSERT INTO `think_user` VALUES ('13', '张三', 'zhangsan@qq.com', '569174400', '0', '0', '0');
INSERT INTO `think_user` VALUES ('14', '李四', 'lisi@qq.com', '653673600', '0', '0', '0');
