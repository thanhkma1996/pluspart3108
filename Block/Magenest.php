<?php
namespace Magenest\PartTimePlus\Block;

use  Magento\Framework\View\Element\Template;

class Magenest extends Template
{
    private $_manuCollection;


    public function __construct(
        Template\Context $context,
        \Magenest\PartTimePlus\Model\ResourceModel\Vendor\CollectionFactory $manuCollection,
        array $data=[])
    {
        parent::__construct($context, $data);
        $this->_manuCollection = $manuCollection;

    }

    public function getpart()
    {
        $collection = $this->_manuCollection->create();
        return $collection;
    }




}