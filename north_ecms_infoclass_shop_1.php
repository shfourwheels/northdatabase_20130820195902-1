<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `north_ecms_infoclass_shop`;");
E_C("CREATE TABLE `north_ecms_infoclass_shop` (
  `classid` int(10) unsigned NOT NULL default '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL default '',
  `qz_title` varchar(255) NOT NULL default '',
  `save_title` varchar(10) NOT NULL default '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL default '',
  `qz_titlepic` varchar(255) NOT NULL default '',
  `save_titlepic` varchar(10) NOT NULL default '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL default '',
  `qz_newstime` varchar(255) NOT NULL default '',
  `save_newstime` varchar(10) NOT NULL default '',
  `zz_productno` text NOT NULL,
  `z_productno` varchar(255) NOT NULL default '',
  `qz_productno` varchar(255) NOT NULL default '',
  `save_productno` varchar(10) NOT NULL default '',
  `zz_pbrand` text NOT NULL,
  `z_pbrand` varchar(255) NOT NULL default '',
  `qz_pbrand` varchar(255) NOT NULL default '',
  `save_pbrand` varchar(10) NOT NULL default '',
  `zz_intro` text NOT NULL,
  `z_intro` varchar(255) NOT NULL default '',
  `qz_intro` varchar(255) NOT NULL default '',
  `save_intro` varchar(10) NOT NULL default '',
  `zz_unit` text NOT NULL,
  `z_unit` varchar(255) NOT NULL default '',
  `qz_unit` varchar(255) NOT NULL default '',
  `save_unit` varchar(10) NOT NULL default '',
  `zz_weight` text NOT NULL,
  `z_weight` varchar(255) NOT NULL default '',
  `qz_weight` varchar(255) NOT NULL default '',
  `save_weight` varchar(10) NOT NULL default '',
  `zz_tprice` text NOT NULL,
  `z_tprice` varchar(255) NOT NULL default '',
  `qz_tprice` varchar(255) NOT NULL default '',
  `save_tprice` varchar(10) NOT NULL default '',
  `zz_price` text NOT NULL,
  `z_price` varchar(255) NOT NULL default '',
  `qz_price` varchar(255) NOT NULL default '',
  `save_price` varchar(10) NOT NULL default '',
  `zz_buyfen` text NOT NULL,
  `z_buyfen` varchar(255) NOT NULL default '',
  `qz_buyfen` varchar(255) NOT NULL default '',
  `save_buyfen` varchar(10) NOT NULL default '',
  `zz_pmaxnum` text NOT NULL,
  `z_pmaxnum` varchar(255) NOT NULL default '',
  `qz_pmaxnum` varchar(255) NOT NULL default '',
  `save_pmaxnum` varchar(10) NOT NULL default '',
  `zz_productpic` text NOT NULL,
  `z_productpic` varchar(255) NOT NULL default '',
  `qz_productpic` varchar(255) NOT NULL default '',
  `save_productpic` varchar(10) NOT NULL default '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL default '',
  `qz_newstext` varchar(255) NOT NULL default '',
  `save_newstext` varchar(10) NOT NULL default '',
  `zz_psalenum` text NOT NULL,
  `z_psalenum` varchar(255) NOT NULL default '',
  `qz_psalenum` varchar(255) NOT NULL default '',
  `save_psalenum` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>