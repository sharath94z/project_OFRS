<?php
include 'global_config/databaseconfig.php';
$mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$result = $mysqli->query("
");
if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE IF NOT EXISTS `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `location` varchar(10) NOT NULL,
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `phoneno` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `password_UNIQUE` (`password`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;") ||
    
    !$mysqli->query("

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(4) NOT NULL AUTO_INCREMENT,
  `sname` varchar(15) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1003 ;")
    ||
    !$mysqli->query("CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` char(23) NOT NULL,
  `providerid_fk` char(23) NOT NULL,
  `serviceid_fk` int(4) DEFAULT NULL,
  `locationid_fk` int(6) DEFAULT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  KEY `service_fk` (`serviceid_fk`),
  KEY `location_fk` (`locationid_fk`),
  KEY `fk_providerid` (`providerid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

");
    
    ||
    !$mysqli->query("

CREATE TABLE IF NOT EXISTS `provider_members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(10) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `provider_name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `password_UNIQUE` (`password`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;")) {
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}