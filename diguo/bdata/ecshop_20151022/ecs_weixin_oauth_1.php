<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_oauth`;");
E_C("CREATE TABLE `ecs_weixin_oauth` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `weburl` varchar(200) NOT NULL,
  `click` int(11) NOT NULL,
  `id` int(11) NOT NULL COMMENT '分站ID',
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_oauth` values('1','http://danshanghu.68ecshop.com/mobile/index.php','144','0');");
E_D("replace into `ecs_weixin_oauth` values('2','http://danshanghu.68ecshop.com/mobile/brand.php','20','0');");

require("../../inc/footer.php");
?>