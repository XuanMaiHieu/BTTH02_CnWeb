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


SELECT * FROM COMMENT


INSERT INTO comment (id, parent_id, comment, sender)
VALUES
(1, 0, 'This is a top-level comment', 'User1'),
(2, 1, 'Reply to comment 1', 'User2'),
(3, 0, 'Another top-level comment', 'User3'),
(4, 2, 'Reply to comment 2', 'User4');