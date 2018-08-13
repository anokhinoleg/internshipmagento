<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 08.08.18
 * Time: 16:50
 */

class Skywalker_InternshipBlog_Model_PostCategory extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('internshipblog/postCategory');
    }

    public function getOptionArray()
    {
        $array = [];
        foreach ($this->getCollection() as $item) {
            $array[$item->getId()] = $item->getName();
        }
        return $array;
    }
}