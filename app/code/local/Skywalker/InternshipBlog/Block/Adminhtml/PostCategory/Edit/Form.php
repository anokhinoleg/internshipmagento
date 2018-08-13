<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 13.08.18
 * Time: 8:59
 */

class Skywalker_InternshipBlog_Block_Adminhtml_PostCategory_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init form
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('postCategory');
        $this->setTitle('Category');
    }

    /**
     * Load Wysiwyg on demand and Prepare layout
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
    }

    protected function _prepareForm()
    {
        $model = Mage::registry('postCategory');

        $form = new Varien_Data_Form(
            ['id' => 'edit_form', 'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))), 'method' => 'post', 'enctype' => 'multipart/form-data']
        );

        $form->setHtmlIdPrefix('block_');

        $fieldset = $form->addFieldset('base_fieldset', [
            'legend' =>'General Information',
            'class' => 'fieldset-wide'
        ]);

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', [
                'name' => 'id',
            ]);
        }

        $fieldset->addField('name', 'text', [
            'name'     => 'name',
            'label'    => 'Post name',
            'title'    => 'Post name',
            'required' => true,
        ]);

        $fieldset->addField('description', 'textarea', [
            'name'     => 'description',
            'label'    => 'Description',
            'title'    => 'Description',
            'required' => true,
        ]);

        $fieldset->addField('upload_file', 'file', array(
            'label'     => 'Image',
            'required'  => false,
            'name'      => 'upload_file',
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}