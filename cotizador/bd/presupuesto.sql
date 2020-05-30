/*
 Navicat Premium Data Transfer

 Source Server         : local - PC
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : presupuesto

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 30/05/2020 15:08:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cotizaciones_demo
-- ----------------------------
DROP TABLE IF EXISTS `cotizaciones_demo`;
CREATE TABLE `cotizaciones_demo`  (
  `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `fecha_cotizacion` date NOT NULL,
  `atencion` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel1` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa` varchar(75) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tel2` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `condiciones` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `validez` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `entrega` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `activo` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1',
  PRIMARY KEY (`id_cotizacion`) USING BTREE,
  UNIQUE INDEX `numero_cotizacion`(`numero_cotizacion`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 48 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cotizaciones_demo
-- ----------------------------
INSERT INTO `cotizaciones_demo` VALUES (1, 1, '2015-07-19', 'Eduardo Carrasco', '70555', 'dw corp', '564567667', 'pepec@hot.com', 'Contado', '15', '2', '');
INSERT INTO `cotizaciones_demo` VALUES (2, 2, '2015-07-19', 'Pepe', '70555', '', '', 'pepe@hotmail.com', 'Contado', '', '', '');
INSERT INTO `cotizaciones_demo` VALUES (5, 5, '2015-07-19', 'Pepe', '70555', '', '', '', 'Contado', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (6, 6, '2015-07-19', 'Pepe', '70555', '', '', '', 'Contado', '15', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (7, 7, '2015-07-19', 'Pepe', '70555', '', '', '', 'Contado', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (8, 8, '2015-07-19', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (9, 9, '2015-07-19', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (10, 10, '2015-07-19', 'Pepe', '70555', 'a', '', 'dffd', 'Contado', '15', '2', '1');
INSERT INTO `cotizaciones_demo` VALUES (11, 11, '2015-07-19', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Nota: Las Condiciones de pago ', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (12, 12, '2015-07-19', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Contado', '15', '1', '1');
INSERT INTO `cotizaciones_demo` VALUES (13, 13, '2015-07-19', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Nota: Las Condiciones de pago ', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (14, 14, '2015-07-19', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Nota: Las Condiciones de pago ', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (15, 15, '2015-07-19', 'Juan Diego', '222-2220', 'Invertir Mejor', '2222-0000', 'info@invertirmejor.com', 'Nota: Las Condiciones de pago ', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (16, 16, '2015-07-20', 'Juan Perez', '7070', '', '', '', '', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (17, 17, '2015-07-20', 'Juan Perez', '7070', '', '', '', '1', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (18, 18, '2015-07-20', 'Juan Perez', '7070', '', '', '', 'Contado', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (19, 19, '2015-07-20', 'Juan Perez', '7070', '', '', '', 'Contado', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (20, 20, '2015-07-20', 'Juan Perez', '7070', '', '', '', 'Contado', '', '', '1');
INSERT INTO `cotizaciones_demo` VALUES (21, 21, '2015-07-20', 'Juan Perez', '7070', '', '', '', 'Contado', '15 dÃ­as', 'Inmediato', '1');
INSERT INTO `cotizaciones_demo` VALUES (22, 22, '2015-07-21', 'Juan Diego', '70587677', 'Invertir Mejor', '2230-000', 'info@invertirmejor.com', 'CrÃ©dito 30 dÃ­as', '15 dÃ­as', 'Inmediato', '1');
INSERT INTO `cotizaciones_demo` VALUES (23, 23, '2020-03-23', 'cesar carrasco', '120566617', 'dedede', '', 'ed@sd.com', 'Contado', '15 dÃ­as', 'Inmediato', '1');
INSERT INTO `cotizaciones_demo` VALUES (24, 24, '2020-03-23', 'cesar carrasco', '120566617', 'dedede', '', 'ed@sd.com', 'Contado', '15 dÃ­as', 'Inmediato', '0');
INSERT INTO `cotizaciones_demo` VALUES (25, 25, '2020-03-24', 'cesar', '324324', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', 'undefined', '1');
INSERT INTO `cotizaciones_demo` VALUES (26, 26, '2020-03-25', 'cesar', '324324', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (27, 27, '2020-03-25', 'cesar', '324324', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (28, 28, '2020-03-25', 'cesar carrasco', '21321321', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (29, 29, '2020-03-25', 'cesar carrasco', '21321321', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (30, 30, '2020-03-25', 'cesar carrasco', '21321321', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (31, 31, '2020-03-25', 'cesar carrasco', '21321321', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (32, 32, '2020-03-25', 'cesar carrasco', '21321321', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (33, 33, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (34, 34, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (35, 35, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (36, 36, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (37, 37, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (38, 38, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (39, 39, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (40, 40, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (41, 41, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (42, 42, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (43, 43, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (44, 44, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (45, 45, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (46, 46, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');
INSERT INTO `cotizaciones_demo` VALUES (47, 47, '2020-03-25', 'cesar carrasco', 'dfdsds', '', '', 'ed@sd.com', 'Contado', '15 dÃ­as', '5 dÃ­as', '1');

-- ----------------------------
-- Table structure for detalle_cotizacion_demo
-- ----------------------------
DROP TABLE IF EXISTS `detalle_cotizacion_demo`;
CREATE TABLE `detalle_cotizacion_demo`  (
  `id_detalle_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL,
  PRIMARY KEY (`id_detalle_cotizacion`) USING BTREE,
  INDEX `numero_cotizacion`(`numero_cotizacion`, `id_producto`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 62 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of detalle_cotizacion_demo
-- ----------------------------
INSERT INTO `detalle_cotizacion_demo` VALUES (1, 1, 3, 1, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (2, 2, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (3, 3, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (4, 4, 3, 1, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (5, 5, 4, 1, 40);
INSERT INTO `detalle_cotizacion_demo` VALUES (6, 6, 4, 1, 40);
INSERT INTO `detalle_cotizacion_demo` VALUES (7, 7, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (8, 8, 3, 1, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (9, 9, 4, 1, 40);
INSERT INTO `detalle_cotizacion_demo` VALUES (10, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (11, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (12, 10, 4, 21, 40);
INSERT INTO `detalle_cotizacion_demo` VALUES (13, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (14, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (15, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (16, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (17, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (18, 10, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (19, 10, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (20, 11, 3, 1, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (21, 12, 3, 1, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (22, 13, 3, 1, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (23, 14, 4, 21, 40);
INSERT INTO `detalle_cotizacion_demo` VALUES (24, 15, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (25, 15, 5, 2, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (26, 16, 67, 1, 12);
INSERT INTO `detalle_cotizacion_demo` VALUES (27, 16, 67, 1, 12);
INSERT INTO `detalle_cotizacion_demo` VALUES (28, 16, 67, 1, 12);
INSERT INTO `detalle_cotizacion_demo` VALUES (29, 16, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (30, 17, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (31, 18, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (32, 19, 2, 1, 15);
INSERT INTO `detalle_cotizacion_demo` VALUES (33, 20, 3, 1, 25);
INSERT INTO `detalle_cotizacion_demo` VALUES (34, 21, 5, 1, 18);
INSERT INTO `detalle_cotizacion_demo` VALUES (35, 22, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (36, 23, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (37, 24, 1, 2, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (38, 25, 64, 1, 5);
INSERT INTO `detalle_cotizacion_demo` VALUES (39, 26, 64, 1, 5);
INSERT INTO `detalle_cotizacion_demo` VALUES (40, 27, 64, 1, 5);
INSERT INTO `detalle_cotizacion_demo` VALUES (41, 28, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (42, 29, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (43, 30, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (44, 31, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (45, 32, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (46, 33, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (47, 34, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (48, 35, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (49, 36, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (50, 37, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (51, 38, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (52, 39, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (53, 40, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (54, 41, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (55, 42, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (56, 42, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (57, 43, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (58, 44, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (59, 45, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (60, 46, 1, 1, 10);
INSERT INTO `detalle_cotizacion_demo` VALUES (61, 47, 1, 1, 10);

-- ----------------------------
-- Table structure for marcas_demo
-- ----------------------------
DROP TABLE IF EXISTS `marcas_demo`;
CREATE TABLE `marcas_demo`  (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_marca` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_marca`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of marcas_demo
-- ----------------------------
INSERT INTO `marcas_demo` VALUES (1, 'EC');

-- ----------------------------
-- Table structure for productos_demo
-- ----------------------------
DROP TABLE IF EXISTS `productos_demo`;
CREATE TABLE `productos_demo`  (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_producto` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombre_producto` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `modelo_producto` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_departamento_producto` int(11) NOT NULL,
  `id_marca_producto` int(11) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `unidad_medida_producto` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `peso_producto` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_added` datetime(0) NOT NULL,
  `precio_producto` double NOT NULL,
  PRIMARY KEY (`id_producto`) USING BTREE,
  UNIQUE INDEX `codigo_producto`(`codigo_producto`) USING BTREE,
  INDEX `id_departamento_producto`(`id_departamento_producto`) USING BTREE,
  INDEX `id_marca_producto`(`id_marca_producto`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos_demo
-- ----------------------------
INSERT INTO `productos_demo` VALUES (1, 'PRO01', 'Produccion', '', 0, 1, 1, 'dia', '', '0000-00-00 00:00:00', 50);
INSERT INTO `productos_demo` VALUES (2, 'DP01', 'Direccion de Fotografia', '', 0, 1, 1, 'dia', '', '0000-00-00 00:00:00', 30);
INSERT INTO `productos_demo` VALUES (3, 'CAM01', 'Camarografo', '', 0, 1, 1, 'dia', '', '0000-00-00 00:00:00', 20);
INSERT INTO `productos_demo` VALUES (4, 'FP02', 'Fotofrafia de productos Adicional', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 2);
INSERT INTO `productos_demo` VALUES (5, 'MOD02', 'Fotografia Adicional Modelos', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 3);
INSERT INTO `productos_demo` VALUES (6, 'BOD02', 'Fotografia de Bodas adicional', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 3);
INSERT INTO `productos_demo` VALUES (7, 'FE02', 'Fotografia de Embarazada', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 1);
INSERT INTO `productos_demo` VALUES (8, 'FB02', 'Fotogtrafia de Bebe', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 1);
INSERT INTO `productos_demo` VALUES (9, 'FG02', 'Fotografia de Grado', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 1);
INSERT INTO `productos_demo` VALUES (10, 'FF02', 'Fotografia de Fiesta', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 1);
INSERT INTO `productos_demo` VALUES (11, 'SRF01', 'Servicio de Restauracion de Fotografias', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 5);
INSERT INTO `productos_demo` VALUES (12, 'ERF01', 'Servicio de Edicion o Revelado digital', '', 0, 1, 1, '1', '', '0000-00-00 00:00:00', 10);
INSERT INTO `productos_demo` VALUES (13, 'BOD01', 'Bodas Full - Pack Fotografico', '', 0, 1, 1, '80', '', '0000-00-00 00:00:00', 50);
INSERT INTO `productos_demo` VALUES (14, 'BOD03', 'Pre-Boda', '', 0, 1, 1, '10', '', '0000-00-00 00:00:00', 15);
INSERT INTO `productos_demo` VALUES (15, 'BOD04', 'Bodas', '', 0, 1, 1, '50', '', '0000-00-00 00:00:00', 25);
INSERT INTO `productos_demo` VALUES (16, 'BOD05', 'Post-Boda', '', 0, 1, 1, '25', '', '0000-00-00 00:00:00', 20);
INSERT INTO `productos_demo` VALUES (17, 'BOD06', 'Compromiso', '', 0, 1, 1, '5', '', '0000-00-00 00:00:00', 10);
INSERT INTO `productos_demo` VALUES (18, 'FE01', 'Pack Embarazadas', '', 0, 1, 1, '15', '', '0000-00-00 00:00:00', 15);
INSERT INTO `productos_demo` VALUES (19, 'FB01', 'Pack Bebes & new born', '', 0, 1, 1, '10', '', '0000-00-00 00:00:00', 20);
INSERT INTO `productos_demo` VALUES (20, 'FG01', 'pack Actos de Grados', '', 0, 1, 1, '10', '', '0000-00-00 00:00:00', 10);
INSERT INTO `productos_demo` VALUES (21, 'FBA01', 'Bautizos', '', 0, 1, 1, '10', '', '0000-00-00 00:00:00', 5);

-- ----------------------------
-- Table structure for tmp_cotizacion
-- ----------------------------
DROP TABLE IF EXISTS `tmp_cotizacion`;
CREATE TABLE `tmp_cotizacion`  (
  `id_tmp` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8, 2) NULL DEFAULT NULL,
  `session_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tmp`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 136 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmp_cotizacion
-- ----------------------------
INSERT INTO `tmp_cotizacion` VALUES (55, 4, 1, 40.00, 'se7uf7ajc6unfc7npv6rgpum21');
INSERT INTO `tmp_cotizacion` VALUES (135, 1, 1, 50.00, 'iqgkre4vjhu8ituccopcbeqap4');
INSERT INTO `tmp_cotizacion` VALUES (133, 1, 1, 50.00, 'kbus40nag00vpq555ocnvi80t0');
INSERT INTO `tmp_cotizacion` VALUES (134, 1, 1, 50.00, 'kbus40nag00vpq555ocnvi80t0');
INSERT INTO `tmp_cotizacion` VALUES (129, 1, 2, 50.00, '46d4kirap5kr7jhs58q4n5r4u3');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `social_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `picture` longblob NOT NULL,
  `admin` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `created` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `activo` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`user_id`, `created`) USING BTREE,
  INDEX `email`(`email`) USING BTREE,
  INDEX `login`(`password`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'cesar', 'educamo@gmail.com', 'educamo', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '1', '2020-04-03 21:50:44', '1');

SET FOREIGN_KEY_CHECKS = 1;
