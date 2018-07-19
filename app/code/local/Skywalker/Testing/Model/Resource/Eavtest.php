<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 19.07.18
 * Time: 14:31
 */

class Skywalker_Testing_Model_Resource_Eavtest extends Mage_Eav_Model_Entity_Abstract
{
    protected function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('testing_eavtest');
        $this->setConnection(
            $resource->getConnection('testing_read'),
            $resource->getConnection('testing_write')
        );
    }
}