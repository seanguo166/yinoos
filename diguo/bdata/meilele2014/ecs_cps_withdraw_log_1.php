<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cps_withdraw_log`;");
E_C("CREATE TABLE `ecs_cps_withdraw_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL,
  `withdraw_money` decimal(10,2) NOT NULL,
  `withdraw_time` int(10) unsigned NOT NULL,
  `withdraw_desc` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '0',
  `bank_account_type` varchar(60) NOT NULL default '',
  `bank_name` varchar(60) NOT NULL default '',
  `bank_branch` varchar(255) NOT NULL default '',
  `bank_account_no` varchar(255) NOT NULL default '',
  `bank_account_name` varchar(60) NOT NULL default '',
  `confirm_time` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>