<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 25.07.18
 * Time: 17:31
 */

class Skywalker_Internship_Block_Adminhtml_Comment_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init form
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('comment');
        $this->setTitle('Comment');
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
        $model = Mage::registry('comment');
//        var_dump($model->getAuthor()->getCollection());

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

        $fieldset->addField('text', 'editor', [
            'name'     => 'text',
            'label'    => 'Message',
            'title'    => 'Message',
            'required' => true,
            'style'    => 'height:36em',
            'config'   => Mage::getSingleton('cms/wysiwyg_config')->getConfig(),
        ]);

        $fieldset->addField('date', 'text', [
            'name'     => 'date',
            'label'    => 'Message date',
            'title'    => 'Message date',
            'required' => true,
        ]);

        $fieldset->addField('author_id', 'select', [
            'name'     => 'author_id',
            'label'    => 'Author',
            'title'    => 'Author',
            'required' => true,
            'options' => $model->getAuthor()->getOptionArray()
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