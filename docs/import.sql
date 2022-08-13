SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `color` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `category` (`id`, `name`, `color`) VALUES
(1,	'Natation',	'2F72FF'),
(2,	'Cyclisme',	'3DFF4F'),
(3,	'Course à pied',	'FF4B4B');

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `resume` mediumtext NOT NULL,
  `content` longtext NOT NULL,
  `published_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `author` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `post` (`id`, `title`, `resume`, `content`, `published_date`, `author`, `category_id`) VALUES
(1,	'La natation',	'Premier article sur la natation',	'La natation, c\'est-à-dire l\'action de nager, désigne les méthodes qui permettent aux êtres humains de se mouvoir dans l\'eau sans aucune autre force propulsive que leur propre énergie corporelle.\r\n\r\nParmi les activités humaines, la natation regroupe le déplacement à la surface de l\'eau et sous l\'eau (plongée, mermaiding, natation synchronisée, water-polo), le plongeon et divers jeux pratiqués dans l\'eau.\r\n\r\nElle se pratique en piscine, en eau libre (lac, mer), ou en eau vive (rivière).\r\n\r\nLa natation est un sport olympique depuis 1896 pour les hommes et depuis 1912 pour les femmes.',	'2022-08-13 14:53:31',	'Monsieur 1',	1),
(2,	'Le cyclisme',	'Premier article sur le cylisme',	'Le cyclisme recouvre plusieurs notions concernant la bicyclette : il est d\'abord une activité quotidienne pour beaucoup, un loisir pour d\'autres (cyclotourisme), enfin un sport proposant des courses selon plusieurs disciplines : l\'école de cyclisme, le cyclisme sur route, le cyclisme sur piste, le cyclo-cross, le vélo tout terrain (abrégé couramment VTT), le BMX, le cyclisme en salle et le polo-vélo. Le sport cycliste est réglementé au niveau mondial par l\'Union cycliste internationale (UCI).',	'2022-08-13 14:57:00',	'Madame 1',	2),
(3,	'La course à pied',	'Premier article sur la course à pied',	'La course à pied est, avec la marche, l\'un des deux modes de locomotion bipèdes de l\'être humain. Caractérisée par une phase de suspension durant laquelle aucun des deux pieds ne touche le sol, elle permet un déplacement plus économe en énergie que la marche pour des vitesses allant d\'environ 6 km/h (ultrafond) à plus de 40 km/h (sprint). Outre sa fonction locomotrice, elle est principalement pratiquée comme sport dans le cadre de l\'athlétisme et en tant qu\'exercice physique.',	'2022-08-13 14:58:04',	'Monsieur 2',	3);