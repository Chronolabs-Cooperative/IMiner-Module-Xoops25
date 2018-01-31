
CREATE TABLE `iminer_databasing` (
  `databasingid` int(8) NOT NULL AUTO_INCREMENT,
  `method` enum('indexes','cycles','unixtime') NOT NULL DEFAULT 'indexes',
  `key` varchar(44) NOT NULL DEFAULT '',
  `nickname` varchar(64) NOT NULL DEFAULT '',
  `watermarkid` int(8) NOT NULL DEFAULT '0',
  `modid` int(8) NOT NULL DEFAULT '0',
  `atcount` mediumint(255) NOT NULL DEFAULT '0',
  `atunixtime` int(12) NOT NULL DEFAULT '0',
  `records` int(12) NOT NULL DEFAULT '0',
  `imported` int(12) NOT NULL DEFAULT '0',
  `icons` int(12) NOT NULL DEFAULT '0',
  `small` int(12) NOT NULL DEFAULT '0',
  `medium` int(12) NOT NULL DEFAULT '0',
  `large` int(12) NOT NULL DEFAULT '0',
  `icons_bytes` int(12) NOT NULL DEFAULT '0',
  `small_bytes` int(12) NOT NULL DEFAULT '0',
  `medium_bytes` int(12) NOT NULL DEFAULT '0',
  `large_bytes` int(12) NOT NULL DEFAULT '0',
  `icons_hits` int(12) NOT NULL DEFAULT '0',
  `small_hits` int(12) NOT NULL DEFAULT '0',
  `medium_hits` int(12) NOT NULL DEFAULT '0',
  `large_hits` int(12) NOT NULL DEFAULT '0',
  `icons_bytes_served` int(12) NOT NULL DEFAULT '0',
  `small_bytes_served` int(12) NOT NULL DEFAULT '0',
  `medium_bytes_served` int(12) NOT NULL DEFAULT '0',
  `large_bytes_served` int(12) NOT NULL DEFAULT '0',
  `gif` int(12) NOT NULL DEFAULT '0',
  `jpg` int(12) NOT NULL DEFAULT '0',
  `png` int(12) NOT NULL DEFAULT '0',
  `gif_bytes` int(12) NOT NULL DEFAULT '0',
  `jpg_bytes` int(12) NOT NULL DEFAULT '0',
  `png_bytes` int(12) NOT NULL DEFAULT '0',
  `gif_hits` int(12) NOT NULL DEFAULT '0',
  `jpg_hits` int(12) NOT NULL DEFAULT '0',
  `png_hits` int(12) NOT NULL DEFAULT '0',
  `gif_bytes_served` int(12) NOT NULL DEFAULT '0',
  `jpg_bytes_served` int(12) NOT NULL DEFAULT '0',
  `png_bytes_served` int(12) NOT NULL DEFAULT '0',
  `next` int(13) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`databasingid`),
  KEY `CLOCKWORK` (`key`,`nickname`,`watermarkid`,`modid`,`table`,`next`,`created`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_tabling` (
  `tablingid` int(8) NOT NULL AUTO_INCREMENT,
  `databasingid` int(8) NOT NULL DEFAULT '0',
  `watermarkingid` int(8) NOT NULL DEFAULT '0',
  `table` varchar(128) NOT NULL DEFAULT '',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tablingid`),
  KEY `CLOCKWORK` (`databasingid`,`table`,`watermarkingid`,`created`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_fielding` (
  `fieldingid` int(8) NOT NULL AUTO_INCREMENT,
  `databasingid` int(8) NOT NULL DEFAULT '0',
  `tablingid` int(8) NOT NULL DEFAULT '0',
  `field` varchar(128) NOT NULL DEFAULT '',
  `primary` varchar(128) NOT NULL DEFAULT '',
  `unixtime` varchar(128) NOT NULL DEFAULT '',
  `userid` varchar(128) NOT NULL DEFAULT '',
  `identity` mediumint(255) NOT NULL DEFAULT '0',
  `next` int(13) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldingid`),
  KEY `CLOCKWORK` (`databasingid`,`tablingid`,`field`,`primary`,`unixtime`,`identity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_conditioning` (
  `conditioningid` int(8) NOT NULL AUTO_INCREMENT,
  `databasingid` int(8) NOT NULL DEFAULT '0',
  `tablingid` int(8) NOT NULL DEFAULT '0',
  `fieldingid` int(8) NOT NULL DEFAULT '0',
  `field` varchar(128) NOT NULL DEFAULT '',
  `logic` enum('LIKE', 'NOT LIKE', 'IN', 'NOT IN', '=', '>=', '<=', '<>') NOT NULL DEFAULT '=',
  `condition` tinytext,
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`conditioningid`),
  KEY `CLOCKWORK` (`databasingid`,`tablingid`,`fieldingid`,`field`,`logic`,`created`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_imagery` (
  `imageid` mediumint(255) NOT NULL AUTO_INCREMENT,
  `key` varchar(44) NOT NULL DEFAULT '',
  `sourceid` mediumint(255) NOT NULL DEFAULT '0',
  `localid` mediumint(255) NOT NULL DEFAULT '0',
  `typal` enum('icon','small','medium','large','') NOT NULL DEFAULT '',
  `mode` enum('retrieving','staging','staged','updating','patching') NOT NULL DEFAULT 'retrieving',
  `modid` int(8) NOT NULL DEFAULT '0',
  `databaseid` int(8) NOT NULL DEFAULT '0',
  `tablingid` int(8) NOT NULL DEFAULT '0',
  `fieldingid` int(8) NOT NULL DEFAULT '0',
  `uid` int(13) NOT NULL DEFAULT '0',
  `messaged` int(13) NOT NULL DEFAULT '0',
  `identity` int(13) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  `sleeping` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`imageid`),
  KEY `CLOCKWORK` (`typal`,`mode`,`databaseid`,`identity`,`key`,`fieldingid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_locals` (
  `localid` mediumint(255) NOT NULL AUTO_INCREMENT,
  `mimetypeid` int(8) NOT NULL,
  `image` longblob,
  `key` varchar(44) NOT NULL DEFAULT '',
  `bytes` int(20) NOT NULL DEFAULT '0',
  `hits` int(13) NOT NULL DEFAULT '0',
  `sent` int(13) NOT NULL DEFAULT '0',
  `width` int(8) NOT NULL DEFAULT '0',
  `height` int(8) NOT NULL DEFAULT '0',
  `type` enum('gif','jpg','png') NOT NULL DEFAULT 'png',
  `md5` varchar(32) NOT NULL DEFAULT '',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`localid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_mimetypes` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `mimetype` varchar(255) DEFAULT '.',
  `mode` enum('gif','jpg','png','convert','ignore') DEFAULT 'ignore',
  `extensions` tinytext,
  `files-sourced` int(12) unsigned DEFAULT '0',
  `files-local` int(12) unsigned DEFAULT '0',
  `files-deleted` int(12) unsigned DEFAULT '0',
  `files-ignored` int(12) unsigned DEFAULT '0',
  `bytes-retrieved` mediumint(32) unsigned DEFAULT '0',
  `bytes-tranmitted` mediumint(32) unsigned DEFAULT '0',
  `bytes-deleted` mediumint(32) unsigned DEFAULT '0',
  `created` int(12) unsigned DEFAULT '0',
  `deleted` int(12) DEFAULT '0',
  `accessed` int(12) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `SEARCH` (`mimetype`,`accessed`,`created`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_sources` (
  `sourceid` mediumint(255) NOT NULL AUTO_INCREMENT,
  `localid` mediumint(255) NOT NULL,
  `mimetypeid` int(8) NOT NULL,
  `source` tinytext,
  `state` enum('online','stalled','offline','changling') NOT NULL DEFAULT 'online',
  `bytes` int(20) NOT NULL DEFAULT '0',
  `hits` int(13) NOT NULL DEFAULT '0',
  `recieved` int(13) NOT NULL DEFAULT '0',
  `width` int(8) NOT NULL DEFAULT '0',
  `height` int(8) NOT NULL DEFAULT '0',
  `type` enum('gif','jpg','png','') NOT NULL DEFAULT '',
  `md5` varchar(32) NOT NULL DEFAULT '',
  `identical` int(13) NOT NULL DEFAULT '0',
  `changes` int(13) NOT NULL DEFAULT '0',
  `compared` int(13) NOT NULL DEFAULT '0',
  `checking` int(13) NOT NULL DEFAULT '0',
  `offlined` int(13) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sourceid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `iminer_watermarkings` (
  `watermarkid` int(8) NOT NULL AUTO_INCREMENT,
  `path` varchar(128) NOT NULL DEFAULT '',
  `filename` varchar(128) NOT NULL DEFAULT '',
  `alias` varchar(64) NOT NULL DEFAULT '',
  `hits` int(12) NOT NULL DEFAULT '0',
  `marks` int(12) NOT NULL DEFAULT '0',
  `bytes` int(12) NOT NULL DEFAULT '0',
  `width` int(8) NOT NULL DEFAULT '0',
  `height` int(8) NOT NULL DEFAULT '0',
  `typal` enum('gif','jpg','png') NOT NULL DEFAULT 'png',
  `physicality` enum('top left','top right','bottom left','bottom right','center','tiled','randoms') NOT NULL DEFAULT 'bottom right',
  `opacity` float(10,4) NOT NULL DEFAULT '0.6669',
  `scale` float(10,4) NOT NULL DEFAULT '4.8888',
  `created` int(11) NOT NULL DEFAULT '0',
  `accessed` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`watermarkid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `iminer_watermarkings` (`path`, `filename`, `alias`, `bytes`, `width`, `height`, `typal`, `physicality`, `opacity`, `created`) VALUES ('/uploads/iminer', 'xoops_watermark.gif', 'XOOPS Bottom Right', '17906', '260', '260', 'gif', 'bottom right', '0.45637', UNIX_TIMESTAMP()), ('/uploads/iminer', 'xoops_watermark.gif', 'XOOPS Center', '17906', '260', '260', 'gif', 'center', '0.45637', UNIX_TIMESTAMP()), ('/uploads/iminer', 'xoops_watermark.gif', 'XOOPS Tiled', '17906', '260', '260', 'gif', 'tiled', '0.45637', UNIX_TIMESTAMP()), ('/uploads/iminer', 'xoops_watermark.gif', 'XOOPS Randoms', '17906', '260', '260', 'gif', 'randoms', '0.45637', UNIX_TIMESTAMP()); 