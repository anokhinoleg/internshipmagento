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
        $update = $this->getLayout()->getUpdate();
        $update->addHandle('internship_index_homepage');
        $this->addActionLayoutHandles();
        $this->loadLayoutUpdates();
        $this->generateLayoutXml();
        $this->generateLayoutBlocks();
        $this->_isLayoutLoaded = true;
    }
}