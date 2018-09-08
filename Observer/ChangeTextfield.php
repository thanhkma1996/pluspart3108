<?php
namespace Magenest\Movie\Observer;

class ChangeTextfield implements \Magento\Framework\Event\ObserverInterface {
    protected $_configInterface;
    protected $configWriter;

    public function __construct(
        \Magento\Framework\App\Config\ConfigResource\ConfigInterface $configInterface,
        \Magento\Framework\App\Config\Storage\WriterInterface $configWriter


    ) {
        $this->_configInterface = $configInterface;
        $this->configWriter = $configWriter;
    }
    public function execute(
        \Magento\Framework\Event\Observer $observer){
        $scopeConfig = \Magento\Framework\App\ObjectManager::getInstance()->create('Magento\Framework\App\Config\ScopeConfigInterface');
        $value = $scopeConfig->getValue('movie/moviepage/text');
        if($value == 'Ping'){
            $value = 'Pong';
        }
//        return $value;
//        $this->_configInterface->saveConfig('movie/moviepage/text', $value, 'default', 0);
        $this->configWriter->save('movie/moviepage/text',  $value, $scope = \Magento\Framework\App\Config\ScopeConfigInterface::SCOPE_TYPE_DEFAULT, $scopeId = 0);
    }
}