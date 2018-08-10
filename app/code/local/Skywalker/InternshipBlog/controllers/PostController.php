<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 10.08.18
 * Time: 12:01
 */

class Skywalker_InternshipBlog_PostController extends Mage_Core_Controller_Front_Action
{
    public function listAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function showAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}