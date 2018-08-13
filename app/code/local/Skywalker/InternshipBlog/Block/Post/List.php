<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 10.08.18
 * Time: 12:20
 */

class Skywalker_InternshipBlog_Block_Post_List extends Mage_Core_Block_Template
{
    public function getPosts()
    {
        $param = Mage::app()->getRequest()->getParam('category');
        $posts = Mage::getModel('internshipblog/post')->getCollection();
        $posts->addFieldToFilter('category_id', $param);
        $posts->addFieldToFilter('status', 1);
        return $posts->getItems();
    }

    public function getCategory() {
        return Mage::getModel('internshipblog/postCategory')->load(Mage::app()->getRequest()->getParam('category'));
    }
}