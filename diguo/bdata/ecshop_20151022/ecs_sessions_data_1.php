<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions_data`;");
E_C("CREATE TABLE `ecs_sessions_data` (
  `sesskey` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `data` longtext NOT NULL,
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions_data` values('f2dca6284906e244f081ccc018b3f356','2880288784','a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:13:\"captcha_login\";s:16:\"YzA2ZjdmNjA4Yw==\";s:12:\"captcha_word\";s:16:\"NjY3MWJkZGUzZQ==\";s:9:\"last_time\";s:10:\"1440115135\";s:7:\"last_ip\";s:13:\"192.168.1.152\";s:7:\"headimg\";s:0:\"\";}');");
E_D("replace into `ecs_sessions_data` values('45323f9209255608b0a7ddc2e6dae99a','4294967295','a:11:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:13:\"captcha_login\";s:16:\"ZWUzZTE5OWUyYw==\";s:9:\"flow_type\";i:0;s:12:\"captcha_word\";s:16:\"ODZkZmFjMmE1NA==\";s:9:\"last_time\";s:10:\"1444445761\";s:7:\"last_ip\";s:11:\"218.18.2.98\";s:7:\"headimg\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:14:\"flow_consignee\";a:15:{s:10:\"address_id\";s:2:\"17\";s:12:\"address_name\";s:0:\"\";s:7:\"user_id\";s:1:\"9\";s:9:\"consignee\";s:6:\"123123\";s:5:\"email\";s:15:\"admin123@qq.com\";s:7:\"country\";s:1:\"1\";s:8:\"province\";s:1:\"6\";s:4:\"city\";s:2:\"77\";s:8:\"district\";s:3:\"705\";s:7:\"address\";s:9:\"123123123\";s:7:\"zipcode\";s:7:\"1351313\";s:3:\"tel\";s:2:\"--\";s:6:\"mobile\";s:11:\"13415033270\";s:13:\"sign_building\";s:0:\"\";s:9:\"best_time\";s:0:\"\";}}');");
E_D("replace into `ecs_sessions_data` values('b56098dadd217b7a058cafc0799721bf','2890827754','a:11:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1445385106;s:12:\"suppliers_id\";s:1:\"0\";s:11:\"supplier_id\";s:1:\"1\";s:16:\"supplier_user_id\";s:1:\"1\";s:13:\"supplier_name\";s:8:\"admin001\";s:20:\"supplier_action_list\";s:3:\"all\";s:19:\"supplier_last_check\";s:10:\"1437703544\";s:17:\"supplier_admin_id\";s:1:\"1\";s:19:\"supplier_shop_guide\";b:1;}');");
E_D("replace into `ecs_sessions_data` values('1bfe699862d3d18c95bf94e4a34fcabd','4294967295','a:4:{s:10:\"admin_name\";s:5:\"ceshi\";s:11:\"action_list\";s:1376:\"goods_manage,cat_manage,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,virualcard,picture_batch,goods_export,goods_batch,gen_goods_script,question_manage,shaidan_manage,scan_store,order_comment_priv,shopinfo_manage,shophelp_manage,vote_priv,article_auto,feedback_priv,users_manage,user_rank,surplus_manage,account_manage,admin_manage,logs_manage,logs_drop,agency_manage,suppliers_manage,role_manage,ship_manage,payment,shiparea_manage,area_manage,friendlink,db_backup,db_renew,flash_manage,navigator,cron,affiliate,affiliate_ck,sitemap,file_priv,file_check,reg_fields,shop_authorized,webcollect_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage,topic_manage,snatch_manage,ad_manage,gift_manage,card_manage,pack,bonus_manage,auction,group_by,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order,attention_list,email_list,magazine_list,view_sendlist,send_mail,template_select,lang_edit,backup_setting,mail_template,db_backup,db_optimize,convert,sms_send,supplier_manage,supplier_rank,supplier_rebate,supplier_tag,weixin_config,weixin_addconfig,weixin_menu,weixin_notice,weixin_keywords,weixin_fans,weixin_news,weixin_addqcode,weixin_qcode,weixin_reg,pickup_point_manage,pickup_point_batch\";s:10:\"last_check\";i:1445416622;s:12:\"suppliers_id\";s:1:\"0\";}');");

require("../../inc/footer.php");
?>