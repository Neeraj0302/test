<?php

namespace Ksolves\BannerSlider\Model\ResourceModel\BannerSlider;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'banner_slider_collection';
	protected $_eventObject = 'banner_slider_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Ksolves\BannerSlider\Model\BannerSlider', 'Ksolves\BannerSlider\Model\ResourceModel\BannerSlider');
	}

}