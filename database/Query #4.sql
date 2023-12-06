CREATE DATABASE BTTH02_1

USE BTTH02_1
CREATE TABLE `comment` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  
  `comment` VARCHAR(200) NOT NULL,
  `sender` VARCHAR(40) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
 DROP TABLE `comment`

	SELECT * FROM `comment`

INSERT INTO `COMMENT` (id, parent_id, `comment`, sender, `date`) VALUES (1, 0, 'This is a comment', 'John Doe', '2023-12-06 12:00:00');

insert into `comment` (  `comment`, sender, `date`) values (  'Iran', 'Seana Dartnell', '2023-12-06 12:00:00');
insert into `comment` (  `comment`, sender, `date`) values (  'Russia', 'Sondra Bowater', '2023-12-06 12:00:00');
insert into `comment` (  `comment`, sender, `date`) values (  'Brazil', 'Adelbert Walliker', '2023-12-06 12:00:00');
insert into `comment` (  `comment`, sender, `date`) values (  'China', 'Amos Spino', '2023-12-06 12:00:00');
insert into `comment` (  `comment`, sender, `date`) values (  'China', 'Juanita Luffman', '2023-12-06 12:00:00');
