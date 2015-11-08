<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_bonus_type`;");
E_C("CREATE TABLE `ecs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `send_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `send_start_date` int(11) NOT NULL DEFAULT '0',
  `send_end_date` int(11) NOT NULL DEFAULT '0',
  `use_start_date` int(11) NOT NULL DEFAULT '0',
  `use_end_date` int(11) NOT NULL DEFAULT '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `supplier_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺id',
  `bonus_code` varchar(200) DEFAULT 'NULL',
  `user_bonus_max` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_bonus_type` values('1','商品红包5元','5.00','1','50.00','0.00','1437465600','1454140800','1437552000','1454140800','50.00','0','','0');");
E_D("replace into `ecs_bonus_type` values('2','用户红包10元','10.00','0','90.00','0.00','1437552000','1440230400','1437552000','1472544000','80.00','0','','0');");
E_D("replace into `ecs_bonus_type` values('3','天天果园满200元送20元红包','20.00','2','200.00','0.00','1437552000','1472544000','1437552000','1472544000','100.00','1','NULL','1');");

require("../../inc/footer.php");
?>