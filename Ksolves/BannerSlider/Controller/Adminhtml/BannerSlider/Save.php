<?php

namespace Ksolves\BannerSlider\Controller\Adminhtml\BannerSlider;

class Save extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_bannerSliderFactory;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Ksolves\BannerSlider\Model\BannerSliderFactory $bannerSliderFactory
     ){
          $this->_pageFactory = $pageFactory;
          $this->_bannerSliderFactory = $bannerSliderFactory;
          return parent::__construct($context);
     }
    
     public function execute()
     {
          if ($this->getRequest()->isPost()) {
               $input = $this->getRequest()->getPostValue();
               $postData = $this->_bannerSliderFactory->create();
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
               return $this->_redirect('banner/bannerslider/index');
          }
          return $this->_redirect('banner/bannerslider/index');
     }
}