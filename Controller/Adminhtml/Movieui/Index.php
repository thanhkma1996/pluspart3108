<?php
namespace Magenest\Movie\Controller\Adminhtml\Movieui;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
    protected	function _isAllowed()
    {
        return	$this->_authorization->isAllowed('Magenest_UiForm::movieui');
    }
}