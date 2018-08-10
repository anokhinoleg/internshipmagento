<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 08.08.18
 * Time: 16:50
 */

class Skywalker_InternshipBlog_Model_Resource_PostCategory extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('internshipblog/postCategory', 'id');
    }
}