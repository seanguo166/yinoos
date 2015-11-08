<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_ad_position`;");
E_C("CREATE TABLE `ecs_ecsmart_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_ad_position` values('1','公告下AD','228','70','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ecsmart_ad_position` values('2','主广告右广告','213','348','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ecsmart_ad_position` values('3','wap首页幻灯广告','600','148','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ecsmart_ad_position` values('4','wap团购幻灯广告','1','1','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ecsmart_ad_position` values('6','手机端首页左侧广告','1','1','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ecsmart_ad_position` values('7','手机端首页左侧广告2','1','1','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ecsmart_ad_position` values('8','手机端首页右侧广告1','1','1','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ecsmart_ad_position` values('9','手机端首页右侧广告2','1','1','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ecsmart_ad_position` values('10','手机端首页右侧广告3','1','1','安安','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");

require("../../inc/footer.php");
?>