<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 25.07.18
 * Time: 18:44
 */

class Skywalker_Internship_Block_Adminhtml_Comment_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'id';
        $this->_blockGroup = 'internship';
        $this->_controller = 'adminhtml_comment';
        $this->_mode = 'edit';

        parent::__construct();

        $this->_updateButton('save', 'label', 'Save');
        $this->_updateButton('delete', 'label', 'Delete');

        $this->_addButton('saveandcontinue', array(
            'label'     => 'Save and Continue Edit',
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('block_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'block_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'block_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    /**
     * Get edit form container header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('comment')->getId()) {
            return 'internship';
        }
        else {
            return 'New Request';
        }
    }
}