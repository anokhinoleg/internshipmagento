<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 13.08.18
 * Time: 8:58
 */

class Skywalker_InternshipBlog_Block_Adminhtml_PostCategory_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'id';
        $this->_blockGroup = 'internshipblog';
        $this->_controller = 'adminhtml_postCategory';
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
        if (Mage::registry('postCategory')->getId()) {
            return 'internshipblog';
        }
        else {
            return 'New Request';
        }
    }
}