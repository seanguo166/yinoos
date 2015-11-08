<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_bonus`;");
E_C("CREATE TABLE `ecs_user_bonus` (
  `bonus_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `emailed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `supplier_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`bonus_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_bonus` values('1','2','0','1','1437780226','144','1','0');");
E_D("replace into `ecs_user_bonus` values('2','2','0','2','1437780225','142','1','0');");
E_D("replace into `ecs_user_bonus` values('3','2','0','6','0','0','1','0');");
E_D("replace into `ecs_user_bonus` values('5','2','0','1','0','0','1','0');");
E_D("replace into `ecs_user_bonus` values('6','2','0','2','0','0','1','0');");

require("../../inc/footer.php");
?>