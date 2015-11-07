<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users_cps`;");
E_C("CREATE TABLE `ecs_users_cps` (
  `user_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_name` varchar(60) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `reg_time` int(10) unsigned NOT NULL default '0',
  `last_login` int(11) unsigned NOT NULL default '0',
  `last_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL default '',
  `visit_count` smallint(5) unsigned NOT NULL default '0',
  `salt` varchar(10) NOT NULL default '0',
  `real_name` varchar(50) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `site_url` varchar(255) NOT NULL default '',
  `site_type` varchar(255) NOT NULL default '',
  `site_desc` text NOT NULL,
  `baseinfo` text NOT NULL,
  `contactinfo` text NOT NULL,
  `bankinfo` text NOT NULL,
  `qq` varchar(60) NOT NULL default '',
  `msn` varchar(60) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `idcard_no` varchar(60) NOT NULL default '',
  `site_name` varchar(255) NOT NULL default '',
  `bank_account_type` varchar(60) NOT NULL default '',
  `bank_name` varchar(60) NOT NULL default '',
  `bank_branch` varchar(255) NOT NULL default '',
  `bank_account_no` varchar(255) NOT NULL default '',
  `bank_account_name` varchar(60) NOT NULL default '',
  `alipay_account` varchar(60) NOT NULL default '',
  `is_check` tinyint(1) unsigned NOT NULL default '0',
  `user_rank` tinyint(3) unsigned NOT NULL default '0',
  `user_money` decimal(10,2) unsigned NOT NULL default '0.00',
  `site_user_id` smallint(5) unsigned NOT NULL default '0',
  `site_user_name` varchar(60) NOT NULL default '',
  `site_password` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users_cps` values('1','a123456','e10adc3949ba59abbe56e057f20f883e','25423@qq.com','1414246662','1414246924','0000-00-00 00:00:00','121.12.151.235','1','0','','','','','-1','','','','','','','','','','','个人帐户','-1','','','','','0','1','0.00','0','','');");

require("../../inc/footer.php");
?>