<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `adminid` mediumint(8) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL default '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL default '',
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('3339ed9f2da0447e119c799cc83fbdc9','1420464293','0','1','192.168.0.103','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1420464137;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('2822471c2bef4b7daa38c9b5d4770111','1420463995','0','0','192.168.0.103','0','0','1.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('3e852f7d4b21ea497e23ebc794d259d6','1420464310','0','0','192.168.0.103','0','0','1.00','0','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";}');");
E_D("replace into `ecs_sessions` values('87cdedf34e5d3438abdded763ba3e04e','1420462695','0','0','192.168.0.103','0','0','1.00','0','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";}');");

require("../../inc/footer.php");
?>