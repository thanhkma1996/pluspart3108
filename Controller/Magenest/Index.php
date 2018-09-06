<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/09/2018
 * Time: 08:29
 */

namespace Magenest\PartTimePlus\Controller\Magenest;
class Index	extends	\Magento\Framework\App\Action\Action{

    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute(){
        $resultPage	= $this->resultPageFactory->create();
        return $resultPage;
    }
}