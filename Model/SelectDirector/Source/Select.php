<?php
namespace Magenest\Movie\Model\SelectDirector\Source;

use  \Magenest\Movie\Model\ResourceModel\MagenestDirector\CollectionFactory as directorCollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Select extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    protected $directorCollectionFactory;
    protected $_options;
    public function __construct(
        directorCollectionFactory  $directorCollectionFactory
    ) {
        $this->directorCollectionFactory = $directorCollectionFactory;
    }


    public function getAllOptions($addEmpty = true)
    {

        $collection = $this -> directorCollectionFactory
            ->create()
            ->load();
        $_options = [];
        if($addEmpty){
            $_options[] = ['label' => __('-- Please Select a director --'), 'value' => ''];
        }
        foreach ($collection as $director) {
            $_options[] = ['label' => $director->getName(), 'value' => $director->getDirectorId()];
        }

        return $_options;
    }
}