<?php
namespace Magenest\Movie\Block;
use	Magento\Framework\View\Element\Template;
class AllActor extends Template
{
    private	$_actorCollectionFactory;
    public function	__construct(
        Template\Context	$context,
        \Magenest\Movie\Model\ResourceModel\MagenestActor\CollectionFactory
        $actorCollectionFactory,
        array $data	=	[])
    {
        parent::__construct($context,$data);
        $this->_actorCollectionFactory	=	$actorCollectionFactory;
    }
    public function	getMember()
    {
        $collection	=	$this->_actorCollectionFactory->create();
        return	$collection;
    }
}