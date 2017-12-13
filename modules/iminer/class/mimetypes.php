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

if (!defined('_MI_iminer_MODULE_DIRNAME')) {
	return false;
}

class iminerMimetypes extends XoopsObject
{

	var $handler = '';
	
    function __construct($id = null)
    {   	
    	
        self::initVar('id', XOBJ_DTYPE_INT, null, false);
        self::initVar('mimetype', XOBJ_DTYPE_TXTBOX, null, false, 255);
        self::initVar('mode', XOBJ_DTYPE_ENUM, 'ignore', false, false, false, array('gif','jpg','png','convert','ignore'));
        self::initVar('extensions', XOBJ_DTYPE_ARRAY, array(), false);
        self::initVar('files-sourced', XOBJ_DTYPE_INT, null, false);
        self::initVar('files-local', XOBJ_DTYPE_INT, null, false);
        self::initVar('files-deleted', XOBJ_DTYPE_INT, null, false);
        self::initVar('files-ignored', XOBJ_DTYPE_INT, null, false);
        self::initVar('bytes-retrieved', XOBJ_DTYPE_INT, null, false);
        self::initVar('bytes-tranmitted', XOBJ_DTYPE_INT, null, false);
        self::initVar('bytes-deleted', XOBJ_DTYPE_INT, null, false);
        self::initVar('created', XOBJ_DTYPE_INT, time(), false);
        self::initVar('deleted', XOBJ_DTYPE_INT, null, false);
        self::initVar('accessed', XOBJ_DTYPE_INT, null, false);
        
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
class iminerMimetypesHandler extends XoopsPersistableObjectHandler
{
	

	/**
	 * Table Name without prefix used
	 * 
	 * @var string
	 */
	var $tbl = 'iminer_mimetypes';
	
	/**
	 * Child Object Handling Class
	 *
	 * @var string
	 */
	var $child = 'iminerMimetypes';
	
	/**
	 * Child Object Identity Key
	 *
	 * @var string
	 */
	var $identity = 'id';
	
	/**
	 * Child Object Default Envaluing Costs
	 *
	 * @var string
	 */
	var $envalued = 'mimetype';
	
    function __construct(&$db) 
    {
    	if (!object($db))
    		$db = $GLOBAL["xoopsDB"];
        parent::__construct($db, self::$tbl, self::$child, self::$identity, self::$envalued);
        
        $criteria = new Criteria("1", "1");
        if ($this->getCount($criteria)==0)
        {
        	xoops_load('XoopsLists');
        	foreach(XoopsLists::getFileListAsArray($path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'data') as $file)
        	{
        		if (substr($file,0,strlen('mimetypes-'))=='mimetypes-' && substr($file, strlen($file)-3) == 'diz')
        		{
        			foreach(file($path . DIRECTORY_SEPARATOR . $file) as $line => $value)
        			{
        				$parts = explode('||', trim(str_replace(array("\n", "\r", "\t"), "", $value)));
        				if (isset($parts[0]) && isset($parts[1]) && !empty($parts[0]) && !empty($parts[1]))
        				{
	        				$mime = $this->create();
	        				$mime->setVar('extensions', array($parts[0]=>$parts[0]));
	        				$mime->setVar('mimetype', $parts[1]);
	        				if (strpos($parts[1], 'gif'))
	        				    $mime->setVar('mode', 'gif');
        				    elseif (strpos($parts[1], 'png'))
        				        $mime->setVar('mode', 'png');
        				    elseif (strpos($parts[1], 'jpeg'))
        				        $mime->setVar('mode', 'jpg');
    				        elseif (strpos($parts[1], 'jpg'))
        				        $mime->setVar('mode', 'jpg');
    				        else 
    				            $mime->setVar('mode', 'convert');
	        				$mime->setVar('created', time());
	        				$this->insert($mime, true);
	        				unset($mime);
        				}
        			}
        		}
        	}
        	
        }
    }
    
    /**
     * Get File Extension from Mimetype
     * 
     * @param string $mimetype
     * @return string
     */
    function getFileExtension($mimetype = '')
    {
    	$criteria = new Criteria('mimetype', $mimetype, 'LIKE');
    	$criteria->setLimit(1);
    	if ($this->getCount($criteria)>0)
    	{
    		$objects = $this->getObjects($criteria);
    		$extensions = $objects[0]->getVar('extensions');
    		unset($objects);
    	} else
    		$extensions = array('.' . _MI_iminer_MODULE_DIRNAME . '.dat' => '.' . _MI_iminer_MODULE_DIRNAME . '.dat');
    	shuffle($extensions);
    	shuffle($extensions);
    	shuffle($extensions);
    	shuffle($extensions);
    	shuffle($extensions);
    	return $extensions[0];
    }
    
    /**
     * Inserts an object in the mimetypes table with no duplications
     * 
     * {@inheritDoc}
     * @see XoopsPersistableObjectHandler::insert()
     */
    function insert($object, $force = true)
    {
    	if ($object->isNew())
    	{
    		$criteria = new Criteria('mimetype', $object->getVar('mimetype'), 'LIKE');
    		$criteria->setLimit(1);
    		if ($this->getCount($criteria)>0)
    		{
    			foreach($this->getObjects($criteria) as $obj)
    			{
    				foreach($object->getVar('extensions') as $key => $value)
    				{
    					if (!in_array($value, $obj->getVar('extensions')))
    					{
    						$obj->setVar('extensions', array_merge(array($value=>$value), $obj->getVar('extensions')));
    					}
    				}
    				return parent::insert($obj, true);
    			}
    		}
    		$object->setVar('created', time());
    	}
    	return parent::insert($object, true);
    }
}
?>