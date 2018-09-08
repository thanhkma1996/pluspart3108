<?php
namespace Magenest\Movie\Block\Adminhtml\Movieui\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton extends GenericButton implements ButtonProviderInterface {
    /**
     * @return array
     */
    public function getButtonData(){
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $movieFactory = $objectManager->get('Magenest\Movie\Model\MagenestMovieFactory')->create()->getCollection();

//        $movieId = $this->getMovieId();
        $data = [];
        $data = [
            'label' => __('Save Movie'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 30,
        ];
        return $data;
    }
    public function getSaveUrl(){
        return $this->getUrl('movie/movieui/save');
    }
}