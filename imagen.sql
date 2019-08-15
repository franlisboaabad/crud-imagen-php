/*
Navicat MySQL Data Transfer

Source Server         : Myconection
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2019-08-14 19:35:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for imagen
-- ----------------------------
DROP TABLE IF EXISTS `imagen`;
CREATE TABLE `imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urlphoto` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of imagen
-- ----------------------------
INSERT INTO `imagen` VALUES ('1', '../images/tortuga1.png', null);
INSERT INTO `imagen` VALUES ('2', '../images/tortuga.png', null);
INSERT INTO `imagen` VALUES ('3', '../images/COCODRILOS.png', null);
INSERT INTO `imagen` VALUES ('4', '../images/paginaweb.png', 'Visitar la pagina web: www.mancoratours.com');
