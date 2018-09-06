<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 31/08/2018
 * Time: 10:21
 */

namespace Magenest\PartTimePlus\Observer;
use Magento\Framework\Event\ObserverInterface;
class Customer implements ObserverInterface
{
    /** @var \Psr\Log\LoggerInterface $logger */
    protected $logger;
    protected  $customer;
    public function __construct(\Psr\Log\LoggerInterface $logger,
                                \Magenest\PartTimePlus\Model\VendorFactory $customer)
    {
        $this->logger = $logger;
        $this->customer = $customer;


    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $member = $this->customer->create();

        if($observer->getData('customer')){
            $customer = $observer->getData('customer');
            $email = $customer->getEmail();
            $Lastname = $customer->getLastname();
            $FirstName = $customer->getFirstname();

            $member->setEmail($email);
            $member->setLastname($Lastname);
            $member->setFirstname($FirstName);

            $member->save();

        }



        $this->logger->debug('Registered');
    }


}
