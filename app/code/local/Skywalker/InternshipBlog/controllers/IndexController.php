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
        $this->loadLayout();
        $this->renderLayout();
    }
}