# EMS MySQL Manager Pro 3.2.0.1
# ---------------------------------------
# Host     : sapr02
# Port     : 3306
# Database : khp


SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `khp`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';

USE `khp`;

#
# Structure for the `codifier_divisions` table : 
#

CREATE TABLE `codifier_divisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';

#
# Structure for the `codifier_instr` table : 
#

CREATE TABLE `codifier_instr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `numstart` int(11) DEFAULT NULL,
  `numend` int(11) DEFAULT NULL,
  `sokr` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

#
# Structure for the `codifier_tasks` table : 
#

CREATE TABLE `codifier_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_division` (`division_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';

#
# Structure for the `orders` table : 
#

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `detalavto` varchar(30) DEFAULT NULL,
  `nazvdet` varchar(50) DEFAULT NULL,
  `nosnas` varchar(30) DEFAULT NULL,
  `nizv` varchar(15) DEFAULT NULL,
  `kodinstr` varchar(30) DEFAULT NULL,
  `nizvins` varchar(15) DEFAULT NULL,
  `osin` char(1) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for the `products` table : 
#

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parrent_id` int(11) NOT NULL DEFAULT '0',
  `type_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';

#
# Structure for the `products_types` table : 
#

CREATE TABLE `products_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';

#
# Structure for the `tasks` table : 
#

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codifier_id` int(11) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';

#
# Structure for the `users` table : 
#

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rang` varchar(50) DEFAULT NULL,
  `f` varchar(25) DEFAULT NULL,
  `i` varchar(25) DEFAULT NULL,
  `o` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Definition for the `prod_view` view : 
#

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `prod_view` AS 
  select 
    `products`.`id` AS `id`,
    `products`.`name` AS `name`,
    `products`.`code` AS `code`,
    `products_types`.`name` AS `type` 
  from 
    (`products` left join `products_types` on((`products`.`type_id` = `products_types`.`id`)));

#
# Definition for the `tasksview` view : 
#

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `tasksview` AS 
  select 
    `tasks`.`id` AS `task_id`,
    `tasks`.`start` AS `start`,
    `tasks`.`end` AS `end`,
    `tasks`.`number` AS `number`,
    `codifier_tasks`.`name` AS `taskname`,
    `products`.`name` AS `name`,
    `products`.`id` AS `productid`,
    `products`.`code` AS `code` 
  from 
    ((`tasks` left join `codifier_tasks` on((`tasks`.`codifier_id` = `codifier_tasks`.`id`))) left join `products` on((`tasks`.`product_id` = `products`.`id`)));

#
# Data for the `codifier_divisions` table  (LIMIT 0,500)
#

INSERT INTO `codifier_divisions` (`id`, `name`) VALUES 
  (1,'���'),
  (2,'����'),
  (3,'12/1'),
  (4,'12/2'),
  (5,'12/3'),
  (6,'12/7');

COMMIT;

#
# Data for the `codifier_instr` table  (LIMIT 0,500)
#

INSERT INTO `codifier_instr` (`id`, `name`, `numstart`, `numend`, `sokr`) VALUES 
  (1,'��',0,0,'��'),
  (2,'��������',7680,7857,'�'),
  (3,'������',8370,9999,'�'),
  (4,'������',8130,8369,'��'),
  (5,'�����',2199,2298,'�'),
  (6,'�����',2299,2299,'�'),
  (7,'�����-������',7054,7098,'���'),
  (8,'��������������',7099,7308,'�'),
  (9,'������',2339,2398,'�'),
  (10,'��������',2399,2798,'��'),
  (11,'�������',6299,7053,'�'),
  (12,'�����',7990,8129,'���'),
  (13,'������',2300,2338,'�'),
  (14,'���������',7309,7679,'�'),
  (15,'������',2799,6298,'��'),
  (16,'���������',1479,1498,'�'),
  (17,'����������',1499,1548,'��'),
  (18,'���',793,798,'���'),
  (19,'��������',1549,2198,'��'),
  (20,'����',1039,1478,'�'),
  (21,'������',7858,7989,'��'),
  (22,'������ (����)',799,1038,'��');

COMMIT;

#
# Data for the `codifier_tasks` table  (LIMIT 0,500)
#

INSERT INTO `codifier_tasks` (`id`, `name`, `division_id`) VALUES 
  (1,'��������������� ����������',2),
  (2,'����� ����������',1),
  (3,'������������',3),
  (4,'��������� ���',2);

COMMIT;

#
# Data for the `orders` table  (LIMIT 0,500)
#

INSERT INTO `orders` (`id`, `number`, `status`, `detalavto`, `nazvdet`, `nosnas`, `nizv`, `kodinstr`, `nizvins`, `osin`, `date_start`, `date_end`) VALUES 
  (1,NULL,NULL,'11111111111','111111111',NULL,'111',NULL,NULL,NULL,NULL,NULL);

COMMIT;

#
# Data for the `products` table  (LIMIT 0,500)
#

INSERT INTO `products` (`id`, `parrent_id`, `type_id`, `name`, `code`) VALUES 
  (1,0,1,'�������','890-7680-1234-001'),
  (2,1,2,'��������','856-1234-5678'),
  (3,0,1,'�������','890-7680-1234-003'),
  (4,1,2,'������','856-1235-5678');

COMMIT;

#
# Data for the `products_types` table  (LIMIT 0,500)
#

INSERT INTO `products_types` (`id`, `name`) VALUES 
  (1,'��������'),
  (2,'�2�');

COMMIT;

#
# Data for the `tasks` table  (LIMIT 0,500)
#

INSERT INTO `tasks` (`id`, `codifier_id`, `start`, `end`, `number`, `product_id`) VALUES 
  (1,1,'2011-12-21 00:00:00',NULL,1,1),
  (2,2,NULL,NULL,2,1),
  (3,3,NULL,NULL,3,1),
  (4,1,NULL,NULL,1,2),
  (5,4,NULL,NULL,2,2),
  (6,3,NULL,NULL,3,2),
  (7,2,NULL,NULL,4,2);

COMMIT;

