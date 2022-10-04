<?php

/** Created a Event and Observer */

namespace EventHai\ObserverHai\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Product implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $collection = $observer->getEvent()->getData( key: 'collection');
        foreach($collection as $product){
            $price = $product->getData('price');
            $name = $product->getData('name');
            
            if($price < 60){
                $name .= " Cheep Hai Bhai Kharidla";
            }
            else{
                $name .= " Mehnga Hai Beta Tera Ghar Jayga Isma";
            }
            $product->setData( 'name' , $name );
        }

        
    }
}