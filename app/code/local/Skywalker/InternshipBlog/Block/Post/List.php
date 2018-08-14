<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 10.08.18
 * Time: 12:20
 */

class Skywalker_InternshipBlog_Block_Post_List extends Mage_Core_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        //set your own collection (get data from database so you can list it)
        $collection = $this->getPosts();
        $this->setCollection($collection);
    }
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $pager = $this->getLayout()->createBlock('page/html_pager', 'custom.pager');
        $pager->setAvailableLimit(array(2=>2,4=>4,8=>8,'all'=>'all'));
        $pager->setCollection($this->getCollection());
        $this->setChild('pager', $pager);
        $this->getCollection()->load();
        return $this;
    }

    //this is what you call in your .phtml file to render toolbar
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }

    public function getPosts()
    {
        $param = Mage::app()->getRequest()->getParam('category');
        $posts = Mage::getModel('internshipblog/post')->getCollection();
        $posts->addFieldToFilter('category_id', $param);
        $posts->addFieldToFilter('status', 1);
        return $posts;
    }

    public function getCategory() {
        return Mage::getModel('internshipblog/postCategory')->load(Mage::app()->getRequest()->getParam('category'));
    }
}