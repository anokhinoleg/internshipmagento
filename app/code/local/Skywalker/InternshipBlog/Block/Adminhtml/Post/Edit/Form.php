<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 09.08.18
 * Time: 17:03
 */

class Skywalker_InternshipBlog_Block_Adminhtml_Post_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init form
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('post');
        $this->setTitle('Post');
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
        $model = Mage::registry('post');

        $dateTimeFormatIso = Mage::app()->getLocale()->getDateTimeFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT);

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

        $fieldset->addField('content', 'editor', [
            'name'     => 'content',
            'label'    => 'Content',
            'title'    => 'Content',
            'required' => true,
            'style'    => 'height:36em',
            'config'   => Mage::getSingleton('cms/wysiwyg_config')->getConfig(),
        ]);

        $fieldset->addField('short_description', 'text', [
            'name'     => 'short_description',
            'label'    => 'Post description',
            'title'    => 'Post description',
            'required' => true,
        ]);

        $fieldset->addField('status', 'select', [
            'name'     => 'status',
            'label'    => 'Status',
            'title'    => 'Status',
            'required' => true,
            'options' => ['1' => 'Enabled', '0' => 'Disabled']
        ]);

        $fieldset->addField('created_at', 'datetime', array(
            'name'   => 'created_at',
            'label'  => 'Created at',
            'title'  => 'Created at',
            'image'  => $this->getSkinUrl('images/grid-cal.gif'),
            'format'       => $dateTimeFormatIso,
            'time' => true,
            'required' => true,
        ));

        $fieldset->addField('updated_at', 'datetime', array(
            'name'   => 'updated_at',
            'label'  => 'Updated at',
            'title'  => 'Updated at',
            'image'  => $this->getSkinUrl('images/grid-cal.gif'),
            'format'       => $dateTimeFormatIso,
            'time' => true,
            'required' => false,
        ));

        $fieldset->addField('category_id', 'select', [
            'name'     => 'category_id',
            'label'    => 'Category',
            'title'    => 'Category',
            'required' => true,
            'options' => $model->getCategory()->getOptionArray()
        ]);

        $fieldset->addField('upload_file', 'file', array(
            'label'     => 'File',
            'required'  => false,
            'name'      => 'upload_file',
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}