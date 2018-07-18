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
        /** @var Skywalker_Internship_Model_Resource_Contact_Collection $contacts*/
        $contacts = Mage::getModel('internship/contact')->getCollection();
        foreach ($contacts as $contact) {
            /** @var Skywalker_Internship_Model_Contact $contact*/
            echo $contact->getName();
            break;
        }
    }

    public function homepageAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}