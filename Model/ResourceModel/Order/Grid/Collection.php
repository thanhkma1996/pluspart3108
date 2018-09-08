<?php
namespace Magenest\Movie\Model\ResourceModel\Order\Grid;
/**
 *	Subscription	Collection
 */
class	Collection	extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     *	Initialize	resource	collection
     *
     *	@return	void
     */
    public	function	_construct()	{
        $this->_init('Magento\Sales\Model\Order',
            'Magento\Sales\Model\ResourceModel\Order');
    }
}