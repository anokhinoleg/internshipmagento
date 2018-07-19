<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 13.07.18
 * Time: 18:09
 */

class Skywalker_Internship_Block_View extends Mage_Core_Block_Template
{
    public function getContacts()
    {
        return Mage::getModel('internship/contact')->getCollection();
    }

    public function getComments()
    {
        return Mage::getModel('internship/comment')->getCollection();
    }
}