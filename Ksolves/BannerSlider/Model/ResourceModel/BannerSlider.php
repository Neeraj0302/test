<?php

namespace Ksolves\BannerSlider\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class BannerSlider extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('banner_slider', 'id');
    }
}