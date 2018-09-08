<?php

namespace Magenest\Movie\Model\ResourceModel;
class MagenestActor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function	_construct()
    {
        $this->_init('magenest_actor',	'actor_id');
    }
}
//method _construct : set associated table (to get and set data ) and primary key for that table