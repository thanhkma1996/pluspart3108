<?php
namespace Magenest\Movie\Controller\Adminhtml\Movieui;

use Magento\Backend\App\Action;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\App\Cache\TypeListInterface
     */
    protected $cacheTypeList;

    /**
     * @var \Magento\Backend\Helper\Js
     */
    protected $jsHelper;

    /**
     * @param Action\Context $context
     * @param \Magento\Backend\Helper\Js $jsHelper
     */

    protected $_movieFactory;

    public function __construct(
        Action\Context $context,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Magento\Backend\Helper\Js $jsHelper,
        \Magenest\Movie\Model\MagenestMovieFactory $magenestMovieFactory
    )
    {
        parent::__construct($context);
        $this->cacheTypeList = $cacheTypeList;
        $this->jsHelper = $jsHelper;
        $this->_movieFactory = $magenestMovieFactory;
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Movie::save');
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
//        $data = $this->getRequest()->getPostValue();
                $data = $this->getRequest()->getParams();

        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            var_dump($data);
            $model = $this->_objectManager->create('Magenest\Movie\Model\MagenestMovie');

            $model->setData($data);
            $model ->save();

            $this->_eventManager->dispatch(
                'movie_grid_prepare_save',
                ['grid' => $model, 'request' => $this->getRequest()]
            );

            $this->_getSession()->setFormData($data);
            return $resultRedirect->setPath('*/*/', ['id' => $this->getRequest()->getParam('id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}


