<?php
namespace Magenest\PartTimePlus\Controller\Ajax;

use Magento\Framework\App\Action\Context;

class Handle extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    protected  $vendorFactory;
    public function __construct(
        Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory

    )
    {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        if ($this->getRequest()->isAjax()) {
            $id = $this->getRequest()->getParam('id');

            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();


            $customer = $objectManager->create('Magenest\PartTimePlus\Model\Vendor')->load($id);

            echo 'ID:'.$customer->getID().'<br/>';
            echo 'FullName:'.$customer->getFirstname().$customer->getLastname().'<br/>';
            echo 'Email:'.$customer->getEmail().'<br/>';

        }

    }
}