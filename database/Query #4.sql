CREATE DATABASE BTTH02_1

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `comment`
ADD PRIMARY KEY (`id`);
