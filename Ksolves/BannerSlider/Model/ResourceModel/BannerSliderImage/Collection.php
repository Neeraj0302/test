<?php

namespace Ksolves\Curd\Model\ResourceModel\BannerSliderImage;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'banner_slider_image_collection';
	protected $_eventObject = 'banner_slider_image_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Ksolves\BannerSlider\Model\BannerSliderImage', 'Ksolves\BannerSlider\Model\ResourceModel\BannerSliderImage');
	}

}