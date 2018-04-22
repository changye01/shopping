CREATE DATABASE IF NOT EXISTS `shopping`;
USE `shopping`;

-- 管理员表
DROP TABLE IF EXISTS `shopping_admin`;
CREATE TABLE `shopping_admin`(
`id` TINYINT UNSIGNED auto_increment KEY,
`username` VARCHAR(20) NOT NULL UNIQUE,
`password` CHAR(32) NOT NULL,
`email` VARCHAR(50) NOT NULL
);

-- 分类表
DROP TABLE IF EXISTS `shopping_cate`;
create table `shopping_cate`(
`id` SMALLINT UNSIGNED auto_increment KEY,
`cName` VARCHAR(50) UNIQUE
);

-- 商品表
DROP TABLE IF EXISTS `shopping_pro`;
CREATE TABLE `shopping_pro`(
`id` INT UNSIGNED auto_increment KEY,
`pName` VARCHAR(50) NOT NULL UNIQUE,
`pSn` VARCHAR(50) NOT NULL,
`pNum` INT UNSIGNED DEFAULT 1,
-- 市场价
`mPrice` DECIMAL(10,2) NOT NULL,
-- 网站价
`iPrice` DECIMAL(10,2) NOT NULL,
-- 商品简介
`pDesc` text,
`pImg` VARCHAR(50) NOT NULL,
-- 上架时间 
`pubTime` int UNSIGNED NOT NULL,
`isShow` TINYINT(1) DEFAULT 1,
`isHot` TINYINT(1) DEFAULT 0,
`cId` SMALLINT UNSIGNED NOT NULL
 );

-- 用户表
DROP TABLE IF EXISTS `shopping_user`;
CREATE TABLE `shopping`(
`id` INT UNSIGNED auto_increment KEY,
`username` VARCHAR(20) NOT NULL UNIQUE,
`password` CHAR(32) NOT NULL,
`sex` enum("男","女","保密") NOT NULL DEFAULT "保密",
`face` VARCHAR(50) NOT NULL,
-- register time
`regTime` INT UNSIGNED NOT NULL
);

-- 相册表
DROP TABLE IF EXISTS 	`shopping_album`;
CREATE TABLE `shopping_album`(
`id` INT UNSIGNED auto_increment KEY,
`pid` INT UNSIGNED NOT NULL,
`albumPath` VARCHAR(50) NOT NULL
);
