<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 07.08.18
 * Time: 10:45
 */

require_once Mage::getModuleDir('controllers', 'Mage_Contacts') . DS . 'IndexController.php';

class Skywalker_Internship_ContactsController extends Mage_Contacts_IndexController
{

    public function indexAction()
    {
        $this->loadLayout();
        echo '<pre>';
        var_dump($this->getLayout()->getBlock('contactForm'));die('lol');
        echo '</pre>';
        $this->getLayout()->getBlock('contactForm')
            ->setFormAction( Mage::getUrl('*/*/post', array('_secure' => $this->getRequest()->isSecure())) );

        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('catalog/session');
        $this->renderLayout();
    }

    public function postAction()
    {
        die('lol');
        return $this->_redirect('noroute');
    }
}