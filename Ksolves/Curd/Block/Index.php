<?php


namespace Ksolves\Curd\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template 
{
    public function getRemainingQty(){
        return 20;

    }
    
}
// namespace Ksolves\Curd\Block;

// use Magento\Framework\View\Element\Template;

// class Index extends Template
// {
//     protected $_customerFactory;

//     public function __construct(
//         Template\Context $context,
//         \Ksolves\Curd\Model\CustomerFactory $customerFactory
//     ) {
//         parent::__construct($context);
//         $this->_customerFactory = $customerFactory;
//     }

//     public function getDataWith()
//     {
//         return $this->_customerFactory->create()->getCollection();
        
//     }
// }
