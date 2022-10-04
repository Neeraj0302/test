<?php

namespace Ksolves\BannerSlider\Model;

use Magento\Framework\Model\AbstractModel;
use Ksolves\BannerSlider\Model\ResourceModel\BannerSliderImage as BannerSliderImageResourceModel;

class BannerSliderImage extends AbstractModel
{
   
    protected function _construct()
    {
        $this->_init(BannerSliderImageResourceModel::class);
    }
}