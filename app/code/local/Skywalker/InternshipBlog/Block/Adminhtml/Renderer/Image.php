<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 13.08.18
 * Time: 9:32
 */

class Skywalker_InternshipBlog_Block_Adminhtml_Renderer_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $mediaurl=Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
        $value = $row->getImage();
        return '<img src="'.$mediaurl.'upload'.DS.$value.'"  style="width:200px;height:200px;text-align:center;"/>';
    }
}