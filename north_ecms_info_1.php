<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `north_ecms_info`;");
E_C("CREATE TABLE `north_ecms_info` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `classid` smallint(5) unsigned NOT NULL default '0',
  `ttid` smallint(5) unsigned NOT NULL default '0',
  `onclick` int(10) unsigned NOT NULL default '0',
  `plnum` mediumint(8) unsigned NOT NULL default '0',
  `totaldown` mediumint(8) unsigned NOT NULL default '0',
  `newspath` varchar(20) NOT NULL default '',
  `filename` varchar(36) NOT NULL default '',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `username` varchar(20) NOT NULL default '',
  `firsttitle` tinyint(1) NOT NULL default '0',
  `isgood` tinyint(1) NOT NULL default '0',
  `ispic` tinyint(1) NOT NULL default '0',
  `istop` tinyint(1) NOT NULL default '0',
  `isqf` tinyint(1) NOT NULL default '0',
  `ismember` tinyint(1) NOT NULL default '0',
  `isurl` tinyint(1) NOT NULL default '0',
  `truetime` int(10) unsigned NOT NULL default '0',
  `lastdotime` int(10) unsigned NOT NULL default '0',
  `havehtml` tinyint(1) NOT NULL default '0',
  `groupid` smallint(5) unsigned NOT NULL default '0',
  `userfen` smallint(5) unsigned NOT NULL default '0',
  `titlefont` varchar(14) NOT NULL default '',
  `titleurl` varchar(200) NOT NULL default '',
  `stb` tinyint(3) unsigned NOT NULL default '1',
  `fstb` tinyint(3) unsigned NOT NULL default '1',
  `restb` tinyint(3) unsigned NOT NULL default '1',
  `keyboard` varchar(80) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `newstime` int(10) unsigned NOT NULL default '0',
  `titlepic` varchar(120) NOT NULL default '',
  `smalltext` text NOT NULL,
  `myarea` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>