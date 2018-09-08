<?php
namespace Magenest\Movie\Controller\Index;

class MagenestDirector extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $magenest_director = $this -> _objectManager -> create('Magenest\Movie\Model\MagenestDirector');
        $magenest_director->setName('David Thewlis');
        $magenest_director->save();

        $magenest_director = $this -> _objectManager -> create('Magenest\Movie\Model\MagenestDirector');
        $magenest_director->setName('Elena Anaya');
        $magenest_director->save();

        $magenest_director = $this -> _objectManager -> create('Magenest\Movie\Model\MagenestDirector');
        $magenest_director->setName('Ewen Bremner');
        $magenest_director->save();


        $this->getResponse()->setBody('ok');
    }
}