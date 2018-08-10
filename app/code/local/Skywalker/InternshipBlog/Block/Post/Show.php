<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 10.08.18
 * Time: 12:25
 */

class Skywalker_InternshipBlog_Block_Post_Show extends Mage_Core_Block_Template
{
    public function getPost()
    {
        $param = Mage::app()->getRequest()->getParam('id');
        return Mage::getModel('internshipblog/post')->load($param);
    }
}