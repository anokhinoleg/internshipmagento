<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 18.07.18
 * Time: 14:54
 */

class Skywalker_InternshipBlog_Model_Resource_PostCategory_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('internshipblog/postCategory');
    }

//    public function showAuthor()
//    {
//        return $this->getSelect()->joinLeft(
//            array('internship_contact'=> Mage::getSingleton('core/resource')->getTableName('internship/contact')), '`main_table`.`author_id` = `internship_contact`.`id`', array('name')
//        );
//    }
}