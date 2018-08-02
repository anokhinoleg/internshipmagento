<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 01.08.18
 * Time: 18:34
 */

class Skywalker_Internship_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getContactsUrl() {
        return Mage::getBaseUrl() . 'catalog/seo_sitemap/category/';
    }
}