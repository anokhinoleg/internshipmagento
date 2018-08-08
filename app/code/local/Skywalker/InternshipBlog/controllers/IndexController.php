<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 08.08.18
 * Time: 14:41
 */

class Skywalker_InternshipBlog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $blogpost = Mage::getModel('internshipblog/blogpost');
        echo get_class($blogpost);
        $this->loadLayout();
        $this->renderLayout();
    }
}