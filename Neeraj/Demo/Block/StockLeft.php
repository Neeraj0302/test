<?php

namespace Neeraj\Demo\Block;

use Magento\Framework\View\Element\Template;

class StockLeft extends Template 
{
    public function getRemainingQty(){
        return 20;

    }
    
}