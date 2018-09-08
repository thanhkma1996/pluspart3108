<?php
/**
 * Created by PhpStorm.
 * User: dukeant
 * Date: 2/2/18
 * Time: 2:24 PM
 */
namespace Magenest\Movie\Block\Adminhtml\System\Config\Form\Field;
use Magento\Framework\View\Element\Template;
//\Magento\Config\Block\System\Config\Form\Field
class ActorRowCounter extends \Magento\Config\Block\System\Config\Form\Field
{
//    protected $_template = 'system/config/field/rowcounter.phtml';

    protected $actorFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
//        \Magenest\Movie\Model\MagenestMovieFactory $magenestMovieFactory,
        \Magenest\Movie\Model\ResourceModel\MagenestActor\CollectionFactory $magenestActorFactory,
        array $data = []
    ) {
        $this->actorFactory = $magenestActorFactory;
        parent::__construct($context, $data);
    }

    public function getActorsAmount() {
        $collection = $this->actorFactory->create()->load();
        return count($collection);
    }



    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return  $this->getActorsAmount()  ;
    }


}