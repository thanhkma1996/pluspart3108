<?php
namespace Magenest\Movie\Controller\Index;

class MagenestMovie extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $magenest_movie = $this -> _objectManager->create('Magenest\Movie\Model\MagenestMovie');
        $magenest_movie->setName('Wonder Woman');
        $magenest_movie->setDescription('Nice Movie');
        $magenest_movie->setRating('8');
        $magenest_movie->save();

        $magenest_movie = $this -> _objectManager->create('Magenest\Movie\Model\MagenestMovie');
        $magenest_movie->setName('Iron Man');
        $magenest_movie->setDescription('Best Movie');
        $magenest_movie->setRating('10');
        $magenest_movie->save();

        $magenest_movie = $this -> _objectManager->create('Magenest\Movie\Model\MagenestMovie');
        $magenest_movie->setName('AntMan');
        $magenest_movie->setDescription('Good Movie');
        $magenest_movie->setRating('9');
        $magenest_movie->save();

        $this->getResponse()->setBody('ok');
    }
}