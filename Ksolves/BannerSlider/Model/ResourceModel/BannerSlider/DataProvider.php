<?php
namespace Ksolves\BannerSlider\Model\ResourceModel\BannerSlider;
 
use  Ksolves\BannerSlider\Model\ResourceModel\BannerSlider\CollectionFactory;
 
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $employeeCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $bannerSliderCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $bannerSliderCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
 
    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        return [];
    }
}