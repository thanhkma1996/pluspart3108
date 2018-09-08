<?php
namespace	Magenest\Movie\Controller\Adminhtml\Movie;
use	Magento\Backend\App\Action\Context;
use	Magento\Framework\View\Result\PageFactory;
class Index	extends	\Magento\Backend\App\Action
{
    protected	$resultPageFactory;
    public	function	__construct(
        Context	$context,
        PageFactory	$resultPageFactory
    )	{
        parent::__construct($context);
        $this->resultPageFactory	=	$resultPageFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public	function	execute()
    {
        $resultPage	=	$this->resultPageFactory->create();

          $resultPage->setActiveMenu('Magenest_Movie::movie');
          $resultPage->addBreadcrumb(__('Magenest'),	__('Magenest'));
          $resultPage->addBreadcrumb(__('Movie'),__('Movie'));
          $resultPage->getConfig()->getTitle()->prepend(__('Magenest Movie'));
  								return	$resultPage;
				}

    protected	function _isAllowed()
    {
        return	$this->_authorization->isAllowed('Magenest_Movie::movies');
				}
}