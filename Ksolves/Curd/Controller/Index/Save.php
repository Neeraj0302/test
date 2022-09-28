<?php

namespace Ksolves\Curd\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_customerFactory;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Ksolves\Curd\Model\CustomerFactory $customerFactory
     ){
          $this->_pageFactory = $pageFactory;
          $this->_customerFactory = $customerFactory;
          return parent::__construct($context);
     }

     public function execute()
     {
          if ($this->getRequest()->isPost()) {
               $input = $this->getRequest()->getPostValue();
               $postData = $this->_customerFactory->create();
               if (isset($input['editId'])) {
                    $id = $input['editId'];
               } else {
                    $id = 0;
               }
               if($id != 0){
                    $postData->load($id);
                    $postData->addData($input);
                    $postData->setId($id);
                    $postData->save();
               }else{
                    $postData->setData($input)->save();
               }
               $this->messageManager->addSuccessMessage("Data added successfully!");
               return $this->_redirect('Curd/index/index');
          }
          return $this->_redirect('Curd/index/index');
     }
}