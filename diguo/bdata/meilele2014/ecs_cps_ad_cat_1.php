<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_ad_cat`;");
E_C("CREATE TABLE `ecs_cps_ad_cat` (
  `cat_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_name` varchar(255) NOT NULL default '',
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `start_date` int(10) unsigned NOT NULL default '0',
  `end_date` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>