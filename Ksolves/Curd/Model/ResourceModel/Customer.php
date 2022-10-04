<?php

namespace Ksolves\Curd\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Customer extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('ksolves_curd_customer', 'id');
    }
}