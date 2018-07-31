<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 18.07.18
 * Time: 10:05
 */

class Skywalker_Internship_Model_Contact extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('internship/contact');
    }

    public function getOptionArray()
    {
        $array = [];
        foreach ($this->getCollection() as $item) {
            $array[$item->getId()] = $item->getName();
        }
        return $array;
    }
}