<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 09.08.18
 * Time: 16:51
 */

class Skywalker_InternshipBlog_Block_Adminhtml_Post_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('post_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(false);
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('internshipblog/post')->getCollection();
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

        $this->addColumn('short_description', [
            'header' => 'Post description',
            'type'   => 'text',
            'index'  => 'short_description',
        ]);

        $this->addColumn('status', [
            'header' => 'Post status',
            'type'   => 'text',
            'index'  => 'status',
        ]);

        $this->addColumn('created_at', [
            'header' => 'Publishing date',
            'type'   => 'date',
            'index'  => 'created_at',
        ]);

        $this->addColumn('updated_at', [
            'header' => 'Publishing update',
            'type'   => 'date',
            'index'  => 'updated_at',
        ]);

        $this->addColumn('category_id', [
            'header' => 'Category',
            'type'   => 'text',
            'index'  => 'category_id',
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