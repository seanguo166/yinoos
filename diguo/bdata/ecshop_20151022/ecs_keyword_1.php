<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword`;");
E_C("CREATE TABLE `ecs_keyword` (
  `w_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `word` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `total_search` int(10) unsigned NOT NULL DEFAULT '0',
  `month_search` int(10) unsigned NOT NULL DEFAULT '0',
  `week_search` int(10) unsigned NOT NULL DEFAULT '0',
  `today_search` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `keyword_cat` varchar(255) NOT NULL,
  `keyword_cat_url` varchar(255) NOT NULL,
  `keyword_cat_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`w_id`),
  KEY `searchengine` (`searchengine`),
  KEY `word` (`word`),
  KEY `letter` (`letter`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword` values('1','ecshop','三星','三星','sanxing','3','1437586690','1','1','1','1','1','手机数码','search.php?category=4&keywords=三星','3');");
E_D("replace into `ecs_keyword` values('2','ecshop','女','女','nv','23','1437688209','3','3','3','3','1','服装服饰','search.php?category=2&keywords=女','15');");
E_D("replace into `ecs_keyword` values('3','ecshop','小米','小米','xiaomi','2','1440115188','1','1','1','1','1','手机数码','search.php?category=4&keywords=小米','2');");
E_D("replace into `ecs_keyword` values('4','ecshop','宾格','宾格','binge','1','1440115201','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=宾格','1');");
E_D("replace into `ecs_keyword` values('5','ecshop','伊利','伊利','yili','2','1445416501','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=伊利','1');");

require("../../inc/footer.php");
?>