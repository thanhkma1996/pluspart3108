<?php
namespace Magenest\Movie\Controller\Index;

use Magento\Framework\App\Action\Context;

class MagenestMovieActor extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    protected $_movieFactory;
    public function execute()
    {
        $magenest_movie_actor = $this -> _objectManager -> create('Magenest\Movie\Model\MagenestMovieActor');
        $magenest_movie_actor->setMovieId('2');
        $magenest_movie_actor->setActorId('2');
        $magenest_movie_actor->save();

        $magenest_movie_actor = $this -> _objectManager -> create('Magenest\Movie\Model\MagenestMovieActor');
        $magenest_movie_actor->setMovieId('3');
        $magenest_movie_actor->setActorId('3');
        $magenest_movie_actor->save();

        $magenest_movie_actor = $this -> _objectManager -> create('Magenest\Movie\Model\MagenestMovieActor');
        $magenest_movie_actor->setMovieId('4');
        $magenest_movie_actor->setActorId('4');
        $magenest_movie_actor->save();

        $this->getResponse()->setBody('ok');
    }
    public function __construct(
        Context $context,
        \Magenest\Movie\Model\MagenestMovieFactory $magenestMovieFactory
    )
    {
        parent::__construct($context);
        $this->_movieFactory = $magenestMovieFactory;
    }

}