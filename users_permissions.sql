CREATE TABLE `users_permissions`
(
  `id` int
(11) NOT NULL AUTO_INCREMENT,
  `user_id` int
(11) NOT NULL,
  `is_admin` tinyint
(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
