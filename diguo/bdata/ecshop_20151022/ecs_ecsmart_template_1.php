<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_template`;");
E_C("CREATE TABLE `ecs_ecsmart_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页右侧广告3','/library/ad_position.lbi','0','10','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页左侧广告2','/library/ad_position.lbi','0','7','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页右侧广告2','/library/ad_position.lbi','0','9','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页右侧广告1','/library/ad_position.lbi','0','8','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页左侧广告1','/library/ad_position.lbi','0','6','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页分类下的商品','/library/cat_goods.lbi','1','12','6','1','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','','/library/brands.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页分类下的商品','/library/cat_goods.lbi','0','1','6','1','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','','/library/auction.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','','/library/group_buy.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页推荐模块','/library/recommend_promotion.lbi','3','0','6','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页推荐模块','/library/recommend_hot.lbi','0','0','6','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页推荐模块','/library/recommend_new.lbi','2','0','6','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页推荐模块','/library/recommend_best.lbi','1','0','6','0','68ecshopcom_mobile','');");

require("../../inc/footer.php");
?>