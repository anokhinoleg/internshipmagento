<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 09.08.18
 * Time: 16:42
 */

class Skywalker_InternshipBlog_Block_Adminhtml_Post extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'internshipblog';
        $this->_controller = 'adminhtml_post';
        $this->_headerText = 'Posts';

        parent::__construct();
    }
}