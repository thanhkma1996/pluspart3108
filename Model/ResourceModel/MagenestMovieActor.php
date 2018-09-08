<?php
/**
 * Created by PhpStorm.
 * User: hahoang
 * Date: 22/01/2018
 * Time: 13:45
 */
namespace Magenest\Movie\Model\ResourceModel;
class MagenestMovieActor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function	_construct()
    {
        $this->_init('magenest_movie_actor','movie_id');
    }
}