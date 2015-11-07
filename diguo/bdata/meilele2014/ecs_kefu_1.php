<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kefu`;");
E_C("CREATE TABLE `ecs_kefu` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_kefu` values('1','kefushow','1');");
E_D("replace into `ecs_kefu` values('2','skin','10');");
E_D("replace into `ecs_kefu` values('3','show','1');");
E_D("replace into `ecs_kefu` values('4','showlefttop','30');");
E_D("replace into `ecs_kefu` values('5','showleft','10');");
E_D("replace into `ecs_kefu` values('6','showrighttop','30');");
E_D("replace into `ecs_kefu` values('7','showright','30');");
E_D("replace into `ecs_kefu` values('8','fs_show','0');");
E_D("replace into `ecs_kefu` values('9','typeone','售前客服');");
E_D("replace into `ecs_kefu` values('10','kfqq','客服一:385862671,客服二:385862672,客服三:385862964,客服四:385862965');");
E_D("replace into `ecs_kefu` values('11','im','小王:wryk520');");
E_D("replace into `ecs_kefu` values('12','typetwo','售后客服');");
E_D("replace into `ecs_kefu` values('13','kfqqtwo','售后:385862966');");
E_D("replace into `ecs_kefu` values('14','imtwo','售后:wryk520');");
E_D("replace into `ecs_kefu` values('15','qqqun','373099447');");
E_D("replace into `ecs_kefu` values('16','wwqun','');");
E_D("replace into `ecs_kefu` values('17','kftel','400-000-4945');");
E_D("replace into `ecs_kefu` values('18','shijian','早上8:00-晚23:00');");
E_D("replace into `ecs_kefu` values('19','kf53','');");
E_D("replace into `ecs_kefu` values('20','qqcss','1');");
E_D("replace into `ecs_kefu` values('21','wwcss','1');");
E_D("replace into `ecs_kefu` values('22','fenxiang','bds_qzone,bds_tsina,bds_baidu,bds_renren,bds_tqq,bds_kaixin001,bds_tqf,bds_qq,bds_tieba');");

require("../../inc/footer.php");
?>