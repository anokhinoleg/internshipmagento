<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 25.07.18
 * Time: 16:38
 */

class Skywalker_Internship_Block_Adminhtml_Comment_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('comment_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(false);
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('internship/comment')->getCollection();

        $this->setCollection($collection);
        parent::_prepareCollection();

        return $this;
    }

    protected function _prepareColumns()
    {
//        $helper = Mage::helper('techtalk');

        $this->addColumn('id', [
            'header' => 'Id',
            'index'  => 'id',
        ]);

        $this->addColumn('text', [
            'header' => 'Comment\'s text',
            'type'   => 'text',
            'index'  => 'text',
        ]);

        $this->addColumn('date', [
            'header' => 'Comment date',
            'type'   => 'date',
            'index'  => 'date',
        ]);

        $this->addColumn('author_id', [
            'header' => 'Author',
            'type'   => 'text',
            'index'  => 'author_id',
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