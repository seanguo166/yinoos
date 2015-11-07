<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_content_key`;");
E_C("CREATE TABLE `ecs_content_key` (
  `key_id` smallint(5) NOT NULL auto_increment,
  `key_name` varchar(255) NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `replace_num` tinyint(3) unsigned NOT NULL,
  `key_url` varchar(255) NOT NULL,
  PRIMARY KEY  (`key_id`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_content_key` values('1','西南灯具城','0','0','http://www.xnlight.com');");
E_D("replace into `ecs_content_key` values('2','球泡','0','0','http://www.xnlight.com/goods-34.html');");

require("../../inc/footer.php");
?>