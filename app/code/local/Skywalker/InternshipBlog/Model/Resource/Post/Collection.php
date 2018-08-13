<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 18.07.18
 * Time: 14:54
 */

class Skywalker_InternshipBlog_Model_Resource_Post_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('internshipblog/post');
    }

    public function showCategory()
    {
        return $this->getSelect()->joinLeft(
            [
                'internshipblog_category' => Mage::getSingleton('core/resource')->getTableName('internshipblog/postCategory')
            ],
        '`main_table`.`category_id` = `internshipblog_category`.`id`',
            [
                'category_name' => 'internshipblog_category.name'
            ]
        );
    }
}