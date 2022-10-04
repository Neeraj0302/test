<?php

/**Created by Neeraj for Plugin */
namespace Plugin\After\Plugins;

class Product
{
    public function aftergetName(\Magento\Catalog\Model\Product $product , $name){
        $price = $product->getData( key :'price');
        if($price < 60){
            $name .= " Cheap";
        }
        else{
            $name .= " Expensive";
        }
        return $name;
    }
}