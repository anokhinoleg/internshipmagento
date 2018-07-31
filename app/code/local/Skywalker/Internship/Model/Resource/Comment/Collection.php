<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 18.07.18
 * Time: 14:54
 */

class Skywalker_Internship_Model_Resource_Comment_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    private $author;

    protected function _construct()
    {
        $this->_init('internship/comment');
    }

    public function showAuthor()
    {
        $this->author = $this->getSelect()->joinLeft(
            array('internship_contact'=> Mage::getSingleton('core/resource')->getTableName('internship/contact')), '`main_table`.`author_id` = `internship_contact`.`id`', array('name')
        );

        return $this;
    }
}