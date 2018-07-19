<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 19.07.18
 * Time: 14:07
 */

class Skywalker_Testing_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
        $test = Mage::getModel('testing/eavtest');
        $test->load(1);
        var_dump($test);
    }
}