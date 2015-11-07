<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_ip_log`;");
E_C("CREATE TABLE `ecs_cps_ip_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `visit_time` int(10) unsigned NOT NULL default '0',
  `ip` varchar(60) NOT NULL default '',
  PRIMARY KEY  (`log_id`),
  KEY `user_id` (`user_id`),
  KEY `visit_time` (`visit_time`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cps_ip_log` values('1','1','1414246939','183.60.1.240');");
E_D("replace into `ecs_cps_ip_log` values('2','1','1414246957','121.12.151.235');");

require("../../inc/footer.php");
?>