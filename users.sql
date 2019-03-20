CREATE TABLE `users`
(
  `id` int
(11) NOT NULL AUTO_INCREMENT,
  `username` varchar
(20) NOT NULL,
  `first_name` varchar
(50) DEFAULT NULL,
  `last_name` varchar
(50) DEFAULT NULL,
  `password` varchar
(255) NOT NULL,
  `active` tinyint
(1) NOT NULL DEFAULT '0',
  `active_hash` varchar
(255) DEFAULT NULL,
  `recover_hash` varchar
(255) DEFAULT NULL,
  `remember_identifier` varchar
(255) DEFAULT NULL,
  `remember_token` varchar
(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON
UPDATE CURRENT_TIMESTAMP,
  `updated_at
` varchar
(255) DEFAULT NULL,
  `email` varchar
(255) NOT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
