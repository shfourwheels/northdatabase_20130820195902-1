<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `north_ecms_infoclass_photo`;");
E_C("CREATE TABLE `north_ecms_infoclass_photo` (
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
  `zz_filesize` text NOT NULL,
  `z_filesize` varchar(255) NOT NULL default '',
  `qz_filesize` varchar(255) NOT NULL default '',
  `save_filesize` varchar(10) NOT NULL default '',
  `zz_picsize` text NOT NULL,
  `z_picsize` varchar(255) NOT NULL default '',
  `qz_picsize` varchar(255) NOT NULL default '',
  `save_picsize` varchar(10) NOT NULL default '',
  `zz_picfbl` text NOT NULL,
  `z_picfbl` varchar(255) NOT NULL default '',
  `qz_picfbl` varchar(255) NOT NULL default '',
  `save_picfbl` varchar(10) NOT NULL default '',
  `zz_picfrom` text NOT NULL,
  `z_picfrom` varchar(255) NOT NULL default '',
  `qz_picfrom` varchar(255) NOT NULL default '',
  `save_picfrom` varchar(10) NOT NULL default '',
  `zz_picurl` text NOT NULL,
  `z_picurl` varchar(255) NOT NULL default '',
  `qz_picurl` varchar(255) NOT NULL default '',
  `save_picurl` varchar(10) NOT NULL default '',
  `zz_morepic` text NOT NULL,
  `z_morepic` varchar(255) NOT NULL default '',
  `qz_morepic` varchar(255) NOT NULL default '',
  `save_morepic` varchar(10) NOT NULL default '',
  `zz_num` text NOT NULL,
  `z_num` varchar(255) NOT NULL default '',
  `qz_num` varchar(255) NOT NULL default '',
  `save_num` varchar(10) NOT NULL default '',
  `zz_width` text NOT NULL,
  `z_width` varchar(255) NOT NULL default '',
  `qz_width` varchar(255) NOT NULL default '',
  `save_width` varchar(10) NOT NULL default '',
  `zz_height` text NOT NULL,
  `z_height` varchar(255) NOT NULL default '',
  `qz_height` varchar(255) NOT NULL default '',
  `save_height` varchar(10) NOT NULL default '',
  `zz_picsay` text NOT NULL,
  `z_picsay` varchar(255) NOT NULL default '',
  `qz_picsay` varchar(255) NOT NULL default '',
  `save_picsay` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>