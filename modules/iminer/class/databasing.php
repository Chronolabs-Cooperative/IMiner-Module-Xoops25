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

class iminerDatabasing extends XoopsObject
{

	var $handler = '';
	
    function __construct($id = null)
    {   	
    	
        self::initVar('databasingid', XOBJ_DTYPE_INT, null, false);
        self::initVar('method', XOBJ_DTYPE_ENUM, 'ignore', false, false, false, array('indexes','cycles','unixtime'));
        self::initVar('key', XOBJ_DTYPE_TXTBOX, '', false, 44);
        self::initVar('nickname', XOBJ_DTYPE_TXTBOX, '', false, 64);
        self::initVar('watermarkid', XOBJ_DTYPE_INT, null, false);
        self::initVar('modid', XOBJ_DTYPE_INT, null, false);
        self::initVar('atcount', XOBJ_DTYPE_INT, null, false);
        self::initVar('atunixtime', XOBJ_DTYPE_INT, null, false);
        self::initVar('records', XOBJ_DTYPE_INT, null, false);
        self::initVar('imported', XOBJ_DTYPE_INT, null, false);
        self::initVar('icons', XOBJ_DTYPE_INT, null, false);
        self::initVar('small', XOBJ_DTYPE_INT, null, false);
        self::initVar('medium', XOBJ_DTYPE_INT, null, false);
        self::initVar('large', XOBJ_DTYPE_INT, null, false);
        self::initVar('icons_bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('small_bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('medium_bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('large_bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('icons_hits', XOBJ_DTYPE_INT, null, false);
        self::initVar('small_hits', XOBJ_DTYPE_INT, null, false);
        self::initVar('medium_hits', XOBJ_DTYPE_INT, null, false);
        self::initVar('large_hits', XOBJ_DTYPE_INT, null, false);
        self::initVar('icons_bytes_served', XOBJ_DTYPE_INT, null, false);
        self::initVar('small_bytes_served', XOBJ_DTYPE_INT, null, false);
        self::initVar('medium_bytes_served', XOBJ_DTYPE_INT, null, false);
        self::initVar('large_bytes_served', XOBJ_DTYPE_INT, null, false);
        self::initVar('gif', XOBJ_DTYPE_INT, null, false);
        self::initVar('jpg', XOBJ_DTYPE_INT, null, false);
        self::initVar('png', XOBJ_DTYPE_INT, null, false);
        self::initVar('gif_bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('jpg_bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('png_bytes', XOBJ_DTYPE_INT, null, false);
        self::initVar('gif_hits', XOBJ_DTYPE_INT, null, false);
        self::initVar('jpg_hits', XOBJ_DTYPE_INT, null, false);
        self::initVar('png_hits', XOBJ_DTYPE_INT, null, false);
        self::initVar('gif_bytes_served', XOBJ_DTYPE_INT, null, false);
        self::initVar('jpg_bytes_served', XOBJ_DTYPE_INT, null, false);
        self::initVar('png_bytes_served', XOBJ_DTYPE_INT, null, false);
        self::initVar('next', XOBJ_DTYPE_INT, null, false);
        self::initVar('created', XOBJ_DTYPE_INT, null, false);
        
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
class iminerDatabasingHandler extends XoopsPersistableObjectHandler
{
	

	/**
	 * Table Name without prefix used
	 * 
	 * @var string
	 */
	var $tbl = 'iminer_databasing';
	
	/**
	 * Child Object Handling Class
	 *
	 * @var string
	 */
	var $child = 'iminerDatabasing';
	
	/**
	 * Child Object Identity Key
	 *
	 * @var string
	 */
	var $identity = 'databasingid';
	
	/**
	 * Child Object Default Envaluing Costs
	 *
	 * @var string
	 */
	var $envalued = '';
	
    function __construct(&$db) 
    {
    	if (!object($db))
    		$db = $GLOBAL["xoopsDB"];
        parent::__construct($db, self::$tbl, self::$child, self::$identity, self::$envalued);
    }
    
}
?>