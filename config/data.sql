
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `article` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(64) NOT NULL DEFAULT '' COMMENT '文章标题',
  `abstract` VARCHAR(128) NOT NULL DEFAULT '' COMMENT '简介',
  `banner_img` VARCHAR(256) NOT NULL DEFAULT '' COMMENT '文章首页展示的图片',
  `content` text NOT NULL DEFAULT '' COMMENT '文章内容',
  `article_type_id` INT(11) NOT NULL DEFAULT '1' COMMENT '文章主题',
  `article_column_id` INT(11) NOT NULL DEFAULT '1' COMMENT '文章栏目',
  `thumbs_up` INT(11) NOT NULL DEFAULT '0' COMMENT '文章点赞数',
  `favorite` INT(11) NOT NULL DEFAULT '0' COMMENT '文章收藏数',
  `created_at` INT (11) NULL DEFAULT '0',
  `updated_at` INT (11) NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_article_type_id` (`article_type_id`),
  KEY `idx_article_column_id` (`article_column_id`),
  KEY `idx_title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT '文章表';

alter table article add status SMALLINT(3) NOT NULL DEFAULT '0' COMMENT '文章状态，0-未发布 1-已发布';

CREATE TABLE IF NOT EXISTS `article_type` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) NOT NULL DEFAULT '' COMMENT '主题名称',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT '文章主题表';

CREATE TABLE IF NOT EXISTS `article_column` (
  `id` INT (11) NOT NULL AUTO_INCREMENT,
  `article_type_id` INT (11) NOT NULL DEFAULT '1' COMMENT '文章主题id',
  `name` VARCHAR (64) NOT NULL DEFAULT '' COMMENT '栏目名称',
  PRIMARY KEY (`id`),
  KEY `idx_article_type_id` (`article_type_id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT '文章栏目表';


CREATE TABLE IF NOT EXISTS `favorite` (
  `id` INT (11) NOT NULL AUTO_INCREMENT,
  `article_id` INT (11) NOT NULL DEFAULT '1' COMMENT '文章id',
  `user_id` INT (11) NOT NULL DEFAULT '1' COMMENT '用户id',
  `created_at` INT (11) NULL DEFAULT '0',
  `updated_at` INT (11) NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_article_id` (`article_id`),
  KEY `idx_user_id` (`user_id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT '收藏表';

CREATE TABLE IF NOT EXISTS `thumbs_up` (
  `id` INT (11) NOT NULL AUTO_INCREMENT,
  `article_id` INT (11) NOT NULL DEFAULT '1' COMMENT '文章id',
  `user_id` INT (11) NOT NULL DEFAULT '1' COMMENT '用户id',
  `created_at` INT (11) NULL DEFAULT '0',
  `updated_at` INT (11) NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_article_id` (`article_id`),
  KEY `idx_user_id` (`user_id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT '点赞表';


CREATE TABLE IF NOT EXISTS `follow` (
  `id` INT (11) NOT NULL AUTO_INCREMENT,
  `article_column_id` INT (11) NOT NULL DEFAULT '1' COMMENT '文章id',
  `user_id` INT (11) NOT NULL DEFAULT '1' COMMENT '用户id',
  `created_at` INT (11) NULL DEFAULT '0',
  `updated_at` INT (11) NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_article_column_id` (`article_column_id`),
  KEY `idx_user_id` (`user_id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT '关注表';


INSERT INTO article_type(`name`) VALUES ('软件使用'),
VALUES ('摄影技巧'),
VALUES ('智能设备'),
VALUES ('生活方式');

INSERT INTO article_column(`id`,`name`) VALUES (1,'IOS'),
VALUES (1,'Android'),
VALUES (1,'Mac'),
VALUES (1,'Win'),
VALUES (2,'手机拍照'),
VALUES (2,'相机拍照'),
VALUES (2,'修图技巧'),
VALUES (3,'手机测评'),
VALUES (3,'影音器材'),
VALUES (3,'数码周边'),
VALUES (4,'游戏'),
VALUES (4,'电影'),
VALUES (4,'音乐'),
VALUES (4,'家装');