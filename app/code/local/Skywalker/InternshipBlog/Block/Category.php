<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 09.08.18
 * Time: 16:15
 */

class Skywalker_InternshipBlog_Block_Category extends Mage_Core_Block_Template
{
    public function getCategories()
    {
        return Mage::getModel('internshipblog/postCategory')->getCollection();
    }
}