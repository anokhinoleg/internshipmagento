<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 10.08.18
 * Time: 15:25
 */

class Skywalker_InternshipBlog_Block_Adminhtml_PostCategory extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'internshipblog';
        $this->_controller = 'adminhtml_postCategory';
        $this->_headerText = 'Post\'s Categories';

        parent::__construct();
    }
}