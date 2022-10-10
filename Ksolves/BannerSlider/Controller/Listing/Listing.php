<?php
 
namespace Ksolves\BannerSlider\Controller\Listing;
 
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
 
class Listing extends Action
{
    protected $resultPageFactory;
 
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
 
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}