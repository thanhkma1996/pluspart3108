<?php
namespace Magenest\PartTimePlus\Model\ResourceModel;

class Vendor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('magenest_parttimeplus', 'id');
    }
}