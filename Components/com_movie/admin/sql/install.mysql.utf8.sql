
CREATE TABLE IF NOT EXISTS `#__movie` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`mname` VARCHAR(25) NOT NULL,
	`release_year` VARCHAR(5) NOT NULL,
	`superhit` VARCHAR(3) NOT NULL,
	`actor` VARCHAR(100) NOT NULL,
	`published` tinyint(4) NOT NULL,
	
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;


