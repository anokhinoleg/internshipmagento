<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 08.08.18
 * Time: 15:36
 */

class Skywalker_InternshipBlog_Model_Resource_Post extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('internshipblog/post', 'id');
    }
}