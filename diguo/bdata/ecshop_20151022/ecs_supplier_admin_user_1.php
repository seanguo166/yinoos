<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_admin_user`;");
E_C("CREATE TABLE `ecs_supplier_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '存放users表中的user_id',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `supplier_id` int(10) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  `checked` tinyint(2) NOT NULL DEFAULT '0' COMMENT '-1:审核未通过,0:未审核,1审核通过',
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_admin_user` values('1','1','test888','admin001@68ecshop.com','e2e31a427d2e8c4851b53f7eeb9fff95',NULL,'1437497970','1445385048','0.0.0.0','all','','','0','1',NULL,NULL,'1');");
E_D("replace into `ecs_supplier_admin_user` values('2','2','68ecshopyy','285188787@qq.com','a8f7dfa3deb1c6e36b21c4fd5194db7c','4460','1437500040','1437698813','192.168.1.125','all','','','0','2',NULL,NULL,'1');");
E_D("replace into `ecs_supplier_admin_user` values('4','5','leilei','2691111111@qq.com','2d14f0a7ff531d44baa35a0f98ea9f39','','1437502269','1437697808','192.168.1.162','all','','','0','5',NULL,NULL,'1');");
E_D("replace into `ecs_supplier_admin_user` values('6','6','yiren','3490134@qq.com','2d14f0a7ff531d44baa35a0f98ea9f39','','1437503705','1437700003','192.168.1.162','all','','','0','6',NULL,NULL,'1');");
E_D("replace into `ecs_supplier_admin_user` values('7','7','liuyu','33342@qq.com','9925a305924fddf8a7fea60b838d844b','6109','1437520761','1437699597','192.168.1.162','all','','','0','7',NULL,NULL,'1');");
E_D("replace into `ecs_supplier_admin_user` values('8','8','liza','222222@qq.com','2d14f0a7ff531d44baa35a0f98ea9f39','','1437525999','1437702335','192.168.1.162','all','','','0','8',NULL,NULL,'1');");

require("../../inc/footer.php");
?>