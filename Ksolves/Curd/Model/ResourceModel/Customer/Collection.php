<?php

namespace Ksolves\Curd\Model\ResourceModel\Customer;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'ksolves_curd_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Ksolves\Curd\Model\Customer', 'Dolphin\Curd\Model\ResourceModel\Customer');
	}

}