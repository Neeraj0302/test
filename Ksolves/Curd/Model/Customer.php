<?php

namespace Ksolves\Curd\Model;

use Magento\Framework\Model\AbstractModel;
use Ksolves\Curd\Model\ResourceModel\Customer as CustomerResourceModel;

class Contact extends AbstractModel
{
   
    protected function _construct()
    {
        $this->_init(CustomerResourceModel::class);
    }
}