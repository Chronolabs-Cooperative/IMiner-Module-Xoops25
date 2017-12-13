<?php
/**
 * XOOPS tag management module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     	General Public License version 3
 * @author      	Simon Roberts <wishcraft@users.sourceforge.net>
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @subpackage  	tag
 * @description 	XOOPS tag management module
 * @version			2.4.1
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/tag
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/tag
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/tag
 * @link			http://internetfounder.wordpress.com
 */


if (!defined('XOOPS_ROOT_PATH')) { exit(); }

$modversion = array();
$modversion["name"]         			     = _MI_IMINER_NAME;
$modversion["version"]      			     = _MI_IMINER_VERSION;
$modversion["description"]  			     = _MI_IMINER_DESCRIPTION;
$modversion["dirname"]      			     = basename(__DIR__);
$modversion['releasedate'] 				     = _MI_IMINER_RELEASEDATE;
$modversion['status']      				     = _MI_IMINER_STATUS;
$modversion['credits']     				     = _MI_IMINER_CREDITS;
$modversion['author']['alias']      	     = _MI_IMINER_AUTHORALIAS;
$modversion['help']        				     = _MI_IMINER_HELP;
$modversion['license']     				     = _MI_IMINER_LICENCE;
$modversion['academic']    				     = _MI_IMINER_ACADEMIC;
$modversion['official']    				     = _MI_IMINER_OFFICAL;
$modversion['image']       				     = _MI_IMINER_ICON;
$modversion['dirmoduleadmin'] 			     = _MI_IMINER_ADMINMODDIR;
$modversion['icons16'] 					     = _MI_IMINER_ADMINICON16;
$modversion['icons32'] 					     = _MI_IMINER_ADMINICON32;
$modversion['author']['realname'] 		     = _MI_IMINER_AUTHORREALNAME;
$modversion['author']['website']['url']      = _MI_IMINER_AUTHORWEBSITE;
$modversion['author']['website']['name'] 	 = _MI_IMINER_AUTHORSITENAME;
$modversion['author']['email'] 			     = _MI_IMINER_AUTHOREMAIL;
$modversion['author']['word'] 				 = _MI_IMINER_AUTHORWORD;
$modversion['author']['feed'] 				 = _MI_IMINER_AUTHORFEED;
$modversion['warning']['install'] 			 = _MI_IMINER_WARNINGS_INSTALL;
$modversion['warning']['update'] 			 = _MI_IMINER_WARNINGS_UPDATE;
$modversion['warning']['uninstall'] 	     = _MI_IMINER_WARNINGS_UNINSTALL;
$modversion['demo']['site']['url'] 			 = _MI_IMINER_DEMO_SITEURL;
$modversion['demo']['site']['name'] 		 = _MI_IMINER_DEMO_SITENAME;
$modversion['support']['site']['url'] 		 = _MI_IMINER_SUPPORT_SITEURL;
$modversion['support']['site']['name'] 		 = _MI_IMINER_SUPPORT_SITENAME;
$modversion['submit']['form']['feature'] 	 = _MI_IMINER_SUPPORT_FEATUREREQUEST;
$modversion['submit']['form']['bug'] 		 = _MI_IMINER_SUPPORT_BUGREPORTING;

// People Arrays
$modversion['people']['developers']['wishcraft']['name'] = 'Simon Antony Roberts';
$modversion['people']['developers']['wishcraft']['email'] = 'wishcraft@users.sourceforge.net';
$modversion['people']['developers']['wishcraft']['handle'] = 'wishcraft';
$modversion['people']['developers']['wishcraft']['version'] = array('1.0-', '1.01', '1.05');
$modversion['people']['testers'] = array();
$modversion['people']['translaters'] = array();
$modversion['people']['documenters'] = array();

// Releases Identity Hashes
$modversion['keys']['module']        	= 'iminer3985479843';
$modversion['keys']['release']          = '305jkhr436tgryhf';

// Requirements
$modversion['minimal']['php']        	= '7.0';
$modversion['minimal']['xoops']      	= '2.5.8';
$modversion['minimal']['db']         	= array('mysql' => '5.0.7', 'mysqli' => '5.0.7');
$modversion['minimal']['admin']      	= '1.1';

// Requirements = Legacy for XOOPS 2.5
$modversion['min_php']        			= '7.0';
$modversion['min_xoops']      			= '2.5.8';
$modversion['min_db']         			= array('mysql' => '5.0.7', 'mysqli' => '5.0.7');
$modversion['min_admin']      			= '1.1';

// database tables
$modversion["sqlfile"]["mysql"] 		= "sql/mysql.sql";
$modversion["tables"] 					= array();

// Main
$modversion['hasMain'] 					= _MI_IMINER_HASMAIN;

// Admin
$modversion['hasAdmin'] 				= _MI_IMINER_HASADMIN;
$modversion['adminindex']  				= "admin/index.php";
$modversion['adminmenu']   				= "admin/menu.php";
$modversion['system_menu'] 				= 1;

// Search
$modversion["hasSearch"] 				= _MI_IMINER_HASSEARCH;
//$modversion['search']['file'] 			= "include/search.inc.php";
//$modversion['search']['func'] 			= "iminer_search";

// Comments
$modversion["hasComments"] 				= _MI_IMINER_HASCOMMENTS;

//$modversion["onInstall"] 				= "include/action.module.php";
//$modversion["onUpdate"] 				= "include/action.module.php";
//$modversion["onUninstall"] 			= "include/action.module.php";

// Blocks
$modversion['blocks']    				= array();
$modversion["blocks"][1]    			= array(
											    "file"          => "block.php",
											    "name"          => _MI_IMINER_BLOCK_LATEST,
                                                "description"   => _MI_IMINER_BLOCK_LATEST_DESC,
											    "show_func"     => "iminer_block_latest_show",
											    "edit_func"     => "iminer_block_latest_edit",
											    "options"       => "3",
											    "template"      => "iminer_block_latest.html",
										    );

// Config categories
$modversion['configcat']['seo']['name']             = _MI_IMINER_CONFCAT_SEO;
$modversion['configcat']['seo']['description']      = _MI_IMINER_CONFCAT_SEO_DESC;
$modversion['configcat']['mod']['name']             = _MI_IMINER_CONFCAT_MODULE;
$modversion['configcat']['mod']['description']      = _MI_IMINER_CONFCAT_MODULE_DESC;
$modversion['configcat']['email']['name']           = _MI_IMINER_CONFCAT_EMAIL;
$modversion['configcat']['email']['description']    = _MI_IMINER_CONFCAT_EMAIL_DESC;

// Configs
$modversion["config"] 					= array();
$modversion["config"][] 				= array(
											    "name"          => "htaccess",
											    "title"         => "_MI_IMINER_HTACCESS",
											    "description"   => "_MI_IMINER_HTACCESS_DESC",
											    "formtype"      => "yesno",
											    "valuetype"     => "int",
											    "default"       => false,
												"category"		=> "seo"
    										);

$modversion["config"][] 				= array(
												"name"          => "base",
												"title"         => "_MI_IMINER_BASE",
												"description"   => "_MI_IMINER_BASE_DESC",
												"formtype"      => "text",
												"valuetype"     => "text",
												"default"       => "iminer",
												"category"		=> "seo"
											);

$modversion["config"][] 				= array(
												"name"          => "html",
												"title"         => "_MI_IMINER_HTML",
												"description"   => "_MI_IMINER_HTML_DESC",
												"formtype"      => "text",
												"valuetype"     => "text",
												"default"       => ".html",
												"category"		=> "seo"
											);

$modversion["config"][] 				= array(
                                                "name"          => "rss",
                                                "title"         => "_MI_IMINER_RSS",
                                                "description"   => "_MI_IMINER_RSS_DESC",
                                                "formtype"      => "text",
                                                "valuetype"     => "text",
                                                "default"       => ".rss",
                                                "category"		=> "seo"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "path",
                                                "title"         => "_MI_IMINER_PATH",
                                                "description"   => "_MI_IMINER_PATH_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "text",
                                                "default"       => dirname(__DIR__),
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
											    "name"          => "icon_width",
											    "title"         => "_MI_IMINER_SIZE_ICON_WIDTH",
											    "description"   => "_MI_IMINER_SIZE_ICON_WIDTH_DESC",
											    "formtype"      => "textbox",
											    "valuetype"     => "int",
											    "default"       => 128,
												"category"		=> "mod"
    										);

$modversion["config"][] 				= array(
                                                "name"          => "icon_height",
                                                "title"         => "_MI_IMINER_SIZE_ICON_HEIGHT",
                                                "description"   => "_MI_IMINER_SIZE_ICON_HEIGHT_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 128,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "watermark_icon",
                                                "title"         => "_MI_IMINER_WATERMARK_ICON",
                                                "description"   => "_MI_IMINER_WATERMARK_ICON_DESC",
                                                "formtype"      => "yesno",
                                                "valuetype"     => "int",
                                                "default"       => false,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "small_width",
                                                "title"         => "_MI_IMINER_SIZE_SMALL_WIDTH",
                                                "description"   => "_MI_IMINER_SIZE_SMALL_WIDTH_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 320,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "small_height",
                                                "title"         => "_MI_IMINER_SIZE_SMALL_HEIGHT",
                                                "description"   => "_MI_IMINER_SIZE_SMALL_HEIGHT_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 320,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "watermark_small",
                                                "title"         => "_MI_IMINER_WATERMARK_SMALL",
                                                "description"   => "_MI_IMINER_WATERMARK_SMALL_DESC",
                                                "formtype"      => "yesno",
                                                "valuetype"     => "int",
                                                "default"       => true,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "medium_width",
                                                "title"         => "_MI_IMINER_SIZE_MEDIUM_WIDTH",
                                                "description"   => "_MI_IMINER_SIZE_MEDIUM_WIDTH_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 1024,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "medium_height",
                                                "title"         => "_MI_IMINER_SIZE_MEDIUM_HEIGHT",
                                                "description"   => "_MI_IMINER_SIZE_MEDIUM_HEIGHT_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 1024,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "watermark_medium",
                                                "title"         => "_MI_IMINER_WATERMARK_MEDIUM",
                                                "description"   => "_MI_IMINER_WATERMARK_MEDIUM_DESC",
                                                "formtype"      => "yesno",
                                                "valuetype"     => "int",
                                                "default"       => true,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "large_width",
                                                "title"         => "_MI_IMINER_SIZE_LARGE_WIDTH",
                                                "description"   => "_MI_IMINER_SIZE_LARGE_WIDTH_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 2048,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "large_height",
                                                "title"         => "_MI_IMINER_SIZE_LARGE_HEIGHT",
                                                "description"   => "_MI_IMINER_SIZE_LARGE_HEIGHT_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 2048,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "watermark_large",
                                                "title"         => "_MI_IMINER_WATERMARK_LARGE",
                                                "description"   => "_MI_IMINER_WATERMARK_LARGE_DESC",
                                                "formtype"      => "yesno",
                                                "valuetype"     => "int",
                                                "default"       => true,
                                                "category"		=> "mod"
                                            );
$options = array();
for($i=1;$i<=49;$i++)
    $options[$i] = "$i%";
$modversion["config"][] 				= array(
                                                "name"          => "watermark_size",
                                                "title"         => "_MI_IMINER_SIZE_WATERMARK",
                                                "description"   => "_MI_IMINER_SIZE_WATERMARK_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "int",
                                                "default"       => 7,
                                                "options"       => $options,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "watermark_right_margin",
                                                "title"         => "_MI_IMINER_RIGHT_MARGIN_WATERMARK",
                                                "description"   => "_MI_IMINER_RIGHT_MARGIN_WATERMARK_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "int",
                                                "default"       => 2,
                                                "options"       => $options,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "watermark_bottom_margin",
                                                "title"         => "_MI_IMINER_BOTTOM_MARGIN_WATERMARK",
                                                "description"   => "_MI_IMINER_BOTTOM_MARGIN_WATERMARK_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "int",
                                                "default"       => 2,
                                                "options"       => $options,
                                                "category"		=> "mod"
                                            );
$options = array();
for($i=1;$i<=100;$i++)
    $options[$i] = "$i%";
$modversion["config"][] 				= array(
                                                "name"          => "watermark_opacity",
                                                "title"         => "_MI_IMINER_WATERMARK_OPACITY",
                                                "description"   => "_MI_IMINER_WATERMARK_OPACITY_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "int",
                                                "default"       => 66,
                                                "options"       => $options,
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "png",
                                                "title"         => "_MI_IMINER_PNG_STORAGE",
                                                "description"   => "_MI_IMINER_PNG_STORAGE_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "text",
                                                "default"       => _MI_IMINER_PNG,
                                                "options"       => array(   _MI_IMINER_PNG => _MI_IMINER_PNG_DESC,
                                                                            _MI_IMINER_JPG => _MI_IMINER_JPG_DESC,
                                                                            _MI_IMINER_GIF => _MI_IMINER_GIF_DESC   ),
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "jpg",
                                                "title"         => "_MI_IMINER_JPG_STORAGE",
                                                "description"   => "_MI_IMINER_JPG_STORAGE_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "text",
                                                "default"       => _MI_IMINER_JPG,
                                                "options"       => array(   _MI_IMINER_PNG => _MI_IMINER_PNG_DESC,
                                                                            _MI_IMINER_JPG => _MI_IMINER_JPG_DESC,
                                                                            _MI_IMINER_GIF => _MI_IMINER_GIF_DESC   ),
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "gif",
                                                "title"         => "_MI_IMINER_GIF_STORAGE",
                                                "description"   => "_MI_IMINER_GIF_STORAGE_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "text",
                                                "default"       => _MI_IMINER_GIF,
                                                "options"       => array(   _MI_IMINER_PNG => _MI_IMINER_PNG_DESC,
                                                                            _MI_IMINER_JPG => _MI_IMINER_JPG_DESC,
                                                                            _MI_IMINER_GIF => _MI_IMINER_GIF_DESC   ),
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "tiff",
                                                "title"         => "_MI_IMINER_TIFF_STORAGE",
                                                "description"   => "_MI_IMINER_TIFF_STORAGE_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "text",
                                                "default"       => _MI_IMINER_JPG,
                                                "options"       => array(   _MI_IMINER_PNG => _MI_IMINER_PNG_DESC,
                                                                            _MI_IMINER_JPG => _MI_IMINER_JPG_DESC,
                                                                            _MI_IMINER_GIF => _MI_IMINER_GIF_DESC   ),
                                                "category"		=> "mod"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "scheduler",
                                                "title"         => "_MI_IMINER_SCHEDULER",
                                                "description"   => "_MI_IMINER_SCHEDULER_DESC",
                                                "formtype"      => "select",
                                                "valuetype"     => "text",
                                                "default"       => _MI_IMINER_PRELOAD,
                                                "options"       => array(   _MI_IMINER_PRELOAD => _MI_IMINER_PRELOAD_DESC,
                                                                            _MI_IMINER_CRONJOBS => _MI_IMINER_CRONJOBS_DESC,
                                                                            _MI_IMINER_SCHEDULETASKS => _MI_IMINER_SCHEDULETASKS_DESC   ),
                                                "category"		=> "mod"
                                            );


$modversion["config"][] 				= array(
                                                "name"          => "emails_users",
                                                "title"         => "_MI_IMINER_EMAILS_USERS",
                                                "description"   => "_MI_IMINER_EMAILS_USERS_DESC",
                                                "formtype"      => "yesno",
                                                "valuetype"     => "int",
                                                "default"       => true,
                                                "category"		=> "email"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "groups_users",
                                                "title"         => "_MI_IMINER_EMAILS_USERS_GROUPS",
                                                "description"   => "_MI_IMINER_EMAILS_USERS_GROUPS_DESC",
                                                "formtype"      => "group_multi",
                                                "valuetype"     => "array",
                                                "default"       => array(XOOPS_GROUP_USERS=>XOOPS_GROUP_USERS),
                                                "category"		=> "email"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "emails_admins",
                                                "title"         => "_MI_IMINER_EMAILS_ADMINS",
                                                "description"   => "_MI_IMINER_EMAILS_ADMINS_DESC",
                                                "formtype"      => "yesno",
                                                "valuetype"     => "int",
                                                "default"       => true,
                                                "category"		=> "email"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "groups_admins",
                                                "title"         => "_MI_IMINER_EMAILS_ADMINS_GROUPS",
                                                "description"   => "_MI_IMINER_EMAILS_ADMINS_GROUPS_DESC",
                                                "formtype"      => "group_multi",
                                                "valuetype"     => "array",
                                                "default"       => array(XOOPS_GROUP_ADMIN=>XOOPS_GROUP_ADMIN),
                                                "category"		=> "email"
                                            );

$modversion["config"][] 				= array(
                                                "name"          => "items_per_feed",
                                                "title"         => "_MI_IMINER_ITEMS_PER_FEED",
                                                "description"   => "_MI_IMINER_ITEMS_PER_FEED_DESC",
                                                "formtype"      => "textbox",
                                                "valuetype"     => "int",
                                                "default"       => 10,
                                                "category"		=> "mod"
                                            );

// Notification
$modversion["hasNotification"] 			= 0;
$modversion["notification"] 			= array();


// Feeds
$modversion["hasFeeds"] 			    = _MI_IMINER_HASFEEDS;
$modversion["feed"][] 			        = array(
                                                "file"          => 'include/feeds.module.php',
                                                "func"          => 'iminer_feed_images',
                                                "many"          => 'items_per_feed'
                                          );

// .htaccess Mod Rewrite
$i=0;
$modversion["hasRewrite"]                   = false;
$modversion["rewrite"]["config"]["base"]    = '%base';
$modversion["rewrite"]["config"]["html"]    = '%html';
$modversion["rewrite"]["config"]["rss"]     = '%rss';
$modversion["rewrite"][++$i]["raw"]         = 'RewriteCond %{REQUEST_FILENAME} !-f';
$modversion["rewrite"][++$i]["raw"]         = 'RewriteCond %{REQUEST_FILENAME} !-d';
/*$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/index%html';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/index.php';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/index-(.*?)%html';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/index.php?dirname=$1';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/feed%rss';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/backend.php';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/feed-(.*?)%rss';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/backend.php?dirname=$1';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/([0-9]+)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&termid=$7';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/([0-9]+)/([0-9]+)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&catid=$7&termid=$8';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/([0-9]+)-(.*?)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&termid=$7&dirname=$8';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/([0-9]+)/([0-9]+)-(.*?)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&catid=$4&termid=$7&dirname=$8';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/(.*?)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&term=$7';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/([0-9]+)/(.*?)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&catid=$7&term=$8';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/(.*?)-(.*?)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&term=$7&dirname=$8';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';
$i++;
$modversion["rewrite"][$i]["path"]          = '^%base/(view|list|feed)/(tag|cat)/([0-9]+)/(count|time|term)/(ASC|DESC)/(cloud|list)/([0-9]+)/(.*?)-(.*?)(%html|%rss)';
$modversion["rewrite"][$i]["resolve"]       = './modules/%dirname/$1.$2.php?start=$3&sort=$4&order=$5&mode=$6&catid=$7&term=$8&dirname=$9';
$modversion["rewrite"][$i]["state"]         = 'L,NC,QSA';*/

// Constraints
$modversion["hasConstraints"] 			= 0;
$modversion["constraints"] 			    = array();

?>