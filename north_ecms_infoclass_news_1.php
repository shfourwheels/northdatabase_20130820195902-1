<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `north_ecms_infoclass_news`;");
E_C("CREATE TABLE `north_ecms_infoclass_news` (
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
  `zz_ftitle` text NOT NULL,
  `z_ftitle` varchar(255) NOT NULL default '',
  `qz_ftitle` varchar(255) NOT NULL default '',
  `save_ftitle` varchar(10) NOT NULL default '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL,
  `qz_smalltext` varchar(255) NOT NULL,
  `save_smalltext` varchar(10) NOT NULL,
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL default '',
  `qz_writer` varchar(255) NOT NULL default '',
  `save_writer` varchar(10) NOT NULL default '',
  `zz_befrom` text NOT NULL,
  `z_befrom` varchar(255) NOT NULL default '',
  `qz_befrom` varchar(255) NOT NULL default '',
  `save_befrom` varchar(10) NOT NULL default '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL default '',
  `qz_newstext` varchar(255) NOT NULL default '',
  `save_newstext` varchar(10) NOT NULL default '',
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL default '',
  `qz_diggtop` varchar(255) NOT NULL default '',
  `save_diggtop` varchar(10) NOT NULL default '',
  `zz_trueurl` text NOT NULL,
  `z_trueurl` varchar(255) NOT NULL,
  `qz_trueurl` varchar(255) NOT NULL,
  `save_trueurl` varchar(10) NOT NULL,
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>