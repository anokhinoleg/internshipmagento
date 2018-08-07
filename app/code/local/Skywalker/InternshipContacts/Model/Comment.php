<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 18.07.18
 * Time: 17:21
 */

class Skywalker_InternshipContacts_Model_Comment extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('internshipcontacts/comment');
    }

    public function getAuthor()
    {
        return Mage::getModel('internshipcontacts/contact')->load($this->getAuthorId());
    }
}