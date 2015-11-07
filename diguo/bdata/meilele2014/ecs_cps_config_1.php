<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_config`;");
E_C("CREATE TABLE `ecs_cps_config` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `code` varchar(30) NOT NULL default '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cps_config` values('1','cps_site_name','西南灯具广告联盟','1');");
E_D("replace into `ecs_cps_config` values('2','cps_home_site_url','www.xnlight.com','1');");
E_D("replace into `ecs_cps_config` values('3','cps_home_shop_url','www.xnlight.com','1');");
E_D("replace into `ecs_cps_config` values('4','cps_site_title','','1');");
E_D("replace into `ecs_cps_config` values('5','cps_news_cid','12','1');");
E_D("replace into `ecs_cps_config` values('6','cps_notice_cid','4','1');");
E_D("replace into `ecs_cps_config` values('7','cps_faq_cid','2','1');");
E_D("replace into `ecs_cps_config` values('8','cps_confirm_days','0','1');");
E_D("replace into `ecs_cps_config` values('9','cps_pay_min_amount','10','1');");
E_D("replace into `ecs_cps_config` values('10','cps_theme','letao','1');");
E_D("replace into `ecs_cps_config` values('11','cps_withdraw_days','4,20,26,27,28,29,30','1');");
E_D("replace into `ecs_cps_config` values('12','cps_withdraw_min_amount','100','1');");
E_D("replace into `ecs_cps_config` values('13','cps_host','','1');");
E_D("replace into `ecs_cps_config` values('14','cps_cookie_domain','','1');");
E_D("replace into `ecs_cps_config` values('15','cps_captcha','0','1');");
E_D("replace into `ecs_cps_config` values('16','cps_pwd_email_title','','1');");
E_D("replace into `ecs_cps_config` values('17','cps_pwd_email_template','','1');");

require("../../inc/footer.php");
?>