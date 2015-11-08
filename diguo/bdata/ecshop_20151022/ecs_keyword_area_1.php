<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword_area`;");
E_C("CREATE TABLE `ecs_keyword_area` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `w_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`),
  KEY `w_id` (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword_area` values('1437586690','1','192.168.1.189','LAN');");
E_D("replace into `ecs_keyword_area` values('1437688030','2','192.168.1.162','LAN');");
E_D("replace into `ecs_keyword_area` values('1437688204','2','192.168.1.162','LAN');");
E_D("replace into `ecs_keyword_area` values('1437688209','2','192.168.1.162','LAN');");
E_D("replace into `ecs_keyword_area` values('1440115188','3','192.168.1.152','LAN');");
E_D("replace into `ecs_keyword_area` values('1440115201','4','192.168.1.152','LAN');");
E_D("replace into `ecs_keyword_area` values('1445416501','5','66.249.64.5','');");

require("../../inc/footer.php");
?>