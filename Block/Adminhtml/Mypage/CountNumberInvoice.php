<?php

namespace Magenest\Movie\Block\Adminhtml\Mypage;


class CountNumberInvoice extends \Magento\Framework\View\Element\Template
{

    public function getinvoice()
    {
        $object = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $object->create('\Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $values = $connection->fetchAll('select count(entity_id) from sales_invoice');
        return $values;
    }
}