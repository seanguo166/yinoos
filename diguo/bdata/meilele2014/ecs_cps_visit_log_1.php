<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_visit_log`;");
E_C("CREATE TABLE `ecs_cps_visit_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `visit_date` varchar(60) NOT NULL default '',
  `visit_cnt` int(10) unsigned NOT NULL default '0',
  `ip_cnt` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cps_visit_log` values('1','1','2014-10-25','4','2');");

require("../../inc/footer.php");
?>