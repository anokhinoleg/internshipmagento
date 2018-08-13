<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 10.08.18
 * Time: 15:27
 */

class Skywalker_InternshipBlog_Adminhtml_PostCategoryController extends Mage_Adminhtml_Controller_Action
{
    public function listAction()
    {
        $this->_title('Post');
        $this->loadLayout();
        $this->_setActiveMenu('cms/postCategory');
        $this->_addContent($this->getLayout()->createBlock('internshipblog/adminhtml_postCategory'));
        $this->renderLayout();
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('internshipblog/adminhtml_postCategory_grid')->toHtml()
        );
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $this->_title('Create post');

        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('internshipblog/postCategory');
        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (! $model->getId()) {
                Mage::getSingleton('adminhtml/session')->addError('This block no longer exists.');
                $this->_redirect('*/*/');
                return;
            }
        }

//        $this->_title($model->getId() ? $model->getTitle() : $this->__('New Request'));

        // 3. Set entered data if there is an error when we've saved it
        $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
        if (! empty($data)) {
            $model->setData($data);
        }

        // 4. Register model to use later in blocks
        Mage::register('postCategory', $model);

        // 5. Build edit form
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('internshipblog/adminhtml_postCategory_edit'));
        $this->_setActiveMenu('cms/postCategory')
//            ->_addBreadcrumb($id ? Mage::helper('techtalk')->__('Edit Request') : Mage::helper('techtalk')->__('New Request'), $id ? Mage::helper('techtalk')->__('Edit Request') : Mage::helper('techtalk')->__('New Request'))
            ->renderLayout();
    }

    public function saveAction()
    {
        if ($this->getRequest()->getPost()) {
            if (isset($_FILES['upload_file']['name']) && $_FILES['upload_file']['name'] != '') {
                $uploader = new Varien_File_Uploader('upload_file');
                $uploader->setAllowedExtensions(array('jpg','jpeg','gif','png', 'txt'));
                $uploader->setAllowRenameFiles(false);
                $uploader->setFilesDispersion(false);
                $path = Mage::getBaseDir('media') . DS . 'upload' . DS;
                $fileName = $_FILES['upload_file']['name'];

                $uploader->save($path, $fileName);
            }

            $postData = $this->getRequest()->getPost();
            $category = $this->getRequest()->getParam('id') !== NULL ? Mage::getModel('internshipblog/postCategory')->load($this->getRequest()->getParam('id')) : Mage::getModel('internshipblog/postCategory');

            $category->setData($postData);
            $category->setData('image',$fileName);
            $category->save();
            Mage::getSingleton('adminhtml/session')->addSuccess('Successfully saved');
            $this->_redirect('*/*/list');
        }
    }

    public function deleteAction()
    {
        $category = Mage::getModel('internshipblog/postCategory')->load($this->getRequest()->getParam('id'));
        if ($category->isEmpty()) {
            $this->norouteAction();
            return;
        }
        $category = Mage::getModel('internshipblog/postCategory')->load($this->getRequest()->getParam('id'));
        $category->delete();
        Mage::getSingleton('adminhtml/session')->addSuccess('Successfully deleted');
        $this->_redirect('*/*/list');
    }
}