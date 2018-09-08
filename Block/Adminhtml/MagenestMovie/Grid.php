<?php

namespace Magenest\Movie\Block\Adminhtml\MagenestMovie;

use    Magento\Backend\Block\Widget\Grid as WidgetGrid;

class    Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**                    *    @var    \Magenest\Movie\Model\ResourceModel\MagenestMovie\Collection
     */
    protected $_movieCollection;

    /**
     * @param    \Magento\Backend\Block\Template\Context $context
     * @param    \Magento\Backend\Helper\Data $backendHelper
     * @para \Packt\HelloWorld\Model\ResourceModel\Subscription\Collection
     * $subscriptionCollection
     * @param    array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\Movie\Model\ResourceModel\MagenestMovie\Collection $movieCollection,
        array $data = []
    )
    {
        $this->_movieCollection = $movieCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Movie Found'));
    }

    public function _prepareMassaction()
    {
        $this->setMassactionIdField('movie_id');
        $this->getMassactionBlock()->setFormFieldName('Movie');
        $this->getMassactionBlock()->addItem(
            'delete',
            [
                'label' => __('Delete'),
                'url' => $this->getUrl('movie/*/Delete'),
                'confirm' => __('Are you sure ?'),
            ]
        );
//        $this->getMassactionBlock()->addItem(
//            'edit',
//            [
//                'label' => __('Edit'),
//                'url' => $this->getUrl('movie/*/edit'),
//            ]
//        );
        return $this;
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('movie/*/edit', ['movie_id' => $row->getId()]);
    }

    /**
     *    Initialize    the    subscription    collection
     *
     * @return    WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_movieCollection);
        return parent::_prepareCollection();
    }

    /**
     *    Prepare    grid    columns
     *
     * @return    $this
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'movie_id',
            [
                'header' => __('Movie ID'),
                'index' => 'movie_id',
            ]
        );
        $this->addColumn(
            'name',
            [
                'header' => __('Name Movie'),
                'index' => 'name',
            ]
        );
        $this->addColumn(
            'description',
            [
                'header' => __('Description'),
                'index' => 'description',
            ]
        );
        $this->addColumn(
            'rating',
            [
                'header' => __('Rating of Movie'),
                'index' => 'rating',
                'frame_callback' => [$this, 'decorateStatus']

            ]
        );
        $this->addColumn(
            'director_id',
            [
                'header' => __('Director ID'),
                'index' => 'director_id',
            ]
        );
        return $this;
    }

    public function decorateStatus($value)
    {
        $class = '';
        switch (true) {
            case $value == 7:
                $class = 'grid-severity-minor';
                break;
            case $value >= 5:
                $class = 'grid-severity-notice';
                break;
//            case $value <= 7:
            default:
                $class = 'grid-severity-critical';
                break;
        }
        return '<span class="' . $class . '"><span>' . $value . '</span> </span>';
    }
}