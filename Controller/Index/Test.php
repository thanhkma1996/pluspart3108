<?php

namespace Magenest\Movie\Controller\Index;


use Magento\Framework\App\Action\Context;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $_movieFactory; // dong nay

    // cai ham nay ong go "public function __construct" bang tay roi an enter la no' tu viet ra het cho, ong chi can
    // tu viet cac dong ma t danh dau thoi
    public function __construct(
        Context $context,
        \Magenest\Movie\Model\MagenestMovieFactory $magenestMovieFactory,// dong nay
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
        $this->_movieFactory; // dong nay
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $this->scopeConfig->getValue('abc', 'def');

        // cai data nay ong phai gui du lieu tu ben ngoai vao: cac du lieu ben ngoai co the lay bang cai nay:
        $data = $this->getRequest()->getParams();

        // con day la t tao test data, tu nghi ra;
        $movie = $this->_movieFactory->create();
        $movie->setData($testData)->save();

        echo 'done';
    }
}