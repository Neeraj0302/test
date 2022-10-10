<?php
namespace Ksolves\BannerSlider\Ui\Component\Listing\Columns;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Magento\Framework\UrlInterface;

class ProductActions extends Column
{
    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    /** Url Path */
    const PRODUCT_URL_PATH_EDIT = 'banner/bannerimage/edit';

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        array $data = array(),
        array $components = array())
    {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return void
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $name = $this->getData('name');                
                if (isset($item['id'])) {                    
                    $item[$name] = html_entity_decode('<a href="'.$this->urlBuilder->getUrl(self::PRODUCT_URL_PATH_EDIT, ['id' => $item['id']]).'">'."Edit".'</a>');
                }
            }
        }
        return $dataSource;
    }
}