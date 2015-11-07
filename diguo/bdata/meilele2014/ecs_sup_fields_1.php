<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sup_fields`;");
E_C("CREATE TABLE `ecs_sup_fields` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `reg_field_name` varchar(60) NOT NULL,
  `dis_order` tinyint(3) unsigned NOT NULL default '100',
  `display` tinyint(1) unsigned NOT NULL default '1',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `is_need` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sup_fields` values('1','供货商地址','100','1','0','0');");
E_D("replace into `ecs_sup_fields` values('2','银行账号','100','1','0','0');");
E_D("replace into `ecs_sup_fields` values('3','开户行地址','100','1','0','0');");
E_D("replace into `ecs_sup_fields` values('4','开户行名称','100','1','0','0');");
E_D("replace into `ecs_sup_fields` values('5','联系人','100','1','0','0');");
E_D("replace into `ecs_sup_fields` values('6','联系电话','100','1','0','1');");
E_D("replace into `ecs_sup_fields` values('7','身份证号','100','1','0','1');");
E_D("replace into `ecs_sup_fields` values('8','营业执照(副本)','100','1','0','1');");
E_D("replace into `ecs_sup_fields` values('9','身份证正面','100','1','0','1');");

require("../../inc/footer.php");
?>