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
# Data for the `codifier_divisions` table  (LIMIT 0,500)
#

INSERT INTO `codifier_divisions` (`id`, `name`) VALUES 
  (1,'ПДО'),
  (2,'ТОМО'),
  (3,'12/1'),
  (4,'12/2'),
  (5,'12/3'),
  (6,'12/7');

COMMIT;

#
# Data for the `codifier_tasks` table  (LIMIT 0,500)
#

INSERT INTO `codifier_tasks` (`id`, `name`, `division_id`) VALUES 
  (1,'Технологическая проработка',2),
  (2,'Заказ материалов',1),
  (3,'Изготовление',3),
  (4,'Программы ЧПУ',2);

COMMIT;

#
# Data for the `products` table  (LIMIT 0,500)
#

INSERT INTO `products` (`id`, `parrent_id`, `type_id`, `name`, `code`) VALUES 
  (1,0,1,'Матрица','890-7680-1234-001'),
  (2,1,2,'Электрод','856-1234-5678');

COMMIT;

#
# Data for the `products_types` table  (LIMIT 0,500)
#

INSERT INTO `products_types` (`id`, `name`) VALUES 
  (1,'Оснастка'),
  (2,'И2П');

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

