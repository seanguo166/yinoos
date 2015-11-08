<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_ad`;");
E_C("CREATE TABLE `ecs_ecsmart_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_ad` values('1','1','0','公告下广告','','1380096734189271435.gif','1378137600','1625846400','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('2','2','0','主广告右广告','','1381909547401497966.jpg','1381161600','1479139200','','','','2','1');");
E_D("replace into `ecs_ecsmart_ad` values('3','3','0','wap首页主广告1','','1395294388718461791.jpg','1394899200','1492704000','','','','15','1');");
E_D("replace into `ecs_ecsmart_ad` values('4','3','0','wap首页主广告2','','1395294394438406359.jpg','1394899200','1492444800','','','','7','1');");
E_D("replace into `ecs_ecsmart_ad` values('5','3','0','wap首页主广告3','','1395294400918255199.jpg','1394899200','1492012800','','','','5','1');");
E_D("replace into `ecs_ecsmart_ad` values('8','4','0','wap团购幻灯广告1','','1409637618548916132.jpg','1409500800','1476460800','','','','2','1');");
E_D("replace into `ecs_ecsmart_ad` values('9','4','0','wap团购幻灯广告2','','1409637629004997110.jpg','1409587200','1476979200','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('10','4','0','wap团购幻灯广告3','','1409637640559586761.jpg','1409587200','1507910400','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('22','7','0','手机端首页左侧广告2','','1413365311086819184.jpg','1413302400','1479398400','','','','16','1');");
E_D("replace into `ecs_ecsmart_ad` values('23','10','0','手机端首页右侧广告3','','1413365329913686295.jpg','1413302400','1480089600','','','','11','1');");
E_D("replace into `ecs_ecsmart_ad` values('19','6','0','手机端首页左侧广告1','','1413365229271349222.jpg','1413302400','1415894400','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('20','8','0','手机端首页右侧广告1','','1413365268580367530.jpg','1413302400','1415894400','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('21','9','0','手机端首页右侧广告2','','1413365287961613738.jpg','1413302400','1415894400','','','','0','1');");

require("../../inc/footer.php");
?>