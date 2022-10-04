<?php

namespace Ksolves\BannerSlider\Model;

use Magento\Framework\Model\AbstractModel;
use Ksolves\BannerSlider\Model\ResourceModel\BannerSlider as BannerSliderResourceModel;

class BannerSlider extends AbstractModel
{
   
    protected function _construct()
    {
        $this->_init(BannerSliderResourceModel::class);
    }
}