<?php
namespace Ksolves\BannerSlider\Model\ResourceModel\BannerSliderImage;
 
use  Ksolves\BannerSlider\Model\ResourceModel\BannerSliderImage\CollectionFactory;
 
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
        CollectionFactory $bannerSliderImageCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $bannerSliderImageCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
 
    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {

        // $items = $this->collection->getData();
        // echo "<pre>";
        // var_dump($items);
        // exit();

        // return ['items' =>[
        //     'banner_id' => 1,
        //     'path' => '']];

        // return $items('banner_id' , 'path');

        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $model) {
            $this->loadedData[$model->getId()] = $model->getData();
        }
        return $this->loadedData;


       

    }
}


