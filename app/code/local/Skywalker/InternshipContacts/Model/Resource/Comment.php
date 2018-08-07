<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 18.07.18
 * Time: 17:22
 */

class Skywalker_InternshipContacts_Model_Resource_Comment extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('internshipcontacts/comment', 'id');
    }
}