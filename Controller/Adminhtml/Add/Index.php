<?php
/**
 * Created by PhpStorm.
 * User: hahoang
 * Date: 04/02/2018
 * Time: 22:33
 */
namespace	Magenest\Movie\Controller\Adminhtml\Add;
use	Magento\Backend\App\Action\Context;
use	Magento\Framework\View\Result\PageFactory;
class	Index	extends	\Magento\Backend\App\Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}