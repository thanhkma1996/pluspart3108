<?php

namespace Magenest\Movie\Controller\Index;

class MagenestActor extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {

        $magenest_actor = $this->_objectManager->create('Magenest\Movie\Model\MagenestActor');
        $magenest_actor->setName('Chris Pine & Robin Wright');
        $magenest_actor->save();

        $magenest_actor = $this->_objectManager->create('Magenest\Movie\Model\MagenestActor');
        $magenest_actor->setName('John Smith & Gal Gadot');
        $magenest_actor->save();

        $magenest_actor = $this->_objectManager->create('Magenest\Movie\Model\MagenestActor');
        $magenest_actor->setName('Connie Nielse & Dannt Huston');
        $magenest_actor->save();

        $this->getResponse()->setBody('Thanh cong');
    }
}