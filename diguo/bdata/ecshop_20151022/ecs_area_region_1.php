<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_area_region`;");
E_C("CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_area_region` values('1','1');");
E_D("replace into `ecs_area_region` values('2','1');");
E_D("replace into `ecs_area_region` values('2','2');");
E_D("replace into `ecs_area_region` values('3','1');");
E_D("replace into `ecs_area_region` values('4','10');");
E_D("replace into `ecs_area_region` values('4','705');");

require("../../inc/footer.php");
?>