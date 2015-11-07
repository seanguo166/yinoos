<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_ratio`;");
E_C("CREATE TABLE `ecs_cps_ratio` (
  `cps_ratio_id` smallint(5) unsigned NOT NULL auto_increment,
  `act_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `user_rank` varchar(255) NOT NULL,
  `act_range` tinyint(3) unsigned NOT NULL,
  `act_range_ext` varchar(255) NOT NULL,
  `min_amount` decimal(10,2) unsigned NOT NULL,
  `max_amount` decimal(10,2) unsigned NOT NULL,
  `ratio_val` decimal(10,4) unsigned NOT NULL,
  `act_type_ext` decimal(10,2) unsigned NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `goods_from` varchar(60) NOT NULL default '',
  `cps_user_rank` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`cps_ratio_id`),
  KEY `act_name` (`act_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cps_ratio` values('1','新品','1414080000','1414512000','0,1,2,3,4,5','0','','0.00','0.00','0.0600','0.00','50','','0,1');");

require("../../inc/footer.php");
?>