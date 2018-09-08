<?php
namespace Magenest\Movie\Controller\Frontend;
class index	extends	\Magento\Framework\App\Action\Action
{
    /**
     *	Index	action
     *
     *	@return	$this
     */
    /**	@var	\Magento\Framework\View\Result\PageFactory		*/
    protected $resultPageFactory;
    public function	__construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory	$resultPageFactory )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $resultPage	=	$this->resultPageFactory->create();

        return $resultPage;
				}
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Movie::buttons');
				}
}
