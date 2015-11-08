<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier`;");
E_C("CREATE TABLE `ecs_supplier` (
  `supplier_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '申请入驻人id',
  `supplier_name` varchar(255) NOT NULL COMMENT '供货商名称',
  `rank_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '店铺等级',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '店铺类型',
  `company_name` varchar(255) NOT NULL COMMENT '公司名称',
  `country` smallint(5) unsigned NOT NULL COMMENT '公司所在地(国家)',
  `province` smallint(5) unsigned NOT NULL COMMENT '公司所在地(省)',
  `city` smallint(5) unsigned NOT NULL COMMENT '公司所在地(市)',
  `district` smallint(5) unsigned NOT NULL COMMENT '公司所在地(县/区)',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '公司详细地址',
  `tel` varchar(50) NOT NULL COMMENT '公司电话',
  `email` varchar(100) NOT NULL COMMENT '电子邮件',
  `guimo` varchar(255) NOT NULL COMMENT '公司规模',
  `company_type` varchar(50) NOT NULL COMMENT '公司类型',
  `bank` varchar(255) NOT NULL,
  `zhizhao` varchar(255) NOT NULL COMMENT '营业执照电子版',
  `contact` varchar(255) NOT NULL,
  `id_card` varchar(20) NOT NULL,
  `contact_back` varchar(255) NOT NULL,
  `contact_shop` varchar(255) NOT NULL,
  `contact_yunying` varchar(255) NOT NULL,
  `contact_shouhou` varchar(255) NOT NULL,
  `contact_caiwu` varchar(255) NOT NULL,
  `contact_jishu` varchar(255) NOT NULL,
  `system_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `supplier_bond` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `supplier_rebate` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `supplier_rebate_paytime` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `supplier_remark` varchar(255) NOT NULL DEFAULT '',
  `nav_list` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `add_time` int(10) NOT NULL DEFAULT '0' COMMENT '申请时间',
  `applynum` smallint(1) unsigned NOT NULL DEFAULT '0' COMMENT '申请入驻步骤',
  `contacts_name` varchar(100) NOT NULL DEFAULT '' COMMENT '联系人',
  `contacts_phone` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人电话',
  `business_licence_number` varchar(100) NOT NULL DEFAULT '' COMMENT '营业执照号',
  `business_sphere` text NOT NULL COMMENT '法定经营范围',
  `organization_code` varchar(100) NOT NULL COMMENT '组织机构代码',
  `organization_code_electronic` varchar(255) NOT NULL COMMENT '组织机构代码证电子版',
  `general_taxpayer` varchar(255) NOT NULL COMMENT '一般纳税人证明',
  `bank_account_name` varchar(100) NOT NULL COMMENT '银行开户名',
  `bank_account_number` varchar(100) NOT NULL COMMENT '公司开户行银行账号',
  `bank_name` varchar(100) NOT NULL COMMENT '开户银行支行名称',
  `bank_code` varchar(100) NOT NULL COMMENT '支行联行号',
  `settlement_bank_account_name` varchar(100) NOT NULL COMMENT '银行开户名(结算)',
  `settlement_bank_account_number` varchar(100) NOT NULL COMMENT '公司银行账号(结算)',
  `settlement_bank_name` varchar(100) NOT NULL COMMENT '开户银行支行名称(结算)',
  `settlement_bank_code` varchar(100) NOT NULL COMMENT '支行联行号(结算)',
  `tax_registration_certificate` varchar(100) NOT NULL COMMENT '税务登记证号',
  `taxpayer_id` varchar(100) NOT NULL COMMENT '纳税人识别号',
  `bank_licence_electronic` varchar(255) NOT NULL COMMENT '开户银行许可证电子版',
  `tax_registration_certificate_electronic` varchar(255) NOT NULL COMMENT '税务登记证号电子版',
  `supplier_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '入驻商的佣金',
  `handheld_idcard` varchar(255) NOT NULL COMMENT '手持身份证照片',
  `idcard_front` varchar(255) NOT NULL COMMENT '身份证证明照片',
  `idcard_reverse` varchar(255) NOT NULL COMMENT '身份证反面照片',
  `id_card_no` varchar(20) NOT NULL COMMENT '身份证号码',
  PRIMARY KEY (`supplier_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier` values('1','1','天天果园','1','7','天天果园','1','10','145','1195','天天果园基地','','anan@68ecshop.com','','','','','','','','','','','','','0.00','5000.00','6','2','','','1','1437526851','3','安安','18712345678','','','','','','安安','221231231241241242134','中国工商银行山海关支行','2342342443','','','','','','','','','0.00','','','','');");
E_D("replace into `ecs_supplier` values('2','2','小金蛋母婴旗舰店','1','5','小金蛋母婴旗舰店','1','2','52','500','平安大街169号','','2345678@qq.com','','','','','','','','','','','','','500.00','200.00','2','2','给予通过！','','1','1437529326','3','于小鱼','13912345678','','','','','','中国工商银行','6212209878765432564','森林逸城支行','124748788471','','','','','','','','','0.00','','','','');");
E_D("replace into `ecs_supplier` values('5','5','L&amp;L','2','2','L&amp;L','1','2','52','501','前门大街16号','','1234567@qq.com','','','','','','','','','','','','','1000.00','1000.00','10','2','通过','','1','1437532022','3','李先生','13125374143','','','','','','中国建设银行','600033333333333','中国建设银行前门支行','60000000000000','','','','','','','','','0.00','5_20150722nthkrz.jpg','5_20150722apxjed.jpg','5_20150722bpcyvu.jpg','130324111111111111');");
E_D("replace into `ecs_supplier` values('6','6','伊人化妆品专卖店','1','6','伊人化妆品专卖店','1','10','145','1194','河北大街192号','','3490134@qq.com','','','','','','','','','','','','','500.00','1000.00','5','4','','','1','1437535738','3','林晓晓','13630378692','','','','','','林晓晓','62122640000169210579','建设大街工商支行','780874321','','','','','','','','','0.00','6_20150722nshfdv.jpg','6_20150722dnlbra.jpg','6_20150722khsxuo.jpg','130322198404191025');");
E_D("replace into `ecs_supplier` values('7','7','金星家纺','2','4','上海金星电子商务有限公司','1','25','321','2707','浦东新区南道','','34134134@qq.com','','','','','','','','','','','','','1200.00','500.00','3','2','','','1','1437549851','3','刘金枫','13478655456','','','','','','中国建设银行','6221209878765432564','燕大支行','655448787635','','','','','','','','','0.00','7_20150722tyxsrj.jpg','7_20150722woksaq.jpg','7_20150722puebnq.jpg','130323199103122098');");
E_D("replace into `ecs_supplier` values('8','8','Liza','3','7','Liza','1','6','77','706','1234567','','222222@qq.com','','','','','','','','','','','','','1000.00','500.00','5','3','','','1','1437555755','3','Liza','15124322222','','','','','','中国工商银行','600033335422456','朝阳路支行','600000000003333','','','','','','','','','0.00','8_20150722ewmcda.jpg','8_20150722bdipni.jpg','8_20150722yaoiwy.jpg','130222222222222222');");

require("../../inc/footer.php");
?>