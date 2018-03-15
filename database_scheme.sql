-- DROP DATABASE IF EXISTS lu2cas;
-- CREATE DATABASE lu2cas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `active` tinyint(1) NOT NULL DEFAULT '0',
    `created_on` datetime NOT NULL,
    `last_modified_on` datetime DEFAULT NULL,
    `created_by` int(11) unsigned NOT NULL,
    `last_modified_by` int(11) unsigned DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `group_id` int(11) unsigned DEFAULT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `bio` text COLLATE utf8mb4_unicode_ci,
    `active` tinyint(1) NOT NULL DEFAULT '0',
    `created_on` datetime NOT NULL,
    `last_modified_on` datetime DEFAULT NULL,
    `created_by` int(11) unsigned NOT NULL,
    `last_modified_by` int(11) unsigned DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `body` text COLLATE utf8mb4_unicode_ci,
    `published` tinyint(1) NOT NULL DEFAULT '0',
    `created_on` datetime NOT NULL,
    `last_modified_on` datetime DEFAULT NULL,
    `created_by` int(11) unsigned NOT NULL,
    `last_modified_by` int(11) unsigned DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `active` tinyint(1) NOT NULL DEFAULT '0',
    `created_on` datetime NOT NULL,
    `last_modified_on` datetime DEFAULT NULL,
    `created_by` int(11) unsigned NOT NULL,
    `last_modified_by` int(11) unsigned DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `articles_tags`;
CREATE TABLE `articles_tags` (
    `article_id` int(11) unsigned NOT NULL,
    `tag_id` int(11) unsigned NOT NULL,
    PRIMARY KEY (`article_id`,`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `message` text COLLATE utf8mb4_unicode_ci,
    `read` tinyint(1) NOT NULL DEFAULT '0',
    `created_on` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `groups`
ADD CONSTRAINT `fk_groups_created_by`
FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
ADD CONSTRAINT `fk_groups_last_modified_by`
FOREIGN KEY (`last_modified_by`) REFERENCES `users` (`id`);

ALTER TABLE `users`
ADD CONSTRAINT `fk_users_group_id`
FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
ADD CONSTRAINT `fk_users_created_by`
FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
ADD CONSTRAINT `fk_users_last_modified_by`
FOREIGN KEY (`last_modified_by`) REFERENCES `users` (`id`);

ALTER TABLE `articles`
ADD CONSTRAINT `fk_articles_created_by`
FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
ADD CONSTRAINT `fk_articles_last_modified_by`
FOREIGN KEY (`last_modified_by`) REFERENCES `users` (`id`);

ALTER TABLE `tags`
ADD CONSTRAINT `fk_tags_created_by`
FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
ADD CONSTRAINT `fk_tags_last_modified_by`
FOREIGN KEY (`last_modified_by`) REFERENCES `users` (`id`);

ALTER TABLE `articles_tags`
ADD CONSTRAINT `fk_articles_tags_article_id`
FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
ADD CONSTRAINT `fk_articles_tags_tag_id`
FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
