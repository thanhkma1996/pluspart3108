<?php

namespace Magenest\Movie\Block\Adminhtml\Mypage;


class CountNumberCustomer extends \Magento\Framework\View\Element\Template
{

    public function getcustomer()
    {
        $object = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $object->create('\Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $values = $connection->fetchAll('select count(entity_id) from customer_entity ');
        return $values;
    }
}