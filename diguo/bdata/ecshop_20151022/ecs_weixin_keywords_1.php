<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_keywords`;");
E_C("CREATE TABLE `ecs_weixin_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(30) NOT NULL,
  `keys` varchar(100) NOT NULL,
  `jf_type` int(11) NOT NULL,
  `jf_num` int(11) NOT NULL,
  `jf_maxnum` int(11) NOT NULL,
  `keyname` varchar(100) NOT NULL,
  `clicks` int(11) NOT NULL,
  `diy_type` int(11) NOT NULL,
  `diy_value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>