<?php
namespace Ksolves\BannerSlider\Controller\Index;
 

class Index extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_request;
     protected $_coreRegistry;
    

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\App\Request\Http $request,
          \Magento\Framework\Registry $coreRegistry,
          \Magento\Catalog\Model\ProductFactory $product
     ){

          $this->product = $product;
          $this->_pageFactory = $pageFactory;
          $this->_request = $request;
          $this->_coreRegistry = $coreRegistry;
          return parent::__construct($context);
     }

     public function execute()
     {
        
        $product = $this->product->create()->setSku('my1-sku'); // Set your sku here
        $product->setName('Sample Simple Product'); // Name of Product
        $product->setAttributeSetId(55); // Attribute set id
        $product->setStatus(1); // Status on product enabled/ disabled 1/0
        $product->setWeight(10); // weight of product
        $product->setVisibility(4); // visibilty of product (catalog / search / catalog, search / Not visible individually)
        $product->setTaxClassId(0); // Tax class id
        $product->setTypeId('simple'); // type of product (simple/virtual/downloadable/configurable)
        $product->setPrice(100); // price of product
        $product->setStockData(
                                array(
                                    'use_config_manage_stock' => 0,
                                    'manage_stock' => 1,
                                    'is_in_stock' => 1,
                                    'qty' => 999999999
                                )
                            );
                            // print_r($this->product->getData());
                            // exit();
        $product->save();
     }
}