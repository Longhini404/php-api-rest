create database biblioteca;

use biblioteca;

CREATE TABLE IF NOT EXISTS `livro` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(90) NOT NULL,
  `autor` varchar(90) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
