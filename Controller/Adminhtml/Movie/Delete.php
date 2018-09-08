<?php

namespace Magenest\Movie\Controller\Adminhtml\Movie;

use Magenest\Movie\Model\MagenestMovieFactory;
use Magento\Backend\App\Action;

class Delete extends Action
{
    protected $magenestMovieFactory;

    public function __construct(
        Action\Context $context,
        MagenestMovieFactory $magenestMovieFactory
    )
    {
        $this->magenestMovieFactory = $magenestMovieFactory;
        parent::__construct($context);
    }

    public function execute()
    {

        $movies = $this->getRequest()->getParam('Movie');
        $collection = $this->magenestMovieFactory->create()->getCollection();
        if ($movies) {
            if (is_array($movies)) {
                $collection->addFieldToFilter('movie_id', ['in' => $movies]);
            } else {
                $collection->addFieldToFilter('movie_id', $movies);
            }
        }

        $movieDeleted = 0;
        foreach ($collection->getItems() as $movie) {
            $movie->delete();
            $movieDeleted++;
        }
        $this->messageManager->addSuccess(
            __('A total of %1 record(s) have been deleted.', $movieDeleted)
        );

        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('movie/*/index');
//        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/index');
    }
}