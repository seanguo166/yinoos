<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('1',NULL,NULL,'店铺街','1','3','0','stores.php','middle');");
E_D("replace into `ecs_nav` values('2',NULL,NULL,'预售','1','7','0','pre_sale.php','middle');");
E_D("replace into `ecs_nav` values('3',NULL,NULL,'拍卖','1','9','0','auction.php','middle');");
E_D("replace into `ecs_nav` values('4','','0','团购','1','5','0','pro_search.php?intro=promotion','middle');");
E_D("replace into `ecs_nav` values('5','c','1','食品生鲜','1','1','0','category.php?id=1','middle');");
E_D("replace into `ecs_nav` values('6',NULL,NULL,'礼包','1','11','0','package.php','middle');");
E_D("replace into `ecs_nav` values('7',NULL,NULL,'积分商城','1','13','0','exchange.php','middle');");
E_D("replace into `ecs_nav` values('8',NULL,NULL,'售后流程','1','1','0','help.php?id=9','top');");
E_D("replace into `ecs_nav` values('9',NULL,NULL,'智能扫货','1','15','0','scan.php','middle');");
E_D("replace into `ecs_nav` values('10',NULL,NULL,'购物流程','1','2','0','help.php?id=10','top');");
E_D("replace into `ecs_nav` values('11',NULL,NULL,'文章资讯','1','17','0','article_list.php','middle');");
E_D("replace into `ecs_nav` values('12',NULL,NULL,'订购方式','1','3','0','help.php?id=11','top');");
E_D("replace into `ecs_nav` values('13',NULL,NULL,'常见问题','1','4','0','help.php?id=18','top');");
E_D("replace into `ecs_nav` values('14',NULL,NULL,'优惠活动','1','14','0','activity.php','middle');");
E_D("replace into `ecs_nav` values('15',NULL,NULL,'关于我们','1','1','1','http://www.68ecshop.com/ecshop_topic/company/','bottom');");
E_D("replace into `ecs_nav` values('16',NULL,NULL,'联系我们','1','2','1','http://www.68ecshop.com/article-4.html','bottom');");
E_D("replace into `ecs_nav` values('17',NULL,NULL,'商家入驻','1','3','0','apply_index.php','bottom');");
E_D("replace into `ecs_nav` values('18',NULL,NULL,'友情链接','1','4','0','#','bottom');");
E_D("replace into `ecs_nav` values('19',NULL,NULL,'站点地图','1','5','0','http://www.68ecshop.com/sitemap.xml','bottom');");
E_D("replace into `ecs_nav` values('20',NULL,NULL,'手机商城','1','6','0','#','bottom');");
E_D("replace into `ecs_nav` values('21',NULL,NULL,'销售联盟','1','7','0','#','bottom');");
E_D("replace into `ecs_nav` values('22',NULL,NULL,'商城社区','1','8','0','#','bottom');");
E_D("replace into `ecs_nav` values('23',NULL,NULL,'企业文化','1','9','0','#','bottom');");
E_D("replace into `ecs_nav` values('24',NULL,NULL,'帮助中心','1','10','0','help.php','bottom');");

require("../../inc/footer.php");
?>