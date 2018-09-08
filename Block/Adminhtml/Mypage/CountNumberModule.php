<?php

namespace Magenest\Movie\Block\Adminhtml\Mypage;


class CountNumberModule extends \Magento\Framework\View\Element\Template
{

    public function execute()
    {
        $object = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $object->create('\Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $values = $connection->fetchAll('select count(module) from setup_module ');
        return $values;
    }
}