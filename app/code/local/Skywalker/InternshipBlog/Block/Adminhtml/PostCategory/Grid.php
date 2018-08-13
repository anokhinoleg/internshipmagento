<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 10.08.18
 * Time: 15:35
 */

class Skywalker_InternshipBlog_Block_Adminhtml_PostCategory_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('postCategory_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(false);
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('internshipblog/postCategory')->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();

        return $this;
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', [
            'header' => 'Id',
            'index'  => 'id',
        ]);

        $this->addColumn('name', [
            'header' => 'Post name',
            'type'   => 'text',
            'index'  => 'name',
        ]);

        $this->addColumn('description', [
            'header' => 'Description',
            'type'   => 'text',
            'index'  => 'description',
        ]);

        $this->addColumn('image', [
            'header' => 'Image',
            'index' => 'image',
            'renderer' => 'Skywalker_InternshipBlog_Block_Adminhtml_Renderer_Image'
        ]);

        $this->addExportType('*/*/exportCsv', 'CSV');
        $this->addExportType('*/*/exportExcel', 'Excel XML');

        return parent::_prepareColumns();
    }

    /**
     * Row click url
     *
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', ['id' => $row->getId()]);
    }

    /**
     * @param array $params
     * @return string
     */
    public function getGridUrl($params = [])
    {
        return $this->getUrl('*/*/grid', ['_current' => true]);
    }
}