<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_adsense`;");
E_C("CREATE TABLE `ecs_cps_adsense` (
  `cps_adsense_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cps_uid` mediumint(8) NOT NULL default '0',
  `adsrc` varchar(255) NOT NULL default '',
  `referer` varchar(255) NOT NULL default '',
  `clicks` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cps_adsense_id`),
  UNIQUE KEY `cps_uid` (`cps_uid`),
  UNIQUE KEY `referer` (`referer`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cps_adsense` values('1','1','','a123456','4');");

require("../../inc/footer.php");
?>