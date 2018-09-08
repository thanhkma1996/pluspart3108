<?php
namespace Magenest\Movie\Block;
use	Magento\Framework\View\Element\Template;
class	AllMovie extends Template
{
    private	$_movieCollectionFactory;
    public function	__construct(
        Template\Context	$context,
        \Magenest\Movie\Model\ResourceModel\MagenestMovie\CollectionFactory
        $movieCollectionFactory,
        array $data	=	[])
    {
        parent::__construct($context,$data);
        $this->_movieCollectionFactory	=	$movieCollectionFactory;
    }
    public function	getMovie()
    {
        $collection	=	$this->_movieCollectionFactory->create();
        return	$collection;
     }
}