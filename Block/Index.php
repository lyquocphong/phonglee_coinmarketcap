<?php
namespace PHONGLEE\CoinMarketCap\Block;
class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function getListData()
    {
        return \PHONGLEE\CoinMarketCap\Helper\Data::getCoinDataFromAPI();
    }

    public function renderPriceList()
    {
        return $this            
            ->setTemplate("PHONGLEE_CoinMarketCap::table.phtml")
            ->toHtml();
    }
}