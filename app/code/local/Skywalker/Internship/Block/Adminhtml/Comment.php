<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 25.07.18
 * Time: 16:36
 */

class Skywalker_Internship_Block_Adminhtml_Comment extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'internship';
        $this->_controller = 'adminhtml_comment';
        $this->_headerText = 'Comments';

        parent::__construct();
    }
}