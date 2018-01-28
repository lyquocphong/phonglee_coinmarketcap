<?php
namespace PHONGLEE\CoinMarketCap\Controller\Index;

class RefreshList extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$data = \PHONGLEE\CoinMarketCap\Helper\Data::getCoinDataFromAPI();

		$block = $this->_view->getLayout()
			->createBlock(
				'PHONGLEE\CoinMarketCap\Block\Index',
				'coinlist_pricelist'
			);		

		$this->getResponse()->setBody($block->renderPriceList());
	}
}