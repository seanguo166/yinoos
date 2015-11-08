<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('1','0','0.00','0.00','100','100','1437431243','注册送积分','99');");
E_D("replace into `ecs_account_log` values('2','1','100000.00','0.00','0','0','1437431272','10000','2');");
E_D("replace into `ecs_account_log` values('3','1','0.00','100.00','0','0','1437431418','zceshi','2');");
E_D("replace into `ecs_account_log` values('4','2','0.00','0.00','100','100','1437497947','注册送积分','99');");
E_D("replace into `ecs_account_log` values('5','3','0.00','0.00','100','100','1437500502','注册送积分','99');");
E_D("replace into `ecs_account_log` values('6','4','0.00','0.00','100','100','1437501016','注册送积分','99');");
E_D("replace into `ecs_account_log` values('7','5','0.00','0.00','100','100','1437502268','注册送积分','99');");
E_D("replace into `ecs_account_log` values('8','6','0.00','0.00','100','100','1437503705','注册送积分','99');");
E_D("replace into `ecs_account_log` values('9','7','0.00','0.00','100','100','1437518661','注册送积分','99');");
E_D("replace into `ecs_account_log` values('10','8','0.00','0.00','100','100','1437525999','注册送积分','99');");
E_D("replace into `ecs_account_log` values('11','1','-10.00','10.00','0','0','1437588105','冻结拍卖活动的保证金：海尔HGS-2164手持蒸汽挂烫机家用挂式电熨斗熨烫机正品全国联保','99');");
E_D("replace into `ecs_account_log` values('12','0','0.00','0.00','100','100','1444445731','注册送积分','99');");

require("../../inc/footer.php");
?>