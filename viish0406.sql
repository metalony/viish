/*
Navicat MySQL Data Transfer

Source Server         : 202.141.163.44
Source Server Version : 50136
Source Host           : 202.141.163.44:3306
Source Database       : viish

Target Server Type    : MYSQL
Target Server Version : 50136
File Encoding         : 65001

Date: 2013-04-06 19:24:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `copycat`
-- ----------------------------
DROP TABLE IF EXISTS `copycat`;
CREATE TABLE `copycat` (
  `id` int(11) NOT NULL,
  `toUserName` varchar(255) DEFAULT NULL,
  `fromUserName` varchar(255) DEFAULT NULL,
  `msgType` varchar(100) DEFAULT NULL,
  `createTime` varchar(100) DEFAULT NULL,
  `content` text,
  `msgId` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of copycat
-- ----------------------------
INSERT INTO `copycat` VALUES ('0', 'gh_82adba7018e3', 'ogSmGjkX1zBsl_WqfGtlAAf1RNgY', 'text', '1363699569', '来咯', '5857045050424295598');

-- ----------------------------
-- Table structure for `reservation`
-- ----------------------------
DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `toUserName` varchar(255) NOT NULL,
  `fromUserName` varchar(255) NOT NULL,
  `msgType` varchar(100) NOT NULL,
  `createTime` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `msgId` text NOT NULL,
  `oderLocation` text NOT NULL,
  `orderPhone` varchar(50) NOT NULL,
  `oderInfo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reservation
-- ----------------------------
INSERT INTO `reservation` VALUES ('0', 'gh_c2489ec895b8', 'ofX2kjun9VFA1HzhB8NArRQywPwc', 'text', '1363699588', '空调', '5857045132028674292', '', '', '');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'metalony', 'metalony@qq.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `user` VALUES ('2', '123', '123@1.com', '202cb962ac59075b964b07152d234b70');

-- ----------------------------
-- Table structure for `viish`
-- ----------------------------
DROP TABLE IF EXISTS `viish`;
CREATE TABLE `viish` (
  `id` int(11) NOT NULL DEFAULT '0',
  `ischecked` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `action` varchar(100) NOT NULL,
  `database` varchar(255) NOT NULL,
  `ifsave` tinyint(2) NOT NULL,
  `user_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of viish
-- ----------------------------
INSERT INTO `viish` VALUES ('2', '1', 'fortest', '订餐账号测试', 'Reservation', 'Reservation', '1', '0');
INSERT INTO `viish` VALUES ('777', '1', 'CopyCat', '简单复制测试账号', 'CopyCat', 'copycat', '1', '0');
