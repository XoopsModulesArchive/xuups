<?php
//  Author: Trabis
//  URL: http://www.xuups.com
//  E-Mail: lusopoemas@gmail.com

if (!defined("XOOPS_ROOT_PATH")) {
	die("XOOPS root path not defined");
}

class MymenusMenu extends XoopsObject
{
    /**
     * constructor
     */
    function MymenusMenu()
    {
        $this->__construct();
    }

    function __construct()
    {
        $this->initVar('id', XOBJ_DTYPE_INT);
        $this->initVar('pid', XOBJ_DTYPE_INT);
        $this->initVar('mid', XOBJ_DTYPE_INT);
        $this->initVar('title', XOBJ_DTYPE_TXTBOX);
        $this->initVar('alt_title', XOBJ_DTYPE_TXTBOX);
        $this->initVar('visible', XOBJ_DTYPE_INT, 1);
        $this->initVar('link', XOBJ_DTYPE_TXTBOX);
        $this->initVar('weight', XOBJ_DTYPE_INT, 255);
        $this->initVar('target', XOBJ_DTYPE_TXTBOX);
        $this->initVar('groups', XOBJ_DTYPE_ARRAY, serialize(array(XOOPS_GROUP_ANONYMOUS, XOOPS_GROUP_USERS)));
        $this->initVar('hooks', XOBJ_DTYPE_ARRAY, serialize(array()));
        $this->initVar('image', XOBJ_DTYPE_TXTBOX);
        $this->initVar('css', XOBJ_DTYPE_TXTBOX);
    }

    function checkAccess()
    {
        $hooks = $this->getHooks();
        $hooks['mymenus'][] = 'checkAccess';
        foreach ($hooks as $hookname => $hook) {
            if (!mymenus_hook($hookname, 'checkAccess', array('menu' => $this))) {
                return false;
            }
        }

        return true;
    }

    function getHooks() {
        $ret = array();
        $data = $this->getVar('hooks', 'n');
        if (!$data) return $ret;
        $lines = explode("\n", $data);
        foreach ($lines as $line) {
            $line = trim($line);
            $line = explode('|', $line);
            $hook = trim($line[0]);
            $method = isset($line[1]) ? trim($line[1]) : '';
            //$info = split(',', trim($line[0]));
            $ret[$hook][] = $method;
        }
        return $ret;
    }

}

class MymenusMenuHandler extends XoopsPersistableObjectHandler
{
    var $fetched_tree=array();

    function MymenusMenuHandler(&$db)
    {
        $this->__construct($db);
    }

    function __construct(&$db)
    {
        parent::__construct($db, 'mymenus_menu', 'MymenusMenu', 'id', 'title');
    }

    function update_weights(&$obj)
    {
        $sql = "UPDATE " . $this->table
             . " SET weight = weight+1"
             . " WHERE weight >= " . $obj->getVar('weight')
             . " AND id <> " . $obj->getVar('id')
             /*. " AND pid = " . $obj->getVar('pid')*/
             . " AND mid = " . $obj->getVar('mid')
             ;
        $this->db->queryF($sql);

        $sql = "SELECT id FROM " . $this->table
             . " WHERE mid = " . $obj->getVar('mid')
             /*. " AND pid = " . $obj->getVar('pid')*/
             . " ORDER BY weight ASC"
             ;
        $result = $this->db->query($sql);
        $i = 1;  //lets start at 1 please!
	    while (list($id) = $this->db->fetchrow($result)) {
            $sql = "UPDATE " . $this->table
                 . " SET weight = {$i}"
                 . " WHERE id = {$id}"
                 ;
            $this->db->queryF($sql);
		    $i++;
	   }
    }
}
