<?php

namespace Magenest\Movie\Block\Adminhtml\Mypage;


class CountNumberProduct extends \Magento\Framework\View\Element\Template
{

    public function getproduct()
    {
        $object = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $object->create('\Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $values = $connection->fetchAll('select count(entity_id) from catalog_product_entity');
        return $values;
    }
}