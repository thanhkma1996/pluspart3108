<?php
namespace	Magenest\Movie\Controller\Adminhtml\Actor;
use	Magento\Backend\App\Action\Context;
use	Magento\Framework\View\Result\PageFactory;
class	Index	extends	\Magento\Backend\App\Action
{
    protected	$resultPageFactory;
    public	function	__construct(
        Context	$context,
        PageFactory	$resultPageFactory
    )	{
        parent::__construct($context);
        $this->resultPageFactory	=	$resultPageFactory;
    }
    public	function	execute()
    {
        $resultPage	=	$this->resultPageFactory->create();

        $resultPage->setActiveMenu('Magenest_Movie::movie');
//        $resultPage->addBreadcrumb(__('Magenest List Actor'),	__('Magenest List Actor'));
//        $resultPage->addBreadcrumb(__('Manage Movie'),__('Man Movie'));
        $resultPage->getConfig()->getTitle()->prepend(__('Magenest List Actor'));
        return	$resultPage;
    }

    protected	function _isAllowed()
    {
        return	$this->_authorization->isAllowed('Magenest_Movie::actor');
    }
}