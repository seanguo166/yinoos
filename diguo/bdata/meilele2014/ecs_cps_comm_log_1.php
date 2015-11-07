<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_comm_log`;");
E_C("CREATE TABLE `ecs_cps_comm_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `pay_money` decimal(10,2) NOT NULL default '0.00',
  `comm_time` int(11) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_time` int(11) unsigned NOT NULL default '0',
  `bank_account_type` varchar(60) NOT NULL default '',
  `bank_name` varchar(60) NOT NULL default '',
  `bank_branch` varchar(255) NOT NULL default '',
  `bank_account_no` varchar(255) NOT NULL default '',
  `bank_account_name` varchar(60) NOT NULL default '',
  `alipay_account` varchar(60) NOT NULL default '',
  `admin_user` varchar(60) NOT NULL default '',
  `cps_user_id` mediumint(8) unsigned NOT NULL default '0',
  `cps_user_name` varchar(60) NOT NULL default '',
  `action_note` text NOT NULL,
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>