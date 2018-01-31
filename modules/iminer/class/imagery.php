<?php
/**
 * iminer Mimetypes Ticketer of Batch Group & User Mimetypess
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     	General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @author      	Simon Roberts (wishcraft) <wishcraft@users.sourceforge.net>
 * @subpackage  	iminer
 * @description 	Mimetypes Ticking for Support/Faults/Management of Batch Group & User managed emails tickets
 * @version			1.0.5
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/iminer
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/iminer
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/iminer
 * @link			http://internetfounder.wordpress.com
 */

if (!defined('_MI_IMINER_MODULE_DIRNAME')) {
	return false;
}

class iminerImagery extends XoopsObject
{

	var $handler = '';
	
    function __construct($id = null)
    {   	
    	
        self::initVar('imageid', XOBJ_DTYPE_INT, null, false);
        self::initVar('key', XOBJ_DTYPE_TXTBOX, null, false, 44);
        self::initVar('sourceid', XOBJ_DTYPE_INT, null, false);
        self::initVar('localid', XOBJ_DTYPE_INT, null, false);
        self::initVar('typal', XOBJ_DTYPE_ENUM, '', false, false, false, array('icon','small','medium','large',''));
        self::initVar('mode', XOBJ_DTYPE_ENUM, 'retrieving', false, false, false, array('retrieving','staging','staged','updating','patching'));
        self::initVar('modid', XOBJ_DTYPE_INT, null, false);
        self::initVar('databaseid', XOBJ_DTYPE_INT, null, false);
        self::initVar('tablingid', XOBJ_DTYPE_INT, null, false);
        self::initVar('fieldingid', XOBJ_DTYPE_INT, null, false);
        self::initVar('uid', XOBJ_DTYPE_INT, null, false);
        self::initVar('messaged', XOBJ_DTYPE_INT, null, false);
        self::initVar('identity', XOBJ_DTYPE_INT, null, false);
        self::initVar('created', XOBJ_DTYPE_INT, time(), false);
        self::initVar('sleeping', XOBJ_DTYPE_INT, null, false);
        
        
        $this->handler = __CLASS__ . 'Handler';
        if (!empty($id) && !is_null($id))
        {
        	$handler = new $this->handler;
        	self::assignVars($handler->get($id)->getValues(array_keys($this->vars)));
        }
        
    }

}


/**
 * Handler Class for Mimetypes in iminer email ticketer
 * @author Simon Roberts (wishcraft@users.sourceforge.net)
 * @copyright copyright (c) 2015 labs.coop
 */
class iminerImageryHandler extends XoopsPersistableObjectHandler
{
	

	/**
	 * Table Name without prefix used
	 * 
	 * @var string
	 */
	var $tbl = 'iminer_imagery';
	
	/**
	 * Child Object Handling Class
	 *
	 * @var string
	 */
	var $child = 'iminerImagery';
	
	/**
	 * Child Object Identity Key
	 *
	 * @var string
	 */
	var $identity = 'imageid';
	
	/**
	 * Child Object Default Envaluing Costs
	 *
	 * @var string
	 */
	var $envalued = 'key';
	
    function __construct(&$db) 
    {
    	if (!object($db))
    		$db = $GLOBAL["xoopsDB"];
        parent::__construct($db, self::$tbl, self::$child, self::$identity, self::$envalued);
    }
    
}
?>