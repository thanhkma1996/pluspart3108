<?php
/**
 * Created by PhpStorm.
 * User: hahoang
 * Date: 22/01/2018
 * Time: 13:42
 */
namespace Magenest\Movie\Model\ResourceModel;
class MagenestDirector extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function	_construct()
    {
        $this->_init('magenest_director',	'director_id');
    }
}