<?php
/**Created By Neeraj */

namespace KnockOutJS\UIComponent\Controller\Index;


use Magento\Framework\App\Action\Action;

// class Index extends Action
// {
//     /**
//      * @return \Magento\Framework\Controller\ResultInterface\ResponseInterface
//      * @throws \Magento\Framework\Exception\NotFoundException
//      */

//      public function execute()
//      {
//         return $this->resultFactory->create(type: ResultFactory::TYPE_PAGE);

//      }
// }

class Index extends Action
{
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}
