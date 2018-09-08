<?php
/**
 * Created by PhpStorm.
 * User: dukeant
 * Date: 2/2/18
 * Time: 12:54 PM
 */
namespace Magenest\Movie\Block\Adminhtml\System\Config\Form\Field;
use Magento\Framework\View\Element\Template;
//\Magento\Config\Block\System\Config\Form\Field
class MovieRowCounter extends \Magento\Config\Block\System\Config\Form\Field
{
//    protected $_template = 'system/config/field/rowcounter.phtml';

    protected $movieFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magenest\Movie\Model\ResourceModel\MagenestMovie\CollectionFactory $magenestMovieFactory,
        array $data = []
    ) {
        $this->movieFactory = $magenestMovieFactory;
        parent::__construct($context, $data);
    }

    public function getMoviesAmount() {
        $collection = $this->movieFactory->create()->load();//getCollection()->
        return count($collection);
    }



    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return  $this->getMoviesAmount()  ;
    }


}