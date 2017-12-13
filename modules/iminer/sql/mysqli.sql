
CREATE TABLE `iminer_databasing` (
  `databasingid` int(8) NOT NULL AUTO_INCREMENT,
  `method` enum('indexes','cycles','unixtime') NOT NULL DEFAULT 'indexes',
  `key` varchar(44) NOT NULL DEFAULT '',
  `nickname` varchar(64) NOT NULL DEFAULT '',
  `watermarkid` int(8) NOT NULL DEFAULT '0',
  `modid` int(8) NOT NULL DEFAULT '0',
  `table` varchar(128) NOT NULL DEFAULT '',
  `identity` varchar(128) NOT NULL DEFAULT '',
  `pharse` tinytext,
  `userid` varchar(128) NOT NULL DEFAULT '',
  `creating` varchar(128) NOT NULL DEFAULT '',
  `updating` varchar(128) NOT NULL DEFAULT '',
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


CREATE TABLE `iminer_imagery` (
  `imageid` mediumint(255) NOT NULL AUTO_INCREMENT,
  `piid` mediumint(255) NOT NULL,
  `typal` enum('icon','small','medium','large','') NOT NULL DEFAULT '',
  `mode` enum('retrieving','staging','staged','updating','patching') NOT NULL DEFAULT 'retrieving',
  `modid` int(8) NOT NULL DEFAULT '0',
  `databaseid` int(8) NOT NULL DEFAULT '0',
  `uid` int(13) NOT NULL DEFAULT '0',
  `messaged` int(13) NOT NULL DEFAULT '0',
  `identity` mediumint(255) NOT NULL,
  `field` varchar(128) NOT NULL DEFAULT '',
  `key` varchar(44) NOT NULL DEFAULT '',
  `created` int(13) NOT NULL DEFAULT '0',
  `sleeping` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`imageid`),
  KEY `CLOCKWORK` (`typal`,`mode`,`databaseid`,`identity`,`key`,`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `iminer_imagery_locals` (
  `imagerylocalid` mediumint(255) NOT NULL AUTO_INCREMENT,
  `imageryid` mediumint(255) NOT NULL DEFAULT '0',
  `localid` mediumint(255) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`imagerylocalid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `iminer_imagery_sources` (
  `imagerysourceid` mediumint(255) NOT NULL AUTO_INCREMENT,
  `imageryid` mediumint(255) NOT NULL DEFAULT '0',
  `sourceid` mediumint(255) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`imagerysourceid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `iminer_locals` (
  `localid` mediumint(255) NOT NULL AUTO_INCREMENT,
  `mimetypeid` int(8) NOT NULL,
  `local-path` varchar(255) NOT NULL DEFAULT '',
  `local-filename` varchar(128) NOT NULL DEFAULT '',
  `local-bytes` int(20) NOT NULL DEFAULT '0',
  `local-hits` int(13) NOT NULL DEFAULT '0',
  `local-sent` int(13) NOT NULL DEFAULT '0',
  `local-width` int(8) NOT NULL DEFAULT '0',
  `local-height` int(8) NOT NULL DEFAULT '0',
  `local-type` enum('gif','jpg','png') NOT NULL DEFAULT 'png',
  `local-md5` varchar(32) NOT NULL DEFAULT '',
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
  `source-state` enum('online','offline','changling') NOT NULL DEFAULT 'online',
  `source-bytes` int(20) NOT NULL DEFAULT '0',
  `source-hits` int(13) NOT NULL DEFAULT '0',
  `source-recieved` int(13) NOT NULL DEFAULT '0',
  `source-width` int(8) NOT NULL DEFAULT '0',
  `source-height` int(8) NOT NULL DEFAULT '0',
  `source-type` enum('gif','jpg','png','other') NOT NULL DEFAULT 'other',
  `source-md5` varchar(32) NOT NULL DEFAULT '',
  `source-identical` int(13) NOT NULL DEFAULT '0',
  `source-changes` int(13) NOT NULL DEFAULT '0',
  `source-compared` int(13) NOT NULL DEFAULT '0',
  `source-checking` int(13) NOT NULL DEFAULT '0',
  `source-offlined` int(13) NOT NULL DEFAULT '0',
  `created` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sourceid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `iminer_watermarkings` (
  `watermarkid` int(8) NOT NULL DEFAULT '0',
  `localid` mediumint(255) NOT NULL DEFAULT '0',
  `key` varchar(44) NOT NULL DEFAULT '',
  `hits` int(12) NOT NULL DEFAULT '0',
  `marks` int(12) NOT NULL DEFAULT '0',
  `bytes` int(12) NOT NULL DEFAULT '0',
  `width` int(8) NOT NULL DEFAULT '0',
  `height` int(8) NOT NULL DEFAULT '0',
  `typal` enum('gif','jpg','png') NOT NULL DEFAULT 'png',
  `physicality` enum('top left','top right','bottom left','bottom right','center','tiled') NOT NULL DEFAULT 'bottom right',
  `opacity` float(10,4) NOT NULL DEFAULT '0.6669',
  `created` int(11) NOT NULL DEFAULT '0',
  `accessed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

