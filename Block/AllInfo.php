<?php
namespace Magenest\Movie\Block;
use	Magento\Framework\View\Element\Template;
class AllInfo extends Template
{
    private	$_actorCollectionFactory;
    private	$_directorCollectionFactory;
    private	$_movieCollectionFactory;

    public function	__construct(
        Template\Context	$context,
        \Magenest\Movie\Model\ResourceModel\MagenestActor\CollectionFactory   $actorCollectionFactory,
        \Magenest\Movie\Model\ResourceModel\MagenestDirector\CollectionFactory   $directorCollectionFactory,
        \Magenest\Movie\Model\ResourceModel\MagenestMovie\CollectionFactory $movieCollectionFactory ,

        array $data	=	[])
    {
        parent::__construct($context,$data);
        $this->_actorCollectionFactory	=	$actorCollectionFactory;
        $this->_movieCollectionFactory	=	$movieCollectionFactory;
        $this->_directorCollectionFactory = $directorCollectionFactory;
    }
    public function	getActor()
    {
        $collection	=	$this->_actorCollectionFactory->create();
        return	$collection;
    }
    public function	getDirector()
    {
        $collection	=	$this->_directorCollectionFactory->create();
        return	$collection;
    }
    public function	getMovie()
    {
        $collection	=	$this->_movieCollectionFactory->create();
        return	$collection;
    }

}