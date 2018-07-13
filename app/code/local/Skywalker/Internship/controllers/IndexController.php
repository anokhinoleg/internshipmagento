<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 13.07.18
 * Time: 17:56
 */

class Skywalker_Internship_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function homepageAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}