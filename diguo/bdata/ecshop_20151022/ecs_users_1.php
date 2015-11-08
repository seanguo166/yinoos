<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `is_surplus_open` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启余额支付密码功能',
  `surplus_password` varchar(32) NOT NULL COMMENT '余额支付密码',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `validated` int(11) NOT NULL,
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  `real_name` varchar(255) NOT NULL,
  `card` varchar(255) NOT NULL,
  `face_card` varchar(255) NOT NULL,
  `back_card` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `mediaUID` varchar(50) NOT NULL,
  `mediaID` int(4) NOT NULL,
  `froms` char(10) NOT NULL DEFAULT 'pc' COMMENT 'pc:电脑,mobile:手机,app:应用',
  `headimg` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`),
  KEY `mediaUID` (`mediaUID`,`mediaID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('1','','anan@68ecshop.com','anan','b46cee21ee951a0d8dce695f4d992ca5','0','','','','0','1955-01-01','99990.00','110.00','0','0','16','1437431243','1440115584','0000-00-00 00:00:00','192.168.1.152','3203','0','0','7384','0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");
E_D("replace into `ecs_users` values('2','','285188787@qq.com','68ecshopyy','a8f7dfa3deb1c6e36b21c4fd5194db7c','0','','','','0','0000-00-00','0.00','0.00','100','100','15','1437497947','1440115110','0000-00-00 00:00:00','192.168.1.109','14','0','0','4460','0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','data/headimg/201507/1437497989600204049.jpg');");
E_D("replace into `ecs_users` values('3','','admin9@qq.com','admin9','e320442690c461403b9cd6f70956b356','0','','','','0','0000-00-00','0.00','0.00','100','100','0','1437500502','1437500519','0000-00-00 00:00:00','192.168.1.196','2','0','0','6626','0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");
E_D("replace into `ecs_users` values('4','','admin8@qq.com','admin8','8762eb814817cc8dcbb3fb5c5fcd52e0','0','','','','0','0000-00-00','0.00','0.00','100','100','0','1437501016','1437501016','0000-00-00 00:00:00','192.168.1.196','1','0','0',NULL,'0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");
E_D("replace into `ecs_users` values('5','','2691111111@qq.com','leilei','c327ecf90734474507b47559ad2aadca','0','','','','0','0000-00-00','0.00','0.00','100','100','1','1437502269','1437947273','0000-00-00 00:00:00','192.168.1.162','7','0','0','9744','0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");
E_D("replace into `ecs_users` values('6','','3490134@qq.com','yiren','acb200a7e232f96d3f0f3499f4263407','0','','','','0','0000-00-00','0.00','0.00','100','100','0','1437503705','1437593672','0000-00-00 00:00:00','192.168.1.146','3','0','0','6033','0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");
E_D("replace into `ecs_users` values('7','','33342@qq.com','liuyu','9925a305924fddf8a7fea60b838d844b','0','','','','0','0000-00-00','0.00','0.00','100','100','0','1437518661','1437520761','0000-00-00 00:00:00','192.168.1.125','2','0','0','6109','0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");
E_D("replace into `ecs_users` values('8','','222222@qq.com','liza','2d14f0a7ff531d44baa35a0f98ea9f39','0','','','','0','0000-00-00','0.00','0.00','100','100','0','1437525999','1437525999','0000-00-00 00:00:00','192.168.1.162','1','0','0',NULL,'0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");
E_D("replace into `ecs_users` values('9','','admin123@qq.com','admin123','cef5e455b959275da443dcbf7c1aed4b','0','','','','0','1955-01-01','0.00','0.00','0','0','17','1444445731','1444445776','0000-00-00 00:00:00','218.18.2.98','2','0','0','6900','0','0','0','','','','','','','0','0','0.00',NULL,NULL,'','','','','0','0','0','0','','0','','0','pc','');");

require("../../inc/footer.php");
?>