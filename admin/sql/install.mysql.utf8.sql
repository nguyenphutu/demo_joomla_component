DROP TABLE IF EXISTS `#__student`;

CREATE TABLE `#__student` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`asset_id` INT(10)     NOT NULL DEFAULT '0',
	`created`  DATETIME    NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by`  INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`fullname` VARCHAR(50) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`published` tinyint(4) NOT NULL,
	`catid`	    int(11)    NOT NULL DEFAULT '0',		
	`params`   VARCHAR(1024) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
	
INSERT INTO `#__student` (`fullname`, `email`) VALUES
('Admin', 'admin@gmail.com'),
('demo', 'demo@gmail.com');