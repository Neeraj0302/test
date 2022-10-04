<?php

namespace Ksolves\Curd\Controller\Index;

class Delete extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_request;
     protected $_customerFactory;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\App\Request\Http $request,
          \Ksolves\Curd\Model\CustomerFactory $customerFactory
     ){
          $this->_pageFactory = $pageFactory;
          $this->_request = $request;
          $this->_customerFactory = $customerFactory;
          return parent::__construct($context);
     }

     public function execute()
     {
          $id = $this->_request->getParam('id');
          $postData = $this->_customerFactory->create();
          $result = $postData->setId($id);
          $result = $result->delete();
          return $this->_redirect('curd/index/index');
     }
}