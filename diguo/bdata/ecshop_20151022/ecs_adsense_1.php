<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('1','本站','3');");
E_D("replace into `ecs_adsense` values('2','本站','4');");
E_D("replace into `ecs_adsense` values('58','本站','2');");
E_D("replace into `ecs_adsense` values('56','本站','1');");
E_D("replace into `ecs_adsense` values('59','本站','1');");
E_D("replace into `ecs_adsense` values('3','本站','1');");
E_D("replace into `ecs_adsense` values('4','本站','2');");
E_D("replace into `ecs_adsense` values('5','本站','2');");
E_D("replace into `ecs_adsense` values('8','本站','1');");
E_D("replace into `ecs_adsense` values('10','本站','1');");
E_D("replace into `ecs_adsense` values('9','本站','1');");

require("../../inc/footer.php");
?>