<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_ad`;");
E_C("CREATE TABLE `ecs_cps_ad` (
  `cps_ad_id` mediumint(8) unsigned NOT NULL auto_increment,
  `adimg` varchar(255) NOT NULL default '',
  `adtxt` varchar(255) NOT NULL default '',
  `adtype` tinyint(1) unsigned NOT NULL default '0',
  `link_url` varchar(255) NOT NULL default '',
  `show_order` tinyint(3) unsigned NOT NULL default '50',
  `width` smallint(5) unsigned NOT NULL default '0',
  `height` smallint(5) unsigned NOT NULL default '0',
  `cps_ratio_id` smallint(5) unsigned NOT NULL default '0',
  `cat_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cps_ad_id`),
  KEY `cps_ratio_id` (`cps_ratio_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>